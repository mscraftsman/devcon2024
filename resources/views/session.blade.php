@extends('layouts.main')
@section('content')
	<section class="mt-20 max-w-4xl py-5 px-3 mx-auto speaker">
	@foreach ($session as $s)

	<nav class="flex" aria-label="Breadcrumb">
		<ol class="inline-flex items-center space-x-1 md:space-x-3 ">
			<li class="inline-flex items-center">
			<a href="/" class="inline-flex items-center text-sm font-medium text-slate-300 hover:text-mustard">
				Home
			</a>
			</li>
			<li>
				<div class="flex items-center">
					<svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
					<a href="{{ route('agenda') }}" class="ml-1 text-sm font-medium text-slate-300 hover:text-mustard md:ml- dark:text-gray-400">Agenda</a>
				</div>
			</li>
			<!-- <li aria-current="page">
			<div class="flex items-center">
				<svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
				<span class="ml-1 text-sm font-medium text-slate-700 md:ml-2">{{ $s['title'] }}</span>
			</div>
			</li> -->
		</ol>
	</nav>

	<div class="session__container mt-3">
		<div class="pt-6 space-y-3">
			<div class="font-astronomus uppercase  font-bold text-purple mb-5 mt-3 text-center md:text-left text-xl sm:text-3xl ">
				{{ $s['title'] }}
			</div>
			<div class="speakers--wrapper max-w-4xl mx-auto block sm:flex">
				@foreach($s['speakers'] as $key => $speaker)
				@php
					$classAddition = '';
					if ($key > 0) {
						$classAddition = 'ml-0 mb-2 sm:ml-4 sm:mb-1';
					}
				@endphp

					<a class="speaker--headshot flex items-center mb-2 {{$classAddition}} flex justify-center" href="/speaker/{{ $speaker['id'] }}">
						<div class="circle-1">
							<div class="circle-2">
								<img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="" alt="{{$speaker['name']}}">
							</div>
						</div>
						<div class="font-astronomus text-sm sm:text-lg font-bold text-slate-800 ml-3">{{ $speaker['name'] }}</div>
					</a>
				@endforeach
			</div>

			<hr class="mt-2 mb-2">

			<div class="location__datetime--wrapper block sm:flex font-md font-bold">
				<div class="location--wrapper font-dm mr-5 flex items-center mb-5 sm:mb-0">
					<img class="h-6" src="{{ asset('images/svg/location.svg') }}" alt="">
					<span class="ml-2">{{ $s['room'] }}</span>
				</div>

				<div class="time--wrapper font-dm mr-5 flex items-center">
					<img class="h-6" src="{{ asset('images/svg/calendar.svg') }}" alt="">
					<span class="ml-2">
						{{convertDateTime($s['startsAt'])}}, {{convertDateTimeToTime($s['startsAt'])}} - {{convertDateTimeToTime($s['endsAt'])}}
					</span>
				</div>

			</div>

			<hr class="mt-2 mb-2">
			<div class="font-dm text-lg font-regular leading-normal mt-8 pt-2 text-slate-400">
				{!! nl2br(e($s['description'])) !!}
			</div>
		</div>
	</div>


	@endforeach
	</section>
@endsection