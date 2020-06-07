<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\CreateTopicRequest;
use App\Models\Course;
use App\Models\File;
use App\Models\MyCourse;
use App\Models\PassedQuiz;
use App\Models\Quiz;
use App\Models\Theory;
use App\Models\Topic;
use App\Services\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    protected $service;

    public function __construct(CourseService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->getCourses();
        $courses = $data['courses'];
        $myCourses = $data['myCourses'];


        return view('courses', compact('courses', 'myCourses'));
    }

    public function getById($id)
    {
        $data = $this->service->getCourseById($id);

        $course     = $data['course'];
        $myCourses  = $data['myCourses'];
        $topics     = $data['topics'];
        $counter    = $data['counter'];

        return view('course', compact('course', 'myCourses', 'topics', 'counter'));
    }

    public function createCourse() {
        return view('teacher.create-course');
    }

    public function createCourseSend(CourseRequest $request) {
        $course = $this->service->createCourse($request);
        if ($course) {
            return redirect()->route('create.topic', ['course_id' => $course->id]);
        }
        else {
            return redirect()->route('create.course')->withErrors(['Error. Try Again']);
        }
        return view('teacher.create-course');
    }

    public function createTopic(Request $request, $courseId) {
        if (isset($request['success'])) {
            $success = true;
            return view('teacher.create-topic', compact('courseId', 'success'));
        }
        return view('teacher.create-topic', compact('courseId'));
    }

    public function createTopicSend(CreateTopicRequest $request)
    {
        $this->service->createTopic($request);
        return redirect()->route('create.topic', ['course_id' => $request['course_id'], 'success' => true]);
    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);
        if($course->user_id === Auth::user()->id) {
            $topics = Topic::where('course_id', $course->id)->get();
            foreach ($topics as $topic) {
                File::where('topic_id', $topic->id)->delete();
                Theory::where('topic_id', $topic->id)->delete();
                $quizzes = Quiz::where('topic_id', $topic->id)->get();
                foreach ($quizzes as $quiz) {
                    PassedQuiz::where('topic_quiz_id', $quiz->id)->delete();
                    $quiz->delete();
                }
                $topic->delete();
            }
            MyCourse::where('course_id', $course->id)->delete();
            $course->delete();
        }

        return redirect()->route('profile');
    }
}
