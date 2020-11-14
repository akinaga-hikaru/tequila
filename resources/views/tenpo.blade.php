@extends('layout.layout')

@section('title', config('app_layout.global_menu.tenpo'))
@section('section', config('app_layout.global_menu.tenpo'))
@section('body_class','body tenpo')

@section('contents')
    @component('component.main', ['main' => 'no_aside'])
        <div class={{ config('app_class_css.contents_frame') }}>
            @component('component.table-area')
                @foreach (config('app_tenpo.shops') as $key => $tenpos)

                    {{-- 店舗種別 start --}}
                        <tr>
                            <th class={{ config('app_class_css.table_area__header') }}>
                                {{ $key }}
                            </th>
                        </tr>
                    {{-- 店舗種別 end --}}

                    {{-- 項目名 start --}}
                        <tr>
                            @foreach(config('app_tenpo.title') as $title)
                                <th>{{ $title }}</th>
                            @endforeach
                        </tr>
                    {{-- 項目名 end --}}

                    {{-- 項目内容 start --}}
                        @foreach ($tenpos as $tenpo)
                            <tr>
                                <td>
                                    <a
                                        href="{{ $tenpo['url'] }}"
                                        target="_blank"
                                    >
                                        {{ $tenpo['name'] }}
                                    </a>
                                </td>
                                <td>{{ $tenpo['contact'] }}</td>
                                <td>{{ $tenpo['access'] }}</td>
                                <td>{{ $tenpo['description'] }}</td>
                            </tr>
                        @endforeach
                    {{-- 項目内容 end --}}

                @endforeach
            @endcomponent
        </div>
    @endcomponent
@endsection
