@extends('pages.base')
@section('main')
<!-- LIST -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<section>
    <style>
        .flight-item .item-body {
            width: 75% !important;
            padding: 15px 0px;
            color: #666;
        }
        .flight-item .item-price-more {
            width: 25%;
            
        }
        .flight-item .item-price-more .awe-btn{
            width: 100%;
            padding-right: 10px;
            padding-left: 10px;
            margin-bottom: 3px;
        }
        .awe-calendar{
            width: 100%;
            margin-bottom: 3px;
        }
    </style>
    
    <div class="container">
        <span class="mobile">
            @include("components.sideMenu")
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
                    @foreach ($residences as $i)
                        @foreach ($applications[$i->id] as $a)
                            <!-- ITEM -->
                            <div class="flight-item">

                                <div class="item-body">
                                    <div class="col-lg-7 left">
                                        <div class="row">
                                            <div class="col-xs-12 item-title">{{$i->name}}</div>
                                            <div class="col-xs-12 bottom">{{$a->status==0?"Unallocated":($a->status==1?"Allocated":"Rejected")}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 right">
                                        <div class="row">
                                            <div class="col-xs-12">{{$a->application_date}}</div>
                                            <div class="col-xs-12 bottom">{{$a->required_year}} Year {{$a->required_month}} Month</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-price-more">
                                    @if($a->status==0)
                                    <div class="price">
                                        <button onclick="updateAllocationModal('{{$a->id}}',{!!$a->required_month!!},{!!$a->required_year!!},'{{$i->name}}',{{json_encode($units[$i->id])}})" data-toggle="modal" data-target="#allocateModal" class="awe-btn awe-btn-style3">Allocate</button>
                                    </div>
                                    <button onclick="updateId('{{$a->id}}')" data-toggle="modal" data-target="#exampleModal" class="awe-btn">Reject</button>
                                    @elseif($a->status==-1)
                                    <span style="color:red; font-size:large;">Rejected</span>
                                    @else
                                    <div class="price">
                                        <button data-toggle="modal" data-target="#allocateModal" class="awe-btn">Detail</button>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endforeach
                    @endforeach
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
            @include("components.sideMenu")
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
                The application will rejected permanently
            </div>
            <div class="modal-footer">
                <button type="button" class="awe-btn" data-dismiss="modal">No</button>
                <button type="button" onclick="reject()" class="awe-btn awe-btn-style3">Yes</button>
            </div>
        </div>
    </div>
</div>

<div style="z-index:999999" class="modal fade" id="allocateModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Allocate Housing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="overflow: auto;">
                <div class="col-lg-6">
                    <label for="date_from">From</label>
                    <input onchange="updateDuration()" id="date_from" type="text" name="date_from" class="awe-calendar" value="{{old("date_from")}}" placeholder="Allocate From">
                    <label  for="date_from">Until</label>
                    <input disabled onchange="updateDuration()" id="date_end" type="text" name="date_end" class="awe-calendar" value="{{old("date_end")}}" placeholder="Allocate Until">
                    <input type="hidden" name="duration" id="duration">
                    <label for="unit_id">Select Unit</label>
                    <select id="unit_id" name="unit_id" id="unit_id" style="width:100%;">
                        <option value="1">Unit 1</option>
                    </select>
                </div>
                <div class="col-lg-6" >
                    <h4 id="residence_name">Alpukat Residence</h4>
                    <table>
                        <tr>
                            <td style="padding-right:5px;">Requested Duration</td>
                            <td style="padding-right:5px;">:</td>
                            <td id="requested_duration">2 Years 1 Month</td>
                        </tr>
                        <tr>
                            <td style="padding-right:5px;">Selected Duration</td>
                            <td style="padding-right:5px;">:</td>
                            <td id="selected_duration" >2 Years 1 Month</td>
                        </tr>
                    </table>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="awe-btn" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="allocate()" class="awe-btn awe-btn-style3">Allocate</button>
            </div>
        </div>
    </div>
</div>

<script>
    var id = "";
    var requestedMonth = 0;
    var requestedYear = 0;
    var duration = 0;
    var unit_id =-1;
    $("#date_from").change(()=>{
        let from = moment($("#date_from").val()).add(requestedMonth, 'M')
        let finalDate = from.add(requestedYear, 'Y')
        $("#date_end").val(finalDate.format("MM/DD/YYYY"));
    })
    function updateDuration(){ 
        console.log($("#date_from").val())
        console.log($("#date_end").val())
        if($("#date_from").val() === "" || $("#date_end").val()===""){
            return null;
        }
        let from = moment($("#date_from").val());
        let end = moment($("#date_end").val());

        let duration = moment.duration(end.diff(from))
        let day = duration/1000/60/60/24;
        duration = day;
        let month =  Math.ceil(((duration/1000/60/60/24)%365)/30);
        let years = Math.ceil(duration/1000/60/60/24/365);
        let str = ""+(years>=0?years+" Yr ":"")+""+(month>=0?month+" Mo":"");
        $("#selected_duration").text(str);
    }
    function reject(){
        $.ajax({
            url: "/application/reject",
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
    function allocate(){
        let date_from = $("input[name='date_from']").val();
        let date_end = $("input[name='date_end']").val();
        let unit_id = $("select[name='unit_id'] :selected").val();
        if(date_from == "" || date_end == "" || unit_id == ""){
            alert("Please input all the data required first");
            return "";
        }
        $.ajax({
            url: "/application/allocate",
            type: 'POST',
            data: {
                id:id,
                date_from:date_from,
                date_end:date_end,
                duration:duration,
                unit_id:unit_id,
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
    function updateAllocationModal(selectedId,reqM,reqY,residenceName,unit){
        $("input[name='date_from']").val("");
        $("input[name='date_end']").val("");
        $("#selected_duration").text("0 Month")
        duration=0;
        id=selectedId;
        requestedMonth=reqM;
        requestedYear=reqY;
        $("#residence_name").text(residenceName);
        $("#requested_duration").text(reqY+" Yr "+reqM+" Mo");
        $("#unit_id").empty();
        console.log(unit);
        $("#unit_id").append("<option value=''>Select Unit</option")
        unit.forEach(i => {
            if(i["avaibility"]==true)
            $("#unit_id").append("<option value='"+i['unit_no']+"'>Unit "+i['unit_no']+"</option");
        });
        
    }
</script>
@endsection