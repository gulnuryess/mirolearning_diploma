<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');
Auth::routes();

Route::get('/courses', 'CourseController@index')->name('courses');
Route::get('/courses/{id}', 'CourseController@getById')->name('course');

Route::get('/choice', 'AuthController@choice')->name('choice');
Route::get('/student', 'AuthController@student')->name('student');
Route::get('/teacher', 'AuthController@teacher')->name('teacher');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/profile', 'ProfileController@index')->name('profile');

Route::post('/register', 'AuthController@register')->name('register');
Route::post('/login/send', 'AuthController@sendLogin')->name('sendLogin');


Route::get('/create', 'CourseController@createCourse')->name('create.course');
Route::post('/create', 'CourseController@createCourseSend')->name('create.course.send');
Route::get('/create/topic/{course_id}', 'CourseController@createTopic')->name('create.topic');
Route::post('/create/topic/send', 'CourseController@createTopicSend')->name('create.topic.send');

Route::get('/course/add/{course_id}', 'MyCourseController@addCourse')->name('course.add');


Route::get('/course/pass/{id}', 'MyCourseController@passCourse')->name('course.pass');
Route::get('/course/pass/{id}/{topic_id}', 'MyCourseController@topicGet')->name('topic.get');
Route::get('/todo', 'MyCourseController@todo')->name('todo');

Route::get('/quiz/{id}/{topic_id}', 'MyCourseController@quiz')->name('quiz');

Route::post('/answer', 'MyCourseController@answer')->name('answer');
Route::get('/result/{id}/{topicId}', 'MyCourseController@result')->name('result');

Route::get('/activities', 'ActivityController@studentActivity')->name('student.activity');
Route::get('/activity', 'ActivityController@teacherActivity')->name('teacher.activity');

Route::get('course/delete/{id}', 'CourseController@deleteCourse')->name('course.delete');

Route::get('files/{filename}', function($filename)
{
    // Check if file exists in app/storage/file folder
    $file_path = url('/files/'. $filename);
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $filename, [
            'Content-Length: '. filesize($file_path)
        ]);
    }
    else
    {
        // Error
        exit('Requested file does not exist on our server!');
    }
})
    ->name('download');

Route::get('fil123es/{filename}/{course_id}', function($filename)
{
    // Check if file exists in app/storage/file folder
    \App\Models\Activity::create([
        'my_course_id'  => 4,
        'text'          => 'Downloaded file',
        'watched_at'    => \Carbon\Carbon::now()
    ]);

    return redirect()->route('download', ['filename' => $filename]);
})
    ->name('download1');
