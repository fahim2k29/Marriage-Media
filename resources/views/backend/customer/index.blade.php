@extends('backend.layouts.master')

@section('title','customer-List')
@section('page-header')
    <i class="fa fa-list"></i> customer List
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
       'name' => 'List customer',
       'route' => route('backend.customer.index')
    ])

    <table class="table table-bordered">
        <thead >
            <tr user="row">
                <th class="bg-dark" style="width: 10%">ID</th>
                <th class="bg-dark" style="width: 20%">Name</th>
                <th class="bg-dark" style="width: 20%">Address</th>
                {{-- <th class="bg-dark" style="width: 20%">Image</th> --}}
                <th class="bg-dark" style="">Action</th>
            </tr>
        </thead>
        
    <tbody>
        @foreach ($users as $user)
        {{-- @foreach ($addPhotos as $addPhoto) --}}
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->UserName}}</td>
                <td>{{$user->Country}}</td>            
                {{-- <td><img src="{{asset('frontend/assets/images/')}}/{{ $addPhoto->image }}"  class="img-responsive img-circle"  height="40"width="60" alt="No Image"></td> --}}
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <a href="{{ route('backend.customer.show', $user->id) }}"
                           class="btn btn-xs btn-info"
                           title="Edit">
                            <i class="ace-icon fa fa-pencil"></i>
                        </a>
                        <button type="submit" class="btn btn-xs btn-danger"
                            onclick="delete_check()"
                            title="Delete">
                            <i class="ace-icon fa fa-trash-o"></i>
                        </button>

                    {{-- <form action="{{ route('backend.customer.destroy', $user->id)}}" id="deleteCheck_{{ $user->id }}" method="POST">
                        @csrf
                        @method('POST')
                    </form> --}}
                                            
                    </div>
                </td>
            </tr>
        @endforeach
        {{-- @endforeach --}}

       
    </tbody>
    </table>
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
