@extends('tequila.layout.layout')

@section('title','フォーム入力')
@section('section','フォーム入力')
@section('body_class',' body form-input')

@section('main')
<div class="contents-frame">
    <table class="table-area">
        <tr><th>姓</th><td>{{ $input_contents[0] }}</td></tr>
        <tr><th>名</th><td>{{ $input_contents[1] }}</td></tr>
        <tr><th>メールアドレス</th><td>{{ $input_contents[2] }}</td></tr>
        <tr><th>電話番号</th><td>{{ $input_contents[3] }}</td></tr>
        <tr><th>感想</th><td>{{ $input_contents[4] }}</tr>
    </table>
</div>
@endsection
