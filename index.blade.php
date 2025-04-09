<x-app-layout>
    <x-slot name="header">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('appointmentsch-styles.css') }}">

        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



    </x-slot>



<div class="container">
    <h1>My Medical Records</h1>

    @if($medicalRecords->isEmpty())
        <p>No medical records found for you.</p>
    @else
        <table class="table table-striped" style="background-color: rgba(255, 255, 255, 0.9);">
            <thead>
                <tr>
                    <th>Doctor's Name</th>
                    <th>Record Details</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicalRecords as $record)
                    <tr>
                        <td>{{ $record->doctor_name }}</td>
                        <td>{{ $record->record_details }}</td>
                        <td>{{ $record->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>



    </x-app-layout>
