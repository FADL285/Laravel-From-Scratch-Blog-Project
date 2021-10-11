<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Laravel From Scratch Blog</title>
    <link
        href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
        rel="stylesheet"
    />
    <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
</head>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <x-navbar/>

    {{ $slot }}

    <x-footer/>
</section>

<x-flash/>
</body>
</html>
