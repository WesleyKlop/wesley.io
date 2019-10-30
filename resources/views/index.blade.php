<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wesley Klop</title>
    <meta name="description" content="The website of a software developer."/>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
    <script defer src="{{ mix('js/app.js') }}"></script>
</head>
<body>
@include('sections.header')

<main class="page-content">
    @include('sections.about-me')

    @include('sections.projects', ['projects' => $projects])

    @include('sections.skills', ['skills' => $skills])

    @include('sections.timeline', ['timeline' => $timeline])
</main>

@include('sections.footer')

</body>
</html>
