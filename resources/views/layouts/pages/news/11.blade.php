@extends('layouts.master')
@section('title','Режим работы офисов КПК "Касса взаимопомощи"')
@section('description','Офисы КПК "Касса взаимопомощи" работают в ограниченном режиме')
@section('keywords','кредитный кооператив, кредитный потребительский кооператив, коронавирус, covid-2019')
@section('content')
@include('layouts.partials._header',['pageHeader'=>'Режим работы офисов КПК "Касса взаимопомощи"'])
<article>
	<div class="container">
		<h2>Уважаемые клиенты!</h2>
		<p>В связи с мероприятиями по предотвращению распространения коронавирусной инфекции, вызванной COVID-2019, с 20 апреля и до особого распоряжения органов власти офисы кооператива работают в ограниченном режиме:</p>
		<ul>
				<li>Прием клиентов понедельник-пятница: с 9:00 до 15:00, перерыв на обед: с 12:00 до 12:30</li>
				<li>Прием клиентов суббота: с 9:00 до 13:00</li>
				<li>Технические перерывы: 11:00-11:15, 13:00-13:15</li>
				<li>Клиенты без лицевых средств индивидуальной защиты (масок, распираторов и т.п.) <b><span class="text-danger">в офисы КПК не допускаются</span></b></li>
				<li>В помещениях кооператива необходимо соблюдать социальную дистанцию согласно разметке</li>
		</ul>
		<p>Обращаем внимание на возможность оплаты займов безналичным способом. Реквизиты для оплаты:</p>
		<ul>
			<li>ИНН: 3438200496</li>
			<li>Расчетный счет: 40701810811000000152</li>
			<li>БИК: 041806647</li>
			<li>Назначение платежа:	Оплата по договору займа №________ ФИО Заемщика</li>
		</ul>

		<h3>Оплата через сайт СбербанкОнлайн</h3>
		<h5>Шаг 1. Выбрать раздел "Организациям - Рублевый перевод по России"</h5>
		<img src="{{ asset('images/paySBOL1.jpg') }}" class="mx-auto d-block my-5" alt="Шаг 1">

		<h5>Шаг 2. Заполнить реквизиты получателя и выбрать карту списания</h5>
		<img src="{{ asset('images/paySBOL2.jpg') }}" class="mx-auto d-block my-5" alt="Шаг 2">

		<h5>Шаг 3. Указать данные плательщика</h5>
		<img src="{{ asset('images/paySBOL3.jpg') }}" class="mx-auto d-block my-5" alt="Шаг 3">

		<h5>Шаг 4. Ввести сумму платежа</h5>

		<h5>Шаг 5. Проверить реквизиты и оплатить</h5>
		<img src="{{ asset('images/paySBOL5.jpg') }}" class="mx-auto d-block my-5" alt="Шаг 5">

		<p>Для удобства можно сохранить платеж в шаблонах или настроить автоматический ежемесячный платеж.</p>

	</div>
</article>
@endsection