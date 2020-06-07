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
                <div class="card-body">
                    <h4 class="login-box-msg">Sign Up as Teacher</h4>
                    @if(!empty($errors->toArray()))
                        <h5 style="color: red"> Error Data</h5>
                    @endif


                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <input type="hidden" class="form-control" name="role" value="teacher" placeholder="Surname">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Surname" name="surname" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Verify your password" name="password2" required>
                        </div>

                        <button type="submit" class="btn btn-block btn-warning">

                            Sign up
                        </button>
                    </form>
                    <a href="{{ route('login') }}" class="text-center">Sign In</a>
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


