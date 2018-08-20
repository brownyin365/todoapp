@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a href="{{ route('tasks.create') }}" style="font-size: 50px; text-align: center; border-style: 30px">Add tasks</a><BR>

                    <ul>
                    @foreach( $tasks as $task )
                        <li>
                            {{ $task->title }}
                            <BR>
                            <button onclick="window.location='{{ route('tasks.edit', $task) }}'" name="edit" class="btn btn-primary">Edit</button>
                            <form action="{{ route('tasks.delete', $task )}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <br>
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form>
                                <hr>
                        </li>
                    @endforeach
                    </ul>
            </div>
        </div>
    </div>
</div>
@endsection