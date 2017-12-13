<div class="modal fade" id="add-to-group" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add to group</h4>
            </div>

            <div class="contact-highlight media">
                <div class="pull-left">
                    <div class="avatar-char mdc-bg-amber-400">T</div>
                </div>
                <div class="media-body">
                    <strong>{{ $topic->name }}</strong>

                    <div class="list-group__attrs m-t-5">
                        <div>{{ $topic->description }}</div>
                    </div>
                </div>
            </div>

            <form method="POST" action={{ "/topics/$topic->id/store" }}>
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group m-0">
                        <input type="text" name="name" class="form-control" placeholder="New Sub Topic Name...">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
                    <button type="submit" class="btn btn-link">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>