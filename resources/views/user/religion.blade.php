@extends('user.app') @section('content')
<div class="wide_fullbgimage userLogin_Display wide_login_bg register_religion_display">
    <div class="container">
        <!-- Content Row -->
        <div class="">
            <div class="col-lg-12 col-md-12" id="religion_display">
                <div class="row">
                    <div class="topbar-bg containerTopmargin containerUsermargin">
                        <div class="topSteps">
                            <div class="row bs-wizard" style="border-bottom: 0;">
                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 1</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">About Me</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 2</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Education and Work</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 3</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Personal</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step active">
                                    <div class="text-center bs-wizard-stepnum">Step 4</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Religion</div>
                                </div>

                                <div class="col-md-2 col-lg-2 bs-wizard-step disabled">
                                    <!-- active -->
                                    <div class="text-center bs-wizard-stepnum">Step 5</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Office Use</div>
                                </div>
                                <div class="col-md-2 col-lg-2 bs-wizard-step disabled">
                                    <!-- active -->
                                    <div class="text-center bs-wizard-stepnum">Step 6</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Add Photo</div>
                                </div>
                            </div>
                        </div>

                        <div class="setting-bgcolor roundcornerPanel">
                            <div class="userForms">
                                <div id="aboutyoubox" class="stepsbox">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <div class="subTitleround secondFont headingchange">Religion</div>
                                        </div>
                                        <div class="panel-body">
                                            <!--                                --data-toggle="validator"---->

                                            <form method="post" action="{{ route('religion_create') }}">
                                                @csrf @if(@isset($religion))

                                                <input type="hidden" name="is_prev" id="is_prev" value="0" />
                                                <div role="form" class="form-horizontal">
                                                    <div id="Religiosness-group" class="form-group has-feedback form-control-group">
                                                        <label for="Religiosness" class="control-label"><span class="required">*</span> Religiousness</label>
                                                        <div class="controls">
                                                            <select name="Religiosness" id="Religiosness" class="select2" data-select2-id="Religiosness" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$religion->Religiosness}}" selected="">{{$religion->Religiosness}}</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Religiosness_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Sect-group" class="form-group has-feedback form-control-group">
                                                        <label for="Sect" class="control-label"><span class="required">*</span> My Sect</label>
                                                        <div class="controls">
                                                            <select name="Sect" id="Sect" class="select2" data-select2-id="Sect" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$religion->Sect}}" selected="">{{$religion->Sect}}</option>
                                                                <option value="Just Muslim" >Just Muslim</option>
                                                                <option value="Sunni" >Sunni</option>
                                                                <option value="Shia" >Shia</option>   
                                                                <option value="Other-Please ask me" >Other-Please ask me</option>   
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Hijab-group" class="form-group has-feedback form-control-group">
                                                        <label for="Hijab" class="control-label"><span class="required">*</span> Do you prefer Hijab/Niqab?</label>
                                                        <div class="controls">
                                                            <select name="Hijab" id="Hijab" class="select2" data-select2-id="Hijab" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$religion->Hijab}}" selected="">{{$religion->Hijab}}</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Hijab_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Beard-group" class="form-group has-feedback form-control-group">
                                                        <label for="Beard" class="control-label"><span class="required">*</span> Do you have a beard?</label>
                                                        <div class="controls">
                                                            <select name="Beard" id="Beard" class="select2" data-select2-id="Beard" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$religion->Beard}}" selected="">{{$religion->Beard}}</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Beard_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Convert-group" class="form-group has-feedback form-control-group">
                                                        <label for="Convert" class="control-label"><span class="required">*</span> Are You a Revert?</label>
                                                        <div class="controls">
                                                            <select name="Convert" id="Convert" class="select2" data-select2-id="Convert" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$religion->Convert}}" selected="">{{$religion->Convert}}</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Convert_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Halaal-group" class="form-group has-feedback form-control-group">
                                                        <label for="Halaal" class="control-label"><span class="required">*</span> Do You Keep Halal?</label>
                                                        <div class="controls">
                                                            <select name="Halaal" id="Halaal" class="select2" data-select2-id="Halaal" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$religion->Halaal}}" selected="">{{$religion->Halaal}}</option>
                                                                <option value="Always">Always</option>
                                                                <option value="Usually">Usually</option>
                                                                <option value="Never">Never</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Salaah-group" class="form-group has-feedback form-control-group">
                                                        <label for="Salaah" class="control-label"><span class="required">*</span> Do You Perform Salaah?</label>
                                                        <div class="controls">
                                                            <select name="Salaah" id="Salaah" class="select2" data-select2-id="Salaah" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$religion->Salaah}}" selected="">{{$religion->Salaah}}</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Salaah_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                            <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright disabled">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            @else

                                                <input type="hidden" name="is_prev" id="is_prev" value="0" />
                                                <div role="form" class="form-horizontal">
                                                    <div id="Religiosness-group" class="form-group has-feedback form-control-group">
                                                        <label for="Religiosness" class="control-label"><span class="required">*</span> Religiousness</label>
                                                        <div class="controls">
                                                            <select name="Religiosness" class="select2" id="Religiosness" required="required" data-select2-id="Religiosness" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Religiosness_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Sect-group" class="form-group has-feedback form-control-group">
                                                        <label for="Sect" class="control-label"><span class="required">*</span> My Sect</label>
                                                        <div class="controls">
                                                            <select name="Sect" id="Sect" class="select2" required="required" data-select2-id="Sect" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                <option value="Just Muslim" >Just Muslim</option>
                                                                <option value="Sunni" >Sunni</option>
                                                                <option value="Shia" >Shia</option>   
                                                                <option value="Other-Please ask me" >Other-Please ask me</option>                                                                  
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Hijab-group" class="form-group has-feedback form-control-group">
                                                        <label for="Hijab" class="control-label"><span class="required">*</span> Do you prefer Hijab/Niqab?</label>
                                                        <div class="controls">
                                                            <select name="Hijab" class="select2" id="Hijab" required="required" data-select2-id="Hijab" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Hijab_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Beard-group" class="form-group has-feedback form-control-group">
                                                        <label for="Beard" class="control-label"><span class="required">*</span> Do you have a beard?</label>
                                                        <div class="controls">
                                                            <select name="Beard" class="select2" id="Beard" required="required" data-select2-id="Beard" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Beard_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Convert-group" class="form-group has-feedback form-control-group">
                                                        <label for="Convert" class="control-label"><span class="required">*</span> Are You a Revert?</label>
                                                        <div class="controls">
                                                            <select name="Convert" class="select2" id="Convert" required="required" data-select2-id="Convert" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Convert_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Halaal-group" class="form-group has-feedback form-control-group">
                                                        <label for="Halaal" class="control-label"><span class="required">*</span> Do You Keep Halal?</label>
                                                        <div class="controls">
                                                            <select name="Halaal" class="select2" id="Halaal" required="required" data-select2-id="Halaal" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                <option value="Always">Always</option>
                                                                <option value="Usually">Usually</option>
                                                                <option value="Never">Never</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Salaah-group" class="form-group has-feedback form-control-group">
                                                        <label for="Salaah" class="control-label"><span class="required">*</span> Do You Perform Salaah?</label>
                                                        <div class="controls">
                                                            <select name="Salaah" class="select2" id="Salaah" required="required" data-select2-id="Salaah" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                @foreach ($religiondatas as $religiondata)
                                                                <option>{{$religiondata->Salaah_data}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                            <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright disabled">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif

                                                <span class="pull-left required stepsRequired">* Required Field</span>
                                                <div class="textalignright abspositionBack">
                                                    <button type="button" name="savePreviousDatas" onClick="location.href='/signup/personal'" id="savePreviousDatas" class="btn btn-primary btn-lg" value="Previous">Previous</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>

@endsection
