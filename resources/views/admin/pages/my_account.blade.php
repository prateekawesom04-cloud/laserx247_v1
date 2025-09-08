@extends('admin.master')
@section('body')

<!-- Responsive Account Page -->
<div class="container-fluid p-4">
  <div class="row g-3">

    <!-- Sidebar -->
    <div class="col-12 col-md-4 col-lg-3">
      <div class="card shadow-sm h-100">
        <div class="card-header bg-success text-white fw-bold">
          My Account
        </div>
        <ul class="list-group list-group-flush mb-0">
          <li>
            <a href="javascript:void(0);" class="list-group-item list-group-item-action sidebar-link active" data-target="profile">My Profile</a>
          </li>
          <li>
            <a href="javascript:void(0);" class="list-group-item list-group-item-action sidebar-link" data-target="statement">Account Statement</a>
          </li>
          <li>
            <a href="javascript:void(0);" class="list-group-item list-group-item-action sidebar-link" data-target="activity">Activity Log</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Content Area -->
    <div class="col-12 col-md-8 col-lg-9 mx-auto">

      <!-- Profile Section -->
      <div id="profile-section">
        <div class="card shadow-sm">
          <div class="card-header bg-success text-white fw-bold">Account Details</div>
          <div class="card-body p-0">
           <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
              <div class="fw-bold text-muted">Name</div>
              <div>agplaycrick99</div>
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
              <div class="fw-bold text-muted">Commission</div>
              <div>0</div>
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
              <div class="fw-bold text-muted">Rolling Commission</div>
              <div>
                <i class="bi bi-pencil-square icon-btn" title="Edit"></i>
                <i class="bi bi-eye icon-btn" title="View"></i>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
              <div class="fw-bold text-muted">Agent Rolling Commission</div>
              <div><i class="bi bi-eye icon-btn" title="View"></i></div>
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
              <div class="fw-bold text-muted">Currency</div>
              <div>INR</div>
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
              <div class="fw-bold text-muted">Partnership</div>
              <div>100</div>
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
              <div class="fw-bold text-muted">Mobile Number</div>
              <div>0</div>
            </div>
            <div class="d-flex justify-content-between align-items-center px-3 py-2">
              <div class="fw-bold text-muted">Password</div>
              <div>********* <i class="bi bi-pencil-square icon-btn" title="Edit Password"></i></div>
            </div>

          </div>
        </div>
      </div>

      <!-- Statement Section -->
      <div id="statement-section" style="display: none;">
        <div class="card shadow-sm">
          <div class="card-header bg-success text-white fw-bold">Account Statement</div>
          <div class="card-body">

            <div class="row mb-3 g-2">
              <div class="col-12 col-sm-6 col-md-4">
                <select class="form-control">
                  <option>Data Source</option>
                </select>
              </div>
              <div class="col-6 col-sm-6 col-md-3">
                <input type="date" class="form-control" value="2025-09-02">
              </div>
              <div class="col-6 col-sm-6 col-md-3">
                <input type="date" class="form-control" value="2025-09-02">
              </div>
              <div class="col-12 col-md-2">
                <button class="btn btn-success w-100">Get Statement</button>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead class="table-success">
                  <tr>
                    <th>Date/Time</th>
                    <th>Deposit</th>
                    <th>Withdraw</th>
                    <th>Balance</th>
                    <th>Remarks</th>
                    <th>From/To</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="6" class="text-center">No data!</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>

      <!-- Activity Log Section -->
      <div id="activity-section" style="display: none;">
        <div class="card shadow-sm">
          <div class="card-header bg-success text-white fw-bold">Activity Log</div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-bordered table-striped mb-0">
                <thead class="table-success">
                  <tr>
                    <th>Login Date & Time</th>
                    <th>Login Status</th>
                    <th>IP Address</th>
                    <th>ISP</th>
                    <th>City/State/Country</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>04-05-2024 10:16:03</td>
                    <td class="text-success fw-bold">Login Successful</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0/0/0</td>
                  </tr>
                  <tr>
                    <td>03-05-2024 17:44:10</td>
                    <td class="text-success fw-bold">Login Successful</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0/0/0</td>
                  </tr>
                  <tr>
                    <td>03-05-2024 10:51:24</td>
                    <td class="text-success fw-bold">Login Successful</td>
                    <td>157.38.148.224</td>
                    <td>0</td>
                    <td>Rajasthan/India</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div> 
  </div>
</div>

@endsection

<!-- JS to toggle sections -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.sidebar-link');
    const sections = {
      profile: document.getElementById('profile-section'),
      statement: document.getElementById('statement-section'),
      activity: document.getElementById('activity-section'),
    };

    links.forEach(link => {
      link.addEventListener('click', function () {
        links.forEach(l => l.classList.remove('active'));
        this.classList.add('active');

        const target = this.getAttribute('data-target');

        for (const key in sections) {
          sections[key].style.display = (key === target) ? 'block' : 'none';
        }
      });
    });
  });
</script>