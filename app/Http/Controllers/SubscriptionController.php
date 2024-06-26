<?php

namespace App\Http\Controllers;


use App\Models\Sbscriptions;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Sbscriptions::all();
        return view('subscriptions.index', compact('subscriptions'));
    }


    public function create()
    {
        return view('subscriptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Sbscriptions::create($request->all());

        return redirect()->route('subscriptions.index')
            ->with('success', 'Subscription created successfully.');
    }

    public function edit(Sbscriptions $subscription)
    {
        return view('subscriptions.edit', compact('subscription'));
    }

    public function update(Request $request, Sbscriptions $subscription)
    {
        $request->validate([
            'plan' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $subscription->update($request->all());

        return redirect()->route('subscriptions.index')
            ->with('success', 'Subscription updated successfully');
    }

    public function destroy(Sbscriptions $subscription)
    {
        $subscription->delete();

        return redirect()->route('subscriptions.index')
            ->with('success', 'Subscription deleted successfully');
    }








}
