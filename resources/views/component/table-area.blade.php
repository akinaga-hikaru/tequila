{{-- コンポーネント：共通テーブル --}}
<div class={{config('app_class_css.scroll_area')}}>
    <div class={{config('app_class_css.table_area__scroll_frame')}}>
        <table class={{config('app_class_css.table_area')}}>
            {{ $slot }}
        </table>
    </div>
</div>
