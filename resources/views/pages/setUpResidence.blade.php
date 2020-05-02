@extends('pages.base')
@section('main')


<!-- LIST -->
<section>

    <div class="container">
        <span class="mobile">
            @include("components.sideMenu")
        </span>
        <div class="col-lg-9">
            <h3>Residences</h3>
            <div class="col-lg-12 box" style="margin-bottom:100px; padding-bottom: 20px;">
                <div class="col-lg-3 mobile" style="text-align: right; margin-bottom: 20px;">
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
                <div class="col-lg-9">

                    @foreach ($residences as $i)
                    <!-- ITEM -->
                    <div class="flight-item">

                        <div class="item-body">
                            <div class="col-lg-6 left">
                                <div class="row">
                                    <div class="col-xs-12 item-title">{{$i->name}}</div>
                                    <div class="col-xs-12 bottom">{{$i->unit_available}} unit available </div>
                                </div>
                            </div>
                            <div class="col-lg-6 right">
                                <div class="row">
                                    <div class="col-xs-12">Earliest date available : Today</div>
                                    <div class="col-xs-12 bottom">{{count($applications[$i->id])}} Application</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-price-more">
                            <div class="price">
                                <span class="amount">${{$i->monthly_rental}}/m</span>
                            </div>
                            <a href="#" class="awe-btn">Edit</a>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                    @endforeach
                </div>
                <div class="col-lg-3 desktop" style="text-align: right;">
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
                    <button data-toggle="modal" data-target="#exampleModal" class="awe-btn"
                        style="width: 80%; margin-top: 10px;">Add Residences</button>
                </div>
            </div>
        </div>
        <span class="desktop">
            @include("components.sideMenu")
        </span>
    </div>
</section>

{{-- Modal --}}
<!-- Modal -->
<style>
    .modal-body input {
        width: 100%;
        margin-bottom: 10px;
    }

</style>
<div style="z-index:999999" class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Set Up Residence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/residences/submit" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12"><input type="text" name="name" id="name" value="{{old("name")}}"
                                placeholder="Name"></div>
                        <div class="col-xs-12"><input type="text" name="address" id="address" value="{{old("address")}}"
                                placeholder="Address"></div>
                        <div class="col-xs-6"><input type="number" name="num_of_unit" id="num_of_unit"
                                value="{{old("num_of_unit")}}" placeholder="Number of unit"></div>
                        <div class="col-xs-6"><input type="number" name="unit_available" id="unit_available"
                                value="{{old("unit_available")}}" placeholder="Number of unit available"></div>
                        <div class="col-xs-6"><input type="number" name="size_per_unit" id="size_per_unit"
                                value="{{old("size_per_unit")}}" placeholder="Size per unit"></div>
                        <div class="col-xs-6"><input type="number" name="monthly_rental" id="monthly_rental"
                                value="{{old("monthly_rental")}}" placeholder="Monthly rental"></div>
                        @csrf
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="awe-btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="awe-btn awe-btn-style3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Model --}}
<!-- END / SEARCH TABS -->

@endsection
