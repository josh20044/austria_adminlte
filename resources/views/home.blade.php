@extends('layouts.app')

@section('content')
@php
$follower = 132922322;
@endphp

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Dashboard') }}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            {{ 'Hi '. Auth::user()->name.','}}
                            {{ __('You are logged in!') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h1>Profile</h1>

        <div class="card card-secondary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ URL::to('/') }}/images/dogo.jpg"
                        alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name}}

                </h3>

                <p class="text-muted text-center">Aspiring Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Email</b> <a class="float-right">joshaustria2004@gmail.com</a>
                    </li>
                    <li class="list-group-item">
                        <b>Contact no.</b> <a class="float-right">0969-637-4638</a>
                    </li>
                    <li class="list-group-item">
                        <b>Address</b> <a class="float-right">Sampaloc Apalit Pampanga</a>
                    </li>
                    <li class="list-group-item">
                        <b>Followers</b> <a class="float-right">{{ number_format($follower)}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Following</b> <a class="float-right">0</a>
                    </li>
                    <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                </ul>

                <a href="#" class="btn btn-secondary btn-block" onclick="{{ $follower += 1 }}"><b>Follow</b></a>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                    currently a third-year student pursuing a B.S. in Information Technology at DHVSU Apalit Campus.
                </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills & Expertise</strong>

                <p class="text-muted">

                    <span class="tag tag-secondary">E-commerce & user experience (UX) optimization</span> <br>
                    <span class="tag tag-info">HTML</span> <br>
                    <span class="tag tag-info">CSS</span> <br>
                    <span class="tag tag-info">Bootstrap</span> <br> <br>


                    <span class="tag tag-danger">Game development & interactive learning design</span> <br>
                    <span class="tag tag-info">Godot Engine</span> <br>

                </p>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Programming languages:</strong>
                <p class="text-muted">
                    <span class="tag tag-info fw-semibold">Javascript</span> <br>
                    <span class="tag tag-primary ml-4 fw-light">Node.js</span> <br>
                    <span class="tag tag-primary ml-4 fw-light">React.js</span> <br>
                    <span class="tag tag-info">Java</span> <br>
                    <span class="tag tag-info">c++</span> <br>
                    <span class="tag tag-info">GdScript</span> <br>
                    <span class="tag tag-warning">PHP</span> <br>
                    
                </p>

                <hr>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active bg-secondary" aria-current="true">
                College Achievements
            </a>
            <a href="#" class="list-group-item list-group-item-action">First year - 2nd Sem dean's lister</a>
            <a href="#" class="list-group-item list-group-item-action">Second year - 1st Sem dean's lister</a>
            <a href="#" class="list-group-item list-group-item-action">Second year - 2nd Sem dean's lister</a>
        </div>




        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection