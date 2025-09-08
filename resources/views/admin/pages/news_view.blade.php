@extends('admin.master')

@section('body')
    <div class="container-fluid p-4">
        <div class="card shadow rounded bg-white" style="max-width: 600px; margin: 0 auto;">
            <div class="card-header bg-success text-white p-2 rounded-top">
                <h4 class="mb-0">Add News</h4>
            </div>
            <form class="px-4">
                <!-- Add Message Button on the right side -->
                <div class="d-flex justify-content-end mb-3 p-2">
                    <a type="button" class="btn btn-primary">Add Message</a>
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
                                <td><a href="#" class="btn btn-warning btn-sm px-3 py-1"><i
                                            class="fa fa-edit"></i></a></td>
                                <td><a href="#" class="btn btn-danger btn-sm px-3 py-1"><i
                                            class="fa fa-trash"></i></a></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection
