@extends('layouts.app')
@section('title', 'Ro\'yxatdan o\'tish')
@section('content')
<div class="auth-container">
    <h2 class="text-center mb-4">Ro'yxatdan o'tish</h2>
    <form action="{{ route('handleRegister') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Foydalanuvchi nomi</label>
            <input type="text" class="form-control" id="name" name="name" required>
            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Elektron pochta</label>
            <input type="email" class="form-control" id="email" name="email" required>
            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Parol</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @error('password')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Parolni tasdiqlang</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            @error('password_confirmation')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">Ro'yxatdan o'tish</button>
    </form>
    <p class="mt-3 text-center">Hisobingiz bormi? <a href="{{ route('login') }}">Kirish</a></p>
</div>
@endsection
