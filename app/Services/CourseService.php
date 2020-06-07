<?php

namespace App\Services;

use App\Models\Course;
use App\Models\File;
use App\Models\MyCourse;
use App\Models\Quiz;
use App\Models\Theory;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;

class CourseService
{
    /**
     * @param $request
     * @return bool
     */
    public function createCourse($request)
    {
        try {
            $imageName = time().'.'.$request->img_file->extension();
            $request->img_file->move(public_path('images'), $imageName);

            $course = Course::create($request->validated() + ['user_id' => Auth::user()->id, 'img' => $imageName]);

            return $course;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function createTopic($request)
    {
        $order = Topic::where('course_id', $request['course_id'])->count();

        $topic = Topic::create([
            'title'     => $request['title'],
            'course_id' => $request['course_id'],
            'num'       => $order + 1
        ]);

        File::create([
            'topic_id'  => $topic->id,
            'file_name' => $this->downloadFile($request['topic_file'])
        ]);

        foreach ($request['theory'] as $theory) {
            Theory::create([
                'text'      => $theory,
                'topic_id'  => $topic->id
            ]);
        }

        foreach ($request['question'] as $index => $quiz) {
            $this->saveQuiz([
                'topic_id' => $topic->id,
                'question' => $quiz,
                'A'        => $request['A'][$index],
                'B'        => $request['B'][$index],
                'C'        => $request['C'][$index],
                'D'        => $request['D'][$index],
                'correct'  => $request['answer'][$index],
                'type'     => 'multiple'
            ]);
        }
    }

    protected function downloadFile($file): string
    {
        $imageName = time().'.'.$file->extension();
        $file->move(public_path('files'), $imageName);

        return $imageName;
    }

    protected function saveQuiz(array $data)
    {
        if(!empty($data['A'])  && !empty($data['B']) && !empty($data['C']) && !empty($data['D'])) {
            Quiz::create([
                'topic_id' => $data['topic_id'],
                'question' => $data['question'],
                'A'        => $data['A'],
                'B'        => $data['B'],
                'C'        => $data['C'],
                'D'        => $data['D'],
                'correct'  => $data['correct'],
                'type'     => 'multiple'
            ]);
        }
        else {
            Quiz::create([
                'topic_id' => $data['topic_id'],
                'question' => $data['question'],
                'correct'  => $data['correct'],
                'type'     => 'text'
            ]);
        }
    }

    public function getCourses()
    {
        $courses = Course::orderBy('updated_at', 'desc')->get();
        foreach ($courses as $course) {
            $topics = Topic::where('course_id', $course->id)->get();
            $course['lessons'] = count($topics);
            $counter = 0;
            $file = 0;
            foreach ($topics as $topic) {
                $counter += Quiz::where('topic_id', $topic->id)->count();
                $file += File::where('topic_id', $topic->id)->count();
            }
            $course['quiz'] = $counter;
            $course['file'] = $file;
        }
        $myCourses = [];
        if(Auth::check()) {
            $ownCourses = MyCourse::where('user_id', Auth::user()->id)->get();
            foreach ($ownCourses as $ownCours) {
                $myCourses[] = $ownCours->course_id;
            }
        }

        return [
            'courses' => $courses,
            'myCourses' => $myCourses
        ];
    }

    public function getCourseById($id)
    {
        $course = Course::where('id', $id)->first();
        $myCourses = [];
        if(Auth::check()) {
            $ownCourses = MyCourse::where('user_id', Auth::user()->id)->get();
            foreach ($ownCourses as $ownCours) {
                $myCourses[] = $ownCours->course_id;
            }
        }
        $topics = Topic::where('course_id', $id)->get();
        $counter = 0;
        foreach ($topics as $topic) {
            $counter += Quiz::where('topic_id', $topic->id)->count();
        }

        return [
            'course'    => $course,
            'myCourses' => $myCourses,
            'topics'    => $topics,
            'counter'   => $counter
        ];
    }
}
