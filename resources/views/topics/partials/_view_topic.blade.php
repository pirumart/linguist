<div class="modal fade" id="view-contact">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="m-t-25">
                    <h3>{{ $topic->name }}</h3>
                    <small>{{ $topic->description }}</small>
                </div>

                <div class="m-t-25">
                    <h5>Sub-Topics</h5>
                    @foreach($topic->subTopics as $subTopic)
                        <div class="text-strong m-t-5"><code>{{ $subTopic->name }}</code></div>
                    @endforeach
                </div>
            </div>

            <div class="modal-footer text-center modal-footer--bordered">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>