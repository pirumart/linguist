@extends('layouts.master')

@section('content')

    <div class="action-header-alt">
        <div class="action-header__item action-header__item--search">
            <form>
                <input type="text" placeholder="Search Topics...">
            </form>
        </div>

        <div class="action-header__item action-header__add">
            <a href="/topics/create" class="btn btn-danger btn-sm">New Topic</a>
        </div>
    </div>

    <div class="main__container">
        <header class="main__title">
            <h2>Topics</h2>
        </header>

        <div class="row">
            <div class="col-md-12">
                <div class="list-group list-group--block contact-lists">
                    <div class="list-group__header text-left">
                        {{ $topics_count.' Topics' }}
                    </div>

                    @foreach($topics as $topic)
                        <div class="list-group__wrap">
                            <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                <div class="pull-left">
                                    <div class="avatar-char mdc-bg-amber-400">T</div>
                                </div>
                                <div class="media-body list-group__text">
                                    <h4>{{ $topic->name }}</h4>
                                    <i>{{ $topic->description }}</i>
                                    <br><br>

                                    <div class="list-group__attrs">
                                        @foreach($topic->subTopics as $subTopic)
                                            <div>{{ ucfirst($subTopic->name) }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </a>
                            <div class="actions list-group__actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#add-to-group" data-toggle="modal">Add sub-topic</a></li>
                                        <li><a href="">Edit</a></li>
                                        <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @include('topics.partials._view_topic', [
                                'topic' => $topic
                            ])

                        @include('topics.partials._add_sub-topic', [
                                'topic' => $topic
                            ])
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection