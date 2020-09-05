@extends('backend.layouts.master')

@section('title','Order-List')
@section('page-header')
    <i class="fa fa-list"></i> Success story List
@stop

@push('css')
    <style>
        table th,
        td {
            text-align: center !important;
            vertical-align: middle !important;
        }
    </style>
@endpush

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'Story Create',
       'route' => route('backend.order.create')
    ])

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="">SL</th>
            <th class="bg-dark" style="">Title</th>
            <th class="bg-dark" style="">Main-Image</th>
            <th class="bg-dark" style="">Description</th>
            <th class="bg-dark" style="">Body-Image</th>
            <th class="bg-dark" style="">Address</th>
            <th class="bg-dark" style="">Marriage Date</th>
            <th class="bg-dark" style="">Action</th>
        </tr>

     
        @forelse($sotries as $key => $story)
            <tr>
                <td> {{ $key+1 }} </td>
                <td> {{$story->title}}</td>
                <td> <img src="{{ asset($story->main_image) }}"
                         height="30"
                         width="120"
                         alt="No Image"> </td>  

                <td>{!! $story->description  !!}</td>
                <td><img src="{{ asset($story->body_image) }}"
                         height="30"
                         width="120"
                         alt="No Image"> </td>

                <td>{{ $story->address }}</td>
                <td>{{ $story->marriage_date }}</td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <a href="{{ route('backend.order.show') }}"
                           class="btn btn-xs btn-info"
                           title="Edit">
                            <i class="ace-icon fa fa-eye"></i>
                        </a>

                        <button type="button" class="btn btn-xs btn-danger"
                                onclick="delete_check()"
                                title="Delete">
                            <i class="ace-icon fa fa-trash-o"></i>
                        </button>
                    </div>
                    <form action=""
                          id="deleteCheck_{{-- {{ $banner->id }} --}}" method="GET">
                        @csrf
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">No data available in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{-- @include('backend.partials._paginate', ['data' => $Orders]) --}}
@endsection

@push('js')
    <script type="text/javascript">
        function delete_check(id) {
            Swal.fire({
                title: 'Are you sure?',
                html: "<b>You will delete it permanently!</b>",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width: 400,
            }).then((result) => {
                if (result.value) {
                    $('#deleteCheck_' + id).submit();
                }
            })
        }
    </script>
@endpush
