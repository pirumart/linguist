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

                    <topics
                        :topics="{{ json_encode($topics)}}"
                    ></topics>

                </div>
            </div>
        </div>
    </div>

@endsection