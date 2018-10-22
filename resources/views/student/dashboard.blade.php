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
                    @foreach($t_announce as $t)
                        <li class="list-group-item"><h3>{{$t->title}}</h3><p>{{$t->announcement}}</p></li>
                    @endforeach
                    
                </ul>

                <div class="card mt-3">
                    <div class="card-header bg-success text-white">
                        Admin Announcements
                    </div>
                </div>
                <ul class="list-group">
                    @foreach($a_announce as $a)
                        <li class="list-group-item"><h3>{{$a->title}}</h3><p>{{$a->announcement}}</p></li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-pane" id="lessons" role="tabpanel" aria-labelledby="lessons-tab">
                @include('student.dashboard.lessons')
            </div>
            <div class="tab-pane" id="homework" role="tabpanel" aria-labelledby="homework-tab">...</div>
            <div class="tab-pane" id="quizzes" role="tabpanel" aria-labelledby="quizzes-tab">
            <div class="card mt-3">
                    <div class="card-body">
                        <h3>Quiz 1</h3>
                        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, repudiandae.</p>
                        <button type="button" class="btn btn-success">Take Quiz</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3>Quiz 2</h3>
                        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, repudiandae.</p>
                        <button type="button" class="btn btn-success">Take Quiz</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3>Quiz 3</h3>
                        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, repudiandae.</p>
                        <button type="button" class="btn btn-success">Take Quiz</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="forum" role="tabpanel" aria-labelledby="forum-tab">
                @include('student.dashboard.discussion_forum')
            </div>
        </div>
    </div>


@endsection