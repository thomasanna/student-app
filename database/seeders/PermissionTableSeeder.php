<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //create roles
        $superadminrole = Role::create(['name' => 'superadmin']); // for dd.
        

        // create permissions

        $permissions[] = Permission::create(['name' => 'manage webiste info']);
        $permissions[] = Permission::create(['name' => 'manage students']);
        
        $superadminrole->syncPermissions($permissions);

        $password = 'admin123';

        User::create([ 'name' => 'Super Admin', 'email' => 'admin@test.com', 'password' => Hash::make($password), 'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s')]);

        $user = User::where('email','admin@test.com')->first();
        $user->assignRole('superadmin');
    }
}
