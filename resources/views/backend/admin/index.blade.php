@extends('backend.layouts.master')

@section('title',' User List')
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
    //    'name' => 'Create Offer',
    //    'route' => route('backend.site_config.offer.create')
    ])

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 10px">SL</th>
            <th class="bg-dark" style="width: 40%">Name</th>
            <th class="bg-dark" style="width: 40%">Email</th>
            <th class="bg-dark" style="">Action</th>
        </tr>
        @forelse($users as $key => $offer)
            <tr>
                <td>{{ $key + 1 }}</td>

                <td>{{ $offer->name }}</td>

                <td>{{ $offer->email }}</td>
            
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <a href="{{ route('backend.admin.edit', $offer->id) }}"
                           class="btn btn-xs btn-info"
                           title="Edit">
                            <i class="ace-icon fa fa-pencil">Update</i>
                        </a>

                        <button type="button" class="btn btn-xs btn-danger"
                                onclick="delete_check({{$offer->id}})"
                                title="Delete">
                            <i class="ace-icon fa fa-trash-o"></i>
                        </button>
                    </div>
                    <form action="{{ route('backend.admin.destroy', $offer->id)}}"
                          id="deleteCheck_{{ $offer->id }}" method="GET">
                        @csrf
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No data available in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    @include('backend.partials._paginate', ['data' => $users])
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
