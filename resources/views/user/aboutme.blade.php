@extends('layouts.app2') @section('content')

<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center">About Me</div>
                    </div>
                   <div class="card-body signup-form">
                    <form method="POST" action="{{ route('aboutme_create' ) }}">
                        @csrf
                        @if(isset($aboutme))
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Headline" class="control-label"><span class="required">*</span> Headline</label>
                            </div>
                            <div class="col-md-9">
                                <input name="Headline" id="Headline" type="text" required="required" value="{{ $aboutme->Headline }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Description" class="control-label"><span class="required">*</span> A Little Bit About Me</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="Description" id="Description" rows="3" required="required" class="form-control" >{{ $aboutme->Description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="LookingFor" class="control-label"><span class="required">*</span> What I Am Looking For</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="LookingFor" rows="3" id="LookingFor" required="required" class="form-control" >{{ $aboutme->LookingFor }}</textarea>
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
                                <label for="Headline" class="control-label"><span class="required">*</span> Headline</label>
                            </div>
                            <div class="col-md-9">
                                <input name="Headline" id="Headline" type="text" required="required" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Description" class="control-label"><span class="required">*</span> A Little Bit About Me</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="Description" id="Description" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="LookingFor" class="control-label"><span class="required">*</span> What I Am Looking For</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="LookingFor" id="LookingFor" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;"></textarea>
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
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
