<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
	<body class="text-center max-w-[1080px] lg:text-left lg:m-auto lg:p-8 text-2xl flex flex-col [&>div]:mb-10 items-center">
		<div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4">
			<div class="max-h-[250px] mb-4 lg:mb-0 lg:max-h-[425px] lg:rounded-md overflow-hidden flex justify-center items-center">
				<img src="{{ asset('images/basset-hound.webp') }}" alt="Basset Hound 🐾">
			</div>
			<div class="m-2 col-span-2 [&>*]:mb-2">
				<div class="font-semibold text-3xl">Dog Walking & Pet Care</div>
				<p>Rancho Sienna neighbor offering dog walking and personalized pet care!</p>
				<p>I bring 20+ years of experience with dogs, including positive reinforcement and pressure-release training methods. I also have over 2 years professional experience as a supervisor at a luxury kennel caring for up to 200 dogs a day, managing feeding, medications, potty breaks, and playtime routines. I am experienced with canines, equines, small animals, and reptiles.</p>
				<p>Solo walks ensure your pet’s safety, comfort, and my undivided attention. ✨</p>
			</div>
		</div>

		<div class="mx-2 grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-4 [&>div]:text-center">
			<div>
				<div class="font-semibold text-3xl">Walks</div>
				<p>Private leashed walks around your neighborhood for exercise and enrichment.</p>
				<p class="font-semibold mt-4">🐾 $13 per 20 minutes</p>
				<p class="italic">+$5 per additional pup</p>
			</div>

			<div>
				<div class="font-semibold text-3xl">Check-Ins</div>
				<p>Short visits for potty breaks, meals, or medication while you're away.</p>
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
			<p><span class="font-semibold">Email:</span> <a class="underline hover:text-green-600 hover:transition transition" href="mailto:abaturestudio@gmail.com">AbatureStudio@gmail.com</a></p>
			<p><span class="font-semibold">Text:</span> 512-228-7795</p>
		</div>

		<footer class="mx-2 text-center text-sm">
			Copyright © Abature Studio {{ date('Y') }}
		</footer>
	</body>
</html>
