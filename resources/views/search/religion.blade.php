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
                            <form action="{{ route('search_religion_result')}}" method="get">
                                @csrf
                                <div class="card quick-form">
                                    <div class="card-header">
                                        <div style="text-align: center">Religion Search for a match</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Gender" class="control-label">Sect</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Sect" id="Sect" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($religiondatas as $religiondata)
                                                    <option>{{$religiondata->Sect_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Gender" class="control-label">Religiousness</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Religiosness" id="Religiosness" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($religiondatas as $religiondata)
                                                    <option>{{$religiondata->Religiosness_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Hijab" class="control-label">Prefer Hijab/Niqab</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Hijab" id="Hijab" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($religiondatas as $religiondata)
                                                    <option>{{$religiondata->Hijab_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Beard" class="control-label">Beard</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Beard" id="Beard" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($religiondatas as $religiondata)
                                                    <option>{{$religiondata->Beard_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Convert" class="control-label">Is a Revert</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Convert" id="Convert" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($religiondatas as $religiondata)
                                                    <option>{{$religiondata->Convert_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Halaal" class="control-label">Keeps Halal</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Halaal" id="Halaal" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($religiondatas as $religiondata)
                                                    <option>{{$religiondata->Halaal_data}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Salaah" class="control-label">Performs Salaah</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="Salaah" id="Salaah" class="form-control" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($religiondatas as $religiondata)
                                                    <option>{{$religiondata->Salaah_data}}</option>
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
