@extends('layouts.app')

@section('title', 'Journal — Aetherfield')

@section('content')
    <section class="max-w-7xl mx-auto px-6 lg:px-10 py-20">
        <h1 class="hero-title mb-14 text-center">From the journal</h1>

        <div class="grid md:grid-cols-3 gap-8">
            @php
                $posts = [
                    ['img' => 'bdb30674ad958933f85288ea31822252e1a378d0.png', 'title' => 'How to Build a Climate-Ready Data Stack', 'tag' => 'Insights', 'time' => '4 min'],
                    ['img' => '2b1a9f5d4045456ed370a4a05c8bf47cdc6d24e5.png', 'title' => "Sustainability Isn't a Side Project: Making Impact Operational", 'tag' => 'Strategy', 'time' => '7 min'],
                    ['img' => '92bc57b6c6836a6befe8825fe9548237096b97fe.png', 'title' => 'Inside the Aetherfield Model: How We Turn Data Into Action', 'tag' => 'Insights', 'time' => '5 min'],
                ];
            @endphp
            @foreach ($posts as $post)
                <a href="#" class="block group">
                    <div class="rounded-2xl overflow-hidden mb-4">
                        <img src="https://need-spiny-01266573.figma.site/_assets/v11/{{ $post['img'] }}" alt=""
                             class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <h3 class="font-semibold text-lg mb-2 group-hover:text-[var(--color-primary)]">{{ $post['title'] }}</h3>
                    <p class="text-sm text-[var(--color-text-muted)]">{{ $post['tag'] }} · {{ $post['time'] }}</p>
                </a>
            @endforeach
        </div>
    </section>
@endsection
