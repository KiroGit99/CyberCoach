@extends('layouts.admin-nav')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-activity-list" data-toggle="list" href="#list-activity" role="tab" aria-controls="activity">Recent Activity</a>
            <a class="list-group-item list-group-item-action" id="list-announce-list" data-toggle="list" href="#list-announce" role="tab" aria-controls="announce">Announcements</a>
            <a class="list-group-item list-group-item-action" id="list-messages-accts" data-toggle="list" href="#list-accts" role="tab" aria-controls="accts">User Accounts</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-activity" role="tabpanel" aria-labelledby="list-home-list">
                    <h1>Recent Activity</h1>
                    <table class="table mt-3">
                        <thead class="bg-success text-white">
                            <tr>
                            <th scope="col">Timestamp</th>
                            <th scope="col">User</th>
                            <th scope="col">User Type</th>
                            <th scope="col">Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($activity as $act)
                                
                                <tr>
                                    <th scope="row">{{$act['timestamp']}}</th>
                                    <td>{{$act['username']}}</td>
                                    <td>{{$act['user_type']}}</td>
                                    <td>{{$act['activity']}}</td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="list-announce" role="tabpanel" aria-labelledby="list-announce-list">
                    <h1 class="text-center">Announcements</h1>
                    <button class="btn btn-success" data-toggle="modal" data-target="#postAnnounceModal"><i class="fa fa-plus"></i> Post an Announcement</button>
                    @foreach($announce as $a)
                        <div class="card mt-2">
                            <div class="card-body my-2">
                                <div class="card-title">{{$a->title}}</div>
                                <div class="card-text">{{$a->announcement}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="list-accts" role="tabpanel" aria-labelledby="list-accts-list">
                    <h1>User Accounts</h1>
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addUserAccount"><i class="fa fa-plus"></i> Add User Account</button>
                    <table class="table mt-3">
                        <thead class="bg-success text-white">
                            <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">User Type</th>
                            <th scope="col">Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>jsantos</td>
                                <td>Juan Santos</td>
                                <td>Teacher</td>
                                <td>09-11-2018</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>jdelacruz</td>
                                <td>Juan Dela Cruz</td>
                                <td>Student</td>
                                <td>09-10-2018</td>
                            <tr>
                                <th scope="row">1</th>
                                <td>admin1</td>
                                <td>Admin1</td>
                                <td>Admin</td>
                                <td>09-11-2018</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--MODAL - ADD USER ACCOUNT -->
        <div class="modal fade" tabindex="-1" role="dialog" id="addUserAccount">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add User Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="addAccount" method="post">
                        <div class="modal-body">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="first_name">First Name:</label>
                                        <input type="text" name="first_name" class="form-control" />
                                    </div>
                                    <div class="col">
                                        <label for="last_name">Last Name:</label>
                                        <input type="text" name="last_name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username: </label>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password: </label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="user_type">User Type:</label>
                                    <select name="user_type" id="user_type" class="form-control">
                                        <option value="student">Student</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('admin.modals.post_announce')
    </div>
</div>
@endsection