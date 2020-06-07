<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Course;
use App\Models\File;
use App\Models\MyCourse;
use App\Models\PassedQuiz;
use App\Models\Quiz;
use App\Models\Theory;
use App\Models\Topic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyCourseController extends Controller
{
    public function addCourse($course_id)
    {
        $myCourse = MyCourse::create([
            'course_id' => $course_id,
            'user_id'   => Auth::user()->id
        ]);

        Activity::create([
            'my_course_id'  => $myCourse->id,
            'text'          => 'Added course',
            'watched_at'    => Carbon::now()
        ]);

        return redirect()->back();
    }

    public function todo()
    {
        $courses = MyCourse::where('user_id', Auth::user()->id)->get();
        $arr = [];
        foreach ($courses as $course) {
            $arr[] = $course->course_id;
        }

        $t = Topic::whereIn('course_id', $arr)->get();

        $passed = PassedQuiz::where('user_id', Auth::user()->id)->get();

        $arr2 = [];

        foreach ($passed as $item) {
            $arr2[] = $item->topic_id;
        }

        $topics = $t->whereNotIn('id', $arr2);


        return view('student.todo', compact('topics'));
    }

    public function passCourse($id)
    {
        $course = Course::find($id);

        $topics = Topic::where('course_id', $id)->orderBy('num', 'asc')->get();
        $counter = 0;
        foreach ($topics as $topic) {
            $counter += Quiz::where('topic_id', $topic->id)->count();
        }
        return view('student.pass', compact('course', 'topics', 'counter'));
    }

    public function topicGet($id, $topicId)
    {
        $topic = Topic::find($topicId);
        $course = Course::find($id);
        $theories = Theory::where('topic_id', $topic->id)->orderBy('id', 'asc')->get();
        $file = File::where('topic_id', $topic->id)->first();

        return view('student.topic-get', compact('course', 'topic', 'theories', 'file'));
    }

    public function quiz($id, $topicId)
    {
        $course = Course::find($id);
        $passed = PassedQuiz::where('user_id', Auth::user()->id)->where('topic_id', $topicId)->count() + 1;
        $totalQuiz = Quiz::where('topic_id', $topicId)->get();
        if ($passed > count($totalQuiz)) {

            return redirect()->route('result', ['topicId' => $topicId, 'id' => $course->id]);
        }
        else {
            $quiz = $totalQuiz[$passed-1];

            return view('student.quiz', compact('course', 'quiz', 'totalQuiz', 'passed', 'id', 'topicId'));
        }
    }

    public function answer(Request $request)
    {
        $quiz = Quiz::find($request['topic_quiz_id']);
        $isCorrect = 1;
        if($request['answer'] != $quiz->correct) {
            $isCorrect = 0;
        }
        $topic = Topic::find($request['topic_id']);
        $course = MyCourse::where('user_id', Auth::user()->id)->where('course_id', $topic['course_id'])->first();
        Activity::create([
            'my_course_id'  => $course->id,
            'text'          => 'Answer to quiz',
            'watched_at'    => Carbon::now()
        ]);

        PassedQuiz::create([
           'topic_id'       => $request['topic_id'],
           'topic_quiz_id'  => $request['topic_quiz_id'],
           'user_id'        => Auth::user()->id,
           'is_correct'     => $isCorrect,
        ]);

        return redirect()->back();
    }

    public function result($id, $topicId)
    {
        $course = Course::find($id);
        $passed = PassedQuiz::where('user_id', Auth::user()->id)->where('topic_id', $topicId)->get();
        $totalQuiz = Quiz::where('topic_id', $topicId)->count();
        foreach ($passed as $item) {
            $q = Quiz::find($item->topic_quiz_id);
            $item['question'] = $q->question;
            $item['answer'] = $q->correct;
        }

        return view('student.result', compact('course', 'passed', 'topicId', 'totalQuiz'));
    }
}
