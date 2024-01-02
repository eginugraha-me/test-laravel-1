@extends('layouts.app')
@section('content')

    <form action="{{ route('home') }}" method="post" class="form-search">
        @csrf
        <input type="text" name="domain" value="{{ session('domain')  ? session('domain') : '' }}"
               placeholder="Cari domain contoh: example.com">
        <input type="submit" value="Cari">
    </form>

    @if(session('success'))
        <div class="search-result">
            <p>{{ session('success') }}</p>
            <a href="{{route("configuration", session("domain"))}}">PESAN</a>
        </div>
    @endif

    @if(session('error'))
        <div class="search-result">
            <p>{{ session('error') }}</p>
        </div>
    @endif

@endsection

@push('script')

@endpush
