@php
    $links = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Projects', 'route' => 'projects'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<footer id="site-footer" class="border-t border-white/10 bg-ink-950 text-white">
    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
        <div class="grid gap-12 lg:grid-cols-[1.4fr_1fr_1fr_1.2fr]">
            <div>
                <a href="{{ route('home') }}" class="brand-lockup inline-flex items-center gap-3" aria-label="au2m8 home">
                    <img
                        src="{{ asset('images/brand/au2m8-mark.png') }}"
                        alt=""
                        width="601"
                        height="493"
                        class="brand-mark h-11 w-auto"
                    >
                    <img
                        src="{{ asset('images/brand/au2m8-wordmark.png') }}"
                        alt=""
                        width="875"
                        height="172"
                        class="brand-wordmark h-6 w-auto"
                    >
                </a>
                <p class="mt-5 max-w-xs text-sm leading-relaxed text-white/55">
                    Building the web, streamlining the process. Custom web applications designed and built in the Philippines since 2009.
                </p>
            </div>

            <div>
                <h2 class="text-xs font-semibold uppercase tracking-[0.18em] text-white/40">Explore</h2>
                <ul class="mt-5 space-y-3 text-sm">
                    @foreach ($links as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" class="text-white/65 transition hover:text-brand-400">{{ $link['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h2 class="text-xs font-semibold uppercase tracking-[0.18em] text-white/40">What we do</h2>
                <ul class="mt-5 space-y-3 text-sm text-white/65">
                    <li>Web development</li>
                    <li>UI/UX design</li>
                    <li>API development</li>
                    <li>Support &amp; maintenance</li>
                </ul>
            </div>

            <div>
                <h2 class="text-xs font-semibold uppercase tracking-[0.18em] text-white/40">Get in touch</h2>
                <ul class="mt-5 space-y-3 text-sm">
                    <li>
                        <x-site.email-link class="text-white/65 transition hover:text-brand-400">support@au2m8dev.com</x-site.email-link>
                    </li>
                    <li>
                        <a href="tel:+639190959251" class="text-white/65 transition hover:text-brand-400">+63 (919) 095-9251</a>
                    </li>
                    <li class="leading-relaxed text-white/65">
                        Poblacion, Urdaneta City,<br>
                        Pangasinan, 2428 Philippines
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-14 flex flex-col gap-4 border-t border-white/10 pt-8 text-xs text-white/40 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} au2m8. All rights reserved.</p>
            <p class="flex items-center gap-2">
                <span class="size-1.5 rounded-full bg-brand-500"></span>
                Urdaneta City, Pangasinan &middot; Philippines
            </p>
        </div>
    </div>
</footer>
