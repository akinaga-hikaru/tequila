@extends('layout.layout')

@section('title','登録完了')
@section('section','登録完了')
@section('body_class',' body form form-complete')

@section('main')
    <main class={{config('app_class_css.contents_frame')}}>
        <div
            class="
                {{config('app_class_css.message')}}
                {{config('app_class_css.center')}}
            "
        >
            <p>
                登録が完了しました。商品紹介ページで確認できます。
            </p>
        </div>
    </main>
@endsection
