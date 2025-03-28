@extends('layouts.app')
@section('title', 'FinanceEye - Accounts')
@section('page-title', 'Accounts')
@section('page-actions')
    <a href="{{ route('accounts.create') }}" class="btn btn-primary">Create</a>
@endsection
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Balance</th>
                <th scope="col">Current</th>
                <th scope="col">Currency</th>
                <th scope="col">Description</th>
                <th scope="col">Active</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accounts as $account)
                <tr>
                    <th scope="row">{{ $account->id }}</th>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->type }}</td>
                    <td>{{ $account->initial_balance }}</td>
                    <td>{{ $account->current_balance }}</td>
                    <td>{{ $account->currency }}</td>
                    <td>{{ $account->description }}</td>
                    <td>
                        <form class="text-center" action="{{ route('accounts.toggleActive', $account->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="checkbox" class="form-check-input" onchange="this.form.submit()"
                                @if($account->is_active == 1) checked @endif>
                        </form>
                    </td>
                    <td>
                        <div class="row" style="flex-wrap: nowrap; margin-left: 0; margin-right: 0;">
                            <div class="col" style="padding-left: 0;">
                                <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="col" style="padding-left: 0;">
                                <form action="{{ route('accounts.destroy', $account->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection