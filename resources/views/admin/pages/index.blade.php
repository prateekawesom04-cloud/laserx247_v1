@extends('admin.master')
@section('body')

<div class="container-fluid p-4">
  <div class="row g-4">

    <!-- Live Sports Profit -->
    <div class="col-12 col-md-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-header bg-success text-white fw-bold">
          <i class="fas fa-bolt me-2"></i>User Data
        </div>
        <div class="card-body text-center">
          <h5 class="mb-3">Active User Data</h5>
          <canvas id="liveChart" class="w-100" style="max-height: 250px;"></canvas>
        </div>
      </div>
    </div>

    <!-- Backup Sports Profit -->
    <div class="col-12 col-md-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-header bg-info text-white fw-bold">
          <i class="fas fa-database me-2"></i>Backup Sports Profit
        </div>
        <div class="card-body text-center">
          <h5 class="mb-3">Last Backup Profit</h5>
          <canvas id="backupChart" class="w-100" style="max-height: 250px;"></canvas>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const charts = [
    { id: 'liveChart', value: {{$user}}, color: '#28a745' },
    { id: 'backupChart', value: 8765, color: '#17a2b8' }
  ];

  charts.forEach(chart => {
    const ctx = document.getElementById(chart.id).getContext('2d');
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['Profit', 'Remaining'],
        datasets: [{
          data: [chart.value, {{$userTotal}} - chart.value],
          backgroundColor: [chart.color, '#e0e0e0'],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          }
        }
      }
    });
  });
</script>

@endsection
