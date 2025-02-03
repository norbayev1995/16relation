@extends('layouts.app')
@section('title', 'Passport ma\'lumotlari')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Passport ma'lumotlari</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Passport raqami: <span id="passport_number">{{ $passport->passport_number }}</span></h5>
                <p class="card-text">Berilgan sana: <span id="issue_date">{{ date('Y-m-d', strtotime($passport->issue_date)) }}</span></p>
                <p class="card-text">Amal qilish muddati: <span id="expiry_date">{{ date('Y-m-d', strtotime($passport->expiry_date)) }}</span></p>
                <a href="{{ route('passports.edit', ['passport' => $passport]) }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Tahrirlash
                </a>
            </div>
        </div>
    </div>
@endsection
