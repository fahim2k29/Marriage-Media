@extends('layouts.app3') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center">Add Photo - This will be your main profile picture</div>
                    </div>
                   <div class="card-body signup-form">
                    <form method="post" action="{{ route('addPhoto_create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="addPhoto" class="control-label"> Select your Profile Photo</label>
                            </div>
                            <div class="col-md-8">
                                <input name="image" required="required" type="file" id="image" class="form-control" onchange="readURL(this);">
                                    <strong class="red">{{ $errors->first('image') }}</strong>
                                    @if($errors->first('image'))
                                        <br>
                                    @endif
                            </div>
                        </div>
                        <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg pull-right">Next</button>
                    </form>
                    <button onClick="location.href='/signup/officeUse'" id="savePreviousDatas" class="btn btn-success btn-lg" value="back">Previous</button>
                   </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">
                        Current Image
                    </div>
                    <div class="card-body">
                        <div class="widget-box first">
                            <div class="widget-body" style="display:flex; align-items: center; justify-content: center; height:100px;">
                                <div class="widget-main">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <img id="current" src="" width="100" height="100" class="img-responsive center-block">
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
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#current')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


@endsection
