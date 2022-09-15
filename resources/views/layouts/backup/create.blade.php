@extends('components.app')

@section('content')
<div>
    <h1>Masukin Berita</h1>
    {{ Form::open(['action' => 'App\Http\Controllers\CRUDController@store', 'method' => 'POST'])}}

        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::text('body', '', ['id'=>'body', 'class' => 'form-control', 'placeholder' => 'Body Text']) }}
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
</div>
@endsection