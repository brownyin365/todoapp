@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('tasks.update', $task) }}" method="post">
 
					    {{ csrf_field() }}
					 
					    {{ method_field('PUT') }}
					 
					    <textarea name="title">{{ $task->title }}</textarea>
					 
					    <button type="submit" class="btn btn-primary">Submit</button>
					 
				</form>
            </div>
        </div>
    </div>
</div>
@endsection