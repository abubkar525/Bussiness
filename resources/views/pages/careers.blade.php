@extends('layouts.app')

@section('title', 'Careers — Aetherfield')

@section('content')
    <section class="max-w-4xl mx-auto px-6 lg:px-10 py-24 text-center">
        <h1 class="hero-title mb-6">Join Aetherfield</h1>
        <p class="text-lg text-[var(--color-text-muted)] max-w-2xl mx-auto mb-12">
            We're always looking for people who care about turning sustainability ambition
            into measurable action. Open roles will be listed here.
        </p>

        <div class="grid gap-4 max-w-lg mx-auto text-left">
            <div class="card flex items-center justify-between">
                <span class="font-medium">Product Designer</span>
                <a href="{{ route('get-started') }}" class="btn btn-outline btn-sm">Apply</a>
            </div>
            <div class="card flex items-center justify-between">
                <span class="font-medium">Backend Engineer (Laravel)</span>
                <a href="{{ route('get-started') }}" class="btn btn-outline btn-sm">Apply</a>
            </div>
        </div>
    </section>
@endsection
