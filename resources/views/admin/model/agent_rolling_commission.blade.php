<!-- Rolling Commission Modal -->
<div class="modal fade agent-rolling-commission-modal" id="agentrollingCommissionModal" tabindex="-1"
    aria-labelledby="agentrollingCommissionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header py-2 bg-primary text-white">
                <h5 class="modal-title fs-6" id="rollingCommissionModalLabel">Agent Rolling Commission</h5>
                <a type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
            </div>

            <!-- Modal Body with the form -->
            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf

                    <!-- Input Row Template -->
                    <div class="form-group d-flex align-items-center mb-2">
                        <label for="fancy" class="me-2 mb-0" style="width: 100px;">Fancy</label>
                        <input type="number" name="fancy" id="fancy" class="form-control" value="0">
                    </div>

                    <div class="form-group d-flex align-items-center mb-2">
                        <label for="matka" class="me-2 mb-0" style="width: 100px;">Matka</label>
                        <input type="number" name="matka" id="matka" class="form-control" value="0">
                    </div>

                    <div class="form-group d-flex align-items-center mb-2">
                        <label for="casino" class="me-2 mb-0" style="width: 100px;">Casino</label>
                        <input type="number" name="casino" id="casino" class="form-control" value="0">
                    </div>

                    <div class="form-group d-flex align-items-center mb-2">
                        <label for="binary" class="me-2 mb-0" style="width: 100px;">Binary</label>
                        <input type="number" name="binary" id="binary" class="form-control" value="0">
                    </div>

                    <div class="form-group d-flex align-items-center mb-2">
                        <label for="sportbook" class="me-2 mb-0" style="width: 100px;">Sportbook</label>
                        <input type="number" name="sportbook" id="sportbook" class="form-control" value="0">
                    </div>

                    <div class="form-group d-flex align-items-center mb-3">
                        <label for="bookmaker" class="me-2 mb-0" style="width: 100px;">Bookmaker</label>
                        <input type="number" name="bookmaker" id="bookmaker" class="form-control" value="0">
                    </div>

                    <!-- Submit Button -->
                    <a type="submit" class="btn btn-primary">Submit</a>
                </form>
            </div>

        </div>

    </div>
</div>
</div>
