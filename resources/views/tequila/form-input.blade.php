@extends('tequila.layout.layout')

@section('title','フォーム入力')
@section('section','フォーム入力')
@section('body_class','body form-input')

@section('main')
<div class="contents-frame center">
    <div class="center">
        <div>
            <form method="POST" action="form-input">
            @csrf
                <table class="table-area">
                    <tr><th><label for="family-name">姓</label></th><td><input type="text" name="family-name"></td></tr>
                    <tr><th><label for="first-name">名</label></th><td><input type="text" name="first-name"></td></tr>
                    <tr><th><label for="mail">メールアドレス</label></th><td><input type="mail" name="mail"></td></tr>
                    <tr><th><label for="tel-number">電話番号</label></th><td><input type="tel" name="tel-number"></td></tr>
                    <tr><th><label for="review">感想</label></th><td><textarea name="review"></textarea></td></tr>
                </table>
                <input type="submit" name="submit" value="コメントする">
            </form>
        </div>
    </div>
</div>
@endsection
