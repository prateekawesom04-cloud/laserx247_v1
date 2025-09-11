<!-- Compact Reusable Modal with Form -->
<div class="modal fade" id="mainModal" tabindex="-1" aria-labelledby="mainModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header py-2 "style="background-color: #007bff; color: white;">
                <h5 class="modal-title fs-6" id="mainModalLabel">User Form</h5>
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body with Form -->
            <div class="modal-body p-3">
                <form id="userForm" action="#" method="POST" class="text-start">
                    @csrf

                    <div class="mb-2">
                        <label for="username" class="form-label fs-7">Username</label>
                        <input type="text" name="username" class="form-control form-control-sm"
                            placeholder="Username">
                    </div>

                    <div class="mb-2">
                        <label for="opening_balance" class="form-label fs-7">Opening Balance</label>
                        <input type="number" name="opening_balance" class="form-control form-control-sm"
                            placeholder="Opening Balance...">
                    </div>

                    <div class="mb-2">
                        <label for="exposure_limit" class="form-label fs-7">Exposure Limit</label>
                        <input type="text" name="exposure_limit" class="form-control form-control-sm"
                            placeholder="Exposure Limit">
                    </div>

                    <div class="mb-2">
                        <label for="credit_reference" class="form-label fs-7">Credit Reference</label>
                        <input type="text" name="credit_reference" class="form-control form-control-sm"
                            placeholder="Credit Reference...">
                    </div>

                    <div class="mb-2">
                        <label for="password" class="form-label fs-7">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm">
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer py-2 px-3">
                <a href="#" class="btn btn-primary btn-sm"
                    onclick="document.getElementById('userForm').submit(); return false;">Save</a>
                <a href="#" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</a>
            </div>

        </div>
    </div>
</div>
