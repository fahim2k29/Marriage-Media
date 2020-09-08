@extends('backend.layouts.master')

@section('title','Edit User')
@section('page-header')
    <i class="fa fa-pencil"></i> Edit User
@stop
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
    @include('backend.components.page_header')
    <div class="col-sm-9">
        <form class="form-horizontal" method="post"
              action="{{route('backend.admin.update',$offer->id)}}"
              role="form" enctype="multipart/form-data">
        @csrf

            <!-- Image -->
            {{-- <div class="form-group">
                <label class="col-sm-2 bolder" for="image">Image
                </label>
                <div class="col-sm-4">
                    <input name="image"
                           type="file"
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
                <label class="col-sm-2 bolder" for="name">Name
                </label>
                <div class="col-sm-4">
                    <input name="name"
                           type="text"
                           value="{{ $offer->name }}" 
                           id="name"
                           class="form-control"
                           >
                    {{-- <strong class="red">{{ $errors->first('name') }}</strong> --}}
                    @if($errors->first('name'))
                        <br>
                    @endif
                    {{-- <strong class="red">Minimum 150x33 pixels</strong> --}}
                </div>
            </div>

                <div class="form-group">
                <label class="col-sm-2 bolder" for="price">Email
                </label>
                <div class="col-sm-4">
                    <input name="email"
                           type="email"
                           step="any"
                           value="{{ $offer->email }}" 
                           id="email"
                           class="form-control"
                           >
                    {{-- <strong class="red">{{ $errors->first('price') }}</strong> --}}
                    @if($errors->first('email'))
                        <br>
                    @endif
                    {{-- <strong class="red">Minimum 150x33 pixels</strong> --}}
                </div>
            </div>

             
            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-sm btn-success submit"><i class="fa fa-save"></i> Update</button>

                    <a href="{{ route('backend.admin.index') }}" class="btn btn-sm btn-gray"> <i
                            class="fa fa-refresh"></i>
                        Cancel</a>
                </div>
            </div>
        </form>
    </div>
   
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
