@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">All hobbies</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($hobbies as $hobby)
                        <li class="list-group-item">
                            <a title="Show Details" href="/hobby/{{ $hobby->id }}">{{ $hobby->name }}</a>
                            <form action="/hobby/{{ $hobby->id }}" class="d-inline" method="post">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Delete" class="btn btn-sm btn-outline-danger ml-2 float-right" href="/hobby/{{ $hobby->id }}"></input>
                            </form>
                            <a class="btn btn-sm btn-light ml-2 float-right" href="/hobby/{{ $hobby->id }}/edit"><i class="fas fa-edit"></i> Edit Hobby</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="md-2">
                <a href="hobby/create" class="btn btn-success btn-sm mt-2"><i class="fas fa-plus-circle"></i> Create new hobby</a>
            </div>
        </div>
    </div>
</div>
@endsection