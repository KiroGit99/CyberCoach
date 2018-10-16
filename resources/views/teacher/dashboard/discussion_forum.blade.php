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
                                        <input type="hidden" name="user_id" value="{{$teacher->id}}">
                                        <input type="hidden" name="user_type" value="teacher">
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