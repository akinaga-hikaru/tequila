@extends('layout.layout')

@section('title','登録情報入力')
@section('body_class','form form-input')

@section('contents')
    @main(['main' => 'no_aside'])
        <div class={{ config('app_class_css.contents_frame') }}>
            <form method="POST" action="form-confirm" enctype="multipart/form-data">
            @csrf
                @letters_area_parts(['table' => true])

                    {{-- 項目名 start --}}
                    <tr>
                        @foreach (config('app_form_input.title') as $title)
                            <th class={{ config('app_class_css.table_area__header') }}>
                                {{ $title }}
                            </th>
                        @endforeach
                    </tr>
                    {{-- 項目名 end --}}

                    {{-- 入力項目 start --}}
                        @foreach (config('app_form_input.contents') as $key => $value)
                            <tr>
                                <label>
                                    <th>{{ $value['title'] }}</th>
                                    <td>
                                        <input
                                            type="{{ $value['type'] }}"
                                            name="{{ $key }}"
                                            value="{{ !empty(session($key)) ? session($key) : old($key) }}"
                                        >
                                    </td>
                                </label>
                                <td>{{ $value['description'] }}</td>
                                <td>{{ $value['terms'] }}</td>
                                <td>{{ $value['sample'] }}</td>
                            </tr>
                        @endforeach
                    {{-- 入力項目 end --}}

                @endletters_area_parts

                {{-- 確認ボタン start --}}
                    <div class={{ config('app_class_css.center') }}>
                        <button type="submit" name="submit">
                            {{ config('app_layout.confirm_btn') }}
                        </button>
                    </div>
                {{-- 確認ボタン end --}}

            </form>
        </div>
    @endmain
@endsection
