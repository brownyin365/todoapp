@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('tasks.store') }}" method="post">
 
				    {{ csrf_field() }}
				 
				    <textarea name="title"></textarea>
				 
				    <BR>
				    <button type="submit" class="btn btn-primary">Submit</button>
				 
				</form>
            </div>
        </div>
    </div>
</div>
@endsection