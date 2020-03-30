@extends('master1')
@section('konten')
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
<section class="pt-80 pb-80 bg-border" style="margin-bottom: 100px; ">
    <style>
        .accordion .ui-accordion-header {
            background-color: #eee;
        }

        h5 {
            color: #0091EA;
            font-size: 18pt;
        }
        h6{
            font-size: 16px;
            color: #a6a6a6;
            /* padding-left: 5px; */
        }
        .kodeBook{
            color: #0091EA;
            font-weight: 600;
        }
        table td{
            padding-right: 10px;
            padding-bottom: 3px;
        }
        table th{
            padding-right: 30px;
            padding-bottom: 3px;
            font-weight: 600;
            /* text-align: center; */
        }
        .accordion .ui-widget-content {
            padding-top: 10px;
            padding-bottom: 15px;
        }
    </style>
    <script>
        function bayarPesawatClick(formId,text){
          Swal.fire({
            title: 'Yakin ingin bayar?',
            text: text?text:""+"Pembayaran tidak dapat dibatalkan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, bayar sekarang',
            cancelButtonText: "Tidak, nanti saja"
          }).then((result) => {
            if (result.value) {
              $(formId).submit();
              $.LoadingOverlay('show');
            }
          })
        }
    </script>
    <div class="container">
        {{-- @php              
            function getDateText($date,$full){
                //2019-12-13 12:06
                $getDate=["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
                $getHalfDate=["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agst","Sept","Okt","Nov","Des"];
                $bln=(int)substr($date,5,7);
                $tgl=(int)substr($date,8,10);
                $thn=substr($date,0,4);
                //dd(substr($date,5,7));
                //dd($date);
                //dd($bln);
                $str=$tgl." ".($full?$getDate[$bln-1]:$getHalfDate[$bln-1])." ".$thn;
                return $str;
            }
            function getDateNoYear($date,$full){
                $getDate=["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
                $getHalfDate=["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agst","Sept","Okt","Nov","Des"];
                $bln=(int)substr($date,5,7);
                $tgl=(int)substr($date,8,10);
                $str=$tgl." ".($full?$getDate[$bln-1]:$getHalfDate[$bln-1]);
                return $str;
            }
            function getDurasi($durasi){
            //console.log(durasi);
                $jam=(int)substr($durasi,0,2);
                $menit=(int)substr($durasi,3);
                return $jam.' Jam '.$menit.' Menit ';
            }
            //$isNotValid=false;
        @endphp --}}
        <div class="row">
            
            <!-- Start accordion -->
            <div class="col-md-7">
                <div class="col-xs-12" style="background-color: white;">
                    <div style="">
                        <h5 class="text-uppercase">@</h5>
                        
                        <p>
                        Kode Booking <span class="kodeBook"><br>
                        </p>
                                            </div>
                    <div class="accordion">
                        @if($success)
                          
                            @endphp
                            

                            <h3>Informasi Keberangkatan</h3>
                            <div >
                                <p>
                                   <br>
                                   
                                </p>
                            </div>
                            
                            <h3>Informasi Penerbangan</h3>
                            <div>
                                {{--  --}}
                                
                                        {{--  --}}
                                        <div class="col-xs-12 penerbangan">
                                            <div class="col-xs-2" style="color:#0091EA; font-weight:600; font-size:17px; text-align:center;"></div>
                                            <div class="col-xs-2" style="">
                                                <div class="row waktu">
                                                   
                                                </div>
                                                <div class="row">
                                            
                                                </div>
                                            </div>
                                            <div class="col-xs-4" style=" text-align:center;">
                                                <div class="row"></div>
                                                <div class="row"><hr style="margin: 3px 0px 3px 0px;"></div>
                                                <div class="row" style="margin-bottom: 5px;"></div>
                                            </div>
                                            <div class="col-xs-2 arriveTime" style="text-align:right;">
                                                <div class="row waktu" >
                                                 
                                                </div>
                                                <div class="row">
                                            
                                                </div>
                                            </div> 
                                            <div class="col-xs-2"></div>
                                        </div> 
                                        {{-- End item Penerbangan --}}

                                        {{-- ITEM transit --}}
                                      
                                            <div class="col-xs-12" style="background-color:#eee; text-align:center; padding:10px; margin-bottom:15px;">
                                                Transit Selama <span id="trans">(waktu transit)</span> di )
                                            </div>
                                            
                                
                                        {{-- END item transit --}}
                                
                                    
                                </div>
                                @endif
                                {{-- flight = null --}}
                             
                                   
                                        {{--  --}}
                                        <div class="col-xs-12 penerbangan">
                                            <div class="col-xs-2" style="color:#0091EA; font-weight:600; font-size:17px; text-align:center;"></div>
                                            <div class="col-xs-2" style="">
                                                <div class="row waktu">
                                                    
                                                </div>
                                                <div class="row">
                                         
                                                </div>
                                            </div>
                                            <div class="col-xs-4" style=" text-align:center;">
                                                <div class="row"></div>
                                                <div class="row"><hr style="margin: 3px 0px 3px 0px;"></div>
                                                <div class="row" style="margin-bottom: 5px;"></div>
                                            </div>
                                            <div class="col-xs-2 arriveTime" style="text-align:right;">
                                                <div class="row waktu" >
                                                   
                                                </div>
                                                <div class="row">
                                                    
                                                </div>
                                            </div> 
                                            <div class="col-xs-2"></div>
                                        </div> 
                                        {{-- End item Penerbangan --}}

                                        {{-- ITEM transit --}}
                                       
                                            <div class="col-xs-12" style="background-color:#eee; text-align:center; padding:10px; margin-bottom:15px;">
                                                Transit Selama <span id="trans1">(waktu transit)</span> di )
                                            </div>
                                          
                                       
                                        {{-- END item transit --}}

                                 
                               
                            </div>
                          
                            <h3>Kesalahan Pemesanan</h3>
                            <div>Terjadi Kesalahan Proses Pemesanan, Silahkan <a href="/tiket/pesawat">Pesan kembali</a></div>
                            @endif
                            
                            <h3>Informasi Penumpang</h3>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            {{-- <h3>Informasi Harga</h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                                <p>
                                    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                    inceptos himenaeos.
                                </p>
                            </div> --}}
                        </div>

                    </div>
                    <div class="col-xs-12">

                    </div>
                @endif
                {{-- End if succes --}}
            </div>
            <!-- END Accordion -->
            <style>
                hr {
                    margin: 10px 0px 10px 0px;
                }

                .bigger {
                    font-size: 16px;
                    /* font-weight: 600; */

                }

                .bigger2 {
                    font-size: 17px;
                    font-weight: 600;
                }

                /* .total {
                    color: #ff4747;
                }

                .saldo {
                    color: #7fd66d;
                } */

                .sisa {
                    color: #0091EA;
                }
            </style>
            
            <div class="col-md-5" style="position: relative; margin-top: 50px;">
                <div class="col-xs-12" style="background-color: white; overflow: auto; padding-bottom: 15px;">
                    <h5>Informasi Pembayaran</h5>
                    <p>
                        <div class="col-xs-6">
                            <div class="row">Harga Tiket</div>
                            <div class="row">Fee</div>

                        </div>
                        <div class="col-xs-6" style="text-align: right;">
                            <div class="row">Rp.</div>
                            {{-- Am I right to put upSelling here? --}}
                            <div class="row">Rp. </div>
                        </div>
                    </p>
                    <div class="col-xs-12">
                        <hr class="row">
                    </div>
                    <span class="bigger">
                        <div class="col-xs-6">
                            <div class="row">Total</div>

                        </div>
                        <div class="col-xs-6" style="text-align: right;">
                            <div class="row total">Rp. </div>

                        </div>
                        <div class="col-xs-12">
                            <hr class="row">
                        </div>
                        <div class="col-xs-6">

                            <div class="row">Saldo</div>
                        </div>
                        <div class="col-xs-6" style="text-align: right;">

                            <div class="row saldo">Rp. </div>
                        </div>
                        <div class="col-xs-12">
                            <hr class="row" style="border-top: 1px solid #d4d4d4;">
                        </div>
                    </span>
                    <span class="bigger2">
                        <div class="col-xs-6">
                            <div class="row">Sisa Saldo</div>
                        </div>
                        <div class="col-xs-6" style="text-align: right;">
                            <div class="row sisa">Rp. </div>
                        </div>

                    </span>



                </div>
                <style>
                    .payLimit{
                        width: 65%; text-align: left; float: left;  position: relative; height: 50px;
                    }
                    .payBtnContainer{
                        width: 35%; text-align: right; float: right;
                    }
                    @media screen and (max-width: 1199px) {
                        .payLimit{
                            width: 100%;
                        }
                        .payBtnContainer{
                            width: 100%;
                        }
                        #payBtn{
                            width: 100%;
                        }
                    }
                </style>
                <div class="col-xs-12"
                    style="background-color: white; overflow: auto; padding-bottom: 15px; margin-top: 15px; vertical-align:middle;">
                    <div class="payLimit">
                        <h6
                            style="font-size: 15px; margin-top: auto; margin-bottom: auto; position: absolute; top: 45%; color: #a6a6a6;">
                            Bayar Sebelum <span style="color: red; font-size: 14px;">&nbsp;
                                WIB, </span>
                        </h6>
                    </div>
                    <form id="pesawatForm" action="/tiket/pesawat/payment" method="POST">
                        <div class="payBtnContainer">
                            {{ csrf_field() }}
                            <input type="hidden" name="paymentKey" value="">
                            <input type="hidden" name="kodeBook" value="">
                            <input type="hidden" name="bayar">
                        <button onclick="bayarPesawatClick('#pesawatForm');" type="button"  class="awe-btn" id="payBtn"
                                style=" background-color: #0091EA; color: white;  margin-top: 15px;">
                                Bayar Sekarang
                            </button>
                        </div>
                    </form>
                </div>
                @endif
            </div>

        </div>
    </div>

</section>

    
@endsection