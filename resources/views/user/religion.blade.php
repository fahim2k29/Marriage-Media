@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center">Religion Information</div>
                    </div>
                   <div class="card-body signup-form">
                    <form method="post" action="{{ route('religion_create') }}">
                        @csrf
                        @if(@isset($religion))
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Religiosness" class="control-label"><span class="required">*</span> Religiousness</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Religiosness" required="required" id="Religiosness" class="form-control" data-select2-id="Religiosness" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$religion->Religiosness}}" selected="">{{$religion->Religiosness}}</option>
                                    @foreach ($religiondatas as $religiondata)
                                    <option>{{$religiondata->Religiosness_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Sect" class="control-label"><span class="required">*</span> My Sect</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Sect" id="Sect" required="required" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$religion->Sect}}" selected="">{{$religion->Sect}}</option>
                                    <option value="Just Muslim" >Just Muslim</option>
                                    <option value="Sunni" >Sunni</option>
                                    <option value="Shia" >Shia</option>
                                    <option value="Other-Please ask me" >Other-Please ask me</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Hijab" class="control-label"><span class="required">*</span> Do you prefer Hijab/Niqab?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Hijab" required="required" id="Hijab" class="form-control" data-select2-id="Hijab" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$religion->Hijab}}" selected="">{{$religion->Hijab}}</option>
                                    @foreach ($religiondatas as $religiondata)
                                    <option>{{$religiondata->Hijab_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Beard" class="control-label"><span class="required">*</span> Do you have a beard?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Beard" required="required" id="Beard" class="form-control" data-select2-id="Beard" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$religion->Beard}}" selected="">{{$religion->Beard}}</option>
                                    @foreach ($religiondatas as $religiondata)
                                    <option>{{$religiondata->Beard_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Convert" class="control-label"><span class="required">*</span> Are You a Revert?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Convert" required="required" id="Convert" class="form-control" data-select2-id="Convert" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$religion->Convert}}" selected="">{{$religion->Convert}}</option>
                                    @foreach ($religiondatas as $religiondata)
                                    <option>{{$religiondata->Convert_data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Halaal" class="control-label"><span class="required">*</span> Do You Keep Halal?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Halaal" required="required" id="Halaal" class="form-control" data-select2-id="Halaal" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$religion->Halaal}}" selected="">{{$religion->Halaal}}</option>
                                    <option value="Always">Always</option>
                                    <option value="Usually">Usually</option>
                                    <option value="Never">Never</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Salaah" class="control-label"><span class="required">*</span> Do You Perform Salaah?</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Salaah" required="required" id="Salaah" class="form-control" data-select2-id="Salaah" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$religion->Salaah}}" selected="">{{$religion->Salaah}}</option>
                                    @foreach ($religiondatas as $religiondata)
                                    <option>{{$religiondata->Salaah_data}}</option>
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
                            <label for="Religiosness" class="control-label"><span class="required">*</span> Religiousness</label>
                        </div>
                        <div class="col-md-9">
                            <select name="Religiosness" required="required" id="Religiosness" class="form-control" data-select2-id="Religiosness" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                <option value="" selected="">Select</option>
                                @foreach ($religiondatas as $religiondata)
                                <option>{{$religiondata->Religiosness_data}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="Sect" class="control-label"><span class="required">*</span> My Sect</label>
                        </div>
                        <div class="col-md-9">
                            <select name="Sect" required="required" id="Sect" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                <option value="" selected="">Select</option>
                                <option value="Just Muslim" >Just Muslim</option>
                                <option value="Sunni" >Sunni</option>
                                <option value="Shia" >Shia</option>
                                <option value="Other-Please ask me" >Other-Please ask me</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="Hijab" class="control-label"><span class="required">*</span> Do you prefer Hijab/Niqab?</label>
                        </div>
                        <div class="col-md-9">
                            <select name="Hijab" required="required" id="Hijab" class="form-control" data-select2-id="Hijab" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                <option value="" selected="">Select</option>
                                @foreach ($religiondatas as $religiondata)
                                <option>{{$religiondata->Hijab_data}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="Beard" class="control-label"><span class="required">*</span> Do you have a beard?</label>
                        </div>
                        <div class="col-md-9">
                            <select name="Beard" required="required" id="Beard" class="form-control" data-select2-id="Beard" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                <option value="" selected="">Select</option>
                                @foreach ($religiondatas as $religiondata)
                                <option>{{$religiondata->Beard_data}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="Convert" class="control-label"><span class="required">*</span> Are You a Revert?</label>
                        </div>
                        <div class="col-md-9">
                            <select name="Convert" required="required" id="Convert" class="form-control" data-select2-id="Convert" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                <option value="" selected="">Select</option>
                                @foreach ($religiondatas as $religiondata)
                                <option>{{$religiondata->Convert_data}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="Halaal" class="control-label"><span class="required">*</span> Do You Keep Halal?</label>
                        </div>
                        <div class="col-md-9">
                            <select name="Halaal" required="required" id="Halaal" class="form-control" data-select2-id="Halaal" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                <option value="" selected="">Select</option>
                                <option value="Always">Always</option>
                                <option value="Usually">Usually</option>
                                <option value="Never">Never</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="Salaah" class="control-label"><span class="required">*</span> Do You Perform Salaah?</label>
                        </div>
                        <div class="col-md-9">
                            <select name="Salaah" required="required" id="Salaah" class="form-control" data-select2-id="Salaah" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                <option value="" selected="">Select</option>
                                @foreach ($religiondatas as $religiondata)
                                <option>{{$religiondata->Salaah_data}}</option>
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
                    <button onClick="location.href='/signup/personal'" id="savePreviousDatas" class="btn btn-success btn-lg" value="back">Previous</button>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
