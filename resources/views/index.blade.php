@extends('layout.layout')

@section('title', config('app_layout.global_menu./'))
@section('body_class','body top')

@section('contents')
    <div class={{ config('app_class_css.flex_box') }}>

        @component('component.aside')
            {{-- 項目選択ボタンstart --}}
                <ul>

                    @foreach (config('app_index') as $item)
                        @component('component.common-btn',[
                            'btn' => 'type',
                            'hidden' => false,
                            'link' => '#' . $item['id'],
                            'text' => $item['title'],
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- 項目選択ボタンend --}}
        @endcomponent

        @component('component.main')
            {{-- セクション start --}}
                @foreach(config('app_index') as $key => $section)

                    {{-- タイトル start --}}
                        @component('component.section-title',[
                            'section_id' => $section['id'],
                            'section_name' => $section['title'],
                            ])
                        @endcomponent
                    {{-- タイトル end --}}

                    {{-- コンテンツ start --}}
                        @switch($key)

                            @case(1) {{-- テキーラの原料 --}}
                                <div class={{ config('app_class_css.letters_area') }}>
                                    @foreach($section['texts'] as $content)
                                        @component('component.letters-area-parts', [
                                            'title' => !empty($content['title']) ? $content['title'] : '',
                                            'paragraph' => !empty($content['paragraph']) ? $content['paragraph'] : '',
                                            'indent' => !empty($content['indent']) ? $content['indent'] : '',
                                        ])
                                        @endcomponent
                                    @endforeach
                                    <div
                                        class="
                                            {{ config('app_class_css.flex_box') }}
                                            {{ config('app_class_css.center') }}
                                        "
                                    >
                                        <p><img src="/image/ryuzeturan_1.jpg" alt="竜舌蘭1"></p>
                                        <p><img src="/image/ryuzeturan_2.jpg" alt="竜舌蘭2"></p>
                                    </div>
                                </div>
                            @break

                            @case(2) {{-- テキーラの定義 --}}
                            @case(3) {{-- テキーラの起源 --}}
                            @case(4) {{-- テキーラの分類 --}}
                            @case(6) {{-- テキーラ5州 --}}
                                <div class={{ config('app_class_css.letters_area') }}>
                                    @foreach($section['texts'] as $content)
                                        @component('component.letters-area-parts', [
                                            'title' => !empty($content['title']) ? $content['title'] : '',
                                            'paragraph' => !empty($content['paragraph']) ? $content['paragraph'] : '',
                                            'indent' => !empty($content['indent']) ? $content['indent'] : '',
                                        ])
                                        @endcomponent
                                    @endforeach
                                </div>
                            @break

                            @case(5) {{-- 熟成度合いによる呼称 --}}
                                <div class={{ config('app_class_css.letters_area') }}>
                                    @component('component.table-area')
                                        <tr>
                                            @foreach($section['table']['header'] as $header)
                                                <th>{{ $header }}</th>
                                            @endforeach
                                        </tr>
                                        @foreach($section['table']['cells'] as $cells)
                                            <tr>
                                                @foreach($cells as $cell)
                                                    <td>{{ $cell }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    @endcomponent
                                </div>
                            @break

                            @case(7) {{-- 蒸留所リスト --}}
                                <div class={{ config('app_class_css.letters_area') }}>
                                    @foreach($section['texts'] as $content)
                                        @component('component.letters-area-parts', [
                                            'title' => !empty($content['title']) ? $content['title'] : '',
                                            'paragraph' => !empty($content['paragraph']) ? $content['paragraph'] : '',
                                            'indent' => !empty($content['indent']) ? $content['indent'] : '',
                                        ])
                                        @endcomponent
                                    @endforeach
                                    @foreach($section['tables'] as $table)
                                        @component('component.letters-area-parts', [
                                            'title' => !empty($table['title']) ? $table['title'] : '',
                                            'paragraph' => !empty($table['paragraph']) ? $table['paragraph'] : '',
                                            'indent' => !empty($table['indent']) ? $table['indent'] : '',
                                        ])
                                        @endcomponent
                                        @component('component.table-area')
                                            <tr>
                                                @foreach($table['header'] as $header)
                                                    <th>{{ $header }}</th>
                                                @endforeach
                                            </tr>
                                            @foreach($table['cells'] as $cells)
                                                <tr>
                                                    @foreach($cells as $cell)
                                                        <td>{{ $cell }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        @endcomponent
                                    @endforeach
                                </div>
                            @break

                        @endswitch
                    {{-- コンテンツ end --}}

                @endforeach
            {{-- セクション end --}}
        @endcomponent
    </div>
@endsection
