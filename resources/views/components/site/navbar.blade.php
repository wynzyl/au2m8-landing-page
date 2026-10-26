@php
    $links = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Projects', 'route' => 'projects'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-white/10 bg-ink-950/85 backdrop-blur-xl">
    <nav class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-6 px-6 lg:px-8" aria-label="Main navigation">
        <a href="{{ route('home') }}" class="brand-lockup flex shrink-0 items-center gap-2.5" aria-label="au2m8 home">
            <img
                src="{{ asset('images/brand/au2m8-mark.png') }}"
                alt=""
                width="601"
                height="493"
                class="brand-mark h-9 w-auto sm:h-10"
            >
            <img
                src="{{ asset('images/brand/au2m8-wordmark.png') }}"
                alt=""
                width="875"
                height="172"
                class="brand-wordmark h-[17px] w-auto sm:h-5"
            >
        </a>

        <div class="hidden items-center gap-1 lg:flex">
            @foreach ($links as $link)
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'rounded-full px-4 py-2 text-sm font-medium transition',
                        'bg-white/10 text-white' => request()->routeIs($link['route']),
                        'text-white/60 hover:bg-white/5 hover:text-white' => ! request()->routeIs($link['route']),
                    ])
                    @if (request()->routeIs($link['route'])) aria-current="page" @endif
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-3">
            <a
                href="{{ route('contact') }}"
                class="hidden items-center gap-2 rounded-full bg-white px-5 py-2.5 text-sm font-semibold text-ink-950 transition hover:bg-brand-500 sm:inline-flex"
            >
                Start a project
                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                </svg>
            </a>

            <details class="group relative lg:hidden">
                <summary class="flex size-10 cursor-pointer list-none items-center justify-center rounded-xl border border-white/15 text-white transition hover:bg-white/10 [&::-webkit-details-marker]:hidden">
                    <span class="sr-only">Open menu</span>
                    <svg class="size-5 group-open:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path stroke-linecap="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
                    </svg>
                    <svg class="hidden size-5 group-open:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path stroke-linecap="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </summary>

                <div class="absolute right-0 top-[calc(100%+0.75rem)] hidden w-60 rounded-2xl border border-white/10 bg-ink-900 p-2 shadow-2xl shadow-black/50 group-open:block">
                    @foreach ($links as $link)
                        <a
                            href="{{ route($link['route']) }}"
                            @class([
                                'block rounded-xl px-4 py-2.5 text-sm font-medium transition',
                                'bg-white/10 text-white' => request()->routeIs($link['route']),
                                'text-white/65 hover:bg-white/5 hover:text-white' => ! request()->routeIs($link['route']),
                            ])
                        >
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                    <a href="{{ route('contact') }}" class="mt-1 block rounded-xl bg-brand-500 px-4 py-2.5 text-sm font-semibold text-ink-950">
                        Start a project
                    </a>
                </div>
            </details>
        </div>
    </nav>
</header>
