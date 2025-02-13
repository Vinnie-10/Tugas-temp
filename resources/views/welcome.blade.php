@extends('layout.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $e)
                <tr>
                    <td>{{$e->name}}</td>
                    <td>{{$e->age}}</td>
                    <td>{{$e->address}}</td>
                    <td>{{$e->phone_number}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
