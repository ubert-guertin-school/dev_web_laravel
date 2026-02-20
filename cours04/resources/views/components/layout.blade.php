@props(["titre" => "Mon projet", "css"])

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <meta name="author" content="Eric Gagné" />
        <meta name="email" content="egagne@cstj.qc.ca" />

        <meta name="name" content="Mon projet" />
        <meta name="title" content="Mon projet" />

        <!-- WEBPAGE TITLE -->
        <title>{{ $titre }}</title>

        <!-- FAVICON -->
        <link rel="icon" href="{{ asset('images/favicon.png') }}" />

        <!-- FONTS -->
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}" />
        <link rel="stylesheet" href="{{ asset('fonts/icofont/icofont.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome/fontawesome.min.css') }}" />

        <!-- VENDOR -->
        <link rel="stylesheet" href="{{ asset('vendor/venobox/venobox.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendor/slickslider/slick.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendor/niceselect/nice-select.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}" />

        <!-- CUSTOM -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/user-auth.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/home-standard.css') }}" />

        <link rel="stylesheet" href="{{ asset('css/customs/header.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/customs/navbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/customs/login.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/customs/alert-override.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <!-- View-specific -->
        <link rel="stylesheet" href="{{ asset($css) }}">

        <!--=====================================
		                    JS LINK PART START
		=======================================-->
        <!-- VENDOR -->
        <script defer src="{{ asset('vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
        <script defer src="{{ asset('vendor/bootstrap/popper.min.js') }}"></script>
        <script defer src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
        <script defer src="{{ asset('vendor/countdown/countdown.min.js') }}"></script>
        <script defer src="{{ asset('vendor/niceselect/nice-select.min.js') }}"></script>
        <script defer src="{{ asset('vendor/slickslider/slick.min.js') }}"></script>
        <script defer src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>

        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.8.1/smooth-scrollbar.js" integrity="sha512-yn9N2uBs4OocMUaJ9wZK6ELvqXIULoRa7IvOsGz2wqWQRt8mNqU1L2I9Fau24PPxEKlGxuEDkRKvsanwAWUYw==" crossorigin="anonymous" referrerpolicy="no-referrer"
        ></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js"
            integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>

        <!-- CUSTOM -->
        <script defer src="{{ asset('js/nice-select.js') }}"></script>
        <script defer src="{{ asset('js/countdown.js') }}"></script>
        <script defer src="{{ asset('js/accordion.js') }}"></script>
        <script defer src="{{ asset('js/venobox.js') }}"></script>
        <script defer src="{{ asset('js/slick.js') }}"></script>
        <script defer src="{{ asset('js/main.js') }}"></script>

        <!--=====================================
		                    JS LINK PART END
		=======================================-->
    </head>
    <body>

        {{$slot}}

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    </body>
</html>
