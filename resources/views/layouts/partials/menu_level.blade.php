<ul
        class="{{$parent? 'submenu collapse': 'topmenu topmenu-responsive'}}"
        data-toggle="{{$parent? 'submenu': 'menu' }}"
        @if( $parent )
            id="{{ str_replace('.','-', $parent['name']) }}"
        @endif
>
    @if( $parent )
    <li class="submenu-header ellipsis">{{ trans('menu.' . $parent['name'])}}</li>
    @endif

    @foreach( $children as $child)
        @if( !isset($child['roles']) && Route::has($child['name']) )
        <li>
            <a
                    href="{{ array_get($child, 'children', false)? 'javascript:void(0);': route($child['name'])}}"
                    data-target="#{{ str_replace('.','-', $child['name']) }}"
                    data-parent="{{ $parent? '#'.$parent['name']: '.topmenu'}}"
                    @if( array_get($child, 'children', false) )
                        data-toggle="submenu"
                    @endif
            >
                @if( array_get($child, 'icon', false) )
                    <span class="figure"><i class="{{ $child['icon']}}"></i></span>
                @endif

                <span class="text">{{ trans('menu.' . $child['name'])}}</span>

                @if( array_get($child, 'children', false) )
                    <span class="arrow"></span>
                @endif
            </a>

            @if( array_get($child, 'children', false) && $child['children'] )
                @include('layouts/partials/menu_level', [ 'parent' => $child, 'children' => $child['children'] ])
            @endif
        </li>
        @endif
    @endforeach
</ul>

