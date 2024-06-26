<?php

namespace App\Http\Controllers;

use App\Jobs\Notify;
use App\Models\User;
use App\Models\Sbscriptions;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function sendNotification(Request $request)
    {
        $request->validate([
            'plan' => 'required|string',
        ]);

        $subscription = Sbscriptions::create([
            'plan' => $request->plan,
            'price' => Sbscriptions::where('plan', $request->plan)->first()->price,
        ]);

        
        $admin = User::first();
        Notify::dispatch($admin, $subscription);

        return redirect()->route('list.list')
            ->with('success', 'Subscription created successfully.');
    }

}
