<?php
return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menus' => [
        [
            'name' => 'Students',
            'url' => 'dashboard',
            'icon' => 'cubes',
            'permission' => 'manage webiste info'
        ],
        [
            'name' => 'Student Marks',
            'url' => 'students/mark',
            'icon' => 'cubes',
            'permission' => 'manage webiste info'
        ],
        [
            'name' => 'Logout',
            'url' => 'logout',
            'icon' => 'cubes',
            'permission' => 'manage webiste info'
        ]
       
    ]
];
