@extends('front.layout.master')

@section('Titel')
    Cohort3
@endsection

@section('keywords')
    Orange , Coding , Full stack web developer, Backend , FrontEnd ,Full stack ,PHP
@endsection

@section('Description')
@endsection

@section('css-page')
    @include('front.chort3.sections.css')
@endsection


@section('contant')
    @include('front.chort3.sections.PageHeader')

    @include('front.chort3.sections.Filter')

    @include('front.chort3.sections.Members')

    @include('front.chort3.sections.js')
    
@endsection


@section('js-page')
    @include('front.chort3.sections.js')
@endsection
