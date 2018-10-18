<div class="modal fade" id="addAnnouncement" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/addAnnouncement" method="post">
                <input type="hidden" name="user_id" value="{{$teacher->id}}">
                <div class="modal-body">
                    @csrf
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control">
                    <label for="announce">Announcement:</label>
                    <textarea name="announce" class="form-control" id="announce" placeholder="type your announcement here" cols="30" rows="10"></textarea>
                </div>                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>