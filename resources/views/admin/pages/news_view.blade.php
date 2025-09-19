@extends('admin.master')

@section('body')
    <div class="container-fluid p-4">
        <div class="card shadow rounded bg-white" style="max-width: 600px; margin: 0 auto;">
            <div class="card-header bg-primary text-white p-2 rounded-top">
                <h4 class="mb-0">Add News</h4>
            </div>
            <form class="px-4">
                <!-- Add Message Button on the right side -->
                <div class="d-flex justify-content-end mb-3 p-2">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMessageModal">
                        Add Message
                    </a>
                </div>

                <!-- News Table below the Add Message button -->
                <div class="mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Message Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>No data</td>
                                <td><a href="#" class="btn btn-warning btn-sm px-3 py-1"data-bs-toggle="modal"
                                        data-bs-target="#editNewsModal" data-bs-placement="top" title="Edit"><i
                                            class="fa fa-edit">✍️</i>
                                    </a></td>
                                <td> <a href="#" class="btn-sm px-3 py-1 btn-btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteConfirmationModal"data-bs-placement="top"
                                        title="Delete">🗑️</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection
