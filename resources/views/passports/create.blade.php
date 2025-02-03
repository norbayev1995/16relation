@extends('layouts.app')
@section('title', 'Passport ma\'lumotlarini kiriting')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Passport ma'lumotlarini kiriting</h1>
    <form action="{{ route('passports.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="passport_number" class="form-label">Passport raqami</label>
            <input type="text" class="form-control" id="passport_number" name="passport_number" required>
            @error('passport_number')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="issue_date" class="form-label">Berilgan sana</label>
            <input type="date" class="form-control" id="issue_date" name="issue_date" required>
            @error('issue_date')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="expiry_date" class="form-label">Amal qilish muddati</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
            @error('expiry_date')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Saqlash</button>
    </form>
</div>
@endsection
