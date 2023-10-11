@extends('front.layout.master')

@section('Titel')
    Team
@endsection

@section('keywords')
    Orange,Coding,Irbid
@endsection

@section('Description')
@endsection

@section('contant')
    @include('front.team.sections.PageHeader')

    @include('front.team.sections.Team')
    
@endsection
