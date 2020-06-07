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
                                <a href="{{ route('profile') }}" class="nav-link active_class">
                                    <p>
                                        <b>My Courses</b>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('teacher.activity') }}" class="nav-link">
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
                                <h3 class="card-title">Courses</h3>
                                <div class="card-tools">
                                    <ul class="nav ml-auto">
                                        <li class="nav-item">
                                            <a href="{{ route('create.course') }}"><button  type="button" class="btn btn-block bg-gradient-info" style="color:white;">Create Course</button></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="text-align: center">
                                @if(empty($courses))
                                    <h4>No courses</h4>
                                @else
                                    @foreach($courses as $course)
                                        <div class="text-center mb-2">
                                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/'.$course['img']) }}" alt="User profile picture">
                                            <a href="{{ route('course.delete', ['id' => $course['id']]) }}"  onclick="return confirm('Are you sure?')" type="button" class="close">×</a>
                                        </div>
                                        <h3 class="profile-username text-center">{{ $course['title'] }}</h3>

                                        <button type="button" class="btn btn-block bg-gradient-warning btn-sm" style="color:white; width: 13%; margin: 0 auto;" onclick='myFunction(event,{{$course['id']}})'>share</button>
                                        <input type="hidden" id="{{$course['id']}}" class="form-control" value="{{ url('courses/'.$course['id']) }}" disabled="" style="width: 40%; margin: 0 auto">
                                        <hr>
                                    @endforeach
                                @endif
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
@section('js')
    <script>
        function myFunction(event, id) {
            var el = document.getElementById(event);
console.log(event)
            event.target.style.display = 'none';
            let a = document.getElementById(id)
            a.type = 'text'
        }
    </script>
@endsection

