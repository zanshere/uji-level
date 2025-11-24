@extends('layouts.app')

{{-- Tambahkan title --}}

@section('content')
    @include('layouts.partials.navbar')
    @include('components.sections.hero')
    @include('components.sections.price')
    @include('components.sections.contact')
    @include('layouts.partials.footer')
@endsection
