@extends('backend.master')
@section('content')
<div class="container" style="margin-top: 100px; margin-left: 30px;">
<h1>USER LIST</h1>
    <link rel="stylesheet" href="{{ asset('backend/registration/css/style.css') }}">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <table class="table data-table">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Details</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
    </table>
    
</div>
@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('yajra.post.list') }}",
        columns: [
            {data: 'title', name: 'title'},
            {data: 'details', name: 'setails'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
</tbody>
@endpush
@endsection