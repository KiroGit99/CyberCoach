@extends('layouts.student-nav')

@section('content')
    <div class="container">
        <ul class="nav nav-tabs" id="dashboardTab">
            <li class="nav-item">
                <a class="nav-link active" href="#announce" data-toggle="tab" role="tab">Announcements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#lessons" data-toggle="tab" role="tab">Lessons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#homework" data-toggle="tab" role="tab">Homework</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#quizzes" data-toggle="tab" role="tab">Quizzes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#forum" data-toggle="tab" role="tab">Discussion Forum</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="announce" role="tabpanel" aria-labelledby="announce-tab">
                <div class="card mt-3">
                    <div class="card-header bg-primary text-white">Teacher Announcements</div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, illo.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, error.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>

                <div class="card mt-3">
                    <div class="card-header bg-success text-white">
                        Admin Announcements
                        <div class="float-right">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, illo.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, error.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
            </div>
            <div class="tab-pane" id="lessons" role="tabpanel" aria-labelledby="lessons-tab">
                @include('student.dashboard.lessons')
            </div>
            <div class="tab-pane" id="homework" role="tabpanel" aria-labelledby="homework-tab">...</div>
            <div class="tab-pane" id="quizzes" role="tabpanel" aria-labelledby="quizzes-tab">...</div>
            <div class="tab-pane" id="forum" role="tabpanel" aria-labelledby="forum-tab">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-2">Discussion Threads</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><a href="/forum" target="_blank">Discussion thread 1</a></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th><a href="/forum">Discussion thread 1</a></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection