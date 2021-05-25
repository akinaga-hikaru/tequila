@extends('layout.layout')

@section('title','登録情報入力')
@section('body_class','form form-input')

@section('contents')
    @main(['main' => 'no_aside'])
        <div class={{ config('app_class_css.contents_frame') }}>
            @if (!empty(session('syouhin_id_check')))
                @message([
                    'center' => true,
                    'input_error_top' => true,
                ])
                    {!! session('syouhin_id_check') !!}
                @endmessage
            @endif
            <form method="POST" action="form-confirm" enctype="multipart/form-data">
            @csrf
                @lettersareaparts(['table' => true])

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
                            <tr style={{ $value['hidden'] ? 'display:none;' : '' }}>
                                <th>{!! $value['title'] !!}</th>
                                <td>
                                    @if ($value['type'] == 'select')
                                        <select name="{{ $key }}">
                                            @php
                                                switch ($key) {
                                                    case 'brand_name': $options = $brand_name; break;
                                                    case 'aging_sort': $options = $aging_sort; break;
                                                    case 'mix_degree': $options = $mix_degree; break;
                                                    case 'alc_degree': $options = $alc_degree; break;
                                                    case 'dest_name_kana': $options = $dest_name; break;
                                                    case 'local_name_kana': $options = $local_name; break;
                                                    case 'area_name_kana': $options = $area_name; break;
                                                }
                                            @endphp
                                            @foreach ($options as $option)
                                                @if (session($key) == $option['value'])
                                                    <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
                                                @else
                                                    <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    @elseif ($value['type'] == 'textarea')
                                        <textarea name="{{ $key }}">{{ !empty(session($key)) ? session($key) : old($key) }}</textarea>
                                    @elseif ($value['type'] == 'file')
                                        <label for="{{ $key }}" class="{{ $key }}">
                                            ファイル選択
                                        </label>
                                        <input
                                            type="{{ $value['type'] }}"
                                            id="{{ $key }}"
                                            name="{{ $key }}"
                                            value="{{ !empty(session($key)) ? session($key) : old($key) }}"
                                        >
                                        <input
                                            type="text"
                                            name="image-text"
                                            value="選択したファイル名を表示"
                                            disabled
                                            style="margin-top:10px;"
                                        >
                                    @else
                                        <input
                                            type="{{ $value['type'] }}"
                                            name="{{ $key }}"
                                            value="{{ !empty(session($key)) ? session($key) : old($key) }}"
                                        >
                                    @endif
                                    @error($key)
                                        @message(['input_error' => true])
                                            {!! str_replace('<br>', '', $message); !!}
                                        @endmessage
                                    @enderror
                                </td>
                                <td>{!! $value['description'] !!}</td>
                                <td>{{ $value['sample'] }}</td>
                            </tr>
                        @endforeach
                    {{-- 入力項目 end --}}

                @endlettersareaparts

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
