@extends('admin.master')

@section('body')
<div class="container-fluid p-4">
    <div class="card shadow-lg rounded bg-white">
        <div class="card-header bg-primary text-white p-2">
            <h4 class="mb-0">Block Market</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th class="col-2">Status</th>
                            <th class="col-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Soccer</td>
                            <td class="status"><span class="badge bg-success text-white">Active</span></td>
                            <td>
                                <label class="toggle-switch">
                                    <input type="checkbox" checked onchange="updateStatus(this)">
                                    <span class="toggle-slider"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Tennis</td>
                            <td class="status"><span class="badge bg-success text-white">Active</span></td>
                            <td>
                                <label class="toggle-switch">
                                    <input type="checkbox" checked onchange="updateStatus(this)">
                                    <span class="toggle-slider"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Horse Racing</td>
                            <td class="status"><span class="badge bg-success text-white">Active</span></td>
                            <td>
                                <label class="toggle-switch">
                                    <input type="checkbox" checked onchange="updateStatus(this)">
                                    <span class="toggle-slider"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Cricket</td>
                            <td class="status"><span class="badge bg-success text-white">Active</span></td>
                            <td>
                                <label class="toggle-switch">
                                    <input type="checkbox" checked onchange="updateStatus(this)">
                                    <span class="toggle-slider"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Greyhound Racing</td>
                            <td class="status"><span class="badge bg-success text-white">Active</span></td>
                            <td>
                                <label class="toggle-switch">
                                    <input type="checkbox" checked onchange="updateStatus(this)">
                                    <span class="toggle-slider"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Kabaddi</td>
                            <td class="status"><span class="badge bg-success text-white">Active</span></td>
                            <td>
                                <label class="toggle-switch">
                                    <input type="checkbox" checked onchange="updateStatus(this)">
                                    <span class="toggle-slider"></span>
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function updateStatus(toggle) {
        var statusCell = toggle.closest('tr').querySelector('.status');
        var badge = statusCell.querySelector('.badge');
        
        if (toggle.checked) {
            badge.textContent = 'Active';
            badge.classList.remove('bg-danger');
            badge.classList.add('bg-success');
        } else {
            badge.textContent = 'Inactive';
            badge.classList.remove('bg-success');
            badge.classList.add('bg-danger');
        }
    }
</script>
@endsection
