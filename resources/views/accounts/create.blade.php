@extends('layouts.app')
@section('title', 'FinanceEye - Accounts')
@section('page-title', 'Accounts')
@section('content')
    <form>
        <div class="mb-3 row">
            <div class="col">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col">
                <label class="form-label">Type</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="cash">Cash</option>
                    <option value="bank">Bank</option>
                    <option value="credit">Credit</option>
                    <option value="investment">Investment</option>
                    <option value="savings">Savings</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col">
                <label class="form-label">Initial Balance</label>
                <input type="number" name="initial_balance" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">Currency Balance</label>
                <input type="number" name="currency_balance" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Currency</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="brl">BRL</option>
                <option value="usd">USD</option>
                <option value="eur">EUR</option>
                <option value="gpb">GBP</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection