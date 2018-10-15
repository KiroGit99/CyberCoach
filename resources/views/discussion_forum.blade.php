        <head>
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
            <title>Discussion Forum</title>
            <script>
            // rename myToken as you like
            window.myToken =  <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
            </script>
        </head>
        <body>
            <div id="app" class="container mt-3"> 
                <!--input type="hidden" name="token" value="{{csrf_field()}}" v-model="token"-->
                <div class="card mt-3">
                    <div class="card-body">
                        <h1>{{$thread->thread_title}}</h1>
                        <p class="lead">{{$thread->thread_body}}</p>
                        <div class="button-group">
                            <button class="btn btn-secondary" data-toggle="modal" data-target="#commentModal">Comment</button>
                        </div>
                    </div>
                </div>
                @forelse($comments as $comment)
                    <div class="card ml-3 mt-3">
                        <div class="card-body">
                            <p><strong>{{$comment->first_name.' '.$comment->last_name}}</strong></p>
                            <p class="lead">{{$comment->comment}}</p>
                        </div>
                    </div>
                    @empty
                    <div class="card ml-3 mt-3">
                        <div class="card-body">
                            <p class="lead">No comments yet.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- COMMENT MODAL -->
            <div class="modal fade" tabindex="-1" role="dialog" id="commentModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Comment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/addComment" method="post">
                        @csrf
                        <input type="hidden" name="thread_id" value="{{$thread->id}}">
                        <div class="modal-body">
                                <textarea name="comment" id="comment" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <script src="{{asset('js/app.js')}}"></script>
        </body>