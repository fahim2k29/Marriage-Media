@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center"> {{$users->UserName}}'s Information</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                        <div class="card-header">
                                            @if (isset($users->addphoto))
                                            <img src="{{asset($users->addphoto->image) }}" class="img-fluid" style="width: 100%; height:100%" >
                                            @else
                                                @if($users->Gender == 'Male')
                                                    <img src="{{asset('assets/images/avatars')}}/avatar3.png" class="img-fluid" style="width: 100%;height:100%" />
                                                @else
                                                    <img src="{{asset('assets/images/avatars')}}/profile-pic.jpg" class="img-fluid" style="width: 100%;height:100%" />
                                                @endif
                                            @endif
                                        </div>
                                        <div class="card-body">
                                                <div class="row eachPart">
                                                    <label class="col-md-6 detailsName">My sect</label>
                                                    <label class="col-md-6 detailsValue" > @if ($users->religion) {{ $users->religion->Sect }} @endif</label>
                                                </div>
                                                <div class="row eachPart" >
                                                    <label class="col-md-7 detailsName" >Religiousness</label>
                                                    <label class="col-md-5 detailsValue" >  @if ($users->religion) {{ $users->religion->Religiosness }} @endif</label>
                                                </div>
                                                <div  class="row eachPart" >
                                                    <label class=" col-md-6 detailsName" >My Profession</label>
                                                    <label class=" col-md-6 detailsValue" >@if ($users->education) {{ $users->education->Employment }} @endif</label>
                                                </div>
                                                <div class="row eachPart" >
                                                    <label class=" col-md-6 detailsName" >Marital Status</label>
                                                    <label class=" col-md-6 detailsValue" > @if ($users->personal) {{$users->personal->MaritalStatus }} @endif</label>
                                                </div>
                                                <div class="row eachPart" >
                                                    <label class=" col-md-6 detailsName" >Country</label>
                                                    <label class=" col-md-6 detailsValue" >{{ $users->Country }}</label>
                                                </div>
                                                <div class="row eachPart" >
                                                    <label class=" col-md-7 detailsName" >Registration Reason</label>
                                                    <label class=" col-md-5 detailsValue" >{{ $users->RegistrationReason }}</label>
                                                </div>

                                                    {{-- <a class="btn icon-btn btn-primary btn-report togetherbutton" data-error="" data-toggle="tooltip" data-placement="top" title="" data-username="Jaequilin" data-userkey="YWU1YTY3OTUyMzY3ZmEyYhwgLF5RmSK7JuLlhZxPGHNs579tvQI2h0tEulQQlypa$" data-original-title="">
                                                      <span><i class="fa fa-ban"></i><br />
                                                        <span class="messagecolor">Report</span>
                                                    </a>
                                                    <a class="btn icon-btn btn-primary togetherbutton btn-blockUser" data-username="Jaequilin" data-userkey="YWU1YTY3OTUyMzY3ZmEyYhwgLF5RmSK7JuLlhZxPGHNs579tvQI2h0tEulQQlypa$" data-toggle="confirmation" data-btn-ok-label="Block User" data-popout="true" data-isblocked="false">
                                                      <span><i class="fa fa-ban"></i></span><br />
                                                      <span class="messagecolor">Block</span>
                                                    </a> --}}
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header">
                                        A Little Bit About Me
                                    </div>
                                    <div class="card-body " >
                                        <p> @if ($users->aboutme) {{ $users->aboutme->Description }} @endif</p>
                                        {{-- <a   name="load_more" id="load_more" class="btn btn-success">Load More</a> --}}
                                    </div>
                                </div>
                                <div class="card" style="margin-top: 10px">
                                    <div class="card-header">
                                        What I Am Looking For
                                    </div>
                                    <div class="card-body " >
                                        <p> @if ($users->aboutme) {{ $users->aboutme->LookingFor }} @endif</p>
                                        {{-- <a   name="load_more" id="load_more" class="btn btn-success">Load More</a> --}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card" style="margin: 10px 0px 5px 0px">
                                            <div class="card-header">
                                                Personal Information
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12 detailpart">
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">My Citizenship</div>
                                                        <div class="col-md-6 detailsValue"> @if ($users->personal) {{$users->personal->Citizenship }} @endif </div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">Country of Origin</div>
                                                        <div class="col-md-6 detailsValue"> @if ($users->personal) {{$users->personal->Origin }} @endif </div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-7 detailsName">Willing to Relocate?</div>
                                                        <div class="col-md-5 detailsValue">  @if ($users->personal) {{$users->personal->Relocation }} @endif </div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-7 detailsName">I am Looking to Marry</div>
                                                        <div class="col-md-5 detailsValue">  @if ($users->personal) {{$users->personal->MarryIn }} @endif</div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">My Income</div>
                                                        <div class="col-md-6 detailsValue">  @if ($users->personal) {{$users->personal->Income }} @endif </div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">Marital Status</div>
                                                        <div class="col-md-6 detailsValue"> @if ($users->personal) {{$users->personal->MaritalStatus }} @endif </div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">Would I like to have Children?</div>
                                                        <div class="col-md-6 detailsValue"> @if ($users->personal) {{$users->personal->HaveChildren }} @endif </div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">Do I have children?</div>
                                                        <div class="col-md-6 detailsValue">@if ($users->personal) {{$users->personal->Children }} @endif </div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">My Living Arrangements?</div>
                                                        <div class="col-md-6 detailsValue">@if ($users->personal) {{$users->personal->Living }} @endif </div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">Country</div>
                                                        <div class="col-md-6 detailsValue">{{$users->Country}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card" style="margin: 10px 0px 20px 0px">
                                            <div class="card-header">
                                                Appearance
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12 detailpart">
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">My Height</div>
                                                        <div class="col-md-6 detailsValue"> @if ($users->personal) {{$users->personal->Height }} @endif </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">My Build</div>
                                                        <div class="col-md-6 detailsValue"> @if ($users->personal) {{$users->personal->Build }} @endif </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">My Hair Colour</div>
                                                        <div class="col-md-6 detailsValue">  @if ($users->personal) {{$users->personal->Hair }} @endif </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">Colour of My Eyes</div>
                                                        <div class="col-md-6 detailsValue">  @if ($users->personal) {{$users->personal->EyeColour }} @endif </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">Do I Smoke?</div>
                                                        <div class="col-md-6 detailsValue">@if ($users->personal) {{$users->personal->Smoke }} @endif</div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">Do I Have Any Disabilities?</div>
                                                        <div class="col-md-6 detailsValue">  @if ($users->personal) {{$users->personal->Disabilities }} @endif </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="margin: 20px 0px 5px 0px">
                                            <div class="card-header">
                                                Language
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12 detailpart">
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">First Language</div>
                                                        <div class="col-md-6 detailsValue">  @if ($users->education) {{ $users->education->FirstLang }} @endif</div>
                                                    </div>
                                                    <div class="row eachPart">
                                                        <div class="col-md-6 detailsName">Second Language</div>
                                                        <div class="col-md-6 detailsValue">  @if ($users->education) {{ $users->education->SecondLang }} @endif</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Education
                                            </div>
                                            <div class="card-body">
                                                <div class="row eachPart">
                                                    <div class="col-md-6 detailsName">My Education Level</div>
                                                    <div class="col-md-6 detailsValue">@if ($users->education) {{ $users->education->EducationLevel }} @endif </div>
                                                </div>
                                                <div class="row eachPart">
                                                    <div class="col-md-6 detailsName">Subject I Studied</div>
                                                    <div class="col-md-6 detailsValue">@if ($users->education) {{ $users->education->SubjectStudied }} @endif </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Work
                                            </div>
                                            <div class="card-body">
                                                <div class="row eachPart">
                                                    <div class="col-md-6 detailsName">My Profession</div>
                                                    <div class="col-md-6 detailsValue">@if ($users->education) {{ $users->education->Employment }} @endif</div>
                                                </div>
                                                <div class="row eachPart">
                                                    <div class="col-md-6 detailsName">My Job Title</div>
                                                    <div class="col-md-6 detailsValue">@if ($users->education) {{ $users->education->JobTitle }} @endif</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Religion
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row eachPart">
                                                            <div class="col-md-6 detailsName">Religiousness</div>
                                                            <div class="col-md-6 detailsValue">@if ($users->religion) {{ $users->religion->Religiosness }} @endif </div>
                                                        </div>
                                                        <div class="row eachPart">
                                                            <div class="col-md-6 detailsName">My Sect</div>
                                                            <div class="col-md-6 detailsValue">@if ($users->religion) {{ $users->religion->Sect }} @endif </div>
                                                        </div>
                                                        <div class="row eachPart">
                                                            <div class="col-md-6 detailsName">Hijab/Niqab</div>
                                                            <div class="col-md-6 detailsValue"> @if ($users->religion) {{ $users->religion->Hijab }} @endif</div>
                                                        </div>
                                                        <div class="row eachPart">
                                                            <div class="col-md-6 detailsName">Beard</div>
                                                            <div class="col-md-6 detailsValue">@if ($users->religion) {{ $users->religion->Beard }} @endif</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row eachPart">
                                                            <div class="col-md-6 detailsName">Are You a Revert?</div>
                                                            <div class="col-md-6 detailsValue">@if ($users->religion) {{ $users->religion->Convert }} @endif</div>
                                                        </div>
                                                        <div class="row eachPart">
                                                            <div class="col-md-6 detailsName">Do You Keep Halal?</div>
                                                            <div class="col-md-6 detailsValue">@if ($users->religion) {{ $users->religion->Halaal }} @endif</div>
                                                        </div>
                                                        <div class="row eachPart">
                                                            <div class="col-md-6 detailsName">Do You Perform Salaah?</div>
                                                            <div class="col-md-6 detailsValue">@if ($users->religion) {{ $users->religion->Salaah }} @endif</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection
