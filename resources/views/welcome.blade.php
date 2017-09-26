@extends('layouts.app')
@section('content')
    
    <header class="section__title">
        <h2>8,243 Properties for Sale, Rent & Real Estate</h2>
        <small>Villas, Apartments, Office Spaces and Commercial Builsings</small>
    </header>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card__header card__header--minimal">
                    <h2>Recent Properties for Sale</h2>
                    <small>Nunc urnami tempor eget ipsum eurutrum gravida tellus</small>
                </div>

                <div class="grid-widget grid-widget--listings">
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="listing-detail.html">
                            <img src="img/demo/listing/thumbs/9.jpg" alt="">

                            <div class="grid-widget__info">
                                <h3>$3,452,000</h3>
                                <small>4313 Beverly Hills, CA 90210</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="listing-detail.html">
                            <img src="img/demo/listing/thumbs/10.jpg" alt="">

                            <div class="grid-widget__info">
                                <h3>$990,000</h3>
                                <small>San Francisco, CA 937202</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="listing-detail.html">
                            <img src="img/demo/listing/thumbs/11.jpg" alt="">

                            <div class="grid-widget__info">
                                <h3>1,500,000</h3>
                                <small>21 Shop St, San Francisco</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="listing-detail.html">
                            <img src="img/demo/listing/thumbs/12.jpg" alt="">

                            <div class="grid-widget__info">
                                <h3>$1,650,690</h3>
                                <small>13 Beverly Hills, CA 01210</small>
                            </div>
                        </a>
                    </div>
                </div>

                <a class="view-more" href="grid-listings.html">
                    View all properties for sale <i class="zmdi zmdi-long-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card__header card__header--minimal">
                    <h2>Recent Properties for Rent</h2>
                    <small>Suspendisse quis massa fringilla sagittis velit utultrices tellus</small>
                </div>

                <div class="grid-widget grid-widget--listings">
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="listing-detail.html">
                            <img src="img/demo/listing/thumbs/13.jpg" class="img-responsive" alt="">
                            <div class="grid-widget__info">
                                <h3>$1,810,000</h3>
                                <small>4313 Beverly Hills, CA 90210</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="listing-detail.html">
                            <img src="img/demo/listing/thumbs/14.jpg" alt="">
                            <div class="grid-widget__info">
                                <h3>$1,782,890</h3>
                                <small>700 Folcon St, San Fransisco, CA</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="listing-detail.html">
                            <img src="img/demo/listing/thumbs/15.jpg" alt="">
                            <div class="grid-widget__info">
                                <h3>$823,000</h3>
                                <small>1100 Sea avn, San Fransisco, CA</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="listing-detail.html">
                            <img src="img/demo/listing/thumbs/16.jpg" alt="">
                            <div class="grid-widget__info">
                                <h3>$2,543,000</h3>
                                <small>132 04th St, San Francisco</small>
                            </div>
                        </a>
                    </div>
                </div>

                <a class="view-more" href="grid-listings.html">
                    View all properties for rent <i class="zmdi zmdi-long-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

@endsection