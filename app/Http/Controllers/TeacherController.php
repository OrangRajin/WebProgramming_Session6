<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view ('teachers.dosen', [
            'teachers' => Teacher::get(),
        ]);
    }
}
