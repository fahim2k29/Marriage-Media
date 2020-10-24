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
                                    @include('search.side-nav-search')
                                </div>
                            </div>
                            <div class="col-md-9">
                            <form action="{{ route('search_education_result')}}" method="get">
                                @csrf
                                <div class="card quick-form">
                                    <div class="card-header">
                                        <div style="text-align: center">Education Search for a match</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="FirstLang" class="control-label">First Language</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="FirstLang" id="FirstLang" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
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
                                            <div class="col-md-3 text-center">
                                                <label for="SecondLang" class="control-label">Second Language</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="SecondLang" id="SecondLang" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
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
                                            <div class="col-md-3 text-center">
                                                <label for="EducationLevel" class="control-label">Education Level</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="EducationLevel" id="EducationLevel" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
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
                                            <div class="col-md-3 text-center">
                                                <label for="Income" class="control-label">Current Income</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Income" id="Income" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    <option value="$ 2,000-5,000" > $ 2,000 - 5,000 </option>
                                                    <option value="$ 5,000-8,000" > $ 5,000 - 8,000</option>
                                                    <option value="$ 8,000-10,000" > $ 8,000 - 10,000</option>
                                                    <option value="$ 10,000-$ 15,000" > $ 10,000 - $ 15,000</option>
                                                    <option value="Over $ 20,000" >Over $ 20,000</option>
                                                    <option value="Prefer not to Say" >Prefer not to Say</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Employment" class="control-label">Profession</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Employment" id="Employment" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($jobs as $employment)
                                                    <option>{{$employment-> job_title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <button name="Submit" id="Submit" type="submit" class="btn btn-success pull-right">Search Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
