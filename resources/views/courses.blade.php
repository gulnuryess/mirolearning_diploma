@extends('layouts.app')
@section('active_courses', 'active')
@section('content')
    <div class="container">
        <div class="row">
            <!-- /.col -->
            @foreach($courses as $course)
            <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header " style="position: relative;">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{ asset('images/' . $course['img']) }}" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <a href="{{ route('course', ['id' => $course['id']]) }}"><h5 class="widget-user-desc">{{ $course['title'] }}</h5></a>
                        <h3 class="widget-user-username" style="font-size: 18px; height: 150px;">{{ \Illuminate\Support\Str::limit($course['description'],  180, $end = '...')  }}</h3>
                            @guest
                            @else
                            @if(\Illuminate\Support\Facades\Auth::user()->role == 'student' && !in_array($course['id'], $myCourses))
                                <a href="{{ route('course.add', ['course_id' => $course['id']]) }}" style="right:10px;bottom:5px;position: absolute;"><img src="/images/plus.png" style="height: 40px; width: 40px;" alt=""></a>
                            @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'student' && in_array($course['id'], $myCourses))
                                <div class="ribbon-wrapper">
                                    <div class="ribbon bg-success">
                                        Added
                                    </div>
                                </div>
                            @endif
                            @endif
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Lessons</h5>
                                    <strong><span class="description-text" style="color: #FEC432;">{{ $course['lessons'] }}</span></strong>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Quizzes</h5>
                                    <strong><span class="description-text" style="color: #FEC432;">{{ $course['quiz'] }}</span></strong>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">Files/Videos</h5>
                                    <strong><span class="description-text" style="color: #FEC432; ">{{ $course['file'] }}</span></strong>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>

                <!-- /.widget-user -->
            </div>
            @endforeach
        </div>
    </div>
@endsection
@section('css')
    <style>
        body {
            background-color: #FEC432;
        }
    </style>
@endsection


