<!-- change status -->
<div class="modal fade editstatus" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update user Status</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card">
                    
                    <div class="card-body">
                        <form action="<?= route('update.transaction.details')?>" method="post" id="update-transaction-detail" >
                        @csrf
                    
                            <input type="hidden"  class="form-control" id ="transaction_id" name="transaction_id">
                            <label for="amount">Amount</label>
                            <input class="form-control" type="text" name="amount" disabled>

                            <label for="amount">Coin</label>
                            <input class="form-control" type="text" name="coin" disabled>

                            <label for="status">Status</label>
                            <input class="form-control" id="status" type="text" name="status">
                            <span class ="text-danger error-text status_error"></span>

                      
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit" >Save</button>
                </div>

                </form>

            </div>
        </div>
    </div>