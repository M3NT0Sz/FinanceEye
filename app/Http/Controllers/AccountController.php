<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Gate;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::where('user_id', 1)->get();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'initial_balance' => 'required',
            'current_balance' => 'required',
            'currency' => 'required',
            'description' => 'nullable|string'
        ]);

        Account::create(array_merge($inputs, [
            'user_id' => 1,
            'is_active' => true,
        ]));

        return redirect()->route('accounts.index')->with('success', 'Account created successfully.');
    }

    public function toggleActive(Request $request, $id)
    {
        $account = Account::findOrFail($id);
        $account->is_active = !$account->is_active;
        $account->save();

        return redirect()->route('accounts.index')->with('success', 'Account status updated successfully.');
    }

    public function edit(Account $account)
    {
        return view('accounts.edit', compact('account'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        $inputs = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'initial_balance' => 'required',
            'current_balance' => 'required',
            'currency' => 'required',
            'description' => 'nullable|string'
        ]);

        $account->update($inputs);

        return redirect()->route('accounts.index')->with('success', 'Account updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        $account->delete();

        return redirect()->route('accounts.index')->with('success', 'Account deleted successfully.');
    }
}
