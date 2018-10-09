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
                <thread-head></thread-head>
                <thread-comment-section></thread-comment-section>
                <div class="card ml-3 mt-3">
                    <div class="card-body">
                        <p><strong>Juan Dela Cruz</strong></p>
                        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eum, officia suscipit molestiae reprehenderit architecto eos enim cumque commodi, velit cupiditate neque aliquam at et ex dolorum dolores facere fuga.</p>
                    </div>
                </div>
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
                    <div class="modal-body">
                        <form action="">
                            <textarea name="comment" id="comment" class="form-control" cols="30" rows="10"></textarea>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </div>
            </div>
            <script src="js/app.js"></script>
        </body>