@extends('layouts.admin')

@section('content')
<h1>{{$project->title}}</h1>
<h5>{{$project->slug}}</h5>
@if($project->cover_image)
<img src="{{asset('storage/' . $project->cover_image)}}" alt="{{$project->title}}">
@endif
<div class="type">
    <strong>Type:</strong>
    {{ $project->type ? $project->type->name : 'Uncategorized'}}
</div>
<p>{{$project->description}}</p>
<div>{{$project->vote}}</div>
<div>{{$project->link}}</div>
@endsection