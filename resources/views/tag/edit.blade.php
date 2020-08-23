@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Tag</div>
                <div class="card-body">
                    <form action="/tag/{{ $tag->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" id="name" name="name" value="{{ $tag->name }}">
                            <small class="form-text text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</small>
                        </div>

                        <div class="form-group">
                            <label for="name">Style</label>
                            <input type="text" class="form-control {{ $errors->has('style') ? 'border-danger' : '' }}" id="style" name="style" value="{{ $tag->style }}">
                            <small class="form-text text-danger">{{ $errors->has('style') ? $errors->first('style') : '' }}</small>
                        </div>

                        <input class="btn btn-primary mt-4" type="submit" value="Save Tag">
                    </form>
                    <a class="btn btn-primary float-right" href="/tag"><i class="fas fa-arrow-circle-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection