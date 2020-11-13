@extends('layout.layout')

@section('title','取扱店紹介')
@section('section','取扱店紹介')
@section('body_class','body tenpo')

@section('main')
<div class={{config('app_class_css.contents_frame')}}>
    @component('component.table-area')
        {{-- configで紹介店を定義 --}}
        @foreach (config('app_tenpo') as $key => $tenpos)
            <tr>
                <th class={{config('app_class_css.table_area__header')}}>{{ $key }}</th>
            </tr>
            <tr>
                <th>店名</th>
                <th>コンタクト</th>
                <th>アクセス</th>
                <th>詳細</th>
            </tr>
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
        @endforeach
    @endcomponent
</div>
@endsection
