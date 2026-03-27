@extends('admin.master')

@section('body')
    <div class="container-fluid p-4">
        <div class="card shadow rounded bg-white" style="max-width: 600px; margin: 0 auto;">
            <div class="card-header bg-primary text-white p-2 rounded-top">
                <h4 class="mb-0">Add Banner</h4>
            </div>
            <form class="px-4">
                <!-- Add Banner Button Section (Aligned to the right) -->
                <div class="d-flex justify-content-end p-2 mb-3">
                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addBannerModal">
                        Add Banner
                    </a>
                </div>

                <!-- Banner Table Section -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="bannerTableBody">
                        <tr>
                            <td>No data</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
