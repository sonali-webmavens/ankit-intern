<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdminNotification;
use App\Models\Sbscriptions;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function list()
    {
        $subscriptions = Sbscriptions::all(); // Fetch all subscriptions (or as needed)
        $plans = Sbscriptions::select('plan', 'price')->distinct()->get(); // Fetch distinct plans and prices

        return view('subscriptions.sub_home', compact('subscriptions', 'plans'));
    }


    public function sendNotification(Request $request)
    {

        $request->validate([
            'plan' => 'required|string',
        ]);

        $subscription = Sbscriptions::create([
            'plan' => $request->plan,
            'price' => Sbscriptions::where('plan', $request->plan)->first()->price,
        ]);

        // Send notification after creating subscription
        Notification::send(User::first(), new AdminNotification($subscription));

        return redirect()->route('list.list')
            ->with('success', 'Subscription created successfully.');
    }




}
