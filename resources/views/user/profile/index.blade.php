@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center">Search for a match</div>
                    </div>
                   <div class="card-body">
                        <div class="row">
                            <div class="col-md-3" >
                                <div class="card" style="background-color: #f8f9fa">
                                    @include('user.profile.nav-sidebar')
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-12 headings">
                                                About Me
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{ route('aboutme_update' ) }}">
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                        <label for="Headline" class="control-label"><span class="required">*</span> Headline</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input name="Headline" id="Headline" type="text" required="required" value="{{$user->aboutme->Headline}}" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                        <label for="Description" class="control-label"><span class="required">*</span> A Little Bit About Me</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea name="Description" rows="3" id="Description" required="required" class="form-control">{{$user->aboutme->Description}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                        <label for="LookingFor" class="control-label"><span class="required">*</span> What I Am Looking For</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea name="LookingFor" rows="3" id="LookingFor" required="required" class="form-control">{{$user->aboutme->LookingFor}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12 col-lg-12" style="text-align: right;">
                                                        <span class="pull-left required firstFont_new" style="color: #18d26e">* Required Field</span>
                                                        <button name="Submit" id="Submit" type="submit" class="btn btn-primary firstFont_new btn-primary-theme">Update</button>
                                                    </div>
                                                </div>

                                            </form>
                                            <div class="clearfix"></div>
                                        </div>
                                </div>
                                <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-12 headings">
                                                Education and Work
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{ route('education_update' ) }}">
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                            <label for="EducationLevel" class="control-label"><span class="required">*</span> My Education Level</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select name="EducationLevel" class="form-control" id="EducationLevel" required="required"  data-select2-id="EducationLevel" tabindex="-1" aria-hidden="true">
                                                            <option >{{$user->education-> EducationLevel}}</option>
                                                           <option value="High-School">High-School</option>
                                                            <option value="College">College</option>
                                                            <option value="Graduate">Graduate</option>
                                                            <option value="Masters Degree">Masters Degree</option>
                                                            <option value="Doctorate">Doctorate</option>
                                                            <option value="Non-Graduate">Non-Graduate</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                        <label for="SubjectStudied" class="control-label"><span class="required">*</span> Subject I Studied</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input name="SubjectStudied" id="SubjectStudied" type="text" required="required" value="{{$user->education->SubjectStudied}}" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                        <label for="JobTitle" class="control-label"><span class="required">*</span> My Job Title</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input name="JobTitle" id="JobTitle" type="text" required="required" value="{{$user->education->JobTitle}}" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                        <label for="Employment" class="control-label"><span class="required">*</span> My Profession</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select name="Employment" id="Employment" required="required" class="form-control"  data-select2-id="Employment" tabindex="-1" aria-hidden="true">
                                                            <option >{{$user->education->Employment}}</option>
                                                           @foreach ($jobs as $employment)
                                                            <option>{{$employment->job_title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                        <label for="FirstLang" class=" control-label"><span class="required">*</span> My First Language</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select name="FirstLang" id="FirstLang" required="required" class="form-control"  data-select2-id="FirstLang" tabindex="-1" aria-hidden="true">
                                                            <option >{{$user->education->FirstLang}}</option>
                                                           <option value="English" >English </option>
                                                            <option value="Mandarin Chinese" >Mandarin Chinese </option>
                                                            <option value="Hindi">Hindi </option>
                                                            <option value="Italian">Italian </option>
                                                            <option value="Spanish" >Spanish </option>
                                                            <option value="French" >French </option>
                                                            <option value="German" >German </option>
                                                            <option value="Standard Arabic" >Standard Arabic </option>
                                                            <option value="Bengali" >Bengali </option>
                                                            <option value="Russian" >Russian </option>
                                                            <option value="Japanese" >Japanese </option>
                                                            <option value="Portuguese" >Portuguese </option>
                                                            <option value="Indonesian" >Indonesian </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                         <label for="SecondLang" class=" control-label"><span class="required">*</span> My Second Language</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select name="SecondLang" id="SecondLang" required="required" class="form-control"  data-select2-id="SecondLang" tabindex="-1" aria-hidden="true">
                                                            <option >{{$user->education->SecondLang}}</option>
                                                           <option value="English" >English </option>
                                                            <option value="Mandarin Chinese" >Mandarin Chinese </option>
                                                            <option value="Hindi">Hindi </option>
                                                            <option value="Italian">Italian </option>
                                                            <option value="Spanish" >Spanish </option>
                                                            <option value="French" >French </option>
                                                            <option value="German" >German </option>
                                                            <option value="Standard Arabic" >Standard Arabic </option>
                                                            <option value="Bengali" >Bengali </option>
                                                            <option value="Russian" >Russian </option>
                                                            <option value="Japanese" >Japanese </option>
                                                            <option value="Portuguese" >Portuguese </option>
                                                            <option value="Indonesian" >Indonesian </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                         <label for="RegistrationReason" class="control-label"><span class="required">*</span> Registration Reason</label>
                                                    </div>
                                                    <div class="col-sm-8">

                                                            <select
                                                                name="RegistrationReason"
                                                                id="RegistrationReason"
                                                                class="form-control"
                                                                required="required"
                                                                data-select2-id="RegistrationReason"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                            >
                                                                <option >{{$user->RegistrationReason}}</option>
                                                                <option value="I am registering to find myself partner">I am registering to find myself partner</option>
                                                                <option value="I am registering to find my sister a partner">I am registering to find my sister a partner</option>
                                                                <option value="I am registering to find my brother a partner">I am registering to find my brother a partner</option>
                                                                <option value="I am registering to find my son a partner">I am registering to find my son a partner</option>
                                                                <option value="I am registering to find my daughter a partner">I am registering to find my daughter a partner</option>
                                                                <option value="I am registering to find my friend a partner">I am registering to find my friend a partner</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12 col-lg-12" style="text-align: right;">
                                                        <span class="pull-left required firstFont_new" style="color: #18d26e">* Required Field</span>
                                                        <button name="Submit" id="Submit" type="submit" class="btn btn-primary firstFont_new btn-primary-theme">Update</button>
                                                    </div>
                                                </div>

                                            </form>
                                            <div class="clearfix"></div>
                                        </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="col-md-12 headings">
                                            Personal
                                        </div>
                                    </div>
                                      <div class="card-body">
                                            <div class="col-md-12 detailpart detailpart-edit">
                                                <div role="form" class="form-horizontal">
                                                    <form method="post" action="{{ route('personal_update' ) }}">
                                                    @csrf
                                                    <div id="Citizenship-group" class="form-group Citizenship-row">
                                                        <label for="Citizenship" class="control-label"><span class="required">*</span> My Citizenship</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Citizenship" class="form-control" id="Citizenship" required="required"  data-select2-id="Citizenship" tabindex="-1" aria-hidden="true">

                                                                    <option>{{$user->personal->Citizenship}}</option>
                                                                    @foreach ($countries as $personaldata)
                                                                    <option>{{$personaldata->name}}</option>
                                                                    @endforeach

                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Origin-group" class="form-group Origin-row">
                                                        <label for="Origin" class="col-sm-4 control-label"><span class="required">*</span> Country of Origin</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Origin" class="form-control" id="Origin" required="required"  data-select2-id="Origin" tabindex="-1" aria-hidden="true">

                                                                    <option>{{$user->personal->Origin}}</option>
                                                                    @foreach ($countries as $personaldata)
                                                                    <option>{{$personaldata->name}}</option>
                                                                    @endforeach

                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Relocation-group" class="form-group Relocation-row">
                                                        <label for="Relocation" class="col-sm-4 control-label"><span class="required">*</span> Willing to Relocate?</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Relocation" class="form-control" id="Relocation" required="required"  data-select2-id="Relocation" tabindex="-1" aria-hidden="true">

                                                                    <option>{{$user->personal->Relocation}}</option>

                                                                    @foreach ($countries as $personaldata)
                                                                    <option>{{$personaldata->name}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Income-group" class="form-group Income-row">
                                                        <label for="Income" class="col-sm-4 control-label"><span class="required">*</span> My Income</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Income" class="form-control" id="Income" required="required"  data-select2-id="Income" tabindex="-1" aria-hidden="true">
                                                                    <option>{{$user->personal->Income}}</option>
                                                                    <option value="$ 2,000-5,000" > $ 2,000-5,000</option>
                                                                    <option value="$ 5,000-8,000" > $ 5,000-8,000</option>
                                                                    <option value="$ 8,000-10,000" > $ 8,000-10,000</option>
                                                                    <option value="$ 10,000-$ 15,000" > $ 10,000-$ 15,000</option>
                                                                    <option value="Over $ 20,000" >Over $ 20,000</option>
                                                                    <option value="Prefer not to Say" >Prefer not to Say</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="MarryIn-group" class="form-group MarryIn-row">
                                                        <label for="MarryIn" class="col-sm-4 control-label"><span class="required">*</span> I am Looking to Marry</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="MarryIn" class="form-control" id="MarryIn" required="required"  data-select2-id="MarryIn" tabindex="-1" aria-hidden="true">

                                                                    <option>{{$user->personal->MarryIn}}</option>

                                                                    @foreach ($personaldatas as $personaldata)
                                                                    <option>{{$personaldata-> MarryIn_data}}</option>
                                                                    @endforeach

                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="MaritalStatus-group" class="form-group MaritalStatus-row">
                                                        <label for="MaritalStatus" class="col-sm-4 control-label"><span class="required">*</span> Marital Status</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="MaritalStatus" class="form-control" id="MaritalStatus" required="required"  data-select2-id="MaritalStatus" tabindex="-1" aria-hidden="true">

                                                                    <option>{{$user->personal->MaritalStatus}}</option>

                                                                    <option value="Never Married">Never Married</option>
                                                                    <option value="Divorced">Divorced</option>
                                                                    <option value="Widowed">Widowed</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Children-group" class="form-group Children-row">
                                                        <label for="Children" class="col-sm-4 control-label"><span class="required">*</span> Would I like to have Children?</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Children" class="form-control" id="Children" required="required"  data-select2-id="Children" tabindex="-1" aria-hidden="true">
                                                                    <option>{{$user->personal->Children}}</option>

                                                                    @foreach ($personaldatas as $personaldata)
                                                                    <option>{{$personaldata-> Children_data}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="HaveChildren-group" class="form-group HaveChildren-row">
                                                        <label for="HaveChildren" class="col-sm-4 control-label"><span class="required">*</span> Do I have children?</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="HaveChildren" class="form-control" id="HaveChildren" required="required"  data-select2-id="HaveChildren" tabindex="-1" aria-hidden="true">
                                                                    <option>{{$user->personal->HaveChildren}}</option>

                                                                    @foreach ($personaldatas as $personaldata)
                                                                    <option>{{$personaldata-> HaveChildren_data}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Living-group" class="form-group Living-row">
                                                        <label for="Living" class="col-sm-4 control-label"><span class="required">*</span> My Living Arrangements?</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Living" class="form-control" id="Living" required="required"  data-select2-id="Living" tabindex="-1" aria-hidden="true">
                                                                    <option>{{$user->personal->Living}}</option>

                                                                    @foreach ($personaldatas as $personaldata)
                                                                    <option>{{$personaldata-> Living_data}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Height-group" class="form-group Height-row">
                                                        <label for="Height" class="col-sm-4 control-label"><span class="required">*</span> My Height</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Height" class="form-control" id="Height" required="required"  data-select2-id="Height" tabindex="-1" aria-hidden="true">
                                                                    <option>{{$user->personal->Height}}</option>
                                                                    <option value="4ft">4ft</option>
                                                                    <option value="4.2ft">4.2ft</option>
                                                                    <option value="4.5ft">4.5ft</option>
                                                                    <option value="4.8ft">4.8ft</option>
                                                                    <option value="5ft">5ft</option>
                                                                    <option value="5.2ft">5.2ft</option>
                                                                    <option value="5.5ft">5.5ft</option>
                                                                    <option value="5.8ft">5.8ft</option>
                                                                    <option value="6ft">6ft</option>
                                                                    <option value="6.2ft">6.2ft</option>
                                                                    <option value="6.5ft">6.5ft</option>
                                                                    <option value="6.8ft">6.8ft</option>
                                                                    <option value="7ft">7ft</option>
                                                                    <option value="7.2ft">7.2ft</option>
                                                                    <option value="7.5ft">7.5ft</option>
                                                                    <option value="7.8ft">7.8ft</option>
                                                                    <option value="8ft">8ft</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Build-group" class="form-group Build-row">
                                                        <label for="Build" class="col-sm-4 control-label"><span class="required">*</span> My Build</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Build" class="form-control" id="Build" required="required"  data-select2-id="Build" tabindex="-1" aria-hidden="true">
                                                                    <option>{{$user->personal->Build}}</option>
                                                                    <option value="Slim">Slim</option>
                                                                    <option value="Medium">Medium</option>
                                                                    <option value="Large">Large</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Hair-group" class="form-group Hair-row">
                                                        <label for="Hair" class="col-sm-4 control-label"><span class="required">*</span> My Hair Colour</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Hair" class="form-control" id="Hair" required="required"  data-select2-id="Hair" tabindex="-1" aria-hidden="true">
                                                                   <option>{{$user->personal->Hair}}</option>
                                                                   <option value="Black">Black</option>
                                                                   <option value="White">White</option>
                                                                   <option value="Brunette">Brunette</option>
                                                                   <option value="Blonde">Blonde</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="EyeColour-group" class="form-group EyeColour-row">
                                                        <label for="EyeColour" class="col-sm-4 control-label"><span class="required">*</span> Colour of My Eyes</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="EyeColour" class="form-control" id="EyeColour" required="required"  data-select2-id="EyeColour" tabindex="-1" aria-hidden="true">
                                                                    <option>{{$user->personal->HaveChildren}}</option>
                                                                    <option value="Amber">Amber</option>
                                                                    <option value="Blue">Blue</option>
                                                                    <option value="Brown">Brown</option>
                                                                    <option value="Gray">Gray</option>
                                                                    <option value="Green">Green</option>
                                                                    <option value="Hazel">Hazel</option>
                                                                    <option value="Red">Red</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Smoke-group" class="form-group Smoke-row">
                                                        <label for="Smoke" class="col-sm-4 control-label"><span class="required">*</span> Do I Smoke?</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Smoke" class="form-control" id="Smoke" required="required"  data-select2-id="Smoke" tabindex="-1" aria-hidden="true">
                                                                    <option>{{$user->personal->Smoke}}</option>
                                                                    @foreach ($personaldatas as $personaldata)
                                                                    <option>{{$personaldata-> Smoke_data}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Disabilities-group" class="form-group Disabilities-row">
                                                        <label for="Disabilities" class="col-sm-4 control-label"><span class="required">*</span> Do I Have Any Disabilities?</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Disabilities" class="form-control" id="Disabilities" required="required"  data-select2-id="Disabilities" tabindex="-1" aria-hidden="true">
                                                                    <option>{{$user->personal->Disabilities}}</option>
                                                                    @foreach ($personaldatas as $personaldata)
                                                                    <option>{{$personaldata-> Disabilities_data}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12 col-lg-12" style="text-align: right;">
                                                            <span class="pull-left required firstFont_new" style="color:#18d26e">* Required Field</span>
                                                            <button name="Submit" id="Submit" type="submit" class="btn btn-primary firstFont_new btn-primary-theme">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                         </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-12 headings">
                                                Religion
                                            </div>
                                        </div>
                                        <div class="crd-body">
                                                <div class="col-md-12 detailpart detailpart-edit">
                                                    <div role="form" class="form-horizontal">
                                                        <form method="post" action="{{ route('religion_update' ) }}">
                                                        @csrf
                                                        <div id="Religiosness-group" class="form-group Religiosness-row">
                                                            <label for="Religiosness" class="col-sm-4 control-label"><span class="required">*</span> Religiousness</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group input-group-maxwidth">
                                                                    <select name="Religiosness" class="form-control" id="Religiosness" required="required"  data-select2-id="Religiosness" tabindex="-1" aria-hidden="true">
                                                                        <option>{{$user->religion->Religiosness}}</option>

                                                                        @foreach ($religiondatas as $religiondata)

                                                                        <option >{{$religiondata-> Religiosness_data}}</option>

                                                                        @endforeach
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <span class="help-block with-errors" aria-hidden="false"></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="Sect-group" class="form-group Sect-row">
                                                            <label for="Sect" class="col-sm-4 control-label"><span class="required">*</span> My Sect</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group input-group-maxwidth">
                                                                    <select name="Sect" class="form-control" id="Sect" required="required"  data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                                        <option>{{$user->religion->Sect}}</option>
                                                                        <option value="Just Muslim" >Just Muslim</option>
                                                                        <option value="Sunni" >Sunni</option>
                                                                        <option value="Shia" >Shia</option>
                                                                        <option value="Other-Please ask me" >Other-Please ask me</option>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <span class="help-block with-errors" aria-hidden="false"></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="Hijab-group" class="form-group Hijab-row">
                                                            <label for="Hijab" class="col-sm-4 control-label"><span class="required">*</span> Do you prefer Hijab/Niqab?</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group input-group-maxwidth">
                                                                    <select name="Hijab" class="form-control" id="Hijab" required="required"  data-select2-id="Hijab" tabindex="-1" aria-hidden="true">
                                                                        <option>{{$user->religion->Hijab}}</option>
                                                                        @foreach ($religiondatas as $religiondata)
                                                                        <option>{{$religiondata->Hijab_data}}</option>
                                                                        @endforeach
                                                                     </select>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <span class="help-block with-errors" aria-hidden="false"></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="Beard-group" class="form-group Beard-row">
                                                            <label for="Beard" class="col-sm-4 control-label"><span class="required">*</span> Do you have a beard?</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group input-group-maxwidth">
                                                                    <select name="Beard" class="form-control" id="Beard" required="required"  data-select2-id="Beard" tabindex="-1" aria-hidden="true">
                                                                        <option>{{$user->religion->Beard}}</option>

                                                                        @foreach ($religiondatas as $religiondata)

                                                                        <option >{{$religiondata-> Beard_data}}</option>

                                                                        @endforeach
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <span class="help-block with-errors" aria-hidden="false"></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="Convert-group" class="form-group Convert-row">
                                                            <label for="Convert" class="col-sm-4 control-label"><span class="required">*</span> Are You a Revert?</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group input-group-maxwidth">
                                                                    <select name="Convert" class="form-control" id="Convert" required="required"  data-select2-id="Convert" tabindex="-1" aria-hidden="true">
                                                                        <option>{{$user->religion->Convert}}</option>

                                                                        @foreach ($religiondatas as $religiondata)

                                                                        <option >{{$religiondata-> Convert_data}}</option>

                                                                        @endforeach
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <span class="help-block with-errors" aria-hidden="false"></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="Halaal-group" class="form-group Halaal-row">
                                                            <label for="Halaal" class="col-sm-4 control-label"><span class="required">*</span> Do You Keep Halal?</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group input-group-maxwidth">
                                                                    <select name="Halaal" class="form-control" id="Halaal" required="required"  data-select2-id="Halaal" tabindex="-1" aria-hidden="true">
                                                                         <option>{{$user->religion->Halaal}}</option>
                                                                         <option value="Always">Always</option>
                                                                         <option value="Usually">Usually</option>
                                                                         <option value="Never">Never</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <span class="help-block with-errors" aria-hidden="false"></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="Salaah-group" class="form-group Salaah-row">
                                                            <label for="Salaah" class="col-sm-4 control-label"><span class="required">*</span> Do You Perform Salaah?</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group input-group-maxwidth">
                                                                    <select name="Salaah" class="form-control" id="Salaah" required="required"  data-select2-id="Salaah" tabindex="-1" aria-hidden="true">
                                                                        <option>{{$user->religion->Salaah}}</option>
                                                                        @foreach ($religiondatas as $religiondata)
                                                                        <option >{{$religiondata->Salaah_data}}</option>

                                                                        @endforeach
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <span class="help-block with-errors" aria-hidden="false"></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-12 col-lg-12" style="text-align: right;">
                                                                <span class="pull-left required firstFont_new" style="color:#18d26e">* Required Field</span>
                                                                <button name="Submit" id="Submit" type="submit" class="btn btn-primary firstFont_new btn-primary-theme">Update</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>
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
