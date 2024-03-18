@extends('frontend.layouts.app')

@section('title','Home')
@section('content')
    @include('frontend.pages.Home.header')
    @include('frontend.pages.About.about')
    @include('frontend.pages.Services.services')
    @include('frontend.pages.Details.details')
    @include('frontend.pages.Projects.projects')

@endsection