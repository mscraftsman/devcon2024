<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? "Developers Conference 2024" }}</title>

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

            <meta name="description" content="Developers Conference 2024 — the largest gathering of software craftsman, web devs, sysadmins, designers, testers and the younger generation of aspiring professionals."/>
            <meta property="og:site_name" content="conference.mscc.mu"/>
            <meta property="og:type" content="article"/>
            <meta property="og:title" content="conference.mscc.mu"/>
            <meta property="og:description" content="Developers Conference 2024 — the largest gathering of software craftsman, web devs, sysadmins, designers, testers and the younger generation of aspiring professionals."/>
            <meta property="og:url" content="https://conference.mscc.mu"/>
            <meta property="og:image" content="https://conference.mscc.mu/images/cover.png"/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TJ605QYMFP"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TJ605QYMFP');
        </script>

    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div>
            @include('layouts.top-navigation')

            {{ $slot }}

            @include('layouts.footer')

        </div>
    </body>
</html>
