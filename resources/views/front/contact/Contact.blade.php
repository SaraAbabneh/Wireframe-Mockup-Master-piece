@extends('front.layout.master')

@section('Titel')
    Contact
@endsection

@section('keywords')
    Orange,Coding,Irbid
@endsection

@section('Description')
@endsection

@section('contant')
    @include('front.contact.sections.PageHeader')

    @include('front.contact.sections.Contact')
    
@endsection
