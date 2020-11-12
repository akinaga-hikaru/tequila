@extends('layout.layout')

@section('title','登録情報入力')
@section('section','登録情報入力')
@section('body_class','body form form-input')

@section('main')
<div class="contents-frame center">
    <div class="center">
        <div>
            <form method="POST" action="form-confirm" enctype="multipart/form-data">
            @csrf
            <div class="scroll-area">
                <div class="table-area__scroll-frame">
                    <table class="table-area">
                            <tr>
                                <th class="table-area__header">項目名</th>
                                <th class="table-area__header">入力内容</th>
                                <th class="table-area__header">説明</th>
                                <th class="table-area__header">入力条件</th>
                                <th class="table-area__header">入力サンプル</th>
                            </tr>
                            {{-- インプット項目をconfigに定義 --}}
                            @foreach (config('app_form_input') as $key => $value)
                                <tr>
                                    <label>
                                        <th>{{ $value['title'] }}</th>
                                        <td><input type="{{ $value['type'] }}" name="{{ $key }}" value="{{ !empty(session($key)) ? session($key) : old($key) }}"></td>
                                    </label>
                                    <td>{{ $value['description'] }}</td>
                                    <td>{{ $value['terms'] }}</td>
                                    <td>{{ $value['sample'] }}</td>
                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
                <button type="submit" name="submit">確認する</button>
            </form>
        </div>
    </div>
</div>
@endsection
