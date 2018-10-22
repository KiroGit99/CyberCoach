<!-- COMMENT MODAL -->
<div class="modal fade" tabindex="-1" role="dialog" id="postAnnounceModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Post an Announcement</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/admin/addAnnouncement" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input class="form-control" type="text" name="title" id="title">
                            </div>
                            <div class="form-group">
                                <label for="announcement">Announcement:</label>
                                <textarea name="announce" id="comment" class="form-control" cols="30" rows="10"></textarea>
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