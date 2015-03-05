@extends('skeleton2')

@section('pagetitle')
    {{ f('page.title', App::getInstance()->config('navbar.title')) }}
@show

@section('sidebar')
    <aside class="sidebar">
        <nav class="navbar row">
            <div class="span-12 navsearch">
                <input type="text" tabindex="-1" placeholder="{{ l('Search') }} {{ l('Menu') }} ...">
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
