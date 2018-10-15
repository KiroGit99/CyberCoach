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
                <button class="btn btn-primary my-2" data-toggle="modal" data-target="#threadModal">Discuss something...</button>
                <div class="modal fade" tabindex="-1" role="dialog" id="threadModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Open a Discussion Thread</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="/addThread" method="post">
                                @csrf
                                <div class="modal-body">
                                        <input type="hidden" name="user_id" value="{{$student->id}}">
                                        <input type="hidden" name="user_type" value="student">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" id="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="body">Description</label>
                                            <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-2">Discussion Threads</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($threads as $thread)
                            <tr>
                                <th><a href="/forum/{{$thread->id}}" target="_blank">{{$thread->thread_title}}</a></th>
                                <th></th>
                                <th></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection