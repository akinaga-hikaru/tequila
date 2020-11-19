@extends('layout.layout')

@section('title', config('app_layout.global_menu./'))
@section('body_class','top')

@section('contents')
    <div class={{ config('app_class_css.flex_box') }}>

        @component('component.aside', [
            'scroll_on' => true,
        ])
            {{-- 項目選択ボタンstart --}}
                <ul>

                    @foreach (config('app_index') as $item)
                        @component('component.common-btn',[
                            'btn' => 'type',
                            'hidden' => false,
                            'hide_sp' => true,
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
                                        @foreach($section['images'] as $image)
                                            <img
                                                src={{ $image['src'] }}
                                                alt={{ $image['alt'] }}
                                            >
                                        @endforeach
                                    </div>
                                </div>
                            @break

                            @case(2) {{-- テキーラの定義 --}}
                            @case(4) {{-- テキーラの起源 --}}
                            @case(5) {{-- テキーラの分類 --}}
                            @case(7) {{-- NOMとは --}}
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

                            @case(3) {{-- テキーラ5州 --}}
                                <div class={{ config('app_class_css.letters_area') }}>
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
                                            @if($table['id'] === 'jarisco')
                                                @foreach($tequila_states as $key => $data)
                                                    <tr>
                                                        <td>
                                                            @if($key !== 'other')
                                                                {{ $data[0]['local'] }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($key !== 'other')
                                                                @foreach($data as $cell)
                                                                    {{ $cell['area'] }} /
                                                                @endforeach
                                                            @endif
                                                            etc...
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @elseif($table['id'] === 'map')
                                                <tr>
                                                    @foreach($table['cells'] as $data)
                                                        <td>
                                                            {!! $data !!}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            @endif
                                        @endcomponent
                                    @endforeach
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

                            @case(6) {{-- テキーラの熟成度 --}}
                                <div class={{ config('app_class_css.letters_area') }}>
                                    @component('component.table-area')
                                        @foreach($section['tables'] as $table)
                                            <tr>
                                                @foreach($table['header'] as $header)
                                                    <th>{{ $header }}</th>
                                                @endforeach
                                            </tr>
                                            @foreach($table['cells'] as $cells)
                                                <tr>
                                                    @foreach($cells as $cell)
                                                        <td>{!! $cell !!}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    @endcomponent
                                </div>
                            @break

                            @case(8) {{-- 蒸留所一覧 --}}
                            <div class={{ config('app_class_css.letters_area') }}>
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
                                        @foreach($dest_lists as $key => $dest_list)
                                            <tr>
                                                <td>
                                                    @if($key !== 'other')
                                                        {{ $dest_list[0]['local'] }}
                                                    @else
                                                        ハリスコ州外
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($key !== 'other')
                                                        @foreach($dest_list as $cell)
                                                            {{ $cell['dest_name'] }}<br>
                                                        @endforeach
                                                    @else
                                                        @foreach($dest_list as $cell)
                                                            {{ $cell['dest_name'] }}
                                                        @endforeach
                                                        @foreach($dest_list as $cell)
                                                            （{{ $cell['local'] }}）<br>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    @foreach($dest_list as $cell)
                                                        {{ $cell['dest_nom'] }}<br>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($dest_list as $cell)
                                                        {{ $cell['title_name'] }}<br>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($dest_list as $cell)
                                                        {{ $cell['area'] }}<br>
                                                    @endforeach
                                                </td>
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
