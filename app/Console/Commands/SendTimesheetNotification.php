<?php

namespace App\Console\Commands;

use App\Models\EmployeeDetails;
use App\Notifications\InvoicePaid;
use App\Notifications\TimesheetNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class SendTimesheetNotification extends Command
{
    protected $signature = 'app:send-timesheet-notification';

    protected $description = 'Send timesheet notifications to the admin';

    public function handle()
    {
        $this->info('Sending timesheet notifications...');

        $employees = EmployeeDetails::where('working_date', '<=', now()->subDays(1)->toDateString())->get();

        foreach ($employees as $employee) {
            Notification::route('mail', 'xampale123@xample.com')->notify(new TimesheetNotification($employee));
        }


        $this->info('Timesheet notifications Sended successfully.');

        return 0;
    }

}

