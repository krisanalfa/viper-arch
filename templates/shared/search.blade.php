@extends('layout')

<?php use ROH\Util\Inflector; use KrisanAlfa\Theme\Components\Pagination; ?>

<?php $schema = f('controller')->schema(); ?>

@section('pagetitle')
   {{ Inflector::pluralize(Inflector::humanize(f('controller')->getClass())) }}
@stop

@section('back')
    <a href="{{ f('controller.url', '/null/create') }}" class="button solid"><i class="xn xn-plus"></i>{{ l('New') }}</a>
@stop

@section('tabssearch')
<form action="{{ URL::current() }}" method="GET" style="padding: 0">
    <input type="text" id="" class="show" placeholder="Free text search" value="{{{ $app->request->get('!match') }}}" name="!match">
</form>
@stop

@section('menusearch')
@stop

@section('menudefault')
@stop

@section('content')
    <div class="read">
        <div class="scroll scroll-navbar">
            <div class="table-container">
                @if(! $entries->count(true))
                <table class="table nowrap stripped hover empty">
                @else
                <table class="table nowrap stripped hover">
                @endif
                    <thead>
                        @section('table.head')
                        <tr>
                            @foreach ($schema as $key => $field)
                                <th>
                                    <a href="{{{ f('controller.url', '?!sort['.$key.']='.(@$_GET['!sort'][$key] == 1 ? -1 : 1)) }}}">
                                        {{ $field['label'] }}
                                    </a>
                                </th>
                            @endforeach
                        </tr>
                        @show
                    </thead>
                    <tbody>
                        @section('table.filter')
                        @show

                        @section('table.body')
                            @if(! $entries->count(true) and ! count($entries->getCriteria()))
                                <tr>
                                    <td colspan="{{ count($schema) }}" class="empty"><i class="xn xn-file-o xn-5x"></i><br />Data still empty.<br />Click <a href="{{ f('controller.url', '/null/create') }}"><i class="xn xn-plus"></i> New</a> to add new data.</td>
                                </tr>
                            @else
                                @foreach ($entries as $entry)
                                    <?php $i = 0 ?>
                                    <tr>
                                        @if (count($schema))
                                            @foreach ($schema as $name => $field)
                                                <td>
                                                    @if($i++ === 0)
                                                        <a href="{{ f('controller.url', '/'.$entry['$id']) }}">
                                                            {{ $field->format('plain', $entry[$name], $entry) }}
                                                        </a>
                                                    @else
                                                        {{ $entry->format($name) }}
                                                    @endif
                                                </td>
                                            @endforeach
                                        @else
                                            <td>
                                                <a href="{{ f('controller.url', '/'.$entry['$id']) }}">
                                                    {{ $entry->format() }}
                                                </a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            @endif
                        @show
                    </tbody>
                </table>
                @section('pagination')
                {{ Pagination::create($entries)->paginate() }}
                @show
            </div>
        </div>

        @section('contextual')
        @show
    </div>
@stop
