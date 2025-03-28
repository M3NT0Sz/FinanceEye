@extends('layouts.app')
@section('title', 'FinanceEye - Edit')
@section('page-title', 'Edit')
@section('content')
    <div class="card card-primary card-outline mb-4">
        <form method="post" action="{{ route('accounts.update', $account->id) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') ?? $account->name }}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="col">
                        <label class="form-label">Type</label>
                        <select class="form-select" aria-label="Default select example" name="type">
                            @php
                                $types = ['Cash', 'Bank', 'Credit', 'Investment', 'Savings', 'Other'];
                            @endphp
                            <option value="" disabled {{ old('type', $account->type) ? '' : 'selected' }}>Open this select
                                menu</option>
                            @foreach ($types as $type)
                                <option value="{{ $type }}" {{ old('type', $account->type) == $type ? 'selected' : '' }}>
                                    {{ ucfirst($type) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('type')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">Initial Balance</label>
                <input type="text" name="initial_balance" class="form-control" value="{{ old('initial_balance', '0.00') ?? $account->initial_balance }}"
                    oninput="this.value = formatCurrency(this.value).replace(',', '.');">
                    </div>
                    @error('initial_balance')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="col">
                        <label class="form-label">Current Balance</label>
                <input type="text" name="current_balance" class="form-control" value="{{ old('current_balance', '0.00') ?? $account->current_balance }}"
                    oninput="this.value = formatCurrency(this.value).replace(',', '.');">
                    </div>
                    @error('currency_balance')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Currency</label>

                    <select class="form-select" aria-label="Default select example" name="currency">
                        @php
                            $currencies = ['BRL', 'USD', 'EUR', 'GBP'];
                        @endphp
                        <option value="" disabled {{ old('currency', $account->currency) ? '' : 'selected' }}>Open this
                            select menu
                        </option>
                        @foreach ($currencies as $currency)
                            <option value="{{ $currency }}" {{ old('currency', $account->currency) == $currency ? 'selected' : '' }}>
                                {{ ucfirst($currency) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('currency')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description">{{ old('description') ?? $account->description }}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="text-decoration-none" href="{{ route('accounts.index') }}">Back</a>
            </div>
        </form>
    </div>
@endsection