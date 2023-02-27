@extends('layouts.main')

@section('content')
<h1>Train table</h1>

@foreach ($trains as $train )
<ul>
<li>DEPARTURE STATION:<b>{{$train->departure_station}}</b></li>
<li>DEPARTURE:<b>{{$train->departure}}</b></b></li>
<li>ARRIVAL STATION:<b>{{$train->arrival_station}}</b></b></li>
<li>ARRIVAL:<b>{{$train->arrival}}</b></b></li>
<li>COMPANY: <b>{{$train->company}}</b></li>
<li>CODE:<b>{{$train->train_code}}</b></li>
 @if ($train->is_cancelled)
 <li>STATUS: <b>CANCELLED</b></li>    
 @else
 @if ($train->is_intime)
 <li>STATUS: <b>IN TIME</b></li>
 @else
 <li>STATUS: <b>DELAY</b></li>   
 @endif
@endif


</ul>
@endforeach
@endsection