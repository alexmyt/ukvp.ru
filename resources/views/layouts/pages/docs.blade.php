@php
$docs=array(
   ['file' => 'gc_loan_agree.pdf', 'name'  => 'Общие условия договора займа'],
   ['file' => 'cond_raising_funds.pdf', 'name'  => 'Положение о порядке и условиях привлечения денежных средств'],
   ['file' => 'regulation_granting_loans.pdf', 'name'  => 'Положение о порядке предоставления займов'],
   ['file' => 'regulation_of_property.pdf', 'name'  => 'Положение о порядке формирования и использования имущества'],
   ['file' => 'income_distribution_clause.pdf', 'name'  => 'Положение о порядке распределения доходов'],
   ['file' => 'membership_clause.pdf', 'name'  => 'Положение о членстве в КПК'],
   ['file' => 'regulation_of_managements.pdf', 'name'  => 'Положение об органах управления КПК'],
   ['file' => 'organisation_chart.pdf', 'name'  => 'Устав Кредитного потребительского кооператива "Касса взаимопомощи"'],
   ['file' => 'basic_standart_kpk.pdf', 'name'  => 'Базовый стандарт защиты прав и интересов физических и юридических лиц - получателей финансовых услуг, оказываемых членами саморегулируемых организаций в сфере финансового рынка, объединяющих кредитные потребительские кооперативы'],
   ['file' => 'personal_data_processing_policy.pdf', 'name'  => 'Политика в отношении обработки персональных данных'],

   ['file' => 'accounting_statement_2020.pdf', 'name'  => 'Бухгалтерская отчетность за 2020 год'],
   ['file' => 'estimate_2021.pdf', 'name'  => 'Смета доходов и расходов на 2021 год'],
   ['file' => 'estimate_2020_impliment.pdf', 'name'  => 'Исполнение сметы доходов и расходов за 2020 год'],
   ['file' => 'audit_report_2020.pdf', 'name'  => 'Аудиторское заключение за 2020 год'],
   ['file' => 'revision_act_2020.pdf', 'name'  => 'Акт ревизионной комиссии за 2020 год'],

   // ['file' => 'balance.ods', 'name'  => 'Бухгалтерская отчетность за 2017 год'],
   // ['file' => 'estimate_2018.ods', 'name'  => 'Смета доходов и расходов на 2018 год'],
   // ['file' => 'estimate_2017_impliment.ods', 'name'  => 'Исполнение сметы доходов и расходов за 2017 год'],
   // ['file' => 'audit_report_2017.pdf', 'name'  => 'Аудиторское заключение за 2017 год'],
   // ['file' => 'revision_act_2017.pdf', 'name'  => 'Акт ревизионной комиссии за 2017 год'],

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
      <p><i class="far fa-file"></i> <a href="{{ asset('storage/'.$doc['file']) }}">{{$doc['name']}}</a></p>
      @endforeach
   </div>
</article>
@endsection