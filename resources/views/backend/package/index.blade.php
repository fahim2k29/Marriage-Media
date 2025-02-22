@extends('backend.layouts.master')

@section('title',' Package List')
@section('page-header')
    <i class="fa fa-list"></i> Package List
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
            <th class="bg-dark" style="width: 30%">Name</th>
            <th class="bg-dark" style="width: 20%">Price</th>
            <th class="bg-dark" style="width: 20%">Duration</th>
            <th class="bg-dark" style="width: 20%">Action</th>
        </tr>
        @forelse($offers as $key => $offer)
            <tr>
                <td>{{ $key + 1 }}</td>
                
                {{-- <td>
                    <img src="{{ asset($offer->image) }}"
                         height="30"
                         width="120"
                         alt="No Image">
                </td> --}}

                <td>{{ $offer->name }}</td>

                <td>{{ $offer->price }}</td>

                <td>{{ $offer->duration }}</td>

                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <a href="{{ route('backend.package.edit', $offer->id) }}"
                           class="btn btn-xs btn-info"
                           title="Edit">
                            <i class="ace-icon fa fa-pencil"></i>
                        </a>

                        <button type="button" class="btn btn-xs btn-danger"
                                onclick="delete_check({{$offer->id}})"
                                title="Delete">
                            <i class="ace-icon fa fa-trash-o"></i>
                        </button>
                    </div>
                    <form action="{{ route('backend.package.destroy', $offer->id)}}"
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

    @include('backend.partials._paginate', ['data' => $offers])
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
