<div class="modal fade balance_modal" id="balanceModal" tabindex="-1" aria-labelledby="balanceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header py-2" style="background-color: #007bff; color: white;">
                <h5 class="modal-title fs-6" id="balanceModalLabel">Balance Update</h5>
                <a type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
            </div>

            <!-- Modal Body with the form -->
            <div class="modal-body">
                <form id="balance_form" class="balance_form" action="#" method="POST">
                    @csrf

                    <!-- Balance -->
                    <div class="mb-3">
                        <label for="balance" class="form-label">Balance</label>
                        <input type="text" name="amountbalance" class="form-control" value="" placeholder="" autocomplete="off">
                    </div>

                    <!-- Remark -->
                    <div class="mb-3">
                        <label for="remark" class="form-label">Remark</label>
                        <input type="text" name="amountremark" class="form-control" value="777" autocomplete="off">
                    </div>

                    <!-- Your Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Your Password</label>
                        <input type="password" name="amountpassword" class="form-control">
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-end">
                        <a href="javascript:0" type="submit" name="action" value="deposit" class="btn btn-success me-2" style="background-color: #4CAF50; border-color: #4CAF50;">Deposit</a>
                        <a href="javascript:0" type="submit" name="action" value="withdraw" class="btn btn-danger" style="background-color: #FF6B6B; border-color: #FF6B6B;">Withdraw</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
