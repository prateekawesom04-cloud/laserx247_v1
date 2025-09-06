@extends('admin.master')
@section('body')
<div class="container-fluid bg-light p-4">
  <div class="row g-4">

    <!-- Live Sports Profit -->
    <div class="col-12 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-header bg-success text-white fw-bold">
          <i class="fas fa-bolt me-2"></i>Live Sports Profit
        </div>
        <div class="card-body text-center">
          <h5 class="mb-3">Current Live Profit</h5>
          <div class="circle-display mx-auto">
            12,435
          </div>
        </div>
      </div>
    </div>

    <!-- Backup Sports Profit -->
    <div class="col-12 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-header bg-info text-white fw-bold">
          <i class="fas fa-database me-2"></i>Backup Sports Profit
        </div>
        <div class="card-body text-center">
          <h5 class="mb-3">Last Backup Profit</h5>
          <div class="circle-display mx-auto">
            8,765
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
