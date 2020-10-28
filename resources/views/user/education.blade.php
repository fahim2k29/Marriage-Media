@extends('layouts.app3') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center">Educational Information</div>
                    </div>
                   <div class="card-body signup-form">
                    <form method="POST" action="{{ route('education_create' ) }}">
                        @csrf
                        @if(@isset($education))
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="EducationLevel" class="control-label"><span class="required">*</span> My Education Level</label>
                            </div>
                            <div class="col-md-9">
                                <select name="EducationLevel" required="required" id="EducationLevel" class="form-control" data-select2-id="EducationLevel" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$education->EducationLevel}}" selected="">{{$education->EducationLevel}}</option>
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
                            <div class="col-md-3">
                                <label for="SubjectStudied" class="control-label"><span class="required">*</span> Subject I Studied</label>
                            </div>
                            <div class="col-md-9">
                                <input name="SubjectStudied" required="required" id="SubjectStudied" type="text" value="{{$education->SubjectStudied}}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="JobTitle" class="control-label"><span class="required">*</span> My Job Title</label>
                            </div>
                            <div class="col-md-9">
                                <input name="JobTitle" id="JobTitle" type="text" required="required" value="{{$education->JobTitle}}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Employment" class="control-label"><span class="required">*</span> My Profession</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Employment" required="required" id="Employment" tabindex="-1" class="form-control" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$education->Employment}}" selected="">{{$education->Employment}}</option>
                                    @foreach ($jobs as $employment)
                                    <option>{{$employment->job_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="FirstLang" class="control-label"><span class="required">*</span> My First Language</label>
                            </div>
                            <div class="col-md-9">
                                <select name="FirstLang" required="required" id="FirstLang"  class="form-control" data-select2-id="FirstLang" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$education->FirstLang}}" selected="">{{$education->FirstLang}}</option>
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
                            <div class="col-md-3">
                                <label for="SecondLang" class="control-label"><span class="required">*</span> My Second Language</label>
                            </div>
                            <div class="col-md-9">
                                <select name="SecondLang" required="required" id="SecondLang"  class="form-control" data-select2-id="SecondLang" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="{{$education->SecondLang}}" selected="">{{$education->SecondLang}}</option>
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
                                <label for="EducationLevel" class="control-label"><span class="required">*</span> My Education Level</label>
                            </div>
                            <div class="col-md-9">
                                <select name="EducationLevel" required="required" id="EducationLevel" class="form-control" data-select2-id="EducationLevel" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
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
                            <div class="col-md-3">
                                <label for="SubjectStudied" class="control-label"><span class="required">*</span> Subject I Studied</label>
                            </div>
                            <div class="col-md-9">
                                <input name="SubjectStudied" id="SubjectStudied" required="required" type="text"  class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="JobTitle" class="control-label"><span class="required">*</span> My Job Title</label>
                            </div>
                            <div class="col-md-9">
                                <input name="JobTitle" id="JobTitle" type="text" required="required"  class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Employment" class="control-label"><span class="required">*</span> My Profession</label>
                            </div>
                            <div class="col-md-9">
                                <select name="Employment" required="required" id="Employment" tabindex="-1" class="form-control" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
                                    @foreach ($jobs as $employment)
                                    <option>{{$employment->job_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="FirstLang" class="control-label"><span class="required">*</span> My First Language</label>
                            </div>
                            <div class="col-md-9">
                                <select name="FirstLang" required="required" id="FirstLang" class="form-control" data-select2-id="FirstLang" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
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
                            <div class="col-md-3">
                                <label for="SecondLang" class="control-label"><span class="required">*</span> My Second Language</label>
                            </div>
                            <div class="col-md-9">
                                <select name="SecondLang" required="required" id="SecondLang" class="form-control" data-select2-id="SecondLang" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="" selected="">Select</option>
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
                    <button onClick="location.href='/signup/aboutme'" id="savePreviousDatas" class="btn btn-success btn-lg" value="back">Previous</button>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
