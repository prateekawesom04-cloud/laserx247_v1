@extends('super-master')

@section('body')
    <div class="main-container bg-white rounded shadow mt-4">
        <!-- Header -->
        <div class="modal-header-dark p-3 d-flex justify-content-center align-items-center rounded-top border-bottom">
            <div class="balance-info px-2 py-1 rounded-pill fw-semibold">Change Password</div>
        </div>

        <!-- Change Password Section -->
        <div class="modal-body-dark p-3 change-password-section">

            <!-- Old Password -->
            <div class="mb-3">
                <div class="input-group">
                    <input type="password" class="form-control shadow-none" placeholder="Enter Old Password" id="oldPassword"
                        style="font-size: 12px;">
                    <a href="javascript:void(0)" class="btn btn-outline-secondary" type="button"
                        style="font-size: 12px;">👁️</a>
                </div>
            </div>

            <!-- New Password -->
            <div class="mb-3">
                <div class="input-group">
                    <input type="password" class="form-control shadow-none" placeholder="Enter New Password" id="newPassword"
                        style="font-size: 12px;">
                    <a href="javascript:void(0)" class="btn btn-outline-secondary p_eye" type="button"
                        style="font-size: 12px;">👁️</a>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <div class="input-group">
                    <input type="password" class="form-control shadow-none" placeholder="Confirm New Password" id="confirmPassword"
                        style="font-size: 12px;">
                    <a href="javascript:void(0)" class="btn btn-outline-secondary p_eye" type="button"
                        style="font-size: 12px;">👁️</a>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row g-2">
                <div class="col-6">
                    <a href="javascript:void(0)" type="reset" class="btn btn-edit text-white w-100 input_reset" style="font-size: 11px;" onclick="$('input').val('');">📝 Reset</a>
                </div>
                <div class="col-6">
                    <a href="javascript:void(0)" type="submit" class="btn btn-submit text-white w-100" style="font-size: 11px;">CHANGE</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>

    $('a.btn-submit').click(function(){
        let oldPassword = $('#oldPassword').val();
        let newPassword = $('#newPassword').val();
        let confirmPassword = $('#confirmPassword').val();
        let data = {
            oldPassword: oldPassword,
            newPassword: newPassword,
            confirmPassword: confirmPassword
        };
        
        if (oldPassword.length < 6) {
            alert('Please enter correct password');
            return false;
        } else if (newPassword.length < 6) {
            alert('Please enter new strong password');
            return false;
        } else if (newPassword != confirmPassword) {
            alert('please confirm correct password');
            return false;
        } else {
            callApi('post', 'changePassword', data, changePassword);
        }

    });

    function changePassword(response){
        console.log('response---',response.error_code);
        
        if(response.error_code == 200){
            window.location.reload(true);
        } else{
            alert(response.error);
        }   
    }

</script>
@endsection