
<x-mail::table>

Timesheet Notification

Dear {{ $name }},

Your timesheet details for the working date {{ $working_date }} are as follows:

@component('mail::table')

| Name | Working Date | Total Hours |
| --- | --- | --- |
| {{ $name }} | {{ $working_date }} | {{ $total_hours }} |


Thank you for your hard work!

Thanks
{{ config('app.name') }}
</x-mail::table>
