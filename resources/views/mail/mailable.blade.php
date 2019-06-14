@extends('layouts.mail')

@section('content')
<table id="lead-tbl" class="table-responsive table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Question</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$lead->first_name}}</td>
        <td>{{$lead->last_name}}</td>
        <td>{{$lead->email}}</td>
        <td>{{$lead->phone_number}}</td>
        <td>{{$lead->question}}</td>
        <td>
            {{$lead->street_number}} {{$lead->street_name}}<br>
            {{$lead->province}}, {{$lead->city}}<br>            
            {{$lead->country}}<br>
            {{$lead->postal_code}}
        </td>
      </tr>
    </tbody>
  </table>
@endsection
