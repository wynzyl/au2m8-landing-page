<x-layouts.site
    title="Projects"
    description="Selected web applications by au2m8: a healthcare management system with real-time patient monitoring and a school registration and accounts platform."
>
    <x-site.page-hero
        eyebrow="Projects"
        title="Work we're proud of."
        description="A selection of web applications built for real organisations and the people who run them every day."
    />

    <section class="bg-sand-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="space-y-20 sm:space-y-28">
                {{-- Healthcare --}}
                <article class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
                    <div class="group relative order-1 lg:order-none">
                        <div class="pointer-events-none absolute -inset-4 rounded-[2rem] bg-brand-500/10 blur-2xl" aria-hidden="true"></div>
                        <div class="relative overflow-hidden rounded-2xl border border-sand-200 bg-ink-950 p-2 shadow-2xl shadow-ink-950/10">
                            <div class="flex items-center gap-2 px-2 pb-2.5 pt-1">
                                <span class="size-2 rounded-full bg-white/20"></span>
                                <span class="size-2 rounded-full bg-white/20"></span>
                                <span class="size-2 rounded-full bg-white/20"></span>
                                <span class="ml-2 truncate text-[11px] text-white/35">healthcare &middot; triage queue</span>
                            </div>
                            <img
                                src="{{ asset('images/projects/healthcare-dashboard.webp') }}"
                                alt="Healthcare dashboard with a patient triage queue on the left and a triage assessment panel on the right"
                                width="816"
                                height="544"
                                class="w-full rounded-xl object-cover"
                            >
                        </div>
                    </div>

                    <div class="order-2 lg:order-none">
                        <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                            <span class="h-px w-8 bg-brand-500"></span>
                            Healthcare &middot; Dashboard
                        </p>
                        <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                            Healthcare Management System
                        </h2>
                        <p class="mt-5 text-base leading-relaxed text-ink-900/65">
                            A real-time patient monitoring system with analytics and reporting. Clinical staff can follow a live triage queue, review patient details, and capture assessment data as it happens.
                        </p>

                        <ul class="mt-7 space-y-3 text-sm text-ink-900/65">
                            <li class="flex gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Live triage queue and patient monitoring
                            </li>
                            <li class="flex gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Structured triage assessments and allergy checks
                            </li>
                            <li class="flex gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Analytics and reporting for clinical oversight
                            </li>
                        </ul>

                        <div class="mt-7 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Laravel</span>
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Livewire</span>
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">PostgreSQL</span>
                        </div>
                    </div>
                </article>

                {{-- MMHSI --}}
                <article class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
                    <div class="order-2 lg:order-1">
                        <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                            <span class="h-px w-8 bg-brand-500"></span>
                            Education &middot; School platform
                        </p>
                        <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                            SRAMS &mdash; School Registration &amp; Accounts Monitoring System
                        </h2>
                        <p class="mt-5 text-base leading-relaxed text-ink-900/65">
                            Built for Merryland Montessori &amp; High School, Inc., SRAMS brings school registration and account monitoring into a single, secure platform. Administrators get one place to manage student records and school accounts instead of scattered files and spreadsheets.
                        </p>

                        <ul class="mt-7 space-y-3 text-sm text-ink-900/65">
                            <li class="flex gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Centralised registration and student records
                            </li>
                            <li class="flex gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Accounts monitoring and school reporting
                            </li>
                            <li class="flex gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Role-based access for school staff
                            </li>
                        </ul>

                        <div class="mt-7 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Registration</span>
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Student accounts</span>
                            <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-ink-900/55 ring-1 ring-sand-200">Reporting</span>
                        </div>
                    </div>

                    <div class="group relative order-1 lg:order-2">
                        <div class="pointer-events-none absolute -inset-4 rounded-[2rem] bg-brand-500/10 blur-2xl" aria-hidden="true"></div>
                        <div class="relative overflow-hidden rounded-2xl border border-sand-200 bg-ink-950 p-2 shadow-2xl shadow-ink-950/10">
                            <div class="flex items-center gap-2 px-2 pb-2.5 pt-1">
                                <span class="size-2 rounded-full bg-white/20"></span>
                                <span class="size-2 rounded-full bg-white/20"></span>
                                <span class="size-2 rounded-full bg-white/20"></span>
                                <span class="ml-2 truncate text-[11px] text-white/35">srams &middot; sign in</span>
                            </div>
                            <img
                                src="{{ asset('images/projects/mmhsi.webp') }}"
                                alt="SRAMS sign-in screen for Merryland Montessori and High School, Inc."
                                width="816"
                                height="544"
                                loading="lazy"
                                class="w-full rounded-xl object-cover"
                            >
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- More work --}}
    <section class="border-t border-sand-200 bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex flex-col gap-8 rounded-3xl border border-sand-200 bg-sand-50 p-8 sm:p-12 lg:flex-row lg:items-center lg:justify-between">
                <div class="max-w-xl">
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                        <span class="h-px w-8 bg-brand-500"></span>
                        In progress
                    </p>
                    <h2 class="mt-4 text-2xl font-semibold tracking-[-0.03em] sm:text-3xl">More projects on the way.</h2>
                    <p class="mt-3 text-base leading-relaxed text-ink-900/60">
                        We keep the portfolio intentionally short — only systems that are live and doing real work. New projects will be added here as they ship.
                    </p>
                </div>
                <a
                    href="{{ route('contact') }}"
                    class="inline-flex shrink-0 items-center gap-2 self-start rounded-full bg-ink-950 px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-500 hover:text-ink-950 lg:self-auto"
                >
                    Discuss your project
                    <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <x-site.cta />
</x-layouts.site>
