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
                            <form action="{{ route('search_personal_result')}}" method="get">
                                @csrf
                                <div class="card quick-form">
                                    <div class="card-header">
                                        <div style="text-align: center">Personal Search for a match</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Citizenship" class="control-label">Current Citizenship</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Citizenship" id="Citizenship" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($country as $personaldata)
                                                    <option>{{$personaldata->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Origin" class="control-label">Country of Origin</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Origin" id="Origin" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($country as $personaldata)
                                                    <option>{{$personaldata->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Relocation" class="control-label">Will Relocate</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Relocation" id="Relocation" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($personaldatas as $personaldata)
                                                    <option>{{$personaldata->Relocation_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Smoke" class="control-label">Smokes</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Smoke" id="Smoke" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($personaldatas as $personaldata)
                                                    <option>{{$personaldata->Smoke_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="MarryIn" class="control-label">Looking to Marry</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="MarryIn" id="MarryIn" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($personaldatas as $personaldata)
                                                    <option>{{$personaldata->MarryIn_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="MaritalStatus" class="control-label">Marital Status</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="MaritalStatus" id="MaritalStatus" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    <option value="Never Married">Never Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="HaveChildren" class="control-label">Has Children</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="HaveChildren" id="HaveChildren" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($personaldatas as $personaldata)
                                                    <option>{{$personaldata->HaveChildren_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Build" class="control-label">Build</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Build" id="Build" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    <option value="Slim">Slim</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Large">Large</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Hair" class="control-label">Hair Colour</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Hair" id="Hair" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    <option value="Black">Black</option>
                                                    <option value="White">White</option>
                                                    <option value="Brunette">Brunette</option>
                                                    <option value="Blonde">Blonde</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="EyeColour" class="control-label">Eye Colour</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="EyeColour" id="EyeColour" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
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
                                            <div class="col-md-3 text-center">
                                                <label for="Height" class="control-label">Height</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Height" id="Height" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
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
                                            <div class="col-md-3 text-center">
                                                <label for="Disabilities" class="control-label">Disabilities</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Disabilities" id="Disabilities" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($personaldatas as $personaldata)
                                                    <option>{{$personaldata->Disabilities_data}}</option>
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
