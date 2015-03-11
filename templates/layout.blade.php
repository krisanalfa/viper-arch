@extends('skeleton2')

@section('pagetitle')
    {{ f('page.title', App::getInstance()->config('navbar.title')) }}
@show

@section('usermenu')
    <ul class="flat topbar">
        <li class="user">
            <a href="#">
                <span class="avatar"><i class="xn xn-user xn-lg"></i></span>
                <span class="name">{{ @$_SESSION['user']['username'] }} <i class="xn xn-angle-down"></i></span>
            </a>
            <ul class="sub animated">
                <li><a href="{{ URL::site('/logout') }}">Logout</a></li>
                <li><a href="{{ URL::site('/passwd') }}">Change Password</a></li>
            </ul>
        </li>
    </ul>
@stop

@section('customcss')
    {{ app_resolve('debugbar.renderer')->renderHead() }}
@stop

@section('sidebar')
    {{ app_resolve('debugbar.renderer')->render() }}
    <aside class="sidebar">
        <nav class="navbar row">
            <div class="span-12 navsearch">
                <input type="text" tabindex="-1" placeholder="Search Menu ...">
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
@stop

@section('menumore')
@stop

@section('tabs')
@stop
