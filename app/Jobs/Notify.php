<?php
namespace App\Jobs;

use App\Notifications\AdminNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Sbscriptions;
use App\Models\User;

class Notify implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $admin;
    protected $subscription;

    public function __construct(User $admin, Sbscriptions $subscription)
    {
        $this->admin = $admin;
        $this->subscription = $subscription;
    }

    public function handle()
    {
        $this->admin->notify(new AdminNotification($this->subscription));
    }
}
