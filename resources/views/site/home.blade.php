<x-layouts.site
    title="Web application development"
    description="au2m8 designs and builds custom web applications for healthcare, education, and growing businesses. Web development, UI/UX design, and APIs since 2009."
>
    {{-- Hero --}}
    <section class="relative overflow-hidden bg-ink-950 text-white">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(249,115,22,0.2),transparent_55%)]" aria-hidden="true"></div>
        <div class="pointer-events-none absolute inset-0 opacity-[0.06] [background-image:linear-gradient(to_right,#fff_1px,transparent_1px),linear-gradient(to_bottom,#fff_1px,transparent_1px)] [background-size:64px_64px] [mask-image:radial-gradient(ellipse_at_center,black,transparent_80%)]" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-7xl px-6 pb-20 pt-16 sm:pt-20 lg:px-8 lg:pb-28 lg:pt-24">
            <div class="grid items-center gap-16 lg:grid-cols-[1.05fr_1fr]">
                <div>
                    <p class="inline-flex items-center gap-2.5 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs font-medium text-white/70">
                        <span class="relative flex size-2">
                            <span class="absolute inline-flex size-full animate-ping rounded-full bg-brand-400 opacity-70"></span>
                            <span class="relative inline-flex size-2 rounded-full bg-brand-500"></span>
                        </span>
                        Web app development studio &middot; Est. 2009
                    </p>

                    <h1 class="mt-7 text-4xl font-semibold leading-[1.05] tracking-[-0.04em] text-balance sm:text-5xl xl:text-6xl">
                        Web apps built to move your business
                        <span class="text-brand-500">forward.</span>
                    </h1>

                    <p class="mt-6 max-w-xl text-base leading-relaxed text-white/60 sm:text-lg">
                        We design and build custom web applications for healthcare, education, and growing businesses — reliable systems that replace spreadsheets, manual processes, and off-the-shelf workarounds.
                    </p>

                    <div class="mt-9 flex flex-wrap items-center gap-3">
                        <a
                            href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 rounded-full bg-brand-500 px-6 py-3 text-sm font-semibold text-ink-950 transition hover:bg-brand-400"
                        >
                            Start a project
                            <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a
                            href="{{ route('projects') }}"
                            class="inline-flex items-center gap-2 rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-white transition hover:border-white/30 hover:bg-white/5"
                        >
                            Explore our work
                        </a>
                    </div>

                    <dl class="mt-12 grid max-w-lg gap-5 border-t border-white/10 pt-8 sm:grid-cols-3 sm:gap-6">
                        <div class="flex items-baseline justify-between gap-4 border-b border-white/5 pb-4 sm:block sm:border-0 sm:pb-0">
                            <dt class="text-xs uppercase tracking-[0.14em] text-white/40">Founded</dt>
                            <dd class="text-xl font-semibold tracking-tight sm:mt-2 sm:text-2xl">2009</dd>
                        </div>
                        <div class="flex items-baseline justify-between gap-4 border-b border-white/5 pb-4 sm:block sm:border-0 sm:pb-0">
                            <dt class="text-xs uppercase tracking-[0.14em] text-white/40">Approach</dt>
                            <dd class="text-xl font-semibold tracking-tight sm:mt-2 sm:text-2xl">Full-cycle</dd>
                        </div>
                        <div class="flex items-baseline justify-between gap-4 sm:block">
                            <dt class="text-xs uppercase tracking-[0.14em] text-white/40">Based in</dt>
                            <dd class="text-xl font-semibold tracking-tight sm:mt-2 sm:text-2xl">Philippines</dd>
                        </div>
                    </dl>
                </div>

                <div class="relative mx-auto w-full max-w-xl lg:max-w-none">
                    <div class="pointer-events-none absolute -inset-6 rounded-[2rem] bg-gradient-to-tr from-brand-500/20 via-transparent to-brand-300/10 blur-2xl" aria-hidden="true"></div>

                    <div class="relative rounded-2xl border border-white/10 bg-white/5 p-2 shadow-2xl shadow-black/50 backdrop-blur">
                        <div class="flex items-center gap-3 rounded-t-xl border-b border-white/10 px-3 py-2.5">
                            <div class="flex gap-1.5">
                                <span class="size-2.5 rounded-full bg-white/15"></span>
                                <span class="size-2.5 rounded-full bg-white/15"></span>
                                <span class="size-2.5 rounded-full bg-white/15"></span>
                            </div>
                            <div class="flex-1 truncate rounded-md bg-white/5 px-3 py-1 text-[11px] text-white/40">
                                app.au2m8.com/healthcare/triage
                            </div>
                        </div>

                        <img
                            src="{{ asset('images/projects/healthcare-dashboard.webp') }}"
                            alt="Healthcare management dashboard showing a live patient triage queue"
                            width="816"
                            height="544"
                            class="w-full rounded-b-xl object-cover"
                        >
                    </div>

                    <div class="absolute -bottom-5 left-4 flex items-center gap-3 rounded-xl border border-white/10 bg-ink-900/95 px-4 py-3 shadow-xl shadow-black/40 backdrop-blur sm:left-6">
                        <span class="relative flex size-2.5">
                            <span class="absolute inline-flex size-full animate-ping rounded-full bg-emerald-400 opacity-70"></span>
                            <span class="relative inline-flex size-2.5 rounded-full bg-emerald-400"></span>
                        </span>
                        <div>
                            <p class="text-xs font-semibold text-white">Live patient triage</p>
                            <p class="text-[11px] text-white/45">Real-time clinical dashboard</p>
                        </div>
                    </div>

                    <div class="absolute -right-3 -top-4 hidden rounded-full border border-white/10 bg-ink-900/95 px-4 py-2 text-[11px] font-medium text-white/60 shadow-xl shadow-black/40 backdrop-blur sm:block">
                        Laravel &middot; Livewire &middot; PostgreSQL
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stack strip --}}
    <section class="border-b border-sand-200 bg-white">
        <div class="mx-auto flex max-w-7xl flex-col gap-6 px-6 py-8 sm:flex-row sm:items-center sm:justify-between lg:px-8">
            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-ink-900/40">Built with tools we trust</p>
            <div class="flex flex-wrap items-center gap-x-8 gap-y-3 text-sm font-medium text-ink-900/55">
                <span>Laravel</span>
                <span>Livewire</span>
                <span>React JS</span>
                <span>Next.js</span>
                <span>Express</span>
                <span>TypeScript</span>
                <span>Tailwind CSS</span>
                <span>PostgreSQL</span>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section id="services" class="bg-sand-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                    <span class="h-px w-8 bg-brand-500"></span>
                    What we do
                </p>
                <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                    From first sketch to production release.
                </h2>
                <p class="mt-4 text-base leading-relaxed text-ink-900/60">
                    One small team handles the whole build — so the design, the code, and the business goals stay connected.
                </p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-3">
                <article class="group relative rounded-2xl border border-sand-200 bg-white p-7 transition hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl hover:shadow-ink-950/5">
                    <div class="flex items-start justify-between">
                        <span class="grid size-12 place-items-center rounded-xl bg-brand-50 text-brand-600">
                            <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                            </svg>
                        </span>
                        <span class="text-xs font-semibold text-ink-900/25">01</span>
                    </div>
                    <h3 class="mt-6 text-lg font-semibold tracking-tight">Web Development</h3>
                    <p class="mt-2.5 text-sm leading-relaxed text-ink-900/60">
                        Custom web applications built with Laravel and modern front-end tooling — dashboards, portals, and internal tools that fit the way you work.
                    </p>
                </article>

                <article class="group relative rounded-2xl border border-sand-200 bg-white p-7 transition hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl hover:shadow-ink-950/5">
                    <div class="flex items-start justify-between">
                        <span class="grid size-12 place-items-center rounded-xl bg-brand-50 text-brand-600">
                            <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                            </svg>
                        </span>
                        <span class="text-xs font-semibold text-ink-900/25">02</span>
                    </div>
                    <h3 class="mt-6 text-lg font-semibold tracking-tight">UI/UX Design</h3>
                    <p class="mt-2.5 text-sm leading-relaxed text-ink-900/60">
                        Beautiful, intuitive interfaces that make complex workflows feel simple for the people who use them every day.
                    </p>
                </article>

                <article class="group relative rounded-2xl border border-sand-200 bg-white p-7 transition hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl hover:shadow-ink-950/5">
                    <div class="flex items-start justify-between">
                        <span class="grid size-12 place-items-center rounded-xl bg-brand-50 text-brand-600">
                            <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </span>
                        <span class="text-xs font-semibold text-ink-900/25">03</span>
                    </div>
                    <h3 class="mt-6 text-lg font-semibold tracking-tight">API Development</h3>
                    <p class="mt-2.5 text-sm leading-relaxed text-ink-900/60">
                        Robust, scalable APIs and integrations that connect your systems, your data, and the tools your team already relies on.
                    </p>
                </article>
            </div>
        </div>
    </section>

    {{-- Selected work --}}
    <section id="work" class="border-y border-sand-200 bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div class="max-w-xl">
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                        <span class="h-px w-8 bg-brand-500"></span>
                        Selected work
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                        Systems people rely on daily.
                    </h2>
                </div>
                <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-ink-900 transition hover:text-brand-600">
                    View all projects
                    <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-2">
                <article class="group overflow-hidden rounded-2xl border border-sand-200 bg-sand-50 transition hover:shadow-xl hover:shadow-ink-950/5">
                    <div class="overflow-hidden">
                        <img
                            src="{{ asset('images/projects/healthcare-dashboard.webp') }}"
                            alt="Healthcare management dashboard with patient triage queue and assessment details"
                            width="816"
                            height="544"
                            loading="lazy"
                            class="aspect-16/10 w-full object-cover transition duration-500 group-hover:scale-[1.03]"
                        >
                    </div>
                    <div class="p-7">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-brand-600">Healthcare &middot; Dashboard</p>
                        <h3 class="mt-3 text-xl font-semibold tracking-tight">Healthcare Management System</h3>
                        <p class="mt-2.5 text-sm leading-relaxed text-ink-900/60">
                            Real-time patient monitoring with a live triage queue, structured assessments, and reporting for clinical teams.
                        </p>
                        <div class="mt-5 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Laravel</span>
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Livewire</span>
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">PostgreSQL</span>
                        </div>
                    </div>
                </article>

                <article class="group overflow-hidden rounded-2xl border border-sand-200 bg-sand-50 transition hover:shadow-xl hover:shadow-ink-950/5">
                    <div class="overflow-hidden bg-ink-900">
                        <img
                            src="{{ asset('images/projects/mmhsi.webp') }}"
                            alt="SRAMS sign-in screen for Merryland Montessori and High School, Inc."
                            width="816"
                            height="544"
                            loading="lazy"
                            class="aspect-16/10 w-full object-cover transition duration-500 group-hover:scale-[1.03]"
                        >
                    </div>
                    <div class="p-7">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-brand-600">Education &middot; School platform</p>
                        <h3 class="mt-3 text-xl font-semibold tracking-tight">SRAMS &mdash; Merryland Montessori &amp; High School</h3>
                        <p class="mt-2.5 text-sm leading-relaxed text-ink-900/60">
                            A single platform for school registration, student records, and accounts monitoring for school administrators.
                        </p>
                        <div class="mt-5 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Registration</span>
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Student accounts</span>
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Reporting</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section id="process" class="relative overflow-hidden bg-ink-950 py-20 text-white sm:py-28">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,rgba(249,115,22,0.12),transparent_55%)]" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-16">
                <div>
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-400">
                        <span class="h-px w-8 bg-brand-500"></span>
                        How we work
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                        A calm, clear process from idea to launch.
                    </h2>
                    <p class="mt-4 max-w-md text-base leading-relaxed text-white/55">
                        No black boxes and no disappearing acts. You see the work as it takes shape, and you talk directly to the people building it.
                    </p>
                    <a href="{{ route('about') }}" class="mt-8 inline-flex items-center gap-2 text-sm font-semibold text-brand-400 transition hover:text-brand-300">
                        More about the studio
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <div class="divide-y divide-white/10 border-y border-white/10">
                    <div class="flex gap-6 py-7">
                        <span class="text-sm font-semibold text-brand-400">01</span>
                        <div>
                            <h3 class="text-lg font-semibold tracking-tight">Discover</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/55">
                                We map the workflow, the data, and the people involved before writing a line of code — so the system solves the real problem.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-6 py-7">
                        <span class="text-sm font-semibold text-brand-400">02</span>
                        <div>
                            <h3 class="text-lg font-semibold tracking-tight">Design &amp; build</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/55">
                                Interface and system develop together in short cycles you can see, test, and react to while there is still room to change course.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-6 py-7">
                        <span class="text-sm font-semibold text-brand-400">03</span>
                        <div>
                            <h3 class="text-lg font-semibold tracking-tight">Launch &amp; support</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/55">
                                We ship, monitor, and stay available as your processes and team grow. The relationship does not end at handover.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why us --}}
    <section id="why" class="bg-sand-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid items-start gap-12 lg:grid-cols-2 lg:gap-20">
                <div>
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                        <span class="h-px w-8 bg-brand-500"></span>
                        Why au2m8
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                        A small team, by design.
                    </h2>
                    <p class="mt-4 max-w-md text-base leading-relaxed text-ink-900/60">
                        Since 2009 we have kept the studio deliberately small so every project gets senior attention, direct communication, and work we are happy to put our name on.
                    </p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl border border-sand-200 bg-white p-6">
                        <svg class="size-5 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <h3 class="mt-4 text-sm font-semibold">Direct access to the developers</h3>
                        <p class="mt-1.5 text-sm leading-relaxed text-ink-900/55">No account managers relaying messages. You speak to the people writing the code.</p>
                    </div>
                    <div class="rounded-2xl border border-sand-200 bg-white p-6">
                        <svg class="size-5 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <h3 class="mt-4 text-sm font-semibold">Built for the long run</h3>
                        <p class="mt-1.5 text-sm leading-relaxed text-ink-900/55">Clean code, sensible architecture, and documentation your team can grow with.</p>
                    </div>
                    <div class="rounded-2xl border border-sand-200 bg-white p-6">
                        <svg class="size-5 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <h3 class="mt-4 text-sm font-semibold">Decisions with context</h3>
                        <p class="mt-1.5 text-sm leading-relaxed text-ink-900/55">We learn your operations first, then recommend the simplest system that works.</p>
                    </div>
                    <div class="rounded-2xl border border-sand-200 bg-white p-6">
                        <svg class="size-5 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <h3 class="mt-4 text-sm font-semibold">Support after launch</h3>
                        <p class="mt-1.5 text-sm leading-relaxed text-ink-900/55">Software keeps evolving. We stay around to fix, improve, and extend it.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-site.cta />
</x-layouts.site>
