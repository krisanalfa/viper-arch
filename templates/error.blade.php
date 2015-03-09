<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @section('pagetitle')
                ERROR
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ URL::base('vendor/normalize-css/normalize.css') }}" rel="stylesheet">
        <link href="{{ URL::base('vendor/naked/css/naked.min.css') }}" rel="stylesheet">
        <link href="{{ URL::base('vendor/tshirt-popup/tshirt-popup.css') }}" rel="stylesheet">
        <link href="{{ URL::base('vendor/owl/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ URL::base('vendor/owl/owl-carousel/owl.theme.css') }}" rel="stylesheet">
        <link href="{{ URL::base('vendor/owl/owl-carousel/owl.transitions.css') }}" rel="stylesheet">
        <link href="{{ URL::base('vendor/jacket-awesome/jacket-awesome.css') }}" rel="stylesheet">
        <link href="{{ URL::base('vendor/naked2-theme/css/jacket.css') }}" rel="stylesheet">

        @section('customcss')
            <!-- Custom CSS -->
        @show

        <script src="{{ URL::base('vendor/modernizr/modernizr.js') }}"></script>
        <script src="{{ URL::base('vendor/jquery/dist/jquery.min.js') }}"></script>

        <!-- FIXME reekoheek put it here in order to be used by schema component before all page rendered -->
        <!-- Tshirt -->
        <script src="{{ URL::base('vendor/naked2-theme/js/tshirt.js') }}"></script>
        <script src="{{ URL::base('vendor/tshirt-popup/tshirt-popup.js') }}"></script>
        <script src="{{ URL::base('vendor/owl/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- TODO: make tshirt plugins - Dwan 30112014 -->
        <script src="{{ URL::base('vendor/naked2-theme/js/vendor/fixedheadertable.js') }}"></script>
        <script src="{{ URL::base('vendor/naked2-theme/js/tshirt/TableContext.js') }}"></script>
        <script src="{{ URL::base('vendor/naked2-theme/js/tshirt/MenuHighlighter.js') }}"></script>

        @section('customjs')
            <!-- Custom JS -->
        @show

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="{{ URL::base('vendor/html5shiv/dist/html5shiv.min.js') }}"></script>
            <script src="{{ URL::base('vendor/respond/dest/respond.min.js') }}"></script>
        <![endif]-->
    </head>

    <body class="has-sidebar">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @section('page')
            @section('navbar')
                <nav class="nav-menu navbar-menu">
                    <h1>
                        @section('applogo')
                            <a href="{{ URL::base() }}">X</a>
                        @show
                    </h1>
                    <title>
                        @section('pagetitle')
                            ERROR
                        @show
                    </title>
                    <div class="pull-right">
                        @section('usermenu')
                            &nbsp;
                        @show
                    </div>
                </nav>
            @show

            <aside class="sidebar">
                <nav class="navbar row">
                    <div class="span-12 navsearch">
                        <input type="text" tabindex="-1" placeholder="{{ 'Search' }} {{ 'Menu' }} ...">
                    </div>
                </nav>
                <div class="scroll scroll-navbar">
                    <ul class="listview">
                        @foreach(App::getInstance()->config('navbar.menus') as $uri)
                            @if(! isset($uri['children']))
                                <li class="list-group-container">
                                    <ul class="list-group">
                                        <li class="plain">
                                            <a href="{{ URL::site($uri['uri']) }}">
                                                {{ @$uri['icon'] }} <span>{{ @$uri['title'] }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                {{-- Has child --}}
                                <li class="list-group-container">
                                    <h5>{{ @$uri['title'] }}</h5>
                                    <ul class="list-group">
                                        @foreach (@$uri['children'] as $uri)
                                            <li class="plain">
                                                <a href="{{ URL::site($uri['uri']) }}">
                                                    {{ @$uri['icon'] }} <span>{{ @$uri['title'] }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </aside>

            <main>
                @section('body')
                    @section('actions')
                        <nav class="navbar row">
                            <div class="span-3 navback">
                                @section('back')
                                    &nbsp;
                                @show
                            </div>
                        </nav>
                    @show

                    <div class="container">
                        <div class="read">
                            <div class="scroll scroll-navbar">
                                <h1 style="display: block; text-align: center;">AWWW SNAP!!! <small>There's something wrong with the application. Got error code: {{ $error->getCode() }}</small></h1>
                            </div>
                        </div>
                    </div>
                @show
            </main>
        @show
    </body>
</html>
