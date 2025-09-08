@extends('admin.master')
@section('body')
<div class="container-fluid p-4 vh-100">
  <div class="row g-4">

    <!-- Live Sports Profit -->
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-header bg-success text-white fw-bold">
          <i class="fas fa-bolt me-2"></i>Live Sports Profit
        </div>
        <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
          <h5 class="mb-3">Current Live Profit</h5>
          <div class="circle-display d-flex align-items-center justify-content-center">
            <span class="text-white">12,435</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Backup Sports Profit -->
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-header bg-info text-white fw-bold">
          <i class="fas fa-database me-2"></i>Backup Sports Profit
        </div>
        <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
          <h5 class="mb-3">Last Backup Profit</h5>
          <div class="circle-display d-flex align-items-center justify-content-center">
            <span class="text-white">8,765</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
