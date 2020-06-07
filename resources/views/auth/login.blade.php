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
                    <h4 class="login-box-msg">Sign In</h4>
                    @if(!empty($errors->toArray()))
                        <h5 style="color: red"> Error Data</h5>
                    @endif
                    <form action={{ route('sendLogin') }} method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>


                        <button type="submit" class="btn btn-block btn-warning">

                            Sign in
                        </button>
                    </form>
                    <a href="{{ route('choice') }}" class="text-center">Sign Up</a>
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


