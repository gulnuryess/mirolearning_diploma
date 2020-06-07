@extends('layouts.app')
@section('active_home', 'active')
@section('content')
<section id="wrapper">
    <div class="container">
    <div class="row"></div>

    <div id="logo2">
        <h1> Join! Micro-Learning makes your education easier!</h1>
        <h2> We offer you the best micro-learning courses,
            opportunity to create your  own course.</h2>
        <button><a href="courses.html"><b>Try now</b></a></button>
    </div>
    <div id="minicourse">
        <h1>Scratch Tutorial</h1>
        <img src="images/img01.jpg"></img>
        <p><b>Scratch is a free programming language and online
                community where you can create your own interactive stories,
                games, and animations.</b></p>
        <a href="#">Read more</a>
    </div>
    <div id="minicourse2">
        <h1>C# Tutorial</h1>
        <img src="images/img01.png"></img>
        <p><b>No prior programming experience is necessary!
                Our C++ app will supply you with everything you need
                to create and compile your own programs. </b></p>
        <a href="#">Read more</a>
    </div>
    <div id="minicourse3">
        <h1>Python Tutorial</h1>
        <img src="images/img03.png"></img>
        <p><b>One of today's most in-demand programming languages on-the-go,
                while playing, for FREE! Compete and collaborate with your fellows,
                short lessons and fun quizzes.</b></p>
        <a href="#">Read more</a>
    </div>

    <div id="sidebar">
        <h1><b>
                Available Anytime & Anywhere for FREE!</b>
        </h1>
        <p><b>Learn on the web and on the go.</b></p>
        <p><b>Available on all major devices and platforms.</b></p>
        <p><b>Always pick up where you left off.</b></p>
        <p><b>More simple and enjoyable than ever!</b> </p>
    </div>
    </div>
</section>
@endsection
@section('css')
    <style>


        body {
            margin: 0;
            padding: 0;
            background: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: black;
        }
        h1, h2, h3 {
            margin: 0;
            padding: 0;
            font-weight: normal;
            color: black;
        }

        h1 {
            font-size: 5em;
            color: black;
            text-align: center;
            background-size: 200px;

        }

        h2 {
            font-size: 2.4em;
        }

        h3 {
            font-size: 1.6em;
        }

        p, ul, ol {
            margin-top: 0;
            line-height: 180%;
        }

        ul, ol {
        }

        a {
            text-decoration: none;
            color: #9F0000;
        }

        a:hover {
            text-decoration: underline;
        }

        img.border {
            border: 6px solid #E1F1F6;
        }

        img.alignleft {
            float: left;
            margin-right: 25px;
        }

        img.alignright {
            float: right;
        }

        img.aligncenter {
            margin: 0px auto;
        }

        #wrapper {
            width: 960px;

            margin: 0px auto;
            background: url(images/img22.jpg) no-repeat top center;
            -moz-background-size: 100%;
            -webkit-background-size: 100%;
            background-size: 100%;
        }
        #wrapper1{
            width: 960px;
            margin: 0px auto;
            -moz-background-size: 100%;
            -webkit-background-size: 100%;
            background-size: 100%;


        }



        /* Header */

        #header {
            width: 900px;
            height: 100px;
            margin: 0 auto;
        }

        /* Logo */

        #logo {
            float: left;
            height: 100px;
            margin: 0px;
            padding: 0px;
            color: black;
            position: fixed;
        }
        #sign {

            margin: 00px;
            padding:10px;
            color: #FFFFFF;
            font-family: Georgia, "Times New Roman";
            font-size: 20px;
        }
        #logo h1, #logo p {
            margin: 0;
            padding: 0;
        }

        #logo h1 {
            padding-top: 10px;
            letter-spacing: -1px;
            text-shadow: #808080 -1px 1px 2px;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 40px;
        }
        #logo h2 {
            padding-top: 10px;
            letter-spacing: -1px;
            padding-left: 100px;
            text-shadow: #808080 -1px 1px 2px;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 50px;
        }

        /*#logo p {
            display: block;
            margin-top: -10px;
            padding-left: 5px;
            text-shadow: #808080 -1px 1px 2px;
            font: normal 18px Georgia, "Times New Roman", Times, serif;
            font-style: italic;
        }
        */
        #logo b{
            border: none;
            background: none;
            text-decoration: none;
            color: #9F0000;
        }
        #logo a {
            border: none;
            background: none;
            text-decoration: none;
            color: black;
        }
        /*logo2*/
        #logo2 {
            width:600px;
            height:100px;
            margin: 50px 150px 0px 0px;
            padding: 20px;
            color: black;

        }
        #logo2 h1{
            padding-top: 10px;
            letter-spacing: -1px;
            text-shadow: #808080 -1px 1px 2px;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 40px;

        }
        #logo2 h2{
            width:420px;
            padding-top: 10px;
            letter-spacing: -1px;
            font-size: 25px;

        }
        #logo2 button{
            width:95px;
            height: 30px;
            border:1px;
            Color:blue;
            font-size: 18px;
        }
        #logo2 a:hover{

            background: #F2AE30;
            text-decoration: none;
            color: #000000;
        }

        #minicourse{
            width: 250px;
            height:450px;
            background:#F0F8FF;
            border-radius:25px;
            padding:20px;
            margin: 700px 0px 0px 0px;
        }
        #minicourse h1{
            padding:5px;
            text-align:center;
            text-shadow: #808080 -1px 1px 2px;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 30px;

        }
        #minicourse img{

            width:160px;
            height:160px;
            border-radius:100px;
            margin: 5px 10px 0px 30px;
            border:2px solid blue;
            -moz-background-size: 100%;
            -webkit-background-size: 100%;
            background-size: 100%

        }
        #minicourse p{
            padding:5px;
            width:250px;
            height:145px;
            font-size:20px;
            text-align:justify;
            line-height: 0.9em;
            padding-top:10px;
            margin: 0px 0px 0px -5px;
        }

        #minicourse a{
            font-size: 25px;
            margin: 0px 0px 0px 55px;
        }
        #minicourse2{
            width: 250px;
            height:450px;
            background:#F0F8FF;
            border-radius:25px;
            padding:20px;
            margin: -650px 0px 0px 320px;
        }
        #minicourse2 h1{

            padding: 5px;
            text-align:center;
            text-shadow: #808080 -1px 1px 2px;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 30px;

        }
        #minicourse2 img{
            width:160px;
            height:160px;
            border-radius:120px;
            margin: 5px 10px 0px 40px;
            border:2px solid blue;
            -moz-background-size: 100%;
            -webkit-background-size: 110%;
            background-size: 90%

        }
        #minicourse2 p{
            width:250px;
            height:145px;
            font-size:20px;
            text-align:justify;
            line-height: 0.9em;
            padding:10px;
            margin: 0px 0px 0px -10px;
        }

        #minicourse2 a{
            font-size: 25px;
            margin: 0px 0px 0px 55px;
        }

        #minicourse3{
            width: 250px;
            height:450px;
            background:#F0F8FF;
            border-radius:25px;
            padding:20px;
            margin: 50px 0px 0px 320px;
        }
        #minicourse3 h1{

            padding: 5px;
            text-align:center;
            text-shadow: #808080 -1px 1px 2px;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 30px;

        }
        #minicourse3 img{
            padding:1px;
            width:160px;
            height:160px;
            border-radius:120px;
            margin: 5px 10px 0px 40px;
            border:2px solid blue;
            -moz-background-size: 100%;
            -webkit-background-size: 110%;
            background-size: 90%

        }
        #minicourse3 p{
            width:250px;
            height:145px;
            font-size:20px;
            text-align:justify;
            line-height: 0.9em;
            padding:10px;
            margin: 0px 0px 0px -10px;
        }

        #minicourse3 a{
            font-size: 25px;
            margin: 0px 0px 0px 55px;
        }

        /* Search */

        #search {
            height: 110px;
            padding: 0;
            margin: 0px 0px 0px 120px;
        }




        /* Menu */

        #menu {
            width: 1000px;
            height: 50px;
            margin: -75px 0px 0px 550px;
            position:fixed;
            padding: 0px;
        }

        #menu ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
            line-height: normal;
        }

        #menu li {
            float: left;
            margin:0px 20px;

        }


        #menu a {

            display: block;
            float: left;
            margin: 0px 2px 0px 0px;
            padding: 5px 20px;
            text-decoration: none;
            text-transform: capitalize;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            font-weight: normal;
            color: black;
            border: none;
        }

        #menu .current_page_item a {
            background:#FEC432;
            width:100%;
            color: black;
        }

        #menu a:hover {
            background: #F2AE30;
            text-decoration: none;
            color: #000000;
        }
        #menu input{
            background:url("images/prof.png") no-repeat;
            background-size:100%;
            width:50px;
            height:50px;

        }

        #sidebar {
            float: right;
            width: 320px;
            font-size: 25px;
            margin: -1050px 20px 0px 0px;

        }
        #sidebar h1{
            margin: 10px 0px 0px 10px;

            letter-spacing: -1px;
            text-shadow: #808080 -1px 1px 2px;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 40px;

        }
        #sidebar p{
            margin: 20px 0px 0px 15px;
            letter-spacing: -1px;
            text-align: justify;
            font-family: Georgia, "Times New Roman";
            line-height: 1em;

        }
        #sidebar h2 {
            height: 29px;
            padding:10px 30px;
            margin: 0px 0px 0px 0px;

            background: url(images/img02.gif) no-repeat left top;
            font-size: 25px;
            font-weight: normal;
            color: #000000;
        }

        /*page of courses*/
        .parent
        {   border:2px solid #FEC432;
            width:1000px;
            background:#FEC432;
            padding:10px;
            height:100%;

        }
        .child
        {   padding:5px;
            height: 350px;
            display: inline-block;
            width: 45%;
            border-radius:25px;
            background:white;
            margin:2px 15px;

        }
        .child img{
            width: 150px;
            height:150px;
            border-radius:80px;
            padding:10px;

        }
        TD.leftcol {
            width: 20px;
            vertical-align: top;

        }
        TD.rightcol{
            text-align:right;
            vertical-align:top;
            background:white;
            border:1px solid white;

        }
        TD.rightcol img{
            width:50px;
            height:50px;
            padding:0px;
            background-color:white;
            border-radius:50px;

        }

        .theme{
            font-size:35px;
            text-align:center;
            font-family: 'Times New Roman', Times, serif;
        }
        .context{
            font-size:22px;
            font-family: 'Times New Roman', Times, serif;
            border:2px solid white;
        }
        .line{
            border: 1px solid black;
            width:500px;
            height:1px;
        }
        .statcourse{
            width:150px;
            border:2px solid white;
            text-align:center;

        }
        .plo td{
            color:#FEC432;
        }
        .buttonplus{
            border-radius:90px;
            background:white;
            border:none;


        }


        .bluewrap{
            background:#E2F1FF;
            Width:1040px;
            height:100%;
            border:none;


        }
        /*SIGNUP*/
        .signin{
            background:white;
            text-align:center;
            width:500px;
            margin:100px 0px 0px 250px;


        }
        * {box-sizing: border-box}
        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            height:50px;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        /* Add a background color when the inputs get focus */
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
            font-size:25px;
        }
        input[type=checkbox]{
            width:20px;
            height:20px;
        }
        .signin p{
            font-size:20px;

        }
        .signin h1{
            font-size:45px;
            font-family: 'Times New Roman', Times, serif;
            padding:10px;

        }

        /* Set a style for all buttons */
        .signin button {

            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 40%;
            opacity: 0.9;
            font-size:25px;
            font-family: 'Times New Roman', Times, serif;
        }

        .signin button:hover {
            opacity:1;
        }
        label{
            padding: 14px 20px;
            font-size:25px;
            font-family: 'Times New Roman', Times, serif;

        }


        .signupbtn {

            background-color:#FEC432;

        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            padding:0px 2px;
            width: 30%;
            height:50px;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 20px;
            font-weight: bold;
            color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";

            display: table;
            padding:20px;

        }
        .clearfix a{
            color:white;
            font-size:25px;
        }


        @media screen and (max-width: 300px) {
            .teacherbutton, .studentbutton {
                width: 100%;
            }
        }
        .teacherbutton {
            padding: 14px 20px;
            background-color:#FEC432 ;
            width: 30%;
            height:100px;
            border-radius:25px;
            font-size:32px;
            color:white;
            font-family:'Times New Roman', Times, serif;




        }
        .studentbutton {
            color:white;
            background-color:#3D4DDE;
            font-size:32px;
            padding: 14px 20px;
            width: 30%;
            height:100px;
            border-radius:25px;
            font-family:'Times New Roman', Times, serif;
        }

        .signupbtn{
            color:white;
            font-size:25px;


        }



        /*Teacher's page!!!!!!!!!!!!*/
        .teacherinfo{
            width:100%;
            height:500px;
            border:100px solid #E2F1FF;
            background-color:white;
            background:white;



        }
        .teacherinfo img{
            width:150px;
            height:150px;
            border-radius:50px;
            border:1px solid white;
            margin: 50px 0px 0px 50px;

        }
        .teacherinfo h1{
            font-size:35px;
            font-family:'Times New Roman', Times, serif;
            padding: 5px 0px;
            margin: 50px 0px -20px -50px;


        }
        .teacherinfo p{
            text-align:left;
            font-size:25px;
            padding:0px 12px;
            font-family: Roboto;
            color:#4E4E4E;
            margin:-10px 10px 5px 0px;
        }
        .teachattr{
            border:1px solid #E2F1FF;
            text-align:center;
            width:90%;
            height:200px;
            font-size:25px;
            margin:-80px 10px 0px 0px;

        }
        .teachattr ul{
            list-style: none;

        }
        .teachattr a {

            text-decoration: none;
            text-transform: capitalize;
            border: none;
            color:black;
        }

        .teachattr .current_page_item a {
            background-color:white;
            color: black;
        }

        .teachattr a:hover {
            background: #F2AE30;
            text-decoration: none;
            color: #000000;
        }
        .mycourse{
            width:430px;
            vertical-align:top;


        }
        .teachcourses{
            background:white;
            border:2px solid white;
            width:850px;

        }
        .teachcourses input[type=button]{
            width:200px;
            height:50px;
            font-size:25px;

        }
        .teachcourses input[type=button]:focus{
            width:200px;
            height:50px;
            font-size:25px;


        }
        .teachcourses input[type=text]{
            width:80%;
            text-align:center;
            font-size:25px;
            color:black;

        }
        .teachcourses h2{
            font-size:25px;
            text-align:center;
            padding:5px;
        }
        .teachcourses p{
            font-size:25px;
            margin: -10px 60px;
            text-align:center;
        }
        .teachcourses h5{
            font-size:15px;
            margin: -10px 60px;
            text-align:right;
        }
        /*STUDENTS page*/
        .studinfo{
            width:100%;
            height:500px;
            border:100px solid #E2F1FF;
            background-color:white;
            background:white;



        }
        .studinfo img{
            width:150px;
            height:150px;
            background-size:150%;
            border-radius:50px;
            border:1px solid white;
            margin: 50px 0px 0px 50px;

        }
        .studinfo h1{
            font-size:35px;
            font-family:'Times New Roman', Times, serif;
            padding: 5px 0px;
            margin: 50px 0px -20px -35px;


        }
        .studinfo p{
            text-align:left;
            font-size:25px;
            padding:0px 12px;
            font-family: Roboto;
            color:#4E4E4E;
            margin:-10px 0px 5px 30px;
        }
        .studcourses{
            background:white;
            border:2px solid white;
            width:850px;
        }
        .studcourses input[type=button]{
            background:url("images/plus1.png");
            background-size:100%;
            width:80px;
            height:80px;
            border-radius:50px;
            border:none;

        }
        .studcourses input[type=button]:focus{
            width:80px;
            height:80px;
            background-color:#B5B4FB;

        }
        .studactiv{

            width:100%;
            font-size:20px;
            margin: -50px 0px 0px 0px;

        }
        .studactiv td{
            height:30px;
        }
        .last{
            background:#EDEEEF;

        }
        .upload{
            padding:30px;
            margin:0px 10px;
        }
        .upload td{
            text-align:center;
            padding:5px;
        }
        .upload input[type=button]{
            background-size:100%;
            width:100px;
            height:100px;

        }
        .upload input[type=button]:focus{
            background-size:100%;
            width:100px;
            height:100px;

        }
        .upload input[type=text]{
            font-size:20px;
            width:160px;
            height:50px;
            background-color:white;
            border:1px solid #FEC432;
            border-radius:15px;

        }
        .uploadfile{
            background:url("images/upload.png");
            border-radius:100px;
            text-align:center;
        }

        .topicup{
            width:350px;
            background-color:#FFF9EB;
            height:150px;
            border:1px solid #FEC432;
            border-radius:25px;

        }
        .uploadone input[type=button]{

            width:160px;
            height:50px;
            background-color:#FEC432;
            font-size:20px;

        }
        .uploadone input[type=button]:focus{

            width:160px;
            height:50px;
            background-color:#FEC432;
            font-size:20px;

        }
        .upload2{
            width:450px;
            margin:10px 40px 0px 30px;
        }
        .upload2 option{
            width:250px;
            height:50px;
            font-size:25px;
            background-color:#FFF8E6;


        }
        .save{
            margin:60px 0px 60px 0px;
            background:#FEC432;
        }
        .sizeoftext{
            width:600px;
            height:100px;
        }
        .select{
            margin:10px 0px 0px 50px;
            padding:5px;
        }

        .uploadone2 input[type=button]{

            width:150px;
            height:50px;
            background-color:#FEC432;
            font-size:20px;
            margin:0px -10px 0px 80px;

        }
        .uploadone2 input[type=button]:focus{

            width:160px;
            height:50px;
            background-color:#FEC432;
            font-size:20px;


        }
        .teachcourses2{
            background:white;
            border:2px solid white;
            width:550px;

        }
        .teachcourses2 input[type=button]{
            width:200px;
            height:50px;
            font-size:25px;

        }
        .teachcourses2 input[type=button]:focus{
            width:200px;
            height:50px;
            font-size:25px;


        }
        .teachcourses2 input[type=text]{
            width:80%;
            text-align:center;
            font-size:25px;
            color:black;

        }
        .teachcourses2 h2{
            font-size:25px;
            text-align:center;
            padding:5px;
        }
        .teachcourses2 p{
            font-size:15px;
            margin: -10px 60px;
            text-align:right;
        }

        .studcourses h4{
            font-size:20px;
            text-align:center;
        }


    </style>
@endsection
