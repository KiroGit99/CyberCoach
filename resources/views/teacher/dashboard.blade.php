@extends('layouts.teacher-nav')

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
                    <div class="card-header bg-success text-white">Admin Announcements</div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, illo.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, error.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-white">
                        My Announcements
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
                @include('teacher.dashboard.lessons')
                
            </div>
            <div class="tab-pane" id="homework" role="tabpanel" aria-labelledby="homework-tab">...</div>
            <div class="tab-pane" id="quizzes" role="tabpanel" aria-labelledby="quizzes-tab">...</div>
            <div class="tab-pane" id="forum" role="tabpanel" aria-labelledby="forum-tab">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1>Thread Title here</h1>
                        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod in animi tempora totam aperiam veritatis nostrum laboriosam, eum ducimus delectus.</p>
                        <div class="button-group">
                            <button class="btn btn-secondary" data-toggle="modal" data-target="#commentModal">Comment</button>
                        </div>
                    </div>
                </div>

                <div class="card ml-3 mt-3">
                    <div class="card-body">
                        <p><strong>Juan Dela Cruz</strong></p>
                        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eum, officia suscipit molestiae reprehenderit architecto eos enim cumque commodi, velit cupiditate neque aliquam at et ex dolorum dolores facere fuga.</p>
                    </div>
                </div>
                <div class="card ml-3 mt-3">
                    <div class="card-body">
                        <p><strong>Juan Dela Cruz</strong></p>
                        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eum, officia suscipit molestiae reprehenderit architecto eos enim cumque commodi, velit cupiditate neque aliquam at et ex dolorum dolores facere fuga.</p>
                    </div>
                </div>
            </div>

            <!--MODALS  -->
            @include('teacher.dashboard.modals.upload_file')
            @include('teacher.dashboard.modals.forum_comment')
        </div>
    </div>


@endsection