<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Petcare</title>
	  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🐶</text></svg>">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

	  @php
	  	$mailtoTemplate = 'mailto:abaturestudio@gmail.com?subject=New Client Enquiry';
	  @endphp
    </head>
	<body class="text-center max-w-[1080px] lg:text-left lg:m-auto lg:p-8 text-2xl flex flex-col [&>div]:mb-10 items-center">
		<div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4 items-center">
			<div class="max-h-[250px] mb-4 lg:mb-0 lg:max-h-[425px] lg:rounded-md overflow-hidden flex justify-center items-center">
				<img src="{{ asset('images/basset-hound.webp') }}" alt="Basset Hound 🐾">
			</div>

			<div class="m-2 col-span-2 [&>*]:mb-4">
				<div class="font-semibold text-3xl">Dog Walking & Pet Care</div>
				<p>Rancho Sienna neighbor offering personalized pet care!</p>
				<p>I bring over 20 years of experience with dogs, including 2 years professional experience as a supervisor at a luxury kennel caring for up to 200 dogs a day; managing feeding, medications, potty breaks, and playtime routines.</p>
				<p>I am also experienced with equines, small animals, and reptiles.</p>
				<a href="{{ $mailtoTemplate }}"><button class="ml-auto font-semibold bg-green-600 text-zinc-50 rounded-lg py-2 px-4 hover:scale-[105%] cursor-pointer hover:transition transition">Book your first walk for free!</button></a>
			</div>
		</div>

		<div class="mx-2 grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-4 [&>div]:text-center [&>div]:border-2 [&>div]:border-green-600 [&>div]:rounded-lg [&>div]:p-4">
			<div>
				<div class="font-semibold text-3xl">Walks</div>
				<p>Solo walks ensure your pet’s safety, comfort, and my undivided attention.</p>
				<p class="font-semibold mt-4">🐾 $13 per 20 minutes</p>
				<p class="italic">+$5 per additional pup</p>
			</div>

			<div>
				<div class="font-semibold text-3xl">Check-Ins</div>
				<p>Short visits for potty breaks, meals and medication.</p>
				<p class="font-semibold mt-4">🐶 $10 per visit</p>
			</div>

			<div>
				<div class="font-semibold text-3xl">Boarding</div>
				<p>Home-style overnight care for well-mannered pups in a quiet setting.</p>
				<p class="font-semibold mt-4">🏡 $21 per pup, per night</p>
			</div>
		</div>

		<div class="mx-2 text-center">
			<p class="font-semibold text-3xl">Contact Me</p>
			<p><span class="font-semibold">Email:</span> <a class="underline hover:text-green-600 hover:transition transition" href="{{ $mailtoTemplate }}">AbatureStudio@gmail.com</a></p>
			<p><span class="font-semibold">Text:</span> 512-228-7795</p>
		</div>

		<footer class="mx-2 text-center text-sm">
			Copyright © Abature Studio {{ date('Y') }}
		</footer>
	</body>
</html>
