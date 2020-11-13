@extends('layout.layout')

@section('title','登録完了')
@section('section','登録完了')
@section('body_class',' body form form-complete')

@section('main')
    @component('component.main', ['main' => false])
        @component('component.message', ['center' => true])
            登録が完了しました。商品紹介ページで確認できます。
        @endcomponent
    @endcomponent
@endsection
