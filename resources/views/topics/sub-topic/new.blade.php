@extends('layouts.master')
@section('content')

    <div class="main__container">
        <header class="main__title">
            <div class="row">
                <h4>Add a new Sub Topic in {{$topic->name}}</h4>
            </div>
        </header>

        <div class="row">
            <div class="col-md-12">
                <div class="list-group list-group--block contact-lists">
                    <form method="POST" action={{ "/topics/$topic->id/sub-topic/store" }}>
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group m-0">
                                <input type="text" name="name" class="form-control" placeholder="New Sub Topic Name...">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection




