@extends('layouts.app')
@section('active_courses', 'active')
@section('content')
    <div class="container">
        <div class="row">
            <!-- /.col -->
          <div class="col-md-12">
              <div class="card card-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header ">
                      <div class="widget-user-image">
                          <img class="img-circle elevation-2" src="{{ asset('images/' .  $course['img']) }}" style="width: 100px; margin:15px">
                      </div>
                      <!-- /.widget-user-image -->
                      <h5 class="username" style="font-size: 30px;">{{ $course['title'] }}</h5>
                      <h3 class="widget-user-username" style="font-size: 18px; height: 150px;">{{ $course['description'] }}</h3>
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
              </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Lessons: {{ count($topics) }}</strong></h3>
                        <div class="card-tools">
                            <h3 class="card-title"><strong>Quizzes: {{ $counter }}</strong></h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 10px">Topic</th>
                                <th>Concepts</th>
                                <th style="width: 40px">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($topics as $index => $topic)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $topic['title'] }}</td>
                                    <td><span class="right badge badge-danger">New</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
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


