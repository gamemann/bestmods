<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="opt-targeting" content="{&quot;type&quot;:&quot;Browse&quot;}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <title>{{ isset($headinfo['title']) ? $headinfo['title'] : 'Best Mods - Find The Best Mods For You!' }}</title>
    <meta name="description" content="{{ isset($headinfo['description']) ? $headinfo['description'] : 'Browse for the best mods in gaming from many sources on the Internet! Project ran by The Modding Community!' }}">
    <meta name="keywords" content="mods, modding, games, gaming, communities, best, servers, directory, discovery">

    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="{{ isset($headinfo['title']) ? $headinfo['title'] : 'Best Mods - Find The Best Mods For You!' }}">
    <meta property="og:description" content="{{ isset($headinfo['description']) ? $headinfo['description'] : 'Browse for the best mods in gaming from many sources on the Internet! Project ran by The Modding Community!' }}">
    <meta property="og:site_name" content="Best Mods">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ isset($headinfo['url']) ? $headinfo['url'] : 'https://bestmods.io/' }}">
    <meta property="og:image" content="{{ isset($headinfo['image']) ? $headinfo['image'] : '/images/bestmods-filled.png' }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ isset($headinfo['title']) ? $headinfo['title'] : 'Best Mods - Find The Best Mods For You!' }}">
    <meta name="twitter:description" content="{{ isset($headinfo['description']) ? $headinfo['description'] : 'Browse for the best mods in gaming from many sources on the Internet! Project ran by The Modding Community!' }}">
    <meta name="twitter:site" content="@modcommunity_">
    <meta name="twitter:image" content="{{ isset($headinfo['image']) ? $headinfo['image'] : '/images/bestmods-filled.png' }}">

    <link rel="canonical" href="{{ isset($headinfo['url']) ? $headinfo['url'] : 'https://bestmods.io/' }}">
    <!-- <link rel="manifest" href="https://moddingcommunity.com/forums/manifest.webmanifest/">
    <meta name="msapplication-config" content="https://moddingcommunity.com/forums/browserconfig.xml/">-->
    <meta name="msapplication-starturl" content="/">
    <meta name="application-name" content="Best Mods">
    <meta name="apple-mobile-web-app-title" content="Best Mods">
    <meta name="theme-color" content="#181a1b">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="/images/bestmods-icon.png">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- CSS and JavaScript -->
    @vite('resources/js/app.js')
</head>