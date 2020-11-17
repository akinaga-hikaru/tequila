@extends('layout.layout')

@section('title', config('app_layout.global_menu.tenpo'))
@section('body_class','tenpo')

@section('contents')
    @component('component.main', ['main' => 'no_aside'])
        <div class={{ config('app_class_css.contents_frame') }}>
            @foreach (config('app_tenpo.shops') as $key => $tenpos)
                <div class={{ config('app_class_css.letters_area') }}>
                    @component('component.letters-area-parts', [
                        'title' => !empty($key) ? $key : '',
                        'paragraph' => !empty($tenpos['paragraph']) ? $tenpos['paragraph'] : '',
                        'indent' => !empty($tenpos['indent']) ? $tenpos['indent'] : '',
                    ])
                    @endcomponent
                    @component('component.table-area')
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

                    @endcomponent
                </div>
            @endforeach
        </div>
    @endcomponent
@endsection
