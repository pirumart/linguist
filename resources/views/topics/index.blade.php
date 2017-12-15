@extends('layouts.master')

@section('content')

    <div class="main__container">

        @include('partials.status')

        <header class="main__title">
            <h2>Topics</h2>

            <div class="row">
                <div class="action-header__item action-header__add">
                    <a href="/topics/create" class="btn btn-success btn-md">+ Add New Topic</a>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="col-md-12">
                <div class="list-group list-group--block contact-lists">
                    <div class="list-group__header text-left">
                        {{ $topics_count.' Topics' }}
                    </div>

                    @foreach($topics as $topic)
                        <div class="list-group__wrap">
                            <a class="list-group-item media" href="/topics/{{ $topic->id }}" data-toggle="modal">
                                <div class="pull-left">
                                    <div class="avatar-char mdc-bg-amber-400">T</div>
                                </div>
                                <div class="media-body list-group__text">
                                    <h4>{{ $topic->name }}</h4>
                                    <i>{{ $topic->description }}</i>
                                    <br><br>
                                    <div class="col-sm-12">
                                        <span><h5>Sub-topics: </h5></span>
                                        @foreach($topic->subTopics as $subTopic)
                                            <span class="list-group__attrs">
                                                <div>{{ ucfirst($subTopic->name) }}</div>
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection