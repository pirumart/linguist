@extends('layouts.master')
@section('content')

    <div class="main__container">
        <header class="main__title">
            <h2>{{ $topic->name }}</h2>
        </header>

        <div class="row">
            <div class="col-md-12">
                <div class="list-group list-group--block contact-lists">
                    <div class="list-group__header text-left">
                        {{-- {{ $topics_count.' Topics' }} --}}
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection