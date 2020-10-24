@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                            <div class="card-header">
                                <div style="text-align: center">Membership Packages</div>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-3">
                                       <div class="card" style="min-height: 130px">
                                           <div class="card-body">
                                                <div class="pull-left usertext" >
                                                <p>Send, read and reply to messages</p>
                                            </div>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="card"  style="min-height: 130px">
                                           <div class="card-body">
                                                <div class="pull-left fontsize-icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pull-left usertext" >View who liked you</div>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card" style="min-height: 130px">
                                            <div class="card-body">
                                                <div class="pull-left fontsize-icon">
                                                <i class="fa fa-heartbeat"></i>
                                            </div>
                                            <div class="pull-left usertext">View your matches</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="card" style="min-height: 130px">
                                           <div class="card-body">
                                                <div class="pull-left fontsize-icon">
                                                <i class="fa fa-eye"></i>
                                            </div>
                                            <div class="pull-left usertext">See who's viewed your profile</div>
                                           </div>
                                       </div>
                                    </div>
                                </div>
                                @if(is_null($pay))
                                <div>
                                    <div>
                                        <div class="row" style="margin-top: 10px; margin-bottom: 10px">
                                            @foreach ($offers as $offer)
                                                <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-header text-center">
                                                                {{$offer->name}}
                                                            </div>
                                                            <div class="card-body">
                                                                <a class="btnselect" data-id="ee48014c">
                                                                    <div class="panel-heading">
                                                                        <h3>{{$offer->duration}} Days</h3>
                                                                    </div>
                                                                    <div class="panel-body text-center">
                                                                        <p class="quote-text Pricetags" style="font-size: 35px"> £{{number_format($offer->price, 2)}}</p>
                                                                    </div>
                                                                    <ul>
                                                                        <li>{{$offer->duration}} days subscription is £{{number_format($offer->price, 2)}}</li>
                                                                        <li>Then £{{number_format($offer->price, 2)}} every {{$offer->duration}} days thereafter</li>
                                                                    </ul>
                                                                </a>
                                                                <div>
                                                                    <a class="btnselect" data-id="ee48014c"> </a>
                                                                    <a class="btn btn-lg btn-block btn-success btnselect" data-id="ee48014c"  href="{{ url('/welcome', [$offer->id]) }}">Select </a>
                                                                    {{-- href="{{('/welcome' [$offer->id])}}" string to character link --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                        </div>
                                </div>
                                <div class="showOptions">
                                    <div class="importantInformation secondFont" style="clear: both; margin-bottom: 10px; color: #c5573b; text-align: center;">
                                        <b>Please Note: </b> Auto renewal discounts are only available for payments made via credit/debit cards, Paypal, Stripe and In-App Purchases.
                                    </div>
                                </div>
                            </div>
                        @else

                        <h3>Package Information :</h3>
                             <table class="table table-bordered" >
                                        <thead style="background-color:#3CB371;">
                                            <tr user="row">

                                                <th class="bg-light" style="width: 20%">Package-Price</th>
                                                <th class="bg-light" style="width: 20%">purchase Date</th>
                                                <th class="bg-light" style="width: 20%">Expire Date</th>
                                            </tr>
                                        </thead>
                                    <tbody >
                                            <tr>
                                                {{-- @dd($item); --}}
                                                {{-- <td>{{$pay->name}}</td> --}}
                                                <td>£ {{number_format($pay->price, 2)}}</td>
                                                <td>{{$pay->purchase_date }} </td>
                                                <td>{{$pay->expire_date }}</td>
                                            </tr>
                                    </tbody>
                                </table>
                        @endif

                        <div class="clearfix upgradePageMustread">
                            <hr />

                            <span class="titleContent col-xs-12" style="color: red">IMPORTANT – Please Read! </span><br />
                            <span class="innercontent col-xs-12">
                                By setting up a recurring subscription, for your convenience we will automatically renew your membership subscription at the end of the initial billing period. You may cancel your Gold Membership at any
                                time, using our cancellation form (accessible through your profile), giving us 28 days' notice.
                            </span>
                        </div>





                            </div>
                        </div>
                   </div>
                </div>
            </div>

</section>

@endsection


