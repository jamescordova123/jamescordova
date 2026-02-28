<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\JsonResponse;

class StudentController extends Controller
{
    public function index(): JsonResponse
    {
        // 1. Rename variable from $student to $students to match line 18/19
        $students = Student::all(); 

        return response()->json([
            'success' => true,
            'count'   => $students->count(), // 2. Fixed variable name here too
            'data'    => $students 
        ]);
    }
}