<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>April Chiao • Hotel & Travel UGC Creator | Media Kit (@bnb_chiao)</title>
    
    <meta name="description" content="Capturing the Essence of Effortless Luxury. April Chiao (@bnb_chiao) - Luxury Boutique Hotels, High-End Resort UGC Creator, and Travel Content Creator. Available Worldwide.">
    <meta property="og:title" content="April Chiao • Hotel & Travel UGC Creator (@bnb_chiao)">
    <meta property="og:description" content="Capturing the Essence of Effortless Luxury • Boutique Stays, Luxury Hotels & Travel Aesthetics">
    <meta property="og:image" content="{{ asset('images/hero-suite.png') }}">
    <meta property="og:url" content="https://www.instagram.com/bnb_chiao">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Noto+Serif+TC:wght@400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/april-avatar.jpg') }}">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-[#FAF6F0] text-[#231E1B] antialiased selection:bg-[#E6C5BA] selection:text-[#231E1B] min-h-screen flex flex-col justify-between overflow-x-hidden font-sans">
    
    {{ $slot }}

    @livewireScripts
</body>
</html>
