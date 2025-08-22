
@extends('layouts.admin.app')

@section('admin_content')

<x-admin.page-title dashboard_title="Admin" title="Product" page_name="All product">
    <a href="{{ route('admin.product.create') }}" class="btn btn-success" id="addBtn">Add product</a>
</x-admin.page-title>
<x-admin.table title="product" :headers="['No', 'title', 'Action']" />

@endsection

@push('js')
    <script>
        var table = $('#datatable').DataTable({
            ajax: '{!! route('admin.product.index') !!}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },

                {
                    data: 'action',
                    name: 'action',
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                        <a href="${route('admin.product.show',row.id) }" class="btn btn-outline-success btn-sm" id="editBtn"><i class="fas fa-eye"></i></a>
                    <a href="${route('admin.product.edit',row.id) }" class="btn btn-outline-secondary btn-sm" id="editBtn"><i class="fas fa-pencil-alt"></i></a>
                    <a href="${route('admin.product.destroy',row.id) }" class="btn btn-outline-danger btn-sm" id="deleteBtn"><i class="fas fa-trash-alt"></i></a>
                    `;

                    }
                },
            ]
        });
    </script>
@endpush
