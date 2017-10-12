@extends ('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{form::text('title', '', ['class' => 'form-control', 'placeholder'=> 'Post Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> 'Body Text'])}}
        </div>
        <div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection