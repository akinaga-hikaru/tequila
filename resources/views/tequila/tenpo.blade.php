@extends('tequila.layout.layout')

@section('title','取扱店紹介')
@section('section','取扱店紹介')
@section('body_class','body tenpo')

@section('main')
<div class="contents-frame ">
    <div class="scroll-area">
        <div class="table-area__scroll-frame">
            <table class="table-area">
                {{-- configで紹介店を定義 --}}
                @foreach (config('app_tenpo') as $key => $values)
                    <tr>
                        <th class="table-area__header">{{ $key }}</th>
                    </tr>
                    <tr>
                        <th>店名</th>
                        <th>コンタクト</th>
                        <th>アクセス</th>
                        <th>詳細</th>
                    </tr>
                    @foreach ($values as $value)
                        <tr>
                            <td><a href="{{ $value['url'] }}" target="_blank">{{ $value['name'] }}</a></td>
                            <td>{{ $value['contact'] }}</td>
                            <td>{{ $value['access'] }}</td>
                            <td>{{ $value['description'] }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
