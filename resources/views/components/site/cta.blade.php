@props([
    'title' => 'Have a system in mind?',
    'description' =>
        'Tell us what you are trying to build. We will help you scope it, design it, and ship it — from the first sketch to ongoing support.',
])

<section class="bg-sand-50 py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-3xl bg-ink-950 px-8 py-14 text-white sm:px-12 sm:py-16 lg:px-16">
            <div class="pointer-events-none absolute -right-24 -top-32 size-96 rounded-full bg-brand-500/20 blur-3xl"
                aria-hidden="true"></div>
            <div class="pointer-events-none absolute inset-0 opacity-[0.06] [background-image:linear-gradient(to_right,#fff_1px,transparent_1px),linear-gradient(to_bottom,#fff_1px,transparent_1px)] [background-size:56px_56px] [mask-image:radial-gradient(ellipse_at_bottom_left,black,transparent_80%)]"
                aria-hidden="true"></div>

            <div class="relative flex flex-col gap-10 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl">
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-brand-400">
                        <span class="h-px w-8 bg-brand-500"></span>
                        Next step
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-[-0.03em] text-balance sm:text-4xl">
                        {{ $title }}
                    </h2>
                    <p class="mt-4 max-w-xl text-base leading-relaxed text-white/55">
                        {{ $description }}
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-full bg-brand-500 px-6 py-3 text-sm font-semibold text-ink-950 transition hover:bg-brand-400">
                        Start a conversation
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <x-site.email-link
                        class="inline-flex items-center rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-white transition hover:border-white/30 hover:bg-white/5">
                        support@au2m8dev.com
                    </x-site.email-link>
                </div>
            </div>
        </div>
    </div>
</section>
