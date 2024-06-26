<div>
    <div class="bg-[#2F9ED9] shadow-md" x-data="{ open: false}">
        <div class="max-w-7xl mx-auto px-4 lg:px-4">
            <div class="flex flex-row justify-between py-4">
                <div>
                    <a href="/" class="flex flex-row gap-3 lg:gap-4 items-center">
                        <img class="h-12" src="/images/mscc-logo.svg" />
                        <div class="flex flex-col">
                            <p class="mt-1 text-sm md:text-lg lg:text-xl font-pixel text-white">Developers Conference</p>
                            <p class="-mt-1 text-sm md:text-lg lg:text-xl font-pixel text-yellow-400">2024</p>
                        </div>
                    </a>
                </div>
                <div class="hidden lg:flex flex-row gap-3 items-center fill-gray-50 hover:fill-gray-200">
                    <a class="fill-gray-50 hover:fill-gray-200" href="https://twitter.com/MSCraftsman" target="_blank">
                        <svg class="h-6 w-6" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                    </a>
                    <a class="fill-gray-50 hover:fill-gray-200" href="https://www.facebook.com/MauritiusSoftwareCraftsmanshipCommunity" target="_blank">
                        <svg class="h-6 w-6" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                    </a>
                    <a class="fill-gray-50 hover:fill-gray-200" href="https://www.linkedin.com/groups/5033639/" target="_blank">
                        <svg role="img" class="h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a class="p-2 bg-[#E83F3B] transition duration-700 hover:bg-[#BF1F2E] hover:ease-in-out rounded-md uppercase text-sm font-bold font-button font-pixel text-gray-50" href="/speakers">Speakers</a>
                    <a class="p-2 bg-[#E83F3B] transition duration-700 hover:bg-[#BF1F2E] hover:ease-in-out rounded-md uppercase text-sm font-bold font-button font-pixel text-gray-50" href="/agenda">Agenda</a>
                    <a class="p-2 bg-[#E83F3B] transition duration-700 hover:bg-[#BF1F2E] hover:ease-in-out rounded-md uppercase text-sm font-bold font-button font-pixel text-gray-50" href="/dodododge" target="_blank">Dodo Dodge</a>
                    <a class="p-2 bg-[#FAEA48] transition duration-700 hover:bg-[#FAB71F] hover:ease-in-out rounded-md uppercase text-[#BF1F2E] text-sm font-bold font-button font-pixel" href="https://devcon2024.e-forms.mu/" target="_blank">Register</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="ml-10 space-x-4 lg:hidden grid place-items-center">
                    <button class="inline-block p-1 border border-2 border-white rounded-md text-base font-medium text-white hover:bg-opacity-75" @click="open = ! open">
                    <div class="flex flex-row space-x-2 mx-auto">
                                <span class="pt-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" :class="{ 'hidden' : open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" :class="{ 'hidden' : !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="menu" x-bind:style="open == 1 ? 'max-height: ' + $refs.menu.scrollHeight + 'px' : ''">
                <div class="flex flex-col mx-auto text-white">
                    </div>
                    <div class="mt-4 pb-4 flex flex-col gap-2">
                        <a class="p-2 bg-[#E83F3B] transition duration-700 hover:bg-[#BF1F2E] hover:ease-in-out rounded-md uppercase text-sm font-bold font-button font-pixel text-gray-50 text-center" href="/speakers">Speakers</a>
                        <a class="p-2 bg-[#E83F3B] transition duration-700 hover:bg-[#BF1F2E] hover:ease-in-out rounded-md uppercase text-sm font-bold font-button font-pixel text-gray-50 text-center" href="/agenda">Agenda</a>
                        <a class="p-2 bg-[#E83F3B] transition duration-700 hover:bg-[#BF1F2E] hover:ease-in-out rounded-md uppercase text-sm font-bold font-button font-pixel text-gray-50 text-center" href="/dodododge" target="_blank">Dodge Dodo</a>
                        <a class="p-2 bg-[#FAEA48] transition duration-700 hover:bg-[#FAB71F] hover:ease-in-out rounded-md uppercase text-[#BF1F2E] text-sm font-bold font-button font-pixel text-center" href="https://devcon2024.e-forms.mu/" target="_blank">Register</a>

                        <div class="mt-4 mx-auto flex flex-row gap-3 items-center fill-gray-50 hover:fill-gray-200">
                            <a href="https://twitter.com/MSCraftsman">
                                <svg class="h-6 w-6" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                            </a>
                            <a class="fill-gray-50 hover:fill-gray-200" href="https://www.facebook.com/MauritiusSoftwareCraftsmanshipCommunity">
                                <svg class="h-6 w-6" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                            </a>
                            <a class="fill-gray-50 hover:fill-gray-200" href="https://www.linkedin.com/groups/5033639/">
                                <svg role="img" class="h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
