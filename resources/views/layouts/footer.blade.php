<div x-data="{ openModal: false }">
    <div class="lg:-mb-28 grid place-items-center">
        <img src="/images/mscc-logo-dark.svg" class="h-20" />
        <div class="px-4 lg:px-0 py-2 text-center text-md lg:text-lg font-pixel uppercase">Mauritius Software Craftsmanship Community</div>
        <div class="mt-3 lg:mt-4 max-w-6xl mx-auto flex flex-col lg:flex-row justify-between gap-4 lg:gap-8 font-pixel text-md lg:text-lg">
            <a href="/code-of-conduct" class="px-3 py-2 text-[#FAB71F] bg-gray-800 hover:bg-[#E83F3B] rounded-md text-center">Code of Conduct</a>
            <div x-on:click="openModal = true" class="px-3 py-2 text-[#FAB71F] bg-gray-800 hover:bg-[#E83F3B] rounded-md text-center cursor-pointer">Become a Sponsor</div>
            <a href="/community" class="px-3 py-2 text-[#FAB71F] bg-gray-800 hover:bg-[#E83F3B] rounded-md text-center">Community</a>
        </div>
    </div>
    <div class="flex flex-row justify-between">
        <img src="/images/tree-left.svg"  class="h-12 lg:h-60" />
        <img src="/images/tree-right.svg" class="h-12 lg:h-60"  />
    </div>
    <img src="/images/footer-grass.svg" />

    <!-- Sponsor Modal -->
    <div
        x-show="openModal"
        style="display: none"
        x-on:keydown.escape.prevent.stop="openModal = false"
        role="dialog"
        aria-modal="true"
        x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 z-10 overflow-y-auto"
    >
        <!-- Background -->
        <div x-show="openModal" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

        <!-- Sponsorship Message -->
        <div
            x-show="openModal" x-transition
            x-on:click="openModal = false"
            class="relative flex min-h-screen items-center justify-center p-4"
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="openModal"
                class="relative w-full max-w-2xl overflow-y-auto rounded-xl bg-white p-12 shadow-lg"
            >
                <!-- Title -->
                <h2 class="text-3xl font-bold" :id="$id('modal-title')">Sponsorship</h2>

                <!-- Content -->
                <p class="mt-2 text-gray-600">Please reach out to <a class="underline hover:text-red-500" href="mailto:conference@mscc.mu">conference@mscc.mu</a> for more information.</p>

            </div>
        </div>
    </div>

</div>
