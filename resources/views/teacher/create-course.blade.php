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
                                <h3 class="card-title">Courses</h3>&nbsp;
                                <span style="color: red;">
                                @if($errors->any())
                                    {{ $errors->first() }}
                                @endif
                                </span>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="width: 50%; margin: 0 auto;">
                                <form action="{{ route('create.course.send') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of the course" name="title">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Description of the course" name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Logo of the course</label>
                                        <input class="form-control" type="file" placeholder="Logo of the course" name="img_file" />
                                    </div>
                                    <br>
                                    <button  type="submit" class="btn btn-block bg-gradient-warning btn-lg" style="color:white; width: 100%; margin: 0 auto;">Create Course</button>
                                </form>
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


