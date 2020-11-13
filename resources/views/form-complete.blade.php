@extends('layout.layout')

@section('title','登録完了')
@section('section','登録完了')
@section('body_class',' body form form-complete')

@section('main')
    @component('component.main', ['main' => false])
        @component('component.message', ['center' => true])
            {{ config('app_message.form_complete') }}
        @endcomponent
    @endcomponent
@endsection
