@extends('layouts.app')

@section('content')
<div class="service-area spt">
    <div class="container bg1 spt-1" style="padding:40px">
  <h2>Leads Table</h2>
  <p></p>            
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
      @foreach($leads as $lead)
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
      @endforeach
    </tbody>
  </table>
</div> 
</div> <br>
@endsection
