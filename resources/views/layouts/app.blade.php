<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurellie's Portfolio - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
   
</head>
<body class="max-w-6xl mx-auto px-6 py-8 relative">
    <!-- Floating Background Shapes -->
    @include('partials.floating-shapes')
    
    <!-- Header -->
    @include('partials.header')

    <!-- Spacer untuk header fixed -->
    <div class="h-15"></div>
    <div class="h-20"></div>


    <!-- Main Content -->
    <main>
        @include('sections.hero')
        @include('sections.about')
        @include('sections.skills')
        @include('sections.projects')
        @include('sections.contact')
    </main>

    <!-- Footer -->
    @include('partials.footer')

@stack('scripts')


</body>
</html>