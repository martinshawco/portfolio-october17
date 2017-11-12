<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel ={
                csrfToken: {!! json_encode(['csrfToken' => csrf_token()]); !!}
            };
        </script>

        <title>Martin Shaw | Software Engineer &amp; Web Developer</title>

        @section('resources')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        @show

    </head>
    <body>

        <div id="app">

            <div class="mainnav_container">
                <div class="mainnav_title">
                    <a href="/" class="mn_t_linktohomepage">
                        <img src="/images/logo/logo.png" alt="">
                    </a>
                </div>
                <ul class="mainnav_menu">
                    <li class="mn_m_item"><a style="color: #0077B5 !important;" target="_blank" href="https://www.linkedin.com/in/martin-shaw-13935b106/"><i class="fa fa-linkedin"></i></a></li>
                    <li class="mn_m_item"><a style="color: #1769FF !important;" target="_blank" href="https://www.behance.net/repmartinshaw"><i class="fa fa-behance"></i></a></li>
                    <li class="mn_m_item"><a style="color: #181717 !important;" target="_blank" href="http://github.com/martinshaw"><i class="fa fa-github"></i></a></li>
                    <li class="mn_m_item cv"><a target="_blank" href="https://www.dropbox.com/s/w03xw8oq89sezjs/cv.pdf?dl=0"><span class="mn_m_i_cv_desktop">Curriculum Vitae</span><span class="mn_m_i_cv_phone">CV</span></a></li>
                </ul>
            </div>
            @yield('content')

        </div>


        {{-- Rainbow Easter Egg --}}
        <script>
            window.doRainbowEasterEgg(<?php echo isset($_GET["rainbow"]); ?>);
        </script>

    </body>
</html>
