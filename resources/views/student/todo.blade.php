@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card card-outline">
                    <div class="card-body profile">
                        <div class="profile__logo">
                            <img src="{{ asset('images/user.png') }}" alt="" width="130px">
                        </div>
                        <div class="profile__info">
                            <h2>{{ Auth::user()->surname }} {{ Auth::user()->name }}</h2>
                            <span>{{ Auth::user()->role }}</span>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-sidebar flex-column" style="text-align: center;">
                            <li class="nav-item">
                                <a href="{{ route('profile') }}" class="nav-link">
                                    <p>
                                        <b>My Courses</b>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('todo') }}" class="nav-link active_class">
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
                        <div class="card cb">
                            <div class="card-header">
                                <h3 class="card-title">Todo</h3>
                            </div>
                            <!-- /.card-header -->

                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">Topic</th>
                                            <th style="width: 10px">course_id</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($topics as $index => $topic)
                                                <tr>
                                                    <td><a href="{{ route('topic.get', ['id' => $topic['course_id'], 'topic_id' => $topic['id']]) }}">{{ $topic['title'] }}</a> </td>
                                                    <td>{{ $topic['course_id'] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                <br>
                            </div>
                            <!-- /.card-body -->
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


