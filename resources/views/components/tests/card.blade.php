@props([
    'title',
    'message' => '初期値です',
    'content' => '本文は初期値です',
    ])

<div class="boder-2 shadow-md w-1/4 p-2">
    <div class="">{{ $title }}</div>
    <div class="">画像</div>
    <div class="">{{ $content }}</div>
    <div class="">{{ $message }}</div>
</div>