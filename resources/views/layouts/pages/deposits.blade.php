@php
$docs=array(
   ['file' => 'KID_current.pdf', 'name'  => 'КИД текущий'],
   ['file' => 'KID_on_demand.pdf', 'name'  => 'КИД до востребования'],
   ['file' => 'KID_fixed_365_days.pdf', 'name'  => 'КИД срочный 365 дней'],
   ['file' => 'KID_fixed_548_days.pdf', 'name'  => 'КИД срочный 548 дней'],
   ['file' => 'KID_fixed_730_days.pdf', 'name'  => 'КИД срочный 730 дней'],
   ['file' => 'KID_fixed_1095_days.pdf', 'name'  => 'КИД срочный 1095 дней'],
   ['file' => 'KID_fixed_1460_days.pdf', 'name'  => 'КИД срочный 1460 дней'],
);
@endphp

@extends('layouts.master')
@section('title','Сберегательные взносы')
@section('content')
@include('layouts.partials._header',['pageHeader'=>'Сберегательные взносы'])
<article>
  <div class="container">
    @foreach($docs as $doc)
    <p><i class="far fa-file"></i> <a href="{{ asset('storage/kid/'.$doc['file']) }}">{{$doc['name']}}</a></p>
    @endforeach
 </div>
</article>
@endsection