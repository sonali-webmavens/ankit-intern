<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <title>Employee Details</title>
    </head>
    <body>
        <h1>Employee Details</h1>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Working Date</th>
                    <th>Total Hours</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employeeDetails as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->working_date }}</td>
                    <td>{{ $employee->total_hours }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    </html>
