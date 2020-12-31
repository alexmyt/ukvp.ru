@extends('layouts.master')
@section('title','Кредитный потребительский кооператив')
@section('description','Касса взаимопомощи - Кредитный потребительский кооператив. Выгодные займы и вклады в Урюпинске, Новониколаевском, Нехаево, Борисоглебске, Волжском, Краснослободске, Средней Ахтубе. Надежно, выгодно, удобно.')
@section('keywords','вложить деньги, вклад, займ, срочный заем, сберегательные вклады, выгодные вклады, займы урюпинск, займы новониколаевка, займы нехаево, займы борисоглебск, займы волжский, займы средняя ахтуба, займы краснослободск, займ в кредитном кооперативе, кредитный кооператив, кредитный потребительский кооператив, займ кооператив, денежные займы, займы в рублях, кредит в урюпинске, кредит в волжском')
@push('header_css')
<!--Revolution Slider-->
<link href="{{ asset('revolution-slider/css/extralayers.css') }}" rel="stylesheet">
<link href="{{ asset('revolution-slider/css/settings.css') }}" rel="stylesheet">
<link href="{{ asset('revolution-slider/css/navigation.css') }}" rel="stylesheet">

@endpush
@section('content')
{{-- <div id="banner-loans" class="container">
   <a href="{{route('news',8)}}"><img src="{{asset('images/bg-credit_action_2019_6.jpg')}}" class="img-fluid"></a>
   
   <div class="d-flex flex-column" id="banner-top">
      <span id="banner-loans-str1">Осуществи свою мечту!</span>
   </div>
   
   <div class="d-flex flex-column" id="banner-bottom">
      <span id="banner-loans-str2">ЗАЙМЫ</span>
      <span id="banner-loans-str3">на потребительские и другие нужды</span>
      <!--<button type="button" class="btn btn-warning btn-lg" id="giveConsultationIndexBtn" data-toggle="modal" data-target="#giveCallbackModal">Получить консультацию</button>-->
      <span id="banner-loans-str4" class="mt-3">Акция* Срок проведения акции с 01.08.2019 по 31.08.2019. Займы предоставляются в рублях. Минимальная сумма займа - 20000 (Двадцать тысяч) руб., максимальная сумма — 500000 (Пятьсот тысяч) руб. Срок займа от 1 мес. до 12 мес. Процентная ставка за пользование займом 14% годовых. Проценты начисляются на остаток займа. Кооператив вправе потребовать предоставление обеспечения по займу. Возможность досрочного погашения. Обязательное условие предоставления займа — членство в КПК-КВП. Подробности акции — в офисах кооператива и по телефонам, указанным в объявлении.<br>
         Член кредитного кооператива (Пайщик) несет солидарно с другими членами Кооператива субсидиарную ответственность в пределах невнесенной части дополнительного взноса по обязательствам кредитного кооператива. Предложение не является офертой.</span>
   </div>
</div> --}}

  
<section>
   <div class="rev_slider_wrapper fullwidthbanner-container">
      <div id="head_slider" class="fullwidthbanner rev_slider"  data-navigationStyle="">
         <ul class="invisible">
            <li data-transition="crossfade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
               <img src="{{asset('images/1x1.png')}}" data-lazyload="{{asset('images/1980x550/slider-money.jpg')}}" alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />
               <div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

               <div class="tp-caption customin ltl tp-resizeme medium_text text_white bg_green"
                  data-x="center"
                  data-y="105"
                  data-frames='[{"delay":0,"speed":700,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},
                              {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                  >
                  <span class="fw-300">КРЕДИТНЫЙ ПОТРЕБИТЕЛЬСКИЙ КООПЕРАТИВ</span>
               </div>

               <div class="tp-caption customin ltl tp-resizeme very_large_text large_bold_white bg_green"
                  data-x="center"
                  data-y="200"
                  data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},
                              {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                  >
                  КАССА ВЗАИМОПОМОЩИ
               </div>

               <div class="tp-caption customin ltl tp-resizeme medium_text text_white bg_green"
                  data-x="center"
                  data-y="330"
                  data-frames='[{"delay":0,"speed":1300,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},
                              {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                  >
                  <span class="fw-300">г.Урюпинск</span>
               </div>
               
            </li>
               
            {{-- <li data-transition="crossfade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
               <img src="{{asset('images/1x1.png')}}" data-lazyload="{{asset('images/1980x550/slider-balluns.jpg')}}" alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

               <div class="tp-caption customin ltl tp-resizeme medium_text text_white"
                  data-x="center"
                  data-y="105"
                  data-frames='[{"delay":500,"speed":300,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},
                              {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'                  >
                  <span class="fw-300">1948-1998 - Касса взаимопомощи пенсионеров и инвалидов</span>
               </div>

               <div class="tp-caption customin ltl tp-resizeme very_large_text large_bold_white"
                  data-x="center"
                  data-y="200"
                  data-frames='[{"delay":500,"speed":300,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},
                              {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                  >
                  Нам - 70 лет!
               </div>

               <div class="tp-caption customin ltl tp-resizeme medium_text text_white"
                  data-x="center"
                  data-y="330"
                  data-frames='[{"delay":500,"speed":300,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},
                              {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'                  >
                  <span class="fw-300">1998-2018 - КПК "Касса взаимопомощи"</span>
               </div>
               
            </li> --}}
         </ul>
         <div class="tp-bannertimer"></div>
      </div>
   </div>
</section>


<section class="info-bar info-bar-clean py-2">
   <div class="container">
      <div class="row text-center">
         <div class="col-sm-3 col-6">
            <h3 class="fs-30"><span class="countTo" data-speed="2000">9 000</span><span>+</span></h3>
            <p>АКТИВНЫХ ПАЙЩИКОВ</p>
         </div>

         <div class="col-sm-3 col-6">
            <h3 class="fs-30"><span class="countTo" data-speed="1500">4 033</span></h3>
            <p>ОФОРМЛЕНО ЗАЙМОВ В 2019г.</p>
         </div>

         <div class="col-sm-3 col-6">
            <h3 class="fs-30"><span class="countTo" data-speed="2500">294 110 700</span><small> руб.</small></h3>
            <p>ВЫДАНО ЗАЙМОВ В 2019г.</p>
         </div>

         <div class="col-sm-3 col-6">
            <h3 class="fs-30"><span class="countTo" data-speed="3500">40 183 000</span><small> руб.</small></h3>
            <p>ПРИЧИСЛЕНО % НА СБЕРЕЖЕНИЯ В 2019г.</p>
         </div>

      </div>
   </div>
</section>
<div class="border-bottom py-2">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-9">
            <h1>Кредитный потребительский кооператив "Касса взаимопомощи", г.Урюпинск</h1>
            <p class="lead">Объединяем пайщиков с 1948 года. Надежно. Выгодно. Удобно.</p>
            <p class="mt-5">КПК "Касса взаимопомощи" зарегистрирован в 1998 году и является наследником кассы взаимопомощи при городском собесе города Урюпинска, созданной в 1948 году.</p>
            <p>Кооператив объединяет более 14 тысяч пайщиков в семи районах Волгоградской и Воронежской областей. Финансовые продукты кооператива помогают в преодолении финансовых затруднений, в сохранении и приумножении личных сбережений.</p>
            <p>КПК "Касса взаимопомощи" является членом саморегулируемой организации <a href="https://www.npnokk.ru/">Ассоциации «Саморегулируемая организация «Национальное содружество кредитных кооперативов «Содействие»</a>.</p>

            <div class="mt-60">
               <div class="heading-title heading-border-bottom heading-color text-center">
                  <h3>Почему мы?</h3>
                  <p class="my-1"><small>почему есть смысл отдать предпочтение Кредитному потребительскому кооперативу "Касса взаимопомощи"</small></p>
               </div>
               <p>Персональный подход к <strong>заёмщикам</strong> даёт нам возможность предложить выход из ситуаций, в которых другие кредитные организации вынуждены давать отказ. Личные средства <strong>сберегателей</strong> реинвестируются в надежных заемщиков, что снижает риски и позволяет предложить более высокую процентную ставку.</p>
               <div class="row">
                  <div class="col-sm-6">
                     <ul class="list-unstyled list-icons">
                        <li><i class="fa fa-check text-success"></i>Индивидуальный подход к каждому клиенту</li>
                        <li><i class="fa fa-check text-success"></i>Выгодное размещение сбережений</li>
                        <li><i class="fa fa-check text-success"></i>Отсутствие скрытых платежей и комиссий</li>
                     </ul>
                  </div>
                  <div class="col-sm-6">
                     <ul class="list-unstyled list-icons">
                        <li><i class="fa fa-check text-success"></i>Решение по займу 1 рабочий день</li>
                        <li><i class="fa fa-check text-success"></i>Гибкий график погашения займа</li>
                        <li><i class="fa fa-check text-success"></i>Досрочное погашение займов без штрафных санкций</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
            
         <div class="col-12 col-lg-3">
            <div class="card">
               <div class="card-header text-uppercase">Новости</div>
               <ul class="list-group list-group-flush">
                  <li class="list-group-item text-uppercase"><a href="{{route('news',15)}}">График работы в новогодние каникулы <br><span class="small text-muted">31.12.2020</span></a></li>
                  <li class="list-group-item text-uppercase"><a href="{{route('news',14)}}">Общее собрание членов кооператива в форме собрания уполномоченных <br><span class="small text-muted">29.05.2020</span></a></li>
                  <li class="list-group-item text-uppercase"><a href="{{route('news',13)}}">График работы в майские праздники <br><span class="small text-muted">30.04.2020</span></a></li>
                  <li class="list-group-item text-uppercase"><a href="{{route('news',11)}}">Офисы КПК возобновляют работу с клиентами <span class="text-danger">в ограниченном режиме</span> <br><span class="small text-muted">20.04.2020</span></a></li>
                  <li class="list-group-item text-uppercase"><a href="{{route('news',10)}}">Работа КПК в период мероприятий, связанных с COVID-19 <br><span class="small text-muted">27.03.2020</span></a></li>
               </ul>
            </div>
               
            <a href="https://www.npnokk.ru"><img src="{{ asset('images/nokk_2.jpg') }}" class="mx-auto d-block my-5" alt="СРО НОКК"></a>
            <a href="http://kredo-kam.ru/"><img src="{{ asset('images/kredo-kam.png') }}" class="mx-auto d-block my-5" alt="БКИ КРЕДО"></a>
         </div>
      </div>
   </div>
</div>

<section class="py-2">
   <div class="container-fluid">
   </div>
</section>
@endsection
@push('footer_scripts')
<script src="{{asset('revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/revolution_slider.js')}}"></script>
@endpush