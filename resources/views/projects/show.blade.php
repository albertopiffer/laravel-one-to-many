@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>{{ $project->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1>{{ $project->type_id }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>{{ $project->description }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>{{ $project->url }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>{{ $project->client }}</p>
        </div>
    </div>

</div>

@endsection