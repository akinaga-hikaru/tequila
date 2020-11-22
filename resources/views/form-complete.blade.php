@extends('layout.layout')

@section('title','登録完了')
@section('body_class','form form-complete')

@section('contents')
    @main(['main' => 'no_aside'])
        <div class={{ config('app_class_css.contents_frame') }}>
            {{-- 完了メッセージ start --}}
                @message(['center' => true])
                    {{ config('app_message.form_complete') }}
                @endmessage
            {{-- 完了メッセージ end --}}
        </div>
    @endmain
@endsection
