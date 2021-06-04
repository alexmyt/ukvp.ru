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
@section('description','Условия хранения личных сбережений пайщиков КПК-КВП')
@section('content')
@include('layouts.partials._header',['pageHeader'=>'Сберегательные взносы'])
<article>
  <h5 class="py-3">Условия хранения личных сбережений пайщиков КПК-КВП</h5>
  <div class="container">

		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th class="text-nowrap">Вид взноса</th>
					<th class="text-nowrap">Срок</th>
					<th class="text-nowrap">Ставка, % год.</th>
					<th>Сумма взноса</th>
					<th><abbr title="Ключевой информационный документ - документ с условиями договора в формате, разработанном ЦБ РФ">КИД</abbr></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>До востребования<br>(снятие, пополнение, без капитализации)</th>
					<td class="text-center">3670 дней</td>
					<td class="text-center">0.1%</td>
					<td class="text-center">от 100 руб.</td>
					<td><i class="far fa-file-pdf"></i> <a href="{{ asset('storage/kid/KID_on_demand.pdf') }}">Скачать</a></td>
				</tr>
				<tr>
					<th>Текущий<br>(снятие, пополнение, ежемесячная капитализация)</th>
					<td class="text-center">1095 дней</td>
					<td class="text-center">2%</td>
					<td class="text-center">от 1 000 руб.</td>
					<td><i class="far fa-file-pdf"></i> <a href="{{ asset('storage/kid/KID_current.pdf') }}">Скачать</a></td>
				</tr>
				<tr>
					<th>Срочный<br>(без снятия, без пополнения, без капитализации)</th>
					<td class="text-center">365 дней<br>
            548 дней<br>
            730 дней<br>
            1095 дней<br>
            1460 дней<br></td>
					<td class="text-center">3.5%<br>
            4%<br>
            4.5%<br>
            5%<br>
            5.5%<br></td>
					<td class="text-center">от 50 000 руб.</td>
					<td><i class="far fa-file-pdf"></i> <a href="{{ asset('storage/kid/KID_fixed_365_days.pdf') }}">Скачать</a><br>
            <i class="far fa-file-pdf"></i> <a href="{{ asset('storage/kid/KID_fixed_548_days.pdf') }}">Скачать</a><br>
            <i class="far fa-file-pdf"></i> <a href="{{ asset('storage/kid/KID_fixed_730_days.pdf') }}">Скачать</a><br>
            <i class="far fa-file-pdf"></i> <a href="{{ asset('storage/kid/KID_fixed_1095_days.pdf') }}">Скачать</a><br>
            <i class="far fa-file-pdf"></i> <a href="{{ asset('storage/kid/KID_fixed_1460_days.pdf') }}">Скачать</a><br></td>
				</tr>
			</tbody>
		</table>

    <p>Все проценты годовые. В течение срока договора проценты по нему не меняются.</p>
    <p>Уточняйте информацию в офисах кооператива и по контактным телефонам, указанным на сайте. Кооператив вправе по решению правления приостановить или прекратить прием сбережений при отсутствии необходимости в привлеченных средствах.</p>
    
    @foreach($docs as $doc)
    <p><i class="far fa-file-pdf"></i> <a href="{{ asset('storage/kid/'.$doc['file']) }}">{{$doc['name']}}</a></p>
    @endforeach
 </div>
</article>
@endsection