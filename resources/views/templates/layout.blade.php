<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"
        ></script>

        <link
            href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css"
            rel="stylesheet"
        />

        <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

        <title>@yield("title")</title>

        @vite("resources/css/app.css")
    </head>

    <body>
        <div class="container">
            @yield("content")
        </div>
    </body>

    @yield("scripts")
</html>
