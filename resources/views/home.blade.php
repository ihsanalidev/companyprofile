@extends('layouts.app')

@section('title', 'DataOn One-Stop HR Solution')

@section('content')
    @include('components.hero-section')
    
    @include('components.client-logos')

    @include('components.role-content')

    @include('components.go-beyond-section')

    @include('components.awards-section')

    @include('components.experience')

    @include('components.customer-stories')

    @include('components.insight-resources')

    @include('components.hr-next-level-cta')

@endsection