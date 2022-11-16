@extends('admin.index')

@section('content')

@section('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

@endsection()

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="transactions" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Exchange</th>
                        <th>Transaction Code </th>
                        <!-- <th>status</th> -->
                        <th>Action</th>
                    
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Exchange</th>
                        <th>Transaction Code </th>
                        <!-- <th>status</th> -->
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(function () {

    var table = $('#transactions').DataTable({
        processing: true,
        serverSide: true,
        // scrollX: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ], //not working
        
        ajax: {
            "url" : "/admin/transactions",
            "type" : "GET",
            error: function(thrownError){
            console.log(thrownError);// to debug error on dataTables 
        }
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'user_id', name: 'user_id'},
            {data: 'amount', name: 'amount'},
            {data: 'coin', name: 'coin'},
            {data: 'transaction_code', name: 'transaction_code'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true,
            }, 
        ]
        

       
    });

  });
  
</script>

@endsection()