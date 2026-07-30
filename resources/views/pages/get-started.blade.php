@extends('layouts.app')

@section('title', 'Get Started — Aetherfield')

@section('content')
    <section id="demo" class="max-w-2xl mx-auto px-6 lg:px-10 py-24">
        <h1 class="hero-title text-center mb-4">Request a demo</h1>
        <p class="text-center text-[var(--color-text-muted)] mb-12">
            Tell us a bit about your team and we'll get back to you within one business day.
        </p>

        @if (session('success'))
            <div class="card mb-8 text-center" style="border-color:var(--color-primary)">
                <p class="font-medium" style="color:var(--color-primary)">{{ session('success') }}</p>
            </div>
        @endif

        <form method="POST" action="{{ route('get-started.submit') }}" class="card space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-1">Full name</label>
                <input type="text" name="name" required value="{{ old('name') }}"
                       class="w-full rounded-lg border border-[var(--color-border)] px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[var(--color-secondary)]">
                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Work email</label>
                <input type="email" name="email" required value="{{ old('email') }}"
                       class="w-full rounded-lg border border-[var(--color-border)] px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[var(--color-secondary)]">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Company</label>
                <input type="text" name="company" value="{{ old('company') }}"
                       class="w-full rounded-lg border border-[var(--color-border)] px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[var(--color-secondary)]">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">What are you hoping to solve?</label>
                <textarea name="message" rows="4"
                          class="w-full rounded-lg border border-[var(--color-border)] px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[var(--color-secondary)]">{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary w-full justify-center">Request a demo</button>
        </form>
    </section>
@endsection
