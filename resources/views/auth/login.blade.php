@extends('layouts.app')
@section('content')

    <form method="POST" action="{{ route('login') }} " class="form-login">
        @csrf

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Login">
    </form>


    @if(session('error'))
        <p style="color: red;Cob">{{ session('error') }}</p>
    @endif

@endsection

@push('script')

@endpush
