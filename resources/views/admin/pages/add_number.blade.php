@extends('admin.master')

@section('body')
<div class="container-fluid p-4">
    <div class="card shadow rounded bg-white" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header bg-success text-white p-2 rounded-top">
            <h4 class="mb-0">Add Number</h4>
        </div>
        <form class="px-4">
            <!-- Add Banner Button Section (Aligned to the right) -->
            <div class="d-flex justify-content-end p-2 mb-3">
                <a href="javascript:void(0);" class="btn btn-primary btn-sm" id="addBanner">Add Number</a>
            </div>

            <!-- Banner Table Section -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Mobile</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody id="bannerTableBody">
                    <tr>
                        <td>1234567890</td>
                        <td>Freen</td>
                        <td><a href="#" class="btn btn-warning btn-sm px-3 py-1"><i class="fa fa-edit"></i></a></td>
                        <td><a href="#" class="btn btn-danger btn-sm px-3 py-1"><i class="fa fa-trash"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
@endsection
