<x-guest-layout>
    @php
    // Array of outline classes
    $outlineClasses = ['outline-yellow-300', 'outline-blue-300', 'outline-red-300', 'outline-green-300'];
    // Select a random outline class
    $randomOutlineClass = $outlineClasses[array_rand($outlineClasses)];
    @endphp

    <section class="mt-2 lg:mt-8 mb-16 max-w-5xl py-5 px-3 mx-auto speaker">
        @foreach ($speaker as $s)

            <nav class="hidden flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 ">
                    <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-mustard dark:text-gray-400">
                        Home
                    </a>
                    </li>
                    <li>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="{{ route('speakers') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-mustard md:ml-2 dark:text-gray-400">Speakers</a>
                    </div>
                    </li>
                    <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-800 md:ml-2 dark:text-gray-400">{{ $s['fullName'] }}</span>
                    </div>
                    </li>
                </ol>
            </nav>

            <div class="speaker__container">

                <div class="pt-2 text-center space-y-3">
                    <img class="w-64 h-64 rounded-full mx-auto outline outline-offset-2 outline-4 @php echo $randomOutlineClass; @endphp drop-shadow-xl" src="{{ $s['profilePicture'] }}">
                    <figcaption class="font-large">
                        <div class="uppercase text-2xl font-bold text-slate-800 mb-1">
                            {{ $s['fullName'] }}
                        </div>
                        <div class="font-dm text-md font-bold text-slate-500 max-w-2xl mx-auto">
                            {{ $s['tagLine'] }}
                        </div>
                        @if ($s['links'])
                        <div class="social--icons">
                            @foreach ($s['links'] as $link)
                            <a href="{{ $link['url'] }}" target="_blank" class="icon">
                                @if ($link['title'] == 'Twitter')
                                <img src="{{ asset('images/svg/twitter.svg') }}" alt="">
                                @endif
                                @if ($link['title'] == 'Facebook')
                                <img src="{{ asset('images/svg/meta.svg') }}" alt="">
                                @endif
                                @if ($link['title'] == 'Instagram')
                                <img src="{{ asset('images/svg/instagram.svg') }}" alt="">
                                @endif
                                @if ($link['title'] == 'LinkedIn')
                                <img src="{{ asset('images/svg/linkedin.svg') }}" alt="">
                                @endif
                                @if ($link['title'] == 'Blog')
                                <img src="{{ asset('images/svg/website.svg') }}" alt="">
                                @endif
                                @if ($link['title'] == 'Company Website')
                                <img src="{{ asset('images/svg/website.svg') }}" alt="">
                                @endif
                            </a>
                            @endforeach
                        </div>
                        @endif
                        <hr class="mt-5 px-20"/>
                        <div class="font-dm text-md text-left font-regular leading-normal mt-5 text-gray-700">
                            {!! nl2br(e($s['bio'])) !!}
                        </div>
                    </figcaption>
                </div>
            </div>

        @endforeach
	</section>
</x-guest-layout>
