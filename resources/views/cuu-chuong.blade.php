@extends('layouts.master')

@section('title', 'Bảng cửu chương ' . ($n ?? ''))

@section('content')
    <div style="max-width: 300px; margin: 0 auto; border: 1px solid #ccc; padding: 20px;">
        @if(isset($error))
            <div style="color: red; padding: 10px; border: 1px solid red;">
                {{ $error }}
            </div>
        @else
            <h2>Bảng cửu chương {{ $n }}</h2>
            <hr>
            @for ($i = 1; $i <= 10; $i++)
                <p>{{ $n }} x {{ $i }} = {{ $n * $i }}</p>
            @endfor
        @endif
    </div>
@endsection