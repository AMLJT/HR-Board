@extends('layout.layout')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/employeeStyle.css') }}" >
<div class="stylDiv">
<h1>Employee List</h1>

<button class="btn" onclick="showPopup()">Add Employee</button>

<table id="employeeTable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{$employee->emp_name}}</td>
            <td>{{$employee->department}}</td>
        </tr>
        @endforeach
        
        <!-- More employees can be listed here -->
    </tbody>
</table>


<div class="overlay" id="overlay"></div>
<div class="popup" id="popup">
    {{-- Add Employee form goes here--}}
    @include('shared.employe-submit')
</div>
</div>
<script>
    function showPopup() {
        document.getElementById('popup').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }
</script>
@endsection
