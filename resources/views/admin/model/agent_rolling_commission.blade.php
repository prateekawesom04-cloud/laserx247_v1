@extends('admin.model.master')

@section('title', 'Modal Title')

@section('form')
    <form action="#" method="POST">
        @csrf

        <!-- Fancy -->
        <div class="form-group">
            <label for="fancy">Fancy</label>
            <input type="number" name="fancy" id="fancy" class="form-control" value="0">
        </div>

        <!-- Matka -->
        <div class="form-group">
            <label for="matka">Matka</label>
            <input type="number" name="matka" id="matka" class="form-control" value="0">
        </div>

        <!-- Casino -->
        <div class="form-group">
            <label for="casino">Casino</label>
            <input type="number" name="casino" id="casino" class="form-control" value="0">
        </div>

        <!-- Binary -->
        <div class="form-group">
            <label for="binary">Binary</label>
            <input type="number" name="binary" id="binary" class="form-control" value="0">
        </div>

        <!-- Sportbook -->
        <div class="form-group">
            <label for="sportbook">Sportbook</label>
            <input type="number" name="sportbook" id="sportbook" class="form-control" value="0">
        </div>

        <!-- Bookmaker -->
        <div class="form-group">
            <label for="bookmaker">Bookmaker</label>
            <input type="number" name="bookmaker" id="bookmaker" class="form-control" value="0">
        </div>

        <!-- Submit Button -->
        <a type="submit" class="btn btn-primary">Submit</a>
    </form>
@endsection
