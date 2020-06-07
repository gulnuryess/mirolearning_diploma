<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\MyCourse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $role = Auth::user()->role;

        if ($role === User::STUDENT) {
            $myCourses = MyCourse::where('user_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get()->toArray();
            $ids = [];
            foreach ($myCourses as $myCourse) {
                $ids[] = $myCourse['course_id'];
            }
            $courses = Course::whereIn('id', $ids)->orderBy('updated_at', 'desc')->get()->toArray();

            return view('student.profile', compact('courses'));
        }
        elseif ($role === User::TEACHER) {
            $courses = Course::where('user_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get()->toArray();

            return view('teacher.profile', compact('courses'));
        }
    }
}
