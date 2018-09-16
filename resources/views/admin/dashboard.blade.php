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
                            <th scope="col">Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">09-21-2018 12:00:01</th>
                                <td>jsantos</td>
                                <td>uploaded homework.pdf</td>
                            </tr>
                            <tr>
                                <th scope="row">09-13-2018 04:56:07</th>
                                <td>admin1</td>
                                <td>added user account admin2</td>
                            </tr>
                            <tr>
                            <th scope="row">09-12-2018 09:10:12</th>
                                <td>jdelacruz</td>
                                <td>uploaded homework.pdf to jsantos</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="list-announce" role="tabpanel" aria-labelledby="list-announce-list">
                    <h1 class="text-center">Announcements</h1>
                    <button class="btn btn-success"><i class="fa fa-plus"></i> Post an Announcement</button>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="card-title">Maintenance Check</div>
                            <div class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, fuga!</div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="card-title">Downtime at 09-22-2018</div>
                            <div class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, fuga!</div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="card-title">System Upgrade at 08-15-2018</div>
                            <div class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, fuga!</div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-accts" role="tabpanel" aria-labelledby="list-accts-list">
                    <h1>User Accounts</h1>
                    <button class="btn btn-primary float-right"><i class="fa fa-plus"></i> Add User Account</button>
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
    </div>
</div>

<script src="{{asset('app.js')}}"></script>
@endsection