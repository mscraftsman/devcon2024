<x-guest-layout>

    <section class="mt-2 lg:mt-8 mb-16 max-w-5xl py-5 px-3 mx-auto speaker">
        @foreach ($speaker as $s)

            <div>

                <div class="pt-2 text-center space-y-3">
                    <img class="w-64 h-64 rounded-full mx-auto outline outline-offset-2 outline-4 outline-yellow-300 drop-shadow-xl" src="/speaker/{{ $s['profilePicture'] }}">
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

                        @php
                            $sessionCount = count($s['sessions']);
                        @endphp

                        @if ($sessionCount > 1)
                            <div class="mt-4 font-bold text-md text-left">Sessions:</div>
                        @else
                            <div class="mt-4 font-bold text-md text-left">Session:</div>
                        @endif

                        <div class="mt-1 text-md text-left font-bold leading-normal text-gray-800 flex flex-col gap-1">
                            @foreach ($speakerSessions as $session)
                                <div class="flex justify-between sm:flex-row flex-col sm:my-1 my-4">
                                    <a class="font-black text-lg hover:text-gray-500 transition-all duration-600 max-w-xl" href="/agenda/{{ $session['id'] }}">{{ $session['title'] }}</a>
                                    <div class="flex text-gray-600">
                                        <span class="mr-2">{{ $session['room'] }}</span>
                                        <span>|</span>
                                        <span class="ml-2">
                                            {{convertDateTime($session['startsAt'])}}, {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </figcaption>
                </div>
            </div>

        @endforeach
	</section>
</x-guest-layout>
