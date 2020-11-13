@extends('layout.layout')

@section('title','登録完了')
@section('section','登録完了')
@section('body_class',' body form form-complete')

@section('contents')
    @component('component.main', ['main' => 'none'])
        {{-- 完了メッセージ start --}}
            @component('component.message', ['center' => true])
                {{ config('app_message.form_complete') }}
            @endcomponent
        {{-- 完了メッセージ end --}}
    @endcomponent
@endsection
