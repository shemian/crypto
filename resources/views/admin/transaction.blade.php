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
                        <th>status</th>
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
                        <th>status</th>
                        <th>Action</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.update')

@endsection



@section('scripts')

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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
            {data: 'status', name: 'status'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true,
            }, 
             
        ]
    });

    $(document).on('click', '#editStatus', function(){
        var transaction_id = $(this).data('id');
        $('.editstatus').find('form')[0].reset();
        $('.editstatus').find('spam.error-text').text('text');

        $.post('<?= route("user.transaction.details") ?>', {transaction_id}, function(data ){
            $('.editstatus').find('input[name="transaction_id"]').val(data.details.id);
            $('.editstatus').find('input[name="name"]').val(data.details.user_id);
            $('.editstatus').find('input[name="amount"]').val(data.details.amount);
            $('.editstatus').find('input[name="coin"]').val(data.details.coin);
            $('.editstatus').find('input[name="status"]').val(data.details.status);
            $('.editstatus').modal('show')       
        }, 'json');
    });

    //Update Transaction status
    $('#update-transaction-detail').on('submit', function(e){
        e.preventDefault();
        var form = this;
        var status = $('#status').val();
        var transaction_id =$('#transaction_id').val();
        $.ajax({
            url:$(form).attr('action'),
            method:$(form).attr('method'),
            data:{status: status, transaction_id: transaction_id},
            beforeSend:function(){
                $(form).find('span.error-text').text('')
            },
            success:function(data){
                if(data.code == 0){
                    $.each(data.error, function(prefix, val ){
                        $(form).find('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('editstatus').modal('hide');
                    $('editstatus').find('form')[0].reset();
                    toastr.success(data.msg)
                }
            }
                

        })
    })


    

  });
  
</script>

@endsection()

