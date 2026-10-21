@props([
    'eyebrow',
    'title',
    'description' => null,
])

<section class="relative overflow-hidden border-b border-white/5 bg-ink-950 text-white">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(249,115,22,0.18),transparent_55%)]" aria-hidden="true"></div>
    <div class="pointer-events-none absolute inset-0 opacity-[0.06] [background-image:linear-gradient(to_right,#fff_1px,transparent_1px),linear-gradient(to_bottom,#fff_1px,transparent_1px)] [background-size:64px_64px] [mask-image:radial-gradient(ellipse_at_center,black,transparent_85%)]" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-7xl px-6 pb-16 pt-14 sm:pt-18 lg:px-8 lg:pb-24 lg:pt-24">
        <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-400">
            <span class="h-px w-8 bg-brand-500"></span>
            {{ $eyebrow }}
        </p>

        <h1 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.035em] text-balance sm:text-5xl lg:text-6xl">
            {{ $title }}
        </h1>

        @if ($description)
            <p class="mt-6 max-w-2xl text-base leading-relaxed text-white/60 sm:text-lg">
                {{ $description }}
            </p>
        @endif

        {{ $slot }}
    </div>
</section>
