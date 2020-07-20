@extends('layouts.app')

@section('content')


    <card class="card card-default">
        <card class="card-header">Create Category</card>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="Name"></label>

                    <input type="text" id="name" class="form-control" name="name">

                </div>

                <div class="form-group">
                    <button class="btn btn-success">Add Category</button>
                </div>
            </form>
        </div>
    </card>

@endsection
