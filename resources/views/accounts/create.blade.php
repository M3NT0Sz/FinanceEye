@extends('layouts.app')
@section('title', 'FinanceEye - Accounts')
@section('page-title', 'Accounts')
@section('content')
    <form method="post" action="{{ route('accounts.store') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3 row">
            <div class="col">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label class="form-label">Type</label>
                <select class="form-select" aria-label="Default select example" name="type">
                    <option selected>Open this select menu</option>
                    <option value="cash">Cash</option>
                    <option value="bank">Bank</option>
                    <option value="credit">Credit</option>
                    <option value="investment">Investment</option>
                    <option value="savings">Savings</option>
                    <option value="other">Other</option>
                </select>
                @error('type')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col">
                <label class="form-label">Initial Balance</label>
                <input type="text" name="initial_balance" class="form-control" value="{{ old('initial_balance', '0.00') }}"
                    oninput="this.value = formatCurrency(this.value).replace(',', '.');">
                @error('initial_balance')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label class="form-label">Current Balance</label>
                <input type="text" name="current_balance" class="form-control" value="{{ old('current_balance', '0.00') }}"
                    oninput="this.value = formatCurrency(this.value).replace(',', '.');">
                @error('currency_balance')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Currency</label>
            <select class="form-select" aria-label="Default select example" name="currency">
                <option selected>Open this select menu</option>
                <option value="BRL">BRL</option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GPB">GBP</option>
            </select>
            @error('currency')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="text-decoration-none" href="{{ route('accounts.index') }}">Back</a>
    </form>
@endsection
@section('js')
    <script>
        function formatCurrency(value) {
            value = value.replace(/\D/g, ''); // Remove non-numeric characters
            value = (value / 100).toFixed(2); // Divide by 100 and fix to 2 decimal places
            return value.replace('.', ','); // Replace dot with comma
        }
    </script>
@endsection