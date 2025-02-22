@extends('backend.layouts.master')

@section('title','User-List')
@section('page-header')
    <i class="fa fa-list"></i> User List
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
    //    'fa' => 'fa fa-pencil',
    //    'name' => 'List customer',
    //    'route' => route('backend.customer.index')
    ])

    <table class="table table-bordered">
        <thead>
            <tr user="row">
                <th class="bg-dark" style="width: 5%">ID</th>
                <th class="bg-dark" style="width: 20%">Name</th>
                <th class="bg-dark" style="width: 20%">Address</th>
                <th class="bg-dark" style="width: 5%">Package-Price</th>
                <th class="bg-dark" style="width: 20%">purchase Date</th>
                <th class="bg-dark" style="width: 20%">Expire Date</th>
                <th class="bg-dark" style="width: 10%">Action</th>
                {{-- <th class="bg-dark" style="width: 20%">Status</th> --}}
            </tr>
        </thead>
        
    <tbody>
        @foreach ($users as $key=> $user)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{ $user->UserName }}</td>
                <td>{{ $user->Country }}</td>   
                <td>{{  !empty($user->payment->package) ? number_format($user->payment->package->price, 2): ''  }}</td>
                <td>@if ($user->payment) {{ $user->payment->purchase_date }} @endif  </td>
                <td>@if ($user->payment) {{ $user->payment->expire_date }} @endif </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <a href="{{ route('backend.member.show', $user->id) }}"
                           class="btn btn-xs btn-info"
                           title="Edit">
                            <i class="ace-icon fa fa-pencil"></i>
                        </a>
                        <button type="submit" class="btn btn-xs btn-danger"
                            onclick="delete_check({{$user->id}})"
                            title="Delete">
                            <i class="ace-icon fa fa-trash-o"></i>
                        </button>
                    </div>
                        <form action="{{ route('backend.member.destroy', $user->id)}}" 
                        id="deleteCheck_{{ $user->id }}" method="GET">
                                @csrf                                
                        </form>                        
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
