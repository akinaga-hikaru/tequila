@extends('layout.layout')

@section('title', config('app_layout.global_menu.bunken'))
@section('body_class','bunken')

@section('contents')
    @main(['main' => 'no_aside'])
        @foreach (config('app_bunken') as $section)

            {{-- タイトル start --}}
                @section_title([
                    'section_id' => $section['id'],
                    'section_name' => $section['title'],
                    ])
                @endsection_title
            {{-- タイトル end --}}

            {{-- コンテンツ start --}}
                <div class={{ config('app_class_css.contents_frame') }}>
                    @foreach ($section['contents'] as $key => $content)
                        <div class={{ config('app_class_css.letters_area') }}>
                            @letters_area_parts([
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
                                            @foreach ($cell as $author)
                                                <td>{{ $author }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                {{-- テーブルコンテンツ end --}}

                            @endletters_area_parts
                        </div>
                    @endforeach
                </div>
            {{-- コンテンツ end --}}

        @endforeach
    @endmain
@endsection
