@extends('backend.layouts.master')
@section('title', 'Contact Information')
@section('page-header')
    <i class="fa fa-info"></i> Contact Information
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
    @include('backend.components.page_header')

    <div class="col-sm-9">
        <form action="{{ route('backend.contact.update') }}" method="post" class="form-horizontal"
              role="form" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="col-sm-2 no-padding-right bolder" for="address">Address</label>
                <div class="col-sm-10">
                <textarea name="address"
                            id="address"
                            rows="1"
                            class="form-control"
                            placeholder="Address"
                            style="resize: none;padding: 5px 4px 6px !important;">{{ $info->address ?? old('address') }}</textarea>
                </div>
                <div class="col-sm-9 col-sm-offset-2">
                    <strong class=" red">{{ $errors->first('address') }}</strong>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 no-padding-right bolder" for="site_title">Country</label>
                <div class="col-sm-10">
                    <input name="country"
                           type="text"
                           id="country"
                           placeholder="country"
                           class="form-control"
                           value="{{ $info->country ?? old('country') }}">
                </div>
                <div class="col-sm-9 col-sm-offset-2">
                    <strong class=" red">{{ $errors->first('country') }}</strong>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 no-padding-right bolder" for="city">City</label>
                <div class="col-sm-10">
                    <input name="city"
                           type="text"
                           id="City"
                           placeholder="City"
                           class="form-control"
                           value="{{ $info->city ?? old('city') }}">
                </div>
                <div class="col-sm-9 col-sm-offset-2">
                    <strong class=" red">{{ $errors->first('city') }}</strong>
                </div>
            </div>



            <div class="form-group">
                <label class="col-sm-2 no-padding-right bolder" for="email">Email</label>

                <div class="col-sm-10">
                    <input name="email"
                           type="email"
                           id="email"
                           placeholder="Email"
                           class="form-control"
                           value="{{ $info->email ?? old('email') }}">
                </div>
                <div class="col-sm-9 col-sm-offset-2">
                    <strong class=" red">{{ $errors->first('email') }}</strong>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 no-padding-right bolder" for="phone">Mobile</label>
                <div class="col-sm-10 ">
                    <input name="phone"
                           type="text"
                           onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                            maxlength="15"
                           id="phone"
                           placeholder="Mobile No."
                           class="form-control"
                           value="{{ $info->phone ?? old('phone') }}">
                </div>
                <div class="col-sm-9 col-sm-offset-2">
                    <strong class=" red">{{ $errors->first('phone') }}</strong>
                </div>
            </div>



            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="ace-icon fa fa-floppy-o"></i>
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>




@endsection

@push('js')

@endpush
