<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Developers Conference 2024') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link
				rel="apple-touch-icon"
				sizes="57x57"
				href="{{ asset('images/favicon/apple-touch-icon-57x57.png') }}"
			/>
			<link
				rel="apple-touch-icon"
				sizes="114x114"
				href="{{ asset('images/favicon/apple-touch-icon-114x114.png') }}"
			/>
			<link
				rel="apple-touch-icon"
				sizes="72x72"
				href="{{ asset('images/favicon/apple-touch-icon-72x72.png') }}"
			/>
			<link
				rel="apple-touch-icon"
				sizes="144x144"
				href="{{ asset('images/favicon/apple-touch-icon-144x144.png') }}"
			/>
			<link
				rel="apple-touch-icon"
				sizes="60x60"
				href="{{ asset('images/favicon/apple-touch-icon-60x60.png') }}"
			/>
			<link
				rel="apple-touch-icon"
				sizes="120x120"
				href="{{ asset('images/favicon/apple-touch-icon-120x120.png') }}"
			/>
			<link
				rel="apple-touch-icon"
				sizes="76x76"
				href="{{ asset('images/favicon/apple-touch-icon-76x76.png') }}"
			/>
			<link
				rel="apple-touch-icon"
				sizes="152x152"
				href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}"
			/>
			<link
				rel="icon"
				type="image/png"
				href="{{ asset('images/favicon/favicon-196x196.png') }}"
				sizes="196x196"
			/>
			<link
				rel="icon"
				type="image/png"
				href="{{ asset('images/favicon/favicon-96x96.png') }}"
				sizes="96x96"
			/>
			<link
				rel="icon"
				type="image/png"
				href="{{ asset('images/favicon/favicon-32x32.png') }}"
				sizes="32x32"
			/>
			<link
				rel="icon"
				type="image/png"
				href="{{ asset('images/favicon/favicon-16x16.png') }}"
				sizes="16x16"
			/>
			<link
				rel="icon"
				type="image/png"
				href="{{ asset('images/favicon/favicon-128.png') }}"
				sizes="128x128"
			/>
			<meta name="application-name" content="Developers Conference 2023" />
			<meta name="msapplication-TileColor" content="#FFFFFF" />
			<meta
				name="msapplication-TileImage"
				content="{{ asset('images/favicon/mstile-144x144.png') }}"
			/>
			<meta
				name="msapplication-square70x70logo"
				content="{{ asset('images/favicon/mstile-70x70.png') }}"
			/>
			<meta
				name="msapplication-square150x150logo"
				content="{{ asset('images/favicon/mstile-150x150.png') }}"
			/>
			<meta
				name="msapplication-wide310x150logo"
				content="{{ asset('images/favicon/mstile-310x150.png') }}"
			/>
			<meta
				name="msapplication-square310x310logo"
				content="{{ asset('images/favicon/mstile-310x310.png') }}"
			/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PWG5X8KT');</script>
        <!-- End Google Tag Manager -->

    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWG5X8KT"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @include('layouts.top-navigation')

        {{ $slot }}

        @include('layouts.footer')
    </body>
</html>
