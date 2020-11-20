@extends('layout.layout')

@section('title', config('app_layout.global_menu.bunken'))
@section('body_class','bunken')

@section('contents')
        @component('component.main', ['main' => 'no_aside'])
            <div class={{ config('app_class_css.contents_frame') }}>
                <div class={{ config('app_class_css.letters_area') }}>
                    @component('component.letters-area-parts', [
                        'title' => config('app_bunken.section.title'),
                        'paragraph' => config('app_bunken.section.contents'),
                    ])
                    @endcomponent
                    @component('component.table-area')

                        {{-- 項目名 start --}}
                            <tr>
                                @foreach (config('app_bunken.title') as $title)
                                    <th>{{ $title }}</th>
                                @endforeach
                            </tr>
                        {{-- 項目名 end --}}

                        {{-- 項目内容 start --}}
                            <tr>
                                @foreach (config('app_bunken.authors') as $author)
                                    <tr>
                                        @foreach ($author as $value)
                                            <td>{{ $value }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tr>
                        {{-- 項目内容 end --}}

                    @endcomponent
                </div>
            </div>
        @endcomponent
@endsection
