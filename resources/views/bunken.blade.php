@extends('layout.layout')

@section('title','参考文献')
@section('section','参考文献')
@section('body_class','body bunken')

@section('main')
<div class={{config('app_class_css.contents_frame')}}>
    <center>
        <table class={{config('app_class_css.table_area')}}>
            <tr>
                <th>著者名</th>
                <th>文献名</th>
                <th>出版社</th>
                <th>出版年</th>
            </tr>
            <tr>
                {{-- conifgで作品を著者ごとに定義 --}}
                @foreach (config('app_bunken') as $author)
                    <tr>
                        @foreach ($author as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tr>
        </table>
    </center>
</div>
<br>
<br>
@endsection
