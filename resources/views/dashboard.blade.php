@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                    <h3>Your All Blog Posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
