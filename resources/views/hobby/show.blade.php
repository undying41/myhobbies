@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Hobby Detail</div>

                <div class="card-body">
                    <h4>{{ $hobby->name }}</h4>
                    <p>{{ $hobby->description }}</p>
                </div>
            </div>
            <div class="md-2">
                <a href="/hobby" class="btn btn-primary btn-sm mt-2"><i class="fas fa-arrow-circle-left"></i> Back to Overview</a>
            </div>
        </div>
    </div>
</div>
@endsection