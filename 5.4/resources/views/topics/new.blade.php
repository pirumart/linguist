@extends('layouts.master')
@section('content')

    <div class="main__container">
        <header class="main__title">
            <div class="row">
                <h4>New Topic</h4>
            </div>
        </header>

        @include('partials.errors')

        <div class="row">
            <div class="col-md-12">
                <div class="list-group list-group--block contact-lists">
                    <form method="POST" action={{ "/topics" }}>
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group m-0">
                                <input type="text" name="name" class="form-control" placeholder="New Topic Name..." required>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group m-0">
                                <textarea rows="5" name="description" class="form-control" placeholder="Describe this topic so people can understand better..." required>

                                </textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection




