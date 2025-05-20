<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_M extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $primarykey = 'id';
    protected $fillable = [
        'student_id',
        'fname',
        'mname',
        'lname',
        'stud_add',
        'stud_DOB'
    ];
}
