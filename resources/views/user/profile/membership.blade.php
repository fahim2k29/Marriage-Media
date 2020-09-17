@extends('user.dashboard.app') @section('content')


<style>
    .column {
  float: left;
  width: 25%;
  font-size: 20px;
}
#first{
    margin-left: 38px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<div class="container headerColor">
    <div class="page-header pageheaderown">
        <div class="pageheader-heading">
            <h3>Membership Packages</h3>
        </div>
    </div>
</div>


<div class="wide_fullbgimage availablePackages wide_login_bg">
    <div class="container" id="availablePackages">
       

        <!-- Content Row -->

        <!--?php/**


 *@var array $membershipPackages

 */
?-->
        <div class="userPackagesPage">
            <div class="row">
                <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin">
                    <div class="row setting-bgcolor roundcornerPanel">
                        <div class="minheightprofile boxforms">
                            <div class="membership-layout">
                                <div class="membershipleft col-md-3"></div>
                                <div class="membershiprightcontent col-md-9"></div>
                            </div>

                            <div class="upgradePageHeading" >
                                <h2 class="pull-center">Upgrade to Gold membership</h2>
                                <h3 class="pull-right"></h3>
                                <div class="clearfix"></div>
                            </div>
                            <br>
                            <br>
                            <div class="row" style="color: #007EA5"  id="first">
                                <div class="column" >
                                    {{-- <div class="pull-left fontsize-icon">
                                        <i class="fa fa-comment-o"></i>
                                    </div> --}}
                                    <div class="pull-left usertext" >
                                        <p>Send, read and reply to messages</p>
                                    </div>
                                </div>
                                <div class="column" >
                                    <div class="pull-left fontsize-icon">
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="pull-left usertext" >View who liked you</div>
                                </div>
                                <div class="column">
                                    <div class="pull-left fontsize-icon">
                                        <i class="fa fa-heartbeat"></i>
                                    </div>
                                    <div class="pull-left usertext">View your matches</div>
                                </div>
                                <div class="column">
                                    <div class="pull-left fontsize-icon">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                    <div class="pull-left usertext">See who's viewed your profile</div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <br><br><br>
                            <!--Your first month is charged at (USD) $49.00, and renewed at (USD) $49.00 each month until you cancel it.
                        3 month membership is (USD) $99.00 (up-front) and renewed at (USD) $33.00 each month after until you cancel it.-->

                        @if(is_null($pay))
                            <div class="clearfix upgradePagepackages">
                                <div class="mainPackages">
                                    
                                    @foreach ($offers as $offer)
                                    <div class="sub_table">
                                        <div class="col-sm-4 col-md-4 col-xs-12">
                                            <div class="box-1 center">
                                               <a class="btnselect" data-id="558b2b2b">
                                                    <div class="div-popular"><b>{{$offer->name}}</b></div>
                                                </a>
                                                <div class="panel panel-pricing">
                                                    <a class="btnselect" data-id="ee48014c">
                                                        <div class="panel-heading">
                                                            <h3>{{$offer->duration}} Days</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <p class="quote-text Pricetags" style="font-size: 35px"> ${{number_format($offer->price, 2)}}</p>
                                                        </div>
                                                        <ul>
                                                            <li>{{$offer->duration}} days subscription is ${{number_format($offer->price, 2)}}</li>
                                                            <li>Then ${{number_format($offer->price, 2)}} every {{$offer->duration}} days thereafter</li>
                                                        </ul>
                                                        
                                                    </a>
                                                    <div class="panel-footer">
                                                        <a class="btnselect" data-id="ee48014c"> </a>
                                                        <a class="btn btn-lg btn-block btn-success btnselect" data-id="ee48014c"  href="{{ url('/welcome', [$offer->id]) }}">Select </a>
                                                        {{-- href="{{('/welcome' [$offer->id])}}" string to character link --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    @endforeach
                
                                </div>
                                <div class="clearfix"></div>
                                <div class="showOptions">
                                    <div class="btn btn-primary btnBack" style="display: none;">Back</div>

                                    <hr />
                                  
                                    <div class="importantInformation secondFont" style="clear: both; margin-bottom: 10px; color: #c5573b; text-align: center;">
                                        <b>Please Note: </b> Auto renewal discounts are only available for payments made via credit/debit cards, Paypal, Stripe and In-App Purchases.
                                    </div>
                                </div>
                            </div>
                        @else
                        <h3>Your Current Package :</h3>
                             <table class="table table-bordered" >
                                        <thead style="background-color:#3CB371;">
                                            <tr user="row">                                            
                                                
                                                <th class="bg-dark" style="width: 20%">Package-Price</th>
                                                <th class="bg-dark" style="width: 20%">purchase Date</th>
                                                <th class="bg-dark" style="width: 20%">Expire Date</th>
                                            </tr>
                                        </thead>
                                    <tbody >
                                            <tr>
                                                {{-- @dd($item); --}}
                                                {{-- <td>{{$pay->name}}</td> --}}
                                                <td>$ {{number_format($pay->price, 2)}}</td>  
                                                <td>{{$pay->purchase_date }} </td>
                                                <td>{{$pay->expire_date }}</td>
                                            </tr>
                                    </tbody>
                                </table>
                        @endif

                            <div class="clearfix upgradePagePackagesContent" style="display: none;">
                                <span class="col-xs-12">*Your first month is charged at (USD) $49.00 , and for your convenience your subscription is renewed at (USD) $49.00 every month after your first month until you cancel it.</span>

                                <span class="col-xs-12">
                                    **3 months membership is (USD) $99.00 (payable up-front), and for your convenience your Gold Membership is renewed at the great rate of just (USD) $99.00 every month after your first 3 months until you
                                    cancel it.
                                </span>

                                <span class="col-xs-12">
                                    ***12 months membership is (USD) $180.00 (payable up-front), and for your convenience your Gold Membership is renewed at the great rate of just (USD) $180.00 every month after your first 12 months until
                                    you cancel it.
                                </span>
                            </div>
                            <div class="clearfix upgradePageMustread">
                                <hr />

                                <span class="titleContent col-xs-12">IMPORTANT – Please Read! </span><br />
                                <span class="innercontent col-xs-12">
                                    By setting up a recurring subscription, for your convenience we will automatically renew your membership subscription at the end of the initial billing period. You may cancel your Gold Membership at any
                                    time, using our cancellation form (accessible through your profile), giving us 28 days' notice.
                                </span>
                            </div>
                            <hr />

                            {{--   --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection