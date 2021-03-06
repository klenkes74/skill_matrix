@extends('layouts.app')

@section('top_navbar_navigation_button')
    <a href="{{ route('skill-groups.index') }}" class="nav-item btn btn-primary"><i class="fa fa-long-arrow-left"></i> Skill-Groups <span class="sr-only">(current)</span></a>
@endsection

@section('content')
    <h3><i class="fa fa-object-group"></i> Skill Group anlegen</h3>

    {{ Form::open(['route' => 'skill-groups.store']) }}
        @include('skill_groups/_form', ['skillGroup' => $skillGroup])
    {{ Form::close() }}
@endsection