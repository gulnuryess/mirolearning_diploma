@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>

            <div class="login-box" style="margin: auto;">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body login-card-body">
                        <h1 style="text-align: center;padding:40px 0px;">Sign Up as...</h1>
                        <div class="row" style="padding-bottom:40px;">
                            <div class="col-md-6"><a href="{{ route('teacher') }}"><button type="button" style="background-color: #FEC432; color: #fff;" class="btn btn-block btn-warning btn-lg">Teacher</button></a></div>
                            <div class="col-md-6"><a href="{{ route('student') }}"><button type="button" style="background-color: #3D4DDE; color: #fff;" class="btn btn-block btn-warning btn-lg">Student</button></a></div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            <!-- ./col -->

        </div>
    </div>
@endsection
@section('css')
    <style>
        body {
            background-color: #E2F1FF;
        }
    </style>
@endsection


