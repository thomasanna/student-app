<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'maths', 'science', 'history','term_id','total_mark'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }
    public function term()
    {
        return $this->belongsTo('App\Models\Term','term_id');
    }
}
