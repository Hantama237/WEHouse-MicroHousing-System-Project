@extends('pages.base')
@section('main')


<!-- LIST -->
<section>
    
    <div class="container">
        <span class="mobile">
            @include("components.sideMenuApplicant")
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
                    @if(count($residences)<1)
                    <h4>No Residences available</h4>
                    @endif
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
                                        <div class="col-xs-12">Earliest date available</div>
                                        <div class="col-xs-12 bottom">@if($i->unit_available>0)Today @else Unknown date @endif</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-price-more">
                                @if($i->unit_available>0)
                                <div class="price">
                                    <span class="amount">${{$i->monthly_rental}}/m</span>
                                </div>
                                <button onclick="updateModal('{!!$i->id!!}','{{$i->name}}')" type="button" class="awe-btn" data-toggle="modal" data-target="#exampleModal">Apply</button>
                                @else
                                <span style="font-size:large;">Unavailable</span>
                                @endif
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
                    {{-- <button data-toggle="modal" data-target="#exampleModal" class="awe-btn" style="width: 80%; margin-top: 10px;">Add Residences</button> --}}
                </div>
            </div>
        </div>
        <span class="desktop">
            @include("components.sideMenuApplicant")
        </span>
    </div>
</section>

{{-- Modal --}}
<!-- Modal -->
<style>
    .modal-body input{
        width: 100%;
        margin-bottom: 10px;
    }
</style>
<div style="z-index:999999" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Submit Application</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/residences/apply" method="POST">
            <div class="modal-body">
                <div class="row">
                    {{-- <div class="col-xs-12"><input type="text" disabled name="application_date" class="awe-calendar" value="Today" placeholder="Today"></div> --}}
                    <div class="col-xs-6"><input type="number" name="required_year" id="required_year" value="{{old("required_year")}}" placeholder="Required year"></div>
                    <div class="col-xs-6"><input type="number" name="required_month" id="required_month" value="{{old("required_month")}}" placeholder="Required month"></div>
                    <div class="col-xs-12"><label for="residence_name">Residence</label></div>
                    <div class="col-xs-12"><input type="text" readonly aria-readonly="true" name="residence_name" id="residence_name" value="{{old("residence_name")}}" placeholder="Please re-apply"></div>
                    <input type="hidden" readonly aria-readonly="true" name="residence_id" id="residence_id" value="{{old("residence_id")}}" placeholder="Please re-apply">
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
<script>
    function updateModal(id,name){
        $("#residence_id").val(id);
        $("#residence_name").val(name);
    }
</script>

@endsection
