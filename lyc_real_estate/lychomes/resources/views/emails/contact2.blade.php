{{ config('app.name') }}株式会社
ご担当者様

私は{{ $name }}です
@if (!empty($phone))
電話番号は以下になります
{{ $phone }}
@endif
以下の内容を確認させていただきます
{{ $content }}

以上、よろしくお願いいたします。