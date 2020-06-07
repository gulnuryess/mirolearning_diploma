<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Course;
use App\Models\MyCourse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function studentActivity()
    {
        $myCourses = MyCourse::where('user_id', Auth::user()->id)->get();
        $actions = [];

        foreach ($myCourses as $course) {
            $activities = Activity::where('my_course_id', $course->id)->orderBy('watched_at', 'desc')->get();

            foreach ($activities as $activity) {
                $actions[] = [
                    'user_id' => Auth::user()->id,
                    'student' => Auth::user()->name,
                    'action'  => $activity->text,
                    'time'    => $activity->watched_at
                ];
            }
        }

        return view('student.activity', compact('actions'));
    }

    public function teacherActivity()
    {
        $courses = Course::where('user_id', Auth::user()->id)->get();
        $arr = [];
        foreach ($courses as $cours) {
            $arr [] = $cours->id;
        }
        $myCourses = MyCourse::whereIn('course_id', $arr)->get();
        $actions = [];

        foreach ($myCourses as $course) {
            $activities = Activity::where('my_course_id', $course->id)->orderBy('watched_at', 'desc')->get();

            foreach ($activities as $activity) {
                $actions[] = [
                    'user_id' => $course->user_id,
                    'student' => User::find($course->user_id)->name,
                    'action'  => $activity->text,
                    'time'    => $activity->watched_at
                ];
            }
        }

        return view('teacher.activity', compact('actions'));
    }
}
