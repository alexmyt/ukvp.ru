@php
$docs=array(
   ['file' => 'gc_loan_agree.pdf', 'name'  => 'Общие условия договора займа'],
   ['file' => 'cond_raising_funds.pdf', 'name'  => 'Положение о порядке и условиях привлечения денежных средств'],
   ['file' => 'regulation_granting_loans.pdf', 'name'  => 'Положение о порядке о порядке предоставления займов'],
   ['file' => 'regulation_of_property.pdf', 'name'  => 'Положение о порядке формирования и использования имущества'],
   ['file' => 'income_distribution_clause.pdf', 'name'  => 'Положение о порядке распределения доходов'],
   ['file' => 'membership_clause.pdf', 'name'  => 'Положение о членстве в КПК'],
   ['file' => 'regulation_of managements.pdf', 'name'  => 'Положение об органах управления КПК'],
   ['file' => 'organisation_chart.pdf', 'name'  => 'Устав Кредитного потребительского кооператива "Касса взаимопомощи"'],
   ['file' => 'basic_standart_kpk.pdf', 'name'  => 'Базовый стандарт защиты прав и интересов физических и юридических лиц - получателей финансовых услуг, оказываемых членами саморегулируемых организаций в сфере финансового рынка, объединяющих кредитные потребительские кооперативы'],

);
@endphp
@extends('layouts.master')
@section('title','Документы')
@section('description','Нормативные и другие документы КПК. Устав кооператива.')
@section('keywords','вложить деньги, вклад, займ, срочный заем, сберегательные вклады, выгодные вклады, займы урюпинск, займы новониколаевка, займы нехаево, займы борисоглебск, займы волжский, займы средняя ахтуба, займы краснослободск, займ в кредитном кооперативе, кредитный кооператив, кредитный потребительский кооператив, займ кооператив, денежные займы, займы в рублях')
@section('content')
@include('layouts.partials._header',['pageHeader'=>'Документы'])
<article>
   <div class="container">
      @foreach($docs as $doc)
      <p><i class="far fa-file-pdf"></i> <a href="{{ asset('storage/'.$doc['file']) }}">{{$doc['name']}}</a></p>
      @endforeach
   </div>
</article>
@endsection