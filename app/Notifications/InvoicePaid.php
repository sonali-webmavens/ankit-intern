<?php

namespace App\Notifications;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\EmployeeDetails;
use Carbon\Carbon;

class InvoicePaid extends Notification
{

    protected $employeeDetails;

    public function __construct(EmployeeDetails $employeeDetails)
    {
        $this->employeeDetails = $employeeDetails;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }


    public function toMail(object $notifiable): MailMessage
    {
        $workingDate = Carbon::parse($this->employeeDetails->working_date);

        return (new MailMessage)->subject('Timesheet Notification')
                                ->markdown('mail.invoice.paid', [
                                    'name' => $this->employeeDetails->name,
                                    'working_date' => $workingDate->format('Y-m-d'),
                                    'total_hours' => $this->employeeDetails->total_hours,
            ]);
    }

}
