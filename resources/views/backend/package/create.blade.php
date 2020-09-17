@extends('backend.layouts.master')
@section('title', 'Add Package')
@section('page-header')
    <i class="fa fa-info"></i> Add Package
@endsection
@push('css')
    <style>
        @media only screen and (min-width: 768px) {
            .widget-box.first {
                margin-top: 0 !important;
            }
        }
    </style>
@endpush    

@section('content')
    @include('backend.components.page_header', [
    //    'fa' => 'fa fa-list',
    //    'name' => 'Offer List',
    //    'route' =>route('backend.site_config.offer.index'),
    ])

    <div class="col-sm-9 col-md-12">
        <form class="form-horizontal" method="post" action="{{route('backend.package.store')}}"
              role="form"
              enctype="multipart/form-data">
        @csrf


            <!-- Image -->
            {{-- <div class="form-group">
                <label class="col-sm-2 bolder" for="image">Image
                </label>
                <div class="col-sm-4">
                    <input name="image"
                           type="file"
                           id="image"
                           class="form-control"
                           onchange="readURL(this);">
                    <strong class="red">{{ $errors->first('image') }}</strong>
                    @if($errors->first('image'))
                        <br>
                    @endif
                    <strong class="red">Minimum 150x33 pixels</strong> 
                </div>
            </div> --}}

            <div class="form-group">
                <label class="col-sm-2 bolder" for="name"> Name
                </label>
                <div class="col-sm-4">
                    <input name="name"
                           type="text"
                           id="name"
                           class="form-control"
                           onchange="readURL(this);">
                    <strong class="red">{{ $errors->first('name') }}</strong>
                    @if($errors->first('name'))
                        <br>
                    @endif
                    {{-- <strong class="red">Minimum 150x33 pixels</strong> --}}
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 bolder" for="price"> Price (EURO)
                </label>
                <div class="col-sm-4">
                    <input name="price"
                           type="number"
                           step="0.01"
                           id="price"
                           
                           class="form-control"
                           >
                    <strong class="red">{{ $errors->first('price') }}</strong>
                    @if($errors->first('price'))
                        <br>
                    @endif
                    {{-- <strong class="red">Minimum 150x33 pixels</strong> --}}
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 bolder" for="duration"> Duration (Day)
                </label>
                <div class="col-sm-4">
                    <input name="duration"
                           type="text"
                           id="duration"
                           
                           class="form-control"
                           >
                    <strong class="red">{{ $errors->first('duration') }}</strong>
                    @if($errors->first('duration'))
                        <br>
                    @endif
                    {{-- <strong class="red">Minimum 150x33 pixels</strong> --}}
                </div>
            </div>
            

            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-sm btn-success submit create-button"><i class="fa fa-save"></i> Add
                    </button>

                    <a href="{{route('backend.package.index')}}" class="btn btn-sm btn-gray"> <i
                            class="fa fa-refresh"></i>
                        Cancel</a>
                </div>
            </div>
        </form>
    </div>

    {{-- <div class="col-sm-3">
        <div class="widget-box first">
            <div class="widget-header">
                <h4 class="widget-title">Current Image</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="widget-body"
                 style="display:flex; align-items: center; justify-content: center; height:100px;">
                <div class="widget-main">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <img id="current" src="" width="100" height="100" class="img-responsive center-block"
                                 alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@push('js')
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
@endpush
