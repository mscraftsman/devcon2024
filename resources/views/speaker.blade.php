<x-guest-layout>

    <section class="mt-2 lg:mt-8 mb-16 max-w-5xl py-5 px-3 mx-auto speaker">
        @foreach ($speaker as $s)

            <div>

                <div class="pt-2 text-center space-y-3">
                    <img class="w-64 h-64 rounded-full mx-auto outline outline-offset-2 outline-4 outline-yellow-300 drop-shadow-xl" src="{{ $s['profilePicture'] }}">
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

                        <div class="mt-4 text-md text-left font-regular leading-normal text-gray-800 flex flex-col gap-1">
                            @foreach ($s['sessions'] as $session)
                                <div>{{ $session['name'] }}</div>
                            @endforeach
                        </div>
                    </figcaption>
                </div>
            </div>

        @endforeach
	</section>
</x-guest-layout>
