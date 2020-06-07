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
                        @if(isset($success))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5> Success</h5>
                            Topic added successfully
                        </div>
                        @endif
                        <div class="card cb">
                            <div class="card-header">
                                <h3 class="card-title">Topics</h3>&nbsp;
                                <span style="color: red;">
                                @if($errors->any())
                                        {{ $errors->first() }}
                                    @endif
                                </span>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="width: 100%; margin: 0 auto;">
                                <form action="{{ route('create.topic.send') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{ $courseId }}">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of the topic" name="title" required>
                                    </div>
                                    <div id="par">
                                        <div class="form-group" id="theory">
                                            <textarea class="form-control" rows="3" placeholder="Theory of the topic" name="theory[]" required></textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-block btn-info btn-xs" style="width: 30%; margin:0 auto;" onclick="duplicateTheory()">One more theory</button>
                                    <hr>
                                    <div class="form-group">
                                        <label for="">Upload File</label>
                                        <input class="form-control" type="file"  name="topic_file" required/>
                                    </div>
                                    <hr>
                                    <label for="">Quiz</label>


                                    <div id="quizzes">

                                    <div class="card card-primary card-outline" id="duplicater">
                                        <div class="card-header" id="card-header">
                                            <h3 class="card-title">Question</h3>
                                            <div class="card-tools">
                                                <a href="#" style="color:red;" id="asd" onclick="removeCard(event)">Remove</a>
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <img src="/minus.svg" alt="" width="15px"></button>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your question" name="question[]" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-5 col-sm-3">
                                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="false">Multiple choices</a>
                                                        <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="true">Text</a>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-sm-9">
                                                    <div class="tab-content" id="vert-tabs-tabContent">
                                                        <div class="tab-pane text-left fade active show" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                                           <div class="row">
                                                               <div class="col-md-6">
                                                                   <div class="input-group input-group-sm">
                                                                       <input type="text" class="form-control" name="A[]">
                                                                       <span class="input-group-append">
                                                                      <button type="button" class="btn btn-info btn-flat">A</button>
                                                                     </span>
                                                                   </div>
                                                               </div>
                                                               <br>
                                                               <div class="col-md-6">
                                                                   <div class="input-group input-group-sm">
                                                                       <input type="text" class="form-control" name="B[]">
                                                                       <span class="input-group-append">
                                                                      <button type="button" class="btn btn-info btn-flat">B</button>
                                                                     </span>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" class="form-control" name="C[]">
                                                                        <span class="input-group-append">
                                                                      <button type="button" class="btn btn-info btn-flat">C</button>
                                                                     </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" class="form-control" name="D[]">
                                                                        <span class="input-group-append">
                                                                      <button type="button" class="btn btn-info btn-flat" >D</button>
                                                                     </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade  show" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Correct answer" name="answer[]" required>
                                            </div>
                                        </div>
                                    </div>

                                    </div>

                                    <button type="button" class="btn btn-block btn-info btn-xs" style="width: 30%; margin:0 auto;" onclick="duplicate()">One more question</button>
                                    <!-- /.card -->
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6"><button  type="submit" class="btn btn-block bg-gradient-info btn-lg" style="color:white; width: 100%; margin: 0 auto;">Create Topic</button></div>
                                        <div class="col-md-6"><a href="{{ route('profile') }}"><button  type="button" class="btn btn-block bg-gradient-success btn-lg" style="color:white; width: 100%; margin: 0 auto;">Final</button></a></div>
                                    </div>
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
@section('js')
    <script>
        let i = 0;
        function duplicate() {
            var original = document.getElementById('duplicater');
            var par = document.getElementById('quizzes');
            var clone = original.cloneNode(true);
            clone.id = "duplicetor" + ++i;



            par.appendChild(clone);

            $('#' + "duplicetor" + i).CardWidget('toggle')

            let tabs = clone.childNodes[2].childNodes[2].childNodes;
            let nav1 = tabs[0].childNodes[0].childNodes[0];
            let nav2 = tabs[0].childNodes[0].childNodes[2];
            let info1 = tabs[2].childNodes[0].childNodes[0];
            let info2 = tabs[2].childNodes[0].childNodes[2];

            nav1.href = "#r" + i;
            nav2.href = "#r1" + i;

            info1.id = 'r' + i;
            info2.id = 'r1' + i;


        }
        function removeCard(e)
        {
            if (e.target.parentNode.parentNode.parentNode.id !== 'duplicater'){
                $('#' + e.target.parentNode.parentNode.parentNode.id).CardWidget('remove')
            }
        }
        let j = 0;
        function duplicateTheory() {
            var original = document.getElementById('theory');
            var clone = original.cloneNode(true);
            clone.id = "theory" + ++j;
            var par = document.getElementById('par');
            par.appendChild(clone);
        }

    </script>
@endsection

