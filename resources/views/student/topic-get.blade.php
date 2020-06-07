@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card card-outline">
                    <div class="card-body profile">
                        <div class="profile__logo">
                            <img src="{{ asset('images/'.$course['img']) }}" alt="" width="130px">
                        </div>
                        <div class="profile__info">
                            <h2>{{ $course['title'] }}</h2>

                            <p>{{ $course['description'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-sidebar flex-column" style="text-align: center;">
                            <li class="nav-item">
                                <a href="{{ route('profile') }}" class="nav-link active_class">
                                    <p>
                                        <b>My Courses</b>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('todo') }}" class="nav-link">
                                    <p>
                                        <b>To Do</b>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>
                                        <b>Activity</b>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="card card-widget">
                            <div class="card-header">
                                <strong class="username">Topic-{{ $topic['num'] }}</strong>
                                <span class="username">{{ $topic['title'] }}</span>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- post text -->
                                @foreach($theories as $index => $theory)
                                    <h4>Theory #{{ $index + 1 }}</h4>
                                    <p>&nbsp; &nbsp;&nbsp;&nbsp;{{ $theory['text'] }}</p>

                                @endforeach
                                <hr>
                                <div class="callout callout-info">
                                    <h5>Practice</h5>

                                    <p>Download <strong><a target="_blank" href="{{ route('download1', ['filename' => $file['file_name'], 'course_id' => $topic['course_id']]) }}" style="color:#003e80">this</a></strong> and follow the steps.</p>
                                </div>

                                <a href="{{ route('quiz', ['topic_id' => $topic['id'], 'id' => $course['id']]) }}" type="button" class="btn btn-block btn-primary" style="width: 30%; margin:0 auto;">Take Quiz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        body {
            background-color: #E2F1FF;
        }
        .profile {
            display: flex;
        }
        .profile__logo {
            padding: 20px;
        }
        .profile__info  span {
            color: #666;
        }
        .profile__info {
            margin-top: 20px;
            margin-left: 5px;
        }
        .active_class {
            background-color: #fff;
            color: #666;
        }
        .cb {
            padding:0px;
        }
    </style>
@endsection


