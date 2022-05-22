<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'gender', 'reporting_teacher'];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher','reporting_teacher');
    }
}
