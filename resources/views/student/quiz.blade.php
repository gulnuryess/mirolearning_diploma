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
                                <a href="{{ route('student.activity') }}" class="nav-link">
                                    <p>
                                        <b>Activity</b>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="card card-widget">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 style="color: #6b6b6b">
                                            {{ $quiz['question'] }}
                                        </h4>
                                    </div>
                                    <div class="col-md-6" style="text-align: right">
                                        <h4 style="color: #6b6b6b">
                                            {{ $passed }}/{{count($totalQuiz)}}
                                        </h4>
                                    </div>
                                </div>
                                <form action="{{route('answer') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="topic_id" value="{{ $topicId }}">
                                    <input type="hidden" name="topic_quiz_id" value="{{ $quiz['id'] }}">
                                <div class="card mt-4">

                                    <div class="card-body">
                                        <div class="col-sm-6">
                                            <!-- radio -->
                                            @if($quiz['type'] == 'multiple')
                                                <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio1" name="answer" value="{{$quiz['A']}}">
                                                    <label for="customRadio1" class="custom-control-label">A) <span style="font-weight: 400;">
                                                            {{ $quiz['A'] }}
                                                        </span></label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio2" name="answer" value="{{$quiz['B']}}">
                                                    <label for="customRadio2" class="custom-control-label">B) <span style="font-weight: 400;">
                                                            {{ $quiz['B'] }}
                                                        </span></label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio3" name="answer" value="{{$quiz['C']}}">
                                                    <label for="customRadio3" class="custom-control-label">C) <span style="font-weight: 400;">
                                                            {{ $quiz['C'] }}
                                                        </span> </label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio4" name="answer" value="{{$quiz['D']}}">
                                                    <label for="customRadio4" class="custom-control-label">D)<span style="font-weight: 400;">
                                                            {{ $quiz['D'] }}
                                                        </span> </label>
                                                </div>
                                            </div>
                                            @else
                                                <div class="form-group">
                                                    <input type="text" name="answer" class="form-control" placeholder="Answer">
                                                </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>
                                <div style="float:right;">
                                    <button type="submit" class="btn btn-block btn-primary">Next</button>
                                </div>
                                </form>
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


