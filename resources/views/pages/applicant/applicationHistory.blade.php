@extends('pages.base')
@section('main')
    <!-- LIST -->
<section>
    <style>
        .flight-item .item-body {
            width: 75% !important;
            padding: 15px 0px;
            color: #666;
        }
        .flight-item .item-price-more {
            min-width: 140px;
            
        }
        .flight-item .item-price-more .awe-btn{
            width: 100%;
            padding-right: 10px;
            padding-left: 10px;
        }
        .awe-btn{
            border: 1px solid red;
        }
    </style>
    
    <div class="container">
        <span class="mobile">
            @include("components.sideMenuApplicant")
        </span>
        <div class="col-lg-9">
            <h3>Applications</h3>
            <div class="col-lg-12 box" style="margin-bottom:100px; padding-bottom: 20px;">
                <div class="col-lg-3 mobile" style="text-align: right; margin-bottom: 20px;">
                    <select name="" id="">
                        <option value="">Sort by Date</option>
                        <option value="">Sort by Name</option>
                        <option value="">Sort by Price</option>
                    </select>
                    <select name="" id="">
                        <option value="">Show All</option>
                        <option value="">Show Allocated</option>
                        <option value="">Show Unallocated</option>
                    </select>
                    {{-- <button class="awe-btn" style="width: 80%; margin-top: 10px;">Add Residences</button> --}}
                </div>
                <div class="col-lg-9">
                    @isset($applications)
                        @foreach ($applications as $i)
                            <!-- ITEM -->
                            <div class="flight-item">
                                <div class="item-body">
                                    <div class="col-lg-7 left">
                                        <div class="row">
                                            <div class="col-xs-12 item-title">{{$residences[$i->residence_id]->name}}</div>
                                            <div class="col-xs-12 bottom">{{$i->status==0?"Unallocated":($i->status==1?"Allocated":"Rejected")}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 right">
                                        <div class="row">
                                            <div class="col-xs-12">{{$i->application_date}}</div>
                                            <div class="col-xs-12 bottom">{{$i->required_year}} Year {{$i->required_month}} Month</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-price-more">
                                    @if($i->status==0)
                                    <div class="price">
                                        <span class="amount">${{$residences[$i->residence_id]->monthly_rental}}/m</span>
                                    </div>
                                    <button onclick="updateId('{{$i->id}}')" data-toggle="modal" data-target="#exampleModal" class="awe-btn">Cancel</button>
                                    @elseif($i->status==-1)
                                    <span style="color:red; font-size:large;">Rejected</span>
                                    @else
                                    <div class="price">
                                        <span class="amount">${{$residences[$i->residence_id]->monthly_rental}}/m</span>
                                    </div>
                                    <button onclick="" data-toggle="modal" data-target="#detailModal" class="awe-btn">Detail</button>
                                    @endif
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endforeach
                        @if (count($applications)<1)
                            <h3>No Application submited</h3>
                        @endif
                    @endisset
                    {{-- <!-- PAGINATION -->
                    <div class="page__pagination">
                        <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
                        <span class="current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
                    </div>
                    <!-- END / PAGINATION --> --}}
                </div>
                <div class="col-lg-3 desktop" style="text-align: right;">
                    <select name="" id="">
                        <option value="">Sort by Name</option>
                        <option value="">Sort by Date</option>
                        <option value="">Sort by Price</option>
                    </select>
                    <select name="" id="">
                        <option value="">Show All</option>
                        <option value="">Show Allocated</option>
                        <option value="">Show Unallocated</option>
                        <option value="">Show Rejected</option>
                    </select>
                    {{-- <button data-toggle="modal" data-target="#exampleModal" class="awe-btn" style="width: 80%; margin-top: 10px;">Add Residences</button> --}}
                </div>
            </div>
        </div>
        <span class="desktop">
            @include("components.sideMenuApplicant")
        </span>
    </div>
</section>

<div style="z-index:999999" class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                The application will removed permanently
            </div>
            <div class="modal-footer">
                <button type="button" class="awe-btn" data-dismiss="modal">No</button>
                <button type="button" onclick="cancel()" class="awe-btn awe-btn-style3">Yes</button>
            </div>
        </div>
    </div>
</div>

<script>
    var id = "";
    function cancel(){
        $.ajax({
            url: "/application/cancel",
            type: 'POST',
            data: {
                id:id,
                _token:'{{ csrf_token() }}'
            },
            success:(data)=>{
                console.log(data);
                window.location.reload();
            },
            error:(data)=>{
                console.log(data)
            }
        })
    }
    function updateId(selectedId){
        id = selectedId;
    }
</script>

@endsection