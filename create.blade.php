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


      <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    </x-slot>

<div class="container">

<div class="container">
    <h5 class="text-center">Store Medical Records</h5>
    <p class="text-center">Enter Patient ID and Record Details below:</p>
    <br>
    @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

    <form action="{{ route('medical_records.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="patient_id">Patient ID:</label>
            <input type="text" name="patient_id" id="patient_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="record_details">Record Details:</label>
            <textarea name="record_details" id="record_details" class="form-control" required></textarea>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Save Medical Record</button>
        </div>
    </form>
</div>

    </x-app-layout>
