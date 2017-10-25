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
            <div class="splashscreen_container">
                <div class="splashscreen">
                    <div class="ss_logo">
                        @component('components.logo')
                        @endcomponent
                    </div>
                    <div class="ss_tagline">
                        Experienced Software Engineer &amp; Web Developer building complex client projects of all types &amp; sizes.
                        <b>I'm currently seeking a 12-month Industrial Placement</b>
                        <!-- <br/> -->
                        <!-- <a href="#" class="ss_tl_continuelink">See my work &rarr;</a> -->
                    </div>
                </div>
            </div>

            <div class="mainnav_container">
                <div class="mainnav_title">
                    <a href="/" class="mn_t_linktohomepage">
                        <img src="/images/logo/logo_normal.png" alt="">
                    </a>
                </div>
                <ul class="mainnav_menu">
                    <li class="mn_m_item"><a target="_blank" href="https://www.linkedin.com/in/martin-shaw-13935b106/"><i class="fa fa-linkedin"></i></a></li>
                    <li class="mn_m_item"><a target="_blank" href="https://www.behance.net/repmartinshaw"><i class="fa fa-behance"></i></a></li>
                    <li class="mn_m_item"><a target="_blank" href="http://github.com/martinshaw"><i class="fa fa-github"></i></a></li>
                    <li class="mn_m_item cv"><a target="_blank" href="/cv">Curriculum Vitae</a></li>
                </ul>
            </div>
            @yield('content')
        </div>

       <!--  <footer class="footer_container">
            
        </footer>
 -->
    </body>
</html>
