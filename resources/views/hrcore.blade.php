@extends('layouts.app')

@section('title', 'DataOn One-Stop HR Solution')

@section('breadcrumb')
    @include('partials.breadcrumb', [
        'breadcrumb' => [
            ['name' => 'Home', 'url' => '/'],
            ['name' => 'HR Core', 'url' => null]
        ]
    ])
@endsection

@section('content')

    <!-- @include('components.form-input-demo') -->

    @include('components.hrcore1')

    @include('components.hrcore2')

    @include('components.client-logos')

    @include('components.hr-next-level-cta')

@endsection