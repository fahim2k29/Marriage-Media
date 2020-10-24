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
                                <div class="panel panel-info">

                                        <form method="post" action="{{ route('editPhoto.update' ) }}">
                                            @csrf
                                            <div class="card">
                                                <div class="card-header">
                                                    <div>Update Your Profile Picture</div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="card">
                                                                <form action="{{ route('editPhoto.update') }}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                <div class="card-body">
                                                                    
                                                                    <input name="image"
                                                                        type="file"
                                                                        id="image"
                                                                        class="form-control"
                                                                        onchange="readURL(this);">
                                                                    <strong class="red">{{ $errors->first('image') }}</strong>
                                                                    @if($errors->first('image'))
                                                                        <br>
                                                                    @endif

                                                                   <div class="card">
                                                                       <div class="card-body">
                                                                        <div >
                                                                            <div class="widget-box first">
                                                                                <div class="widget-header">
                                                                                    <h5>Current Image</h5>
                                                                                </div>
                                                                                <div class="widget-body"
                                                                                     >
                                                                                    <div class="widget-main">
                                                                                        <div class="form-group">
                                                                                            <div class="col-xs-12">
                                                                                                <img id="current" src="" class="img-fluid" height="150px" width="100%"
                                                                                                     alt="image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                       </div>
                                                                   </div>

                                                                   <div>
                                                                       <button type="submit" class="btn btn-primary pull-right">Update</button>
                                                                   </div>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="view view-sixth">
                                                                        <div><h5>Your Previous Photo</h5></div>
                                                                        <img src="{{asset($addPhoto->image)}}" class="img-fluid"/>
                                                                    </div>
                                                                </div>
                                                            </div>
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
        </div>
    </div>
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
</section>

@endsection
