<x-layouts.site
    title="About"
    description="Founded in 2009, au2m8 is a web application studio in Urdaneta City, Pangasinan. Meet the small team behind the work."
>
    <x-site.page-hero
        eyebrow="About au2m8"
        title="A small studio with a long view."
        description="Founded in 2009, au2m8 builds web applications that help businesses thrive in the digital age."
    />

    {{-- Story --}}
    <section class="bg-sand-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:gap-20">
                <div>
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                        <span class="h-px w-8 bg-brand-500"></span>
                        Our story
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                        Seventeen years of building for the web.
                    </h2>

                    <div class="mt-6 space-y-5 text-base leading-relaxed text-ink-900/65">
                        <p>
                            au2m8 started in 2009 with a simple belief: the web should make work easier, not more complicated. What began as a small development practice has grown into a focused studio building complete web applications for organisations that depend on their systems every day.
                        </p>
                        <p>
                            Our work spans healthcare, education, and business operations — from patient monitoring dashboards and school registration platforms to the APIs and internal tools behind them. Every project starts with understanding how people actually work, not with a template.
                        </p>
                        <p>
                            We stay deliberately small. The people you meet at the start are the people who design, build, and support your system. That continuity is the point.
                        </p>
                    </div>
                </div>

                <aside class="rounded-3xl border border-sand-200 bg-white p-8 shadow-xl shadow-ink-950/[0.03] sm:p-10">
                    <h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-ink-900/40">Studio at a glance</h3>
                    <dl class="mt-7 space-y-6">
                        <div class="border-b border-sand-200 pb-6">
                            <dt class="text-xs uppercase tracking-[0.12em] text-ink-900/40">Founded</dt>
                            <dd class="mt-1.5 text-lg font-semibold tracking-tight">2009</dd>
                        </div>
                        <div class="border-b border-sand-200 pb-6">
                            <dt class="text-xs uppercase tracking-[0.12em] text-ink-900/40">Based in</dt>
                            <dd class="mt-1.5 text-lg font-semibold tracking-tight">Urdaneta City, Pangasinan</dd>
                        </div>
                        <div class="border-b border-sand-200 pb-6">
                            <dt class="text-xs uppercase tracking-[0.12em] text-ink-900/40">Focus</dt>
                            <dd class="mt-1.5 text-lg font-semibold tracking-tight">Custom web applications</dd>
                        </div>
                        <div>
                            <dt class="text-xs uppercase tracking-[0.12em] text-ink-900/40">How we work</dt>
                            <dd class="mt-1.5 text-lg font-semibold tracking-tight">Design &rarr; build &rarr; support</dd>
                        </div>
                    </dl>
                </aside>
            </div>
        </div>
    </section>

    {{-- Mission --}}
    <section class="relative overflow-hidden bg-ink-950 py-20 text-white sm:py-24">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(249,115,22,0.16),transparent_55%)]" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <div class="max-w-4xl">
                <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-400">
                    <span class="h-px w-8 bg-brand-500"></span>
                    Our mission
                </p>
                <blockquote class="mt-6 text-2xl font-medium leading-snug tracking-[-0.02em] text-balance sm:text-3xl lg:text-4xl">
                    &ldquo;To deliver exceptional web solutions that help businesses thrive in the digital age.&rdquo;
                </blockquote>
            </div>
        </div>
    </section>

    {{-- Values --}}
    <section class="border-b border-sand-200 bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                    <span class="h-px w-8 bg-brand-500"></span>
                    What we value
                </p>
                <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                    Principles we build by.
                </h2>
            </div>

            <div class="mt-12 grid gap-px overflow-hidden rounded-2xl border border-sand-200 bg-sand-200 md:grid-cols-3">
                <div class="bg-white p-8">
                    <span class="text-xs font-semibold text-ink-900/25">01</span>
                    <h3 class="mt-5 text-lg font-semibold tracking-tight">Clarity over cleverness</h3>
                    <p class="mt-2.5 text-sm leading-relaxed text-ink-900/60">
                        The best systems are the ones your team can understand, trust, and keep using long after launch day.
                    </p>
                </div>
                <div class="bg-white p-8">
                    <span class="text-xs font-semibold text-ink-900/25">02</span>
                    <h3 class="mt-5 text-lg font-semibold tracking-tight">Craft in the details</h3>
                    <p class="mt-2.5 text-sm leading-relaxed text-ink-900/60">
                        Performance, accessibility, and maintainability are part of the product — not extras added at the end.
                    </p>
                </div>
                <div class="bg-white p-8">
                    <span class="text-xs font-semibold text-ink-900/25">03</span>
                    <h3 class="mt-5 text-lg font-semibold tracking-tight">Partnership, not handoff</h3>
                    <p class="mt-2.5 text-sm leading-relaxed text-ink-900/60">
                        We stay involved after release, because software keeps evolving alongside the business it serves.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Team --}}
    <section class="bg-sand-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                    <span class="h-px w-8 bg-brand-500"></span>
                    Our team
                </p>
                <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                    The people behind the work.
                </h2>
                <p class="mt-4 text-base leading-relaxed text-ink-900/60">
                    Design and engineering under one roof — small enough to stay close to every decision.
                </p>
            </div>

            @php
                $team = [
                    ['name' => 'Wenzel', 'role' => 'Lead Developer', 'photo' => 'images/team/me.png'],
                    ['name' => 'Chel', 'role' => 'UI/UX Designer', 'photo' => 'images/team/Pat.jpg'],
                    ['name' => 'Ian Benedict', 'role' => 'Backend Engineer', 'photo' => 'images/team/Ian.png'],
                ];
            @endphp

            <div class="mt-12 grid gap-5 sm:grid-cols-3">
                @foreach ($team as $member)
                    <article class="group relative overflow-hidden rounded-2xl border border-sand-200 bg-white p-7 transition hover:border-brand-200 hover:shadow-xl hover:shadow-ink-950/5">
                        <div class="pointer-events-none absolute -right-10 -top-10 size-32 rounded-full bg-brand-50 blur-2xl" aria-hidden="true"></div>
                        <div class="relative">
                            <div class="size-16 overflow-hidden rounded-2xl bg-ink-950 ring-1 ring-ink-800">
                                <img
                                    src="{{ asset($member['photo']) }}"
                                    alt="Portrait of {{ $member['name'] }}"
                                    class="size-full object-cover"
                                    loading="lazy"
                                >
                            </div>
                            <h3 class="mt-6 text-lg font-semibold tracking-tight">{{ $member['name'] }}</h3>
                            <p class="mt-1 text-sm text-ink-900/55">{{ $member['role'] }}</p>
                            <div class="mt-6 flex items-center gap-2 text-xs font-medium text-ink-900/35">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                au2m8 team
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <x-site.cta
        title="Let's talk about what you're building."
        description="Whether you have a detailed brief or just a problem that needs solving, we are happy to start there."
    />
</x-layouts.site>
