@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-end mb-2">
        <a href="{{'categories.create'}}" class="btn btn-success float-right">Add Category</a>
    </div>

    <card class="card card-default">
        <card class="card-header">Categories</card>
    </card>

@endsection
