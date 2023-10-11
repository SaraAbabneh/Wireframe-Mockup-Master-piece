@extends('front.layout.master')

@section('Titel')
    About
@endsection

@section('keywords')
    Orange,Coding,Irbid
@endsection

@section('Description')
@endsection

@section('contant')
    @include('front.about.sections.PageHeader')

    @include('front.about.sections.Fact')

    @include('front.about.sections.Feature')

    @include('front.about.sections.Team')
@endsection
