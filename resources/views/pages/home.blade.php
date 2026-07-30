@extends('layouts.app')

@section('title', 'Aetherfield — Sustainability insights, built for business')

@section('content')

    {{-- ============ HERO ============ --}}
    <section class="max-w-7xl mx-auto px-6 lg:px-10 pt-16 pb-10 text-center">
        <h1 class="hero-title">Sustainability insights,<br><span style="color:var(--color-primary)">built for business</span></h1>
        <p class="text-lg text-[var(--color-text-muted)] max-w-2xl mx-auto mt-6">
            Track impact, reduce emissions, and accelerate progress—with clarity and confidence.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
            <a href="{{ route('get-started') }}#demo" class="btn btn-primary">Request a demo</a>
            <a href="#platform" class="btn btn-outline">Explore the platform</a>
        </div>

        <div class="mt-14 rounded-2xl overflow-hidden shadow-xl border border-[var(--color-border)]">
            <img src="https://need-spiny-01266573.figma.site/_assets/v11/df27fb1b971dffe928c194d3b69bceace8012400.png"
                 alt="Software dashboard showing sustainability metrics including energy use, emissions trend, and goal progress"
                 class="w-full h-auto">
        </div>
    </section>

    {{-- ============ FEATURES / STEPS ============ --}}
    <section id="platform" class="section-soft py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <h2 class="text-3xl md:text-4xl font-semibold text-center max-w-3xl mx-auto mb-14">
                Everything you need to measure, model, and act on sustainability
            </h2>

            <div class="grid md:grid-cols-2 gap-10 items-center mb-14">
                <img src="https://need-spiny-01266573.figma.site/_assets/v11/5dc5b89d5bb6610e0c3299ca165a3fdf4a1f104d.png"
                     alt="UI card displaying energy consumption data" class="rounded-2xl w-full">

                <div class="grid grid-cols-2 gap-8">
                    @php
                        $steps = [
                            ['num' => '001', 'title' => 'Track',  'desc' => 'Emissions, energy, and waste across your value chain'],
                            ['num' => '002', 'title' => 'Model',  'desc' => 'Forecast performance and goal alignment'],
                            ['num' => '003', 'title' => 'Report', 'desc' => 'Generate ESG disclosures, automate frameworks'],
                            ['num' => '004', 'title' => 'Act',    'desc' => 'Surface insights and operational next steps'],
                        ];
                    @endphp
                    @foreach ($steps as $step)
                        <div>
                            <div class="flex items-baseline gap-2 mb-2">
                                <h3 class="text-xl font-semibold">{{ $step['title'] }}</h3>
                                <span class="step-number">{{ $step['num'] }}</span>
                            </div>
                            <p class="text-sm text-[var(--color-text-muted)]">{{ $step['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('home') }}#platform" class="btn btn-primary">Explore features</a>
            </div>
        </div>
    </section>

    {{-- ============ CLARITY / VALUES ============ --}}
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <h2 class="text-3xl md:text-4xl font-semibold text-center mb-14">
                Built for clarity<br>Designed for action
            </h2>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $values = [
                        [
                            'icon' => 'a48fbaea42091ca1762a157b927dd10a9d06e74c.svg',
                            'title' => 'Clarity drives action',
                            'desc' => 'We believe better decisions start with better data—measured, visible, and trusted.',
                        ],
                        [
                            'icon' => '49b9dd5dfec0952f2fe5bc0aad95540f4b2f0378.svg',
                            'title' => 'Sustainability is a systems problem',
                            'desc' => 'We build tools that help teams connect the dots between operations, impact, and accountability.',
                        ],
                        [
                            'icon' => '820911cba9ac1c49bbf7cecdafa70fc44329870a.svg',
                            'title' => 'Progress over perfection',
                            'desc' => 'We support real-world momentum—helping organizations move from ambition to measurable change.',
                        ],
                    ];
                @endphp
                @foreach ($values as $value)
                    <div class="card">
                        <img src="https://need-spiny-01266573.figma.site/_assets/v11/{{ $value['icon'] }}" alt="" class="w-10 h-10 mb-5">
                        <h3 class="font-semibold text-lg mb-3">{{ $value['title'] }}</h3>
                        <p class="text-sm text-[var(--color-text-muted)]">{{ $value['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ CASE STUDY ============ --}}
    <section class="section-soft py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 grid md:grid-cols-2 gap-12 items-center">
            <img src="https://need-spiny-01266573.figma.site/_assets/v11/9956802c976bd636b84d69cde7c0581a5d96eb45.png"
                 alt="Group of colleagues greeting each other" class="rounded-2xl w-full">
            <div>
                <h2 class="text-2xl md:text-3xl font-semibold mb-5">Why Acme Inc chose Aetherfield</h2>
                <p class="text-[var(--color-text-muted)] mb-8">
                    With fragmented data and growing reporting pressure, Acme turned to Aetherfield to streamline
                    their ESG workflows. The result? Faster decisions, fewer spreadsheets, and 34% more coverage.
                </p>
                <a href="{{ route('journal') }}" class="btn btn-outline">Read case study</a>
            </div>
        </div>
    </section>

    {{-- ============ JOURNAL PREVIEW ============ --}}
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <h2 class="text-3xl md:text-4xl font-semibold mb-14">From the journal</h2>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                @php
                    $posts = [
                        ['img' => 'bdb30674ad958933f85288ea31822252e1a378d0.png', 'title' => 'How to Build a Climate-Ready Data Stack', 'tag' => 'Insights', 'time' => '4 min'],
                        ['img' => '2b1a9f5d4045456ed370a4a05c8bf47cdc6d24e5.png', 'title' => "Sustainability Isn't a Side Project: Making Impact Operational", 'tag' => 'Strategy', 'time' => '7 min'],
                        ['img' => '92bc57b6c6836a6befe8825fe9548237096b97fe.png', 'title' => 'Inside the Aetherfield Model: How We Turn Data Into Action', 'tag' => 'Insights', 'time' => '5 min'],
                    ];
                @endphp
                @foreach ($posts as $post)
                    <a href="{{ route('journal') }}" class="block group">
                        <div class="rounded-2xl overflow-hidden mb-4">
                            <img src="https://need-spiny-01266573.figma.site/_assets/v11/{{ $post['img'] }}" alt=""
                                 class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="font-semibold text-lg mb-2 group-hover:text-[var(--color-primary)]">{{ $post['title'] }}</h3>
                        <p class="text-sm text-[var(--color-text-muted)]">{{ $post['tag'] }} · {{ $post['time'] }}</p>
                    </a>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('journal') }}" class="btn btn-outline">View all articles</a>
            </div>
        </div>
    </section>

    {{-- ============ TESTIMONIAL ============ --}}
    <section class="section-soft py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <img src="https://need-spiny-01266573.figma.site/_assets/v11/f42c05dd2841492729d69d263e434fa89ac6612b.png"
                 alt="Elliot Williams portrait" class="w-16 h-16 rounded-full mx-auto mb-6 object-cover">
            <blockquote class="text-2xl md:text-3xl font-medium leading-snug mb-6">
                "We finally moved past spreadsheets and guesswork. Now we have real data to guide real decisions."
            </blockquote>
            <p class="font-semibold">Elliot Williams</p>
            <p class="text-sm text-[var(--color-text-muted)]">Head of Sustainability, Flux Materials</p>
        </div>
    </section>

@endsection
