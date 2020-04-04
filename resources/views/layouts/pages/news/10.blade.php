@extends('layouts.master')
@section('title','Ограничение на посещение офисов в связи с COVID-19')
@section('description','Доступ в офисы КПК "Касса взаимопомощи" ограничен. Инструкция погашения займа через банк')
@section('keywords','кредитный кооператив, кредитный потребительский кооператив, погашение займа, сбербанк, коронавирус, covid-19')
@section('content')
@include('layouts.partials._header',['pageHeader'=>'Ограничение доступа в офисы КПК "Касса взаимопомощи"'])
<article>
	<div class="container">
		<h2>Уважаемые пайщики!</h2>
		<p>Во исполнение Указа Президента РФ офисы КПК "Касса взаимопомощи" не будут работать с 30 марта вплоть до особого распоряжения органов власти.
			 Вы можете оплатить займы безналичным способом через любой банк. В качестве получателя платежа необходимо ввести следующие реквизиты:</p>
		<ul>
				<li>ИНН: 3438200496</li>
				<li>Расчетный счет: 40701810811000000152</li>
				<li>БИК: 041806647</li>
				<li>Назначение платежа:	Оплата по договору займа №________</li>
		</ul>
		<p>Информацию можно получить в будние дни с 9-00 до 17-00 по телефонам</p>
		<dl class="row">
			<dt class="col-sm-4">Центральный офис, г.Урюпинск:</dt>
			<dd class="col-sm-8">Оперзал:<a href="tel:+79093890904" itemprop="telephone" content="+79093890904">+7 (909) 389-09-04</a><br>
			Юротдел:<a href="tel:+79692939452" itemprop="telephone" content="+79692939452">+7 (969) 293-94-52</a></dd>

			<dt class="col-sm-4">Отделение №1 р.п.Новониколаевский:</dt>
			<dd class="col-sm-8"><a href="tel:+79050648111" itemprop="telephone" content="+79050648111">+7 (905) 064-81-11</a></dd>

			<dt class="col-sm-4">Отделение №2 ст.Нехаевская:</dt>
			<dd class="col-sm-8"><a href="tel:+79375462592" itemprop="telephone" content="+79375462592">+7 (937) 546-25-92</a></dd>

			<dt class="col-sm-4">Отделение №3 г.Волжский:</dt>
			<dd class="col-sm-8"><a href="tel:+79034793311" itemprop="telephone" content="+79034793311">+7 (903) 479-33-11</a><br>
			<a href="tel:+79034799669" itemprop="telephone" content="+79034799669">+7 (903) 479-96-69</a></dd>
	
			<dt class="col-sm-4">Отделение №5 р.п.Средняя Ахтуба:</dt>
			<dd class="col-sm-8"><a href="tel:+79034796661" itemprop="telephone" content="+79034796661">+7 (903) 479-66-61</a></dd>

			<dt class="col-sm-4">Отделение №6 г.Краснослободск:</dt>
			<dd class="col-sm-8"><a href="tel:+79275015385" itemprop="telephone" content="+79275015385">+7 (927) 501-53-85</a></dd>

		</dl>
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