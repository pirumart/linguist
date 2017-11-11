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
            <div class="col-md-8">
                <div class="list-group list-group--block contact-lists">
                    <div class="list-group__header text-left">
                        {{ $topics_count.' Topics' }}
                    </div>

                    <div class="list-group__wrap">
                        <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                            <div class="pull-left">
                                <div class="avatar-char mdc-bg-amber-400">T</div>
                            </div>
                            <div class="media-body list-group__text">
                                <strong>Tyrek Pusateri</strong>

                                <div class="list-group__attrs">
                                    <div>tyr_pu@yoohoo.com</div>
                                    <div>(203) 991-4171</div>
                                </div>
                            </div>
                        </a>
                        <div class="actions list-group__actions">
                            <div class="dropdown">
                                <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                    <li><a href="">Edit</a></li>
                                    <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}

    <!-- View Topic -->
            <div class="modal fade" id="view-contact">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <div class="view-contact__img">
                                <img src="img/demo/people/2.jpg" class="img-circle" width="150" height="150" alt="">
                            </div>

                            <div class="m-t-25">
                                <h4>Mallinda Hollaway</h4>
                                <small>421 Walnut St. Hartford, CT 06106, United States</small>
                            </div>

                            <div class="m-t-25">
                                <small>Email Address</small>
                                <div class="text-strong m-t-5">mallinda-h@gmail.com</div>
                            </div>

                            <div class="m-t-25">
                                <small>Mobile Phone</small>
                                <div class="text-strong m-t-5">(203) 991-4171</div>
                            </div>

                            <div class="m-t-25">
                                <small>Home Phone</small>
                                <div class="text-strong m-t-5">(902) 093-3923</div>
                            </div>
                        </div>

                        <div class="modal-footer text-center modal-footer--bordered">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Add to group modal -->
            <div class="modal fade" id="add-to-group" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add to group</h4>
                        </div>

                        <div class="contact-highlight media">
                            <div class="pull-left">
                                <img src="img/demo/people/1.jpg" class="img-circle" width="50" height="50" alt="">
                            </div>
                            <div class="media-body">
                                <strong>Mallinda Hollaway</strong>

                                <div class="list-group__attrs m-t-5">
                                    <div>mallinda-h@hmail.com</div>
                                    <div>(203) 991-4171</div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="form-group m-0">
                                <input type="text" class="form-control" placeholder="Group name...">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
                            <button type="button" class="btn btn-link">Add</button>
                        </div>
                    </div>
                </div>
            </div>

@endsection