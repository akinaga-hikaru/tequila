@extends('layout.layout')

@section('title', config('app_layout.global_menu.tenpo'))
@section('body_class','tenpo')

@section('contents')
    @main(['main' => 'no_aside'])
        @foreach (config('app_tenpo') as $section)

            {{-- タイトル start --}}
                @sectiontitle([
                    'section_id' => $section['id'],
                    'section_name' => $section['title'],
                    ])
                @endsectiontitle
            {{-- タイトル end --}}

            {{-- コンテンツ start --}}
                <div class={{ config('app_class_css.contents_frame') }}>
                    @foreach ($section['contents'] as $key => $content)
                        <div class={{ config('app_class_css.letters_area') }}>
                            @lettersareaparts([
                                'title' => !empty($content['title']) ? $content['title'] : '',
                                'paragraph' => !empty($content['paragraph']) ? $content['paragraph'] : '',
                                'table' => !empty($content['table']) ? true : '',
                            ])
                                {{-- テーブルヘッダー start --}}
                                    <tr>
                                        @foreach($content['table']['header'] as $header)
                                            <th>{{ $header }}</th>
                                        @endforeach
                                    </tr>
                                {{-- テーブルヘッダー end --}}

                                {{-- テーブルコンテンツ start --}}
                                    @foreach ($content['table']['cells'] as $cell)
                                        <tr>
                                            <td>
                                                <a
                                                    href="{{ $cell['url'] }}"
                                                    target="_blank"
                                                    class={{ config('app_class_css.external_link') }}
                                                >
                                                    {{ $cell['name'] }}
                                                </a>
                                            </td>
                                            <td>{{ $cell['contact'] }}</td>
                                            <td>{{ $cell['access'] }}</td>
                                            <td>{{ $cell['description'] }}</td>
                                        </tr>
                                    @endforeach
                                {{-- テーブルコンテンツ end --}}

                            @endlettersareaparts
                        </div>
                    @endforeach
                </div>
            {{-- コンテンツ end --}}

        @endforeach
    @endmain
@endsection
