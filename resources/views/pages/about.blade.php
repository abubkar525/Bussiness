@extends('layouts.app')

@section('title', 'About — Aetherfield')

@section('content')
    <section class="max-w-4xl mx-auto px-6 lg:px-10 py-24 text-center">
        <h1 class="hero-title mb-6">About Aetherfield</h1>
        <p class="text-lg text-[var(--color-text-muted)] max-w-2xl mx-auto">
            We build software that helps mission-driven teams turn sustainability data into
            clear, confident action. This page is ready for your company story, team bios,
            mission statement, and values.
        </p>
        <div class="mt-10">
            <a href="{{ route('careers') }}" class="btn btn-primary">See open roles</a>
        </div>
    </section>
@endsection
