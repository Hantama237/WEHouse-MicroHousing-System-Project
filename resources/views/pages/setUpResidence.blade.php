@extends('pages.base')
@section('main')

<style>
    .box {
        background-color: white;
        padding-top: 20px;
    }

</style>
<!-- SEARCH TABS -->
<section>
    <style>
        .flight-item,
        .trip-item,
        .attraction-item,
        .hotel-item {
            min-height: 0px;
        }

        .flight-item .item-price-more a {
            margin-top: 5px;
        }

        .flight-item {
            background-color: #f9f9f9;
            /* border: 2px solid #eee; */
        }

        .flight-item .item-body {
            width: 80%;
            padding: 15px 0px;
            color: #666;
        }

        select {
            width: 80%;
            margin-bottom: 5px;
        }

        .flight-item .item-price-more {
            padding: 0px 30px;
            margin: 10px 0px;
        }

        .flight-item .item-price-more .price .amount {
            font-size: 20px;
        }

        .item-title {
            font-weight: 700;
            font-size: 20px;
        }

        /* .col-xs-6.left {} */

        .col-xs-6.right {
            text-align: right;
        }

        .col-xs-12.bottom {
            margin-top: 10px;
        }

    </style>
    <div class="container">
        <div class="col-lg-9">
            <h3>Residences</h3>
            <div class="col-lg-12 box" style="margin-bottom:100px; padding-bottom: 20px;">
                <div class="col-lg-9">
                    <!-- ITEM -->
                    <div class="flight-item">

                        <div class="item-body">
                            <div class="col-xs-6 left">
                                <div class="row">
                                    <div class="col-xs-12 item-title">Residence Name</div>
                                    <div class="col-xs-12 bottom">3 unit available</div>
                                </div>
                            </div>
                            <div class="col-xs-6 right">
                                <div class="row">
                                    <div class="col-xs-12">Earliest date available</div>
                                    <div class="col-xs-12 bottom">Today</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-price-more">
                            <div class="price">
                                <span class="amount">$30/m</span>
                            </div>
                            <a href="flight-detail.html" class="awe-btn">Edit</a>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                </div>
                <div class="col-lg-3" style="text-align: right;">
                    <select name="" id="">
                        <option value="">Sort by Name</option>
                        <option value="">Sort by Date</option>
                        <option value="">Sort by Price</option>
                    </select>
                    <select name="" id="">
                        <option value="">Show All</option>
                        <option value="">Show available</option>
                        <option value="">Show Unavailable</option>
                    </select>
                    <button class="awe-btn" style="width: 80%; margin-top: 10px;">Add Residences</button>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>

        <div class="col-lg-3">
            <h3></h3>
            <h3>Menu</h3>
            <div class="col-lg-12 box" style="height: 170px;">
                <ul>
                    <li><a href="/applications">-View Application</a></li>
                    <li><a href="/residences/setup">-Set Up Residence</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END / SEARCH TABS -->

@endsection
