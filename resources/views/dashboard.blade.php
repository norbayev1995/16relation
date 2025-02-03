@extends('layouts.app')
@section('title', 'Bosh sahifa')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Xush kelibsiz!</h1>
    <p>Passport ma'lumotlaringizni kiritish yoki ko'rish uchun quyidagi tugmalardan foydalaning:</p>
    <div class="mt-4">
        <a href="@if(!empty(auth()->user()->passport)) {{ route('errorPage') }} @else {{ route('passports.create') }} @endif" class="btn btn-primary me-2">
            <i class="fas fa-plus-circle"></i> Passport ma'lumotlarini kiriting
        </a>
        <a href="@if(!empty(auth()->user()->passport)) {{ route('passports.index') }} @else {{ route('errorPage') }} @endif" class="btn btn-secondary">
            <i class="fas fa-eye"></i> Passport ma'lumotlarini ko'rish
        </a>
    </div>
</div>
@endsection
