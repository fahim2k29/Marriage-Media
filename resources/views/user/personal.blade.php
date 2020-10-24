@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center">Personal Information</div>
                    </div>
                   <div class="card-body signup-form">
                    <form method="post" action="{{ route('personal_create') }}">
                        @csrf
                        @if(isset($personal))
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Citizenship" class="control-label"><span class="required">*</span> My Citizenship</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Citizenship" required="required" class="form-control" id="Citizenship" data-select2-id="Citizenship" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Citizenship}}" selected="">{{$personal->Citizenship}}</option>
                                    @foreach ($countries as $personaldata)
                                    <option>{{$personaldata->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Origin" class="control-label"><span class="required">*</span> Country of Origin</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Origin" required="required" class="form-control" id="Origin" data-select2-id="Origin" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Origin}}" selected="">{{$personal->Origin}}</option>
                                    @foreach ($countries as $personaldata)
                                    <option>{{$personaldata->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Relocation" class="control-label"><span class="required">*</span> Willing to Relocate?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Relocation" required="required" class="form-control" id="Relocation" data-select2-id="Relocation" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Relocation}}" selected="">{{$personal->Relocation}}</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata->Relocation_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Income" class="control-label"><span class="required">*</span> My Income</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Income" required="required" class="form-control" id="Income" data-select2-id="Income" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Income}}" selected="">{{$personal->Income}}</option>
                                    <option value="$ 2,000-5,000" > $ 2,000-5,000</option>
                                    <option value="$ 5,000-8,000" > $ 5,000-8,000</option>
                                    <option value="$ 8,000-10,000" > $ 8,000-10,000</option>
                                    <option value="$ 10,000-$ 15,000" > $ 10,000-$ 15,000</option>
                                    <option value="Over $ 20,000" >Over $ 20,000</option>
                                    <option value="Prefer not to Say" >Prefer not to Say</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="MarryIn" class="control-label"><span class="required">*</span> I am Looking to Marry</label>
                            </div>
                            <div class="col-md-9">
                                <select name="MarryIn" required="required" class="form-control" id="MarryIn" data-select2-id="MarryIn" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->MarryIn}}" selected="">{{$personal->MarryIn}}</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> MarryIn_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="MaritalStatus" class="control-label"><span class="required">*</span> Marital Status</label>
                            </div>
                            <div class="col-md-9">
                                <select name="MaritalStatus" required="required" class="form-control" id="MaritalStatus" data-select2-id="MaritalStatus" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->MaritalStatus}}" selected="">{{$personal->MaritalStatus}}</option>
                                    <option value="Never Married">Never Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Children" class="control-label"><span class="required">*</span> Would I like to have Children?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Children" required="required" class="form-control" id="Children" data-select2-id="Children" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Children}}" selected="">{{$personal->Children}}</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> Children_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="HaveChildren" class="control-label"><span class="required">*</span> Do I have children?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="HaveChildren" required="required" class="form-control" id="HaveChildren" data-select2-id="HaveChildren" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->HaveChildren}}" selected="">{{$personal->HaveChildren}}</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> HaveChildren_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Living" class="control-label"><span class="required">*</span> My Living Arrangements?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Living" required="required" class="form-control" id="Living" data-select2-id="Living" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Living}}" selected="">{{$personal->Living}}</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> Living_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Height" class="control-label"><span class="required">*</span> My Height</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Height" required="required" class="form-control" id="Height" data-select2-id="Height" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Height}}" selected="">{{$personal->Height}}</option>
                                    <option>Select Option</option>
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
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Build" class="control-label"><span class="required">*</span> My Build</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Build" required="required" class="form-control" id="Build" data-select2-id="Build" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Build}}" selected="">{{$personal->Build}}</option>
                                    <option value="Slim">Slim</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Hair" class="control-label"><span class="required">*</span> My Hair Colour</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Hair" required="required" class="form-control" id="Hair" data-select2-id="Hair" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Hair}}" selected="">{{$personal->Hair}}</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Brunette">Brunette</option>
                                    <option value="Blonde">Blonde</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="EyeColour" class="control-label"><span class="required">*</span> Colour of My Eyes</label>
                            </div>
                            <div class="col-md-9">
                                <select name="EyeColour" required="required" class="form-control" id="EyeColour" data-select2-id="EyeColour" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->EyeColour}}" selected="">{{$personal->EyeColour}}</option>
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
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Smoke" class="control-label"><span class="required">*</span> Do I Smoke?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Smoke" required="required" class="form-control" id="Smoke" data-select2-id="Smoke" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Smoke}}" selected="">{{$personal->Smoke}}</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> Smoke_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Disabilities" class="control-label"><span class="required">*</span> Do I Have Any Disabilities?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Disabilities" required="required" class="form-control" id="Disabilities" data-select2-id="Disabilities" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$personal->Disabilities}}" selected="">{{$personal->Disabilities}}</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> Disabilities_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3 ">
                                <small class="control-label" style="color: red" >* Required Field</small>
                            </div>
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                        <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg pull-right">Next</button>
                    @else

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Citizenship" class="control-label"><span class="required">*</span> My Citizenship</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Citizenship" required="required" class="form-control" id="Citizenship" data-select2-id="Citizenship" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($countries as $personaldata)
                                    <option>{{$personaldata->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Origin"  class="control-label"><span class="required">*</span> Country of Origin</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Origin" required="required" class="form-control" id="Origin" data-select2-id="Origin" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($countries as $personaldata)
                                    <option>{{$personaldata->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Relocation" class="control-label"><span class="required">*</span> Willing to Relocate?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Relocation" required="required" class="form-control" id="Relocation" data-select2-id="Relocation" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata->Relocation_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Income" class="control-label"><span class="required">*</span> My Income</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Income" required="required" class="form-control" id="Income" data-select2-id="Income" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    <option value="$ 2,000-5,000" > $ 2,000-5,000</option>
                                    <option value="$ 5,000-8,000" > $ 5,000-8,000</option>
                                    <option value="$ 8,000-10,000" > $ 8,000-10,000</option>
                                    <option value="$ 10,000-$ 15,000" > $ 10,000-$ 15,000</option>
                                    <option value="Over $ 20,000" >Over $ 20,000</option>
                                    <option value="Prefer not to Say" >Prefer not to Say</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="MarryIn" class="control-label"><span class="required">*</span> I am Looking to Marry</label>
                            </div>
                            <div class="col-md-9">
                                <select name="MarryIn" required="required" class="form-control" id="MarryIn" data-select2-id="MarryIn" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> MarryIn_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="MaritalStatus" class="control-label"><span class="required">*</span> Marital Status</label>
                            </div>
                            <div class="col-md-9">
                                <select name="MaritalStatus" required="required" class="form-control" id="MaritalStatus" data-select2-id="MaritalStatus" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    <option value="Never Married">Never Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Children" class="control-label"><span class="required">*</span> Would I like to have Children?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Children" required="required" class="form-control" id="Children" data-select2-id="Children" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> Children_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="HaveChildren" class="control-label"><span class="required">*</span> Do I have children?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="HaveChildren" required="required" class="form-control" id="HaveChildren" data-select2-id="HaveChildren" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> HaveChildren_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Living" class="control-label"><span class="required">*</span> My Living Arrangements?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Living" required="required" class="form-control" id="Living" data-select2-id="Living" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> Living_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Height" class="control-label"><span class="required">*</span> My Height</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Height" required="required" class="form-control" id="Height" data-select2-id="Height" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    <option>Select Option</option>
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
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Build" class="control-label"><span class="required">*</span> My Build</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Build" required="required" class="form-control" id="Build" data-select2-id="Build" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    <option value="Slim">Slim</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Hair" class="control-label"><span class="required">*</span> My Hair Colour</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Hair" required="required" class="form-control" id="Hair" data-select2-id="Hair" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Brunette">Brunette</option>
                                    <option value="Blonde">Blonde</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="EyeColour" class="control-label"><span class="required">*</span> Colour of My Eyes</label>
                            </div>
                            <div class="col-md-9">
                                <select name="EyeColour" required="required" class="form-control" id="EyeColour" data-select2-id="EyeColour" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
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
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Smoke" class="control-label"><span class="required">*</span> Do I Smoke?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Smoke" required="required" class="form-control" id="Smoke" data-select2-id="Smoke" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> Smoke_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Disabilities" class="control-label"><span class="required">*</span> Do I Have Any Disabilities?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Disabilities" required="required" class="form-control" id="Disabilities" data-select2-id="Disabilities" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($personaldatas as $personaldata)
                                    <option>{{$personaldata-> Disabilities_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3 ">
                                <small class="control-label" style="color: red" >* Required Field</small>
                            </div>
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                        <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg pull-right">Next</button>
                    @endif
                    </form>
                    <button onClick="location.href='/signup/education'" id="savePreviousDatas" class="btn btn-success btn-lg" value="back">Previous</button>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
