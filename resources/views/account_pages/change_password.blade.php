@extends('master')
@section('body')
<div class="container d-flex justify-content-center align-items-center  mt-5 py-5">
    <div class="card w-100" style="max-width: 500px;">
      <div class="card-header bg-dark text-white text-center fw-bold">
        Change Password
      </div>
      <div class="card-body">
        <form>
          <!-- Old Password -->
          <div class="mb-3">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Enter Old Password" id="oldPassword">
              <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('oldPassword')">
                👁️
              </button>
            </div>
          </div>

          <!-- New Password -->
          <div class="mb-3">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Enter New Password" id="newPassword">
              <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('newPassword')">
                👁️
              </button>
            </div>
          </div>

          <!-- Confirm Password -->
          <div class="mb-3">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Enter Confirm New Password" id="confirmPassword">
              <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('confirmPassword')">
                👁️
              </button>
            </div>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-dark w-100">CHANGE PASSWORD</button>
        </form>
      </div>
    </div>
  </div>
@endsection