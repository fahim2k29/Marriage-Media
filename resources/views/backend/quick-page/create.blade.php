@extends('backend.layouts.master')
@section('title', 'Page')
@section('page-header')
    <i class="fa fa-info"></i>  Page
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

    {{--  Start here  --}}
    <div class="row">
        <div class="col-sm-9">
            <form action="{{ route('backend.site_config.quick-page.store') }}" method="post" class="form-horizontal"
                  role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 no-padding-right bolder" for="name">
                        Page Name</label>

                    <div class="col-sm-10">
                        <input name="name"
                               type="text"
                               id="name"
                               placeholder="Title Name"
                               class="form-control"
                               value="">
                    </div>
                    <div class="col-sm-9 col-sm-offset-2">
                        <strong class="red">{{ $errors->first('name') }}</strong>
                    </div>
                </div>

                <div class="form-group">
                 <label class="col-sm-2 no-padding-right bolder" for="section">Section <sup class="red">*</sup></label>
                    <div class="col-md-10">
                            <div class="text-center">
                                <select class="chosen-select col-sm-5 no-padding-right bolder" id="section" name="section">
                                    <option value="">- Select -</option>
                                    <option value="1">First Section</option>
                                    <option value="2">Second Section</option>
                                </select>
                            </div>
                            <strong class=" red">{{ $errors->first('Section') }}</strong>
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 no-padding-right bolder" for="short_desc">Description </label>
                    <div class="col-sm-10">
                        @include('backend.components.summer_note',[
                        'name'=>'short_desc',
                        ])
                        <div class="col-sm-9 col-sm-offset-2">
                            <strong class=" red">{{ $errors->first('short_desc') }}</strong>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                 <label class="col-sm-2 no-padding-right bolder" for="status">Status <sup class="red">*</sup></label>
                    <div class="col-md-10">
                            <div class="text-center">
                                <select class="chosen-select col-sm-5 no-padding-right bolder" id="status" name="status">
                                    <option value="">- Select -</option>
                                    <option value="1" >Active</option>
                                    <option value="0" >Inactive</option>
                                </select>
                            </div>
                            <strong class=" red">{{ $errors->first('status') }}</strong>
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
