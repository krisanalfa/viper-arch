@extends('layout')

<?php use ROH\Util\Inflector; ?>

@section('pagetitle')
    Update Password
@endsection

@section('back')
@stop

@section('tabssearch')
@stop

@section('menu')
@stop

@section('content')
    <form method="post" class="form contextual">
        <div class="scroll scroll-navbar">
            @section('fields')
                <div class="row {{ (f('notification.message', 'old') AND $app->request->getMethod() !== 'GET') ? 'has-error' : ''}}">
                    <div class="span-3">
                        <label>Old Password*</label>
                    </div>
                    <div class="span-9">
                        <input type="password" name="old" placeholder="Input Old Password">
                    </div>
                    <span class="help-block">{{ f('notification.message', 'old') }}</span>
                </div>

                <div class="row {{ (f('notification.message', 'old') AND $app->request->getMethod() !== 'GET') ? 'has-error' : ''}}">
                    <div class="span-3">
                        <label>New Password*</label>
                    </div>
                    <div class="span-9">
                        <div class="row">
                            <input class="span-6" type="password" name="new" placeholder="Input New Password">
                            <input class="span-6" type="password" name="new_confirmation" placeholder="Confirm New Password">
                        </div>
                    </div>
                    <span class="help-block">{{ f('notification.message', 'old') }}</span>
                </div>
            @show
        </div>

        @section('contextual')
            <nav class="navbar navbar-bottom row">
                <div class="span-6">
                    <a href="{{ f('controller.url', '/:id/read') }}" class="button solid warning"><i class="xn xn-close"></i>{{ l('Cancel') }}</a>
                </div>
                <div class="span-6 align-right">
                    <button type="reset" class="button button-outline"><i class="xn xn-refresh"></i>{{ l('Reset') }}</button>
                    <button type="submit" class="button success solid"><i class="xn xn-save"></i>{{ l('Save') }}</button>
                </div>
            </nav>
        @show
    </form>
@endsection
