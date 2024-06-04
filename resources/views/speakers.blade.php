<x-guest-layout>
    <section class="bg-blue-100">
		<section class="pt-10 pb-10 max-w-4xl px-3 mb-7 mx-auto ">
			<h2 class="text-center font-bold uppercase font-dm text-purple">Unleashing Tech Brilliance Together</h2>
			<h1 class="text-center mt-1 text-gray-700 uppercase font-bold mb-1 text-4xl sm:text-6xl">Speakers</h1>
			<p class="text-center text-gray-600 font-dm max-w-3xl text-sm sm:text-lg">Join us for a transformative experience as our distinguished speakers, industry pioneers, and thought leaders converge to illuminate the latest frontiers of technology</p>
		</section>
	</section>
	<section class="mt-10 mb-16 pt-8 max-w-6xl px-3 mx-auto">
		@if(isset($error))
			<p>{{ $error }}</p>
		@else
			<div class="grid xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
				@foreach($speakers as $speaker)
					<a href="{{route('speaker', $speaker['id'])}}" class="p-5 transition-all bg-blue-100 hover:scale-[105%] hover:bg-blue-200 hover:outline-double outline-4 outline-offset-2 outline-teal-200 rounded-md">
						<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="/speaker/{{ $speaker['profilePicture'] }}">
						<div class="pt-6 text-center space-y-3">
							<figcaption class="font-medium">
								<div class="uppercase font-bold text-gray-800 mb-2">
									{{ $speaker['fullName'] }}
								</div>
								<div class="font-dm text-sm font-bold text-gray-600">
									{{ $speaker['tagLine'] }}
								</div>
							</figcaption>
						</div>
					</a>
				@endforeach
		</div>
		@endif
	</section>
</x-guest-layout>
