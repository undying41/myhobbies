@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Tags</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($tags as $tag)
                        <li class="list-group-item">
                            <span style="font-size: 130%;" class="mr-2 badge badge-{{ $tag->style }}">{{ $tag->name }}</span>

                            <form style="display: inline;" action="/tag/{{ $tag->id }}" method="post" class="float-right">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-outline-danger btn-sm ml-2" type="submit" value="Delete">
                            </form>
                            <a class="ml-2 btn btn-sm btn-outline-primary float-right" href="/tag/{{ $tag->id }}/edit"><i class="fas fa-edit"></i> Edit</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="md-2">
                <a class="btn btn-success btn-sm mt-3" href="/tag/create"><i class="fas fa-plus-circle"></i> New Tag</a>
            </div>
        </div>
    </div>
</div>
@endsection