@extends('layouts.master')

@section('content')

    <div class="main__container">
        <header class="main__title">
            <h2>Dashboard</h2>
        </header>

        <div class="row">
            <div class="col-md-4 text-center">
                <div class="list-group list-group--block contact-lists">
                    <div class="list-group__wrap">
                        <a class="list-group-item media" href="/topics" data-toggle="modal">
                            <div class="media-body list-group__text">
                                <strong>
                                    <h3 class="text-info">{{ $no_of_topics }}</h3>
                                    <h4> TOPICS</h4>
                                </strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection