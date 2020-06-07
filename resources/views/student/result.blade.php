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
                                    <div class="callout callout-success" style="text-align: center;">
                                        <h5>You have passed quiz! Result: </h5>

                                        <h4 class="mt-5">{{count($passed->where('is_correct', 1))}}/{{ $totalQuiz }}</h4>
                                    </div>
                                @foreach($passed as $pass)
                                    @if($pass['is_correct'] == 1)
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h5> {{ $pass['question'] }}</h5>
                                           {{ $pass['answer'] }}
                                        </div>
                                    @else
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h5> {{ $pass['question'] }}</h5>
                                            {{ $pass['answer'] }}
                                        </div>
                                    @endif

                                @endforeach


                                    <div>
                                        <a href="{{ route('course.pass', ['topic_id' => $topicId, 'id' => $course->id]) }}" type="button" class="btn btn-block btn-primary">Topics</a>
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


