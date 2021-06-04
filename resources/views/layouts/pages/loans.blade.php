@extends('layouts.master')
@section('title','Виды займов')
@section('description','Условия получения займов к КПК-КВП')
@section('keywords','вложить деньги, вклад, займ, срочный заем, сберегательные вклады, выгодные вклады, займы урюпинск, займы новониколаевка, займы нехаево, займы борисоглебск, займы волжский, займы средняя ахтуба, займы краснослободск, займ в кредитном кооперативе, кредитный кооператив, кредитный потребительский кооператив, займ кооператив, денежные займы, займы в рублях')
@section('content')
@include('layouts.partials._header',['pageHeader'=>'Займы'])
<article>
	<div class="container">

		<p>Заём в Кредитном потребительском кооперативе «Касса взаимопомощи» - удобный способ выхода из затруднительной финансовой ситуации. Мы выдаем займы без лишних проволочек: от заявки до получения денег может пройти всего 30 минут.</p>
		<p>Получить заём может любой житель Волгоградской или Воронежской областей, возрастом от 18 до 80 лет, имеющий стабильный и подтвержденный документально доход. Каждый заёмщик обязан вступить в члены КПК-КВП.</p>
		<p>Сумма займа может быть от 1 тысячи до 3 миллионов рублей, срок займов от 3 месяцев до 10 лет. В ряде случаев может потребоваться обеспечение в виде залога и/или поручительства.</p>
		<p>Пенсионеры при получении займа пользуются рядом преимуществ в виде сниженной процентной ставки и отсутствия поручителей по займам до 100 тысяч рублей. <sup>1</sup></p>
		<p>Возврат заёмных средств осуществляется ежемесячными платежами согласно утвержденного графика платежей. Мы не ограничиваем наших пайщиков в возможности частичного или полного досрочного погашения займов, за это не взимается никаких комиссий.</p>
		<h5 class="py-3">Для наших пайщиков доступны следующие виды займов:</h5>
		<table class="table table-bordered table-responsive">
			<thead class="thead-light">
				<tr>
					<th>Вид займа</th>
					<th class="text-nowrap">Ставка, % год.</th>
					<th>Особенности</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Потребительский</th>
					<td class="text-center">от 14% <sup>2</sup></td>
					<td>Обеспечивается возвратным (добровольным паевым) взносом в размере 10% от суммы займа. Может потребоваться поручительство и/или залог имущества.</td>
				</tr>
				<tr>
					<th>Кредитная линия</th>
					<td class="text-center">20%</td>
					<td>На предпринимательские нужды</td>
				</tr>
			</tbody>
		</table>
		<p class="text-muted">1. По решению Комитета по займам может потребоваться обеспечение займа.</p>
		<p class="text-muted">2. Конкретная процентная ставка по договору займа устанавливается комитетом по займам после рассмотрения заявки.</p>
		<p><a href="{{route('news',12)}}">О праве заемщика обратиться к кредитору с требованием об изменении условий договора (льготном периоде) в период с 3 апреля 2020г. по 30 сентября 2020г.</a></p>
	</div>
</article>
@endsection