@extends('layouts.master')
@section('title','Контакты')
@section('description','Адреса и телефоны отделений в г.Урюпинске, р.п.Новониколаевском, ст.Нехаевской, г.Волжском, г.Борисоглебске, р.п.Средней Ахтебе, г.Краснослободске')
@section('keywords','вложить деньги, вклад, займ, срочный заем, сберегательные вклады, выгодные вклады, займы урюпинск, займы новониколаевка, займы нехаево, займы борисоглебск, займы волжский, займы средняя ахтуба, займы краснослободск, займ в кредитном кооперативе, кредитный кооператив, кредитный потребительский кооператив, займ кооператив, денежные займы, займы в рублях')
@section('content')
@include('layouts.partials._header',['pageHeader'=>'Контакты'])
<article>
   <div class="container">
      <dl class="row">
         <dt class="col-sm-4">Полное наименование:</dt>
         <dd class="col-sm-8" itemprop="name" id="org_name">Кредитный потребительский кооператив "Касса взаимопомощи"</dd>
         <dt class="col-sm-4">Юридический адрес:</dt>
         <dd class="col-sm-8">403113 Волгоградская обл., г.Урюпинск, ул.Пушкина, д.11</dd>
         <dt class="col-sm-4">ИНН:</dt>
         <dd class="col-sm-8">3438200496</dd>
         <dt class="col-sm-4">Расчетный счет:</dt>
         <dd class="col-sm-8">40701810811000000152</dd>
         <dt class="col-sm-4">БИК:</dt>
         <dd class="col-sm-8">041806647</dd>
         <dt class="col-sm-4"><i class="far fa-file-pdf"></i> <a href="{{ asset('storage/partner_card.pdf') }}">Карта партнера</a></dt>
         <dd class="col-sm-8"><a href="mailto:mail@ukvp.ru">mail@ukvp.ru</a></dd>
            
      </dl>
      
      <div class="row">
         <div class="col-md-8">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abc34d58c5a8de35df6e5cf407aabe44ceb11ac717ec9918e861d564704869ac7&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
         </div>
         
         <div class="col-md-4">
            <div class="branchContact" id="accordion">

               {{-- Урюпинск --}}
               <div class="card" id="orgBranch0" itemscope itemtype="http://schema.org/LocalBusiness" itemref="org_name">
                  <link itemprop="image" href="{{asset('images/logo.png')}}" />
                  <link itemprop="url" href="{{env('APP_URL')}}" />
                  
                  <div class="card-header" id="headingBranch0">
                     <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#Branch0" aria-expanded="true" aria-controls="collapseOne">г.Урюпинск</button>
                     </h5>
                  </div>
                     
                  <div id="Branch0" class="collapse show" aria-labelledby="headingBranch0" data-parent="#accordion">
                     <dl class="row mx-0 my-3">
                        <dt class="col-sm-2 text-center"><i class="fas fa-map-marker-alt"></i></dt>
                        <dd class="col-sm-10">
                           <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           <span itemprop="postalCode">403113</span> <span itemprop="addressRegion">Волгоградская обл.</span>, <span itemprop="addressLocality">г. Урюпинск</span>, <span itemprop="streetAddress">ул. Пушкина, д.11</span>
                           </p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="far fa-clock"></i></dt>
                        <dd class="col-sm-10">
                           <p><time itemprop="openingHours" datetime="Mo-Fr 08:30−16:00">пн-пт: 8:30-12:00; 13:00-16:00</time><br>
                           <time itemprop="openingHours" datetime="Sa 09:00−13:00">сб: 9:00-13:00</time></p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="fas fa-phone-volume"></i></dt>
                        <dd class="col-sm-10">
                              <dl class="row">
                                 <dt class="col-6">Общий:</dt>
                                 <dd class="col-6"><a href="tel:+78444241640" itemprop="telephone" content="+78444241640"><small>8-(84442) </small>4-16-40</a></dd>
                                 <dt class="col-6">Отдел займов:</dt>
                                 <dd class="col-6"><a href="tel:+78444242963" itemprop="telephone" content="+78444242963"><small>8-(84442) </small>4-29-63</a></dd>
                                 <dt class="col-6">Отдел сбер.взносов:</dt>
                                 <dd class="col-6"><a href="tel:+78444242920" itemprop="telephone" content="+78444242920"><small>8-(84442) </small>4-29-20</a></dd>
                              </dl>
                        </dd>
                     </dl>
                  </div>
               </div>
               
               {{-- Новониколаевский --}}
               <div class="card" id="orgBranch1" itemscope itemtype="http://schema.org/LocalBusiness">
                  <meta itemprop="name" content="Отделение №1 р.п.Новониколаевский">
                  <meta itemprop="parentOrganization" itemref="orgBranch0">
                  <link itemprop="image" href="{{asset('images/logo.png')}}" />
                  <link itemprop="url" href="{{env('APP_URL')}}" />
                  
                  <div class="card-header" id="headingBranch1">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#Branch1" aria-expanded="true" aria-controls="collapseOne">р.п.Новониколаевский</button>
                     </h5>
                  </div>

                  <div id="Branch1" class="collapse" aria-labelledby="headingBranch1" data-parent="#accordion">
                     <dl class="row mx-0 my-3">
                        <dt class="col-sm-2 text-center"><i class="fas fa-map-marker-alt"></i></dt>
                        <dd class="col-sm-10" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           <meta itemprop="addressRegion" content="Волгоградская обл.">
                           <meta itemprop="addressLocality" content="р.п.Новониколаевский">
                           <p itemprop="streetAddress">ул.Народная, д.120</p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="far fa-clock"></i></dt>
                        <dd class="col-sm-10">
                           <p><time itemprop="openingHours" datetime="Mo-Fr 08:30−16:00">пн-пт: 8:30-12:00; 13:00-16:00</time><br>
                           <time itemprop="openingHours" datetime="Sa 09:00−13:00">сб: 9:00-13:00</time></p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="fas fa-phone-volume"></i></dt>
                        <dd class="col-sm-10">
                           <dl class="row">
                              <dt class="col-6">Общий:</dt>
                              <dd class="col-6"><a href="tel:+78444461467" itemprop="telephone" content="+78444461467"><small>8-(84444) </small>6-14-67</a></dd>
                           </dl>
                        </dd>
                     </dl>
                  </div>
               </div>
               
               {{-- Нехаево --}}
               <div class="card" id="orgBranch2" itemscope itemtype="http://schema.org/LocalBusiness">
                  <meta itemprop="name" content="Отделение №2 ст.Нехаевская">
                  <meta itemprop="parentOrganization" itemref="orgBranch0">
                  <link itemprop="image" href="{{asset('images/logo.png')}}" />
                  <link itemprop="url" href="{{env('APP_URL')}}" />

                  <div class="card-header" id="headingBranch2">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#Branch2" aria-expanded="true" aria-controls="collapseOne">ст.Нехаевская</button>
                     </h5>
                  </div>

                  <div id="Branch2" class="collapse" aria-labelledby="headingBranch2" data-parent="#accordion">
                     <dl class="row mx-0 my-3">
                        <dt class="col-sm-2 text-center"><i class="fas fa-map-marker-alt"></i></dt>
                        <dd class="col-sm-10" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           <meta itemprop="addressRegion" content="Волгоградская обл.">
                           <meta itemprop="addressLocality" content="ст.Нехаевская">
                           <p itemprop="streetAddress">ул.Победы, д.20</p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="far fa-clock"></i></dt>
                        <dd class="col-sm-10">
                           <p><time itemprop="openingHours" datetime="Mo-Fr 08:30−16:00">пн-пт: 8:30-12:00; 13:00-16:00</time><br>
                           <time itemprop="openingHours" datetime="Sa 09:00−13:00">сб: 9:00-13:00</time></p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="fas fa-phone-volume"></i></dt>
                        <dd class="col-sm-10">
                           <dl class="row">
                              <dt class="col-6">Общий:</dt>
                              <dd class="col-6"><a href="tel:+78444351994" itemprop="telephone" content="+78444351994"><small>8-(84443) </small>5-19-94</a></dd>
                           </dl>
                        </dd>
                     </dl>
                  </div>
               </div>
               
               {{-- Волжский --}}
               <div class="card" id="orgBranch3" itemscope itemtype="http://schema.org/LocalBusiness">
                  <meta itemprop="name" content="Отделение №3 г.Волжский">
                  <meta itemprop="parentOrganization" itemref="orgBranch0">
                  <link itemprop="image" href="{{asset('images/logo.png')}}" />
                  <link itemprop="url" href="{{env('APP_URL')}}" />

                  <div class="card-header" id="headingBranch3">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#Branch3" aria-expanded="true" aria-controls="collapseOne">г.Волжский</button>
                     </h5>
                  </div>

                  <div id="Branch3" class="collapse" aria-labelledby="headingBranch3" data-parent="#accordion">
                     <dl class="row mx-0 my-3">
                        <dt class="col-sm-2 text-center"><i class="fas fa-map-marker-alt"></i></dt>
                        <dd class="col-sm-10" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           <meta itemprop="addressRegion" content="Волгоградская обл.">
                           <meta itemprop="addressLocality" content="г.Волжский">
                           <p itemprop="streetAddress">ул.87 Гвардейская, д.37</p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="far fa-clock"></i></dt>
                        <dd class="col-sm-10">
                           <p><time itemprop="openingHours" datetime="Mo-Fr 08:30−16:00">пн-пт: 8:30-12:00; 13:00-16:00</time><br>
                           <time itemprop="openingHours" datetime="Sa 09:00−13:00">сб: 9:00-12:30</time></p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="fas fa-phone-volume"></i></dt>
                        <dd class="col-sm-10">
                           <dl class="row">
                              <dt class="col-6">Общий:</dt>
                              <dd class="col-6"><a href="tel:+78443513333" itemprop="telephone" content="+78443513333"><small>8-(8443) </small>51-33-33</a></dd>
                              <dt class="col-6">&nbsp;</dt>
                              <dd class="col-6"><a href="tel:+78443513311" itemprop="telephone" content="+78443513311"><small>8-(8443) </small>51-33-11</a></dd>
                           </dl>
                        </dd>
                     </dl>
                  </div>
               </div>

               {{-- Борисоглебск --}}
               <div class="card" id="orgBranch4" itemscope itemtype="http://schema.org/LocalBusiness">
                  <meta itemprop="name" content="Отделение №4 г.Борисоглебск">
                  <meta itemprop="parentOrganization" itemref="orgBranch0">
                  <link itemprop="image" href="{{asset('images/logo.png')}}" />
                  <link itemprop="url" href="{{env('APP_URL')}}" />

                  <div class="card-header" id="headingBranch4">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#Branch4" aria-expanded="true" aria-controls="collapseOne">г.Борисоглебск</button>
                     </h5>
                  </div>

                  <div id="Branch4" class="collapse" aria-labelledby="headingBranch4" data-parent="#accordion">
                     <dl class="row mx-0 my-3">
                        <dt class="col-sm-2 text-center"><i class="fas fa-map-marker-alt"></i></dt>
                        <dd class="col-sm-10" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           <meta itemprop="addressRegion" content="Воронежская обл.">
                           <meta itemprop="addressLocality" content="г.Борисоглебск">
                           <p itemprop="streetAddress">ул.Советская, д.49, офис 7-8</p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="far fa-clock"></i></dt>
                        <dd class="col-sm-10">
                           <p><time itemprop="openingHours" datetime="Mo-Fr 08:30−16:00">пн-пт: 8:30-12:00; 13:00-16:00</time><br>
                           <time itemprop="openingHours" datetime="Sa 09:00−13:00">сб: 9:00-13:00</time></p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="fas fa-phone-volume"></i></dt>
                        <dd class="col-sm-10">
                           <dl class="row">
                              <dt class="col-6">Общий:</dt>
                              <dd class="col-6"><a href="tel:+74735461129" itemprop="telephone" content="+74735461129"><small>8-(47354) </small>6-11-29</a></dd>
                           </dl>
                        </dd>
                     </dl>
                  </div>
               </div>

               {{-- СрАхтуба --}}
               <div class="card" id="orgBranch5" itemscope itemtype="http://schema.org/LocalBusiness">
                  <meta itemprop="name" content="Отделение №5 р.п.Средняя Ахтуба">
                  <meta itemprop="parentOrganization" itemref="orgBranch0">
                  <link itemprop="image" href="{{asset('images/logo.png')}}" />
                  <link itemprop="url" href="{{env('APP_URL')}}" />

                  <div class="card-header" id="headingBranch5">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#Branch5" aria-expanded="true" aria-controls="collapseOne">р.п.Средняя Ахтуба</button>
                     </h5>
                  </div>

                  <div id="Branch5" class="collapse" aria-labelledby="headingBranch5" data-parent="#accordion">
                     <dl class="row mx-0 my-3">
                        <dt class="col-sm-2 text-center"><i class="fas fa-map-marker-alt"></i></dt>
                        <dd class="col-sm-10" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           <meta itemprop="addressRegion" content="Волгоградская обл.">
                           <meta itemprop="addressLocality" content="р.п.Средняя Ахтуба">
                           <p itemprop="streetAddress">ул.Ленина, д.34А</p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="far fa-clock"></i></dt>
                        <dd class="col-sm-10">
                           <p><time itemprop="openingHours" datetime="Mo-Fr 08:30−16:00">пн-пт: 8:30-12:00; 13:00-16:00</time><br>
                           <time itemprop="openingHours" datetime="Sa 09:00−13:00">сб: 9:00-13:00</time></p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="fas fa-phone-volume"></i></dt>
                        <dd class="col-sm-10">
                           <dl class="row">
                              <dt class="col-6">Общий:</dt>
                              <dd class="col-6"><a href="tel:+78447954306" itemprop="telephone" content="+78447954306"><small>8-(84479) </small>5-43-06</a></dd>
                           </dl>
                        </dd>
                     </dl>
                  </div>
               </div>

               {{-- Краснослободск --}}
               <div class="card" id="orgBranch6" itemscope itemtype="http://schema.org/LocalBusiness">
                  <meta itemprop="name" content="Отделение №6 г.Краснослободск">
                  <meta itemprop="parentOrganization" itemref="orgBranch0">
                  <link itemprop="image" href="{{asset('images/logo.png')}}" />
                  <link itemprop="url" href="{{env('APP_URL')}}" />

                  <div class="card-header" id="headingBranch6">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#Branch6" aria-expanded="true" aria-controls="collapseOne">г.Краснослободск</button>
                     </h5>
                  </div>

                  <div id="Branch6" class="collapse" aria-labelledby="headingBranch6" data-parent="#accordion">
                     <dl class="row mx-0 my-3">
                        <dt class="col-sm-2 text-center"><i class="fas fa-map-marker-alt"></i></dt>
                        <dd class="col-sm-10" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           <meta itemprop="addressRegion" content="Волгоградская обл.">
                           <meta itemprop="addressLocality" content="г.Краснослободск">
                           <p itemprop="streetAddress">ул.Садовая, д.6А, офис 6</p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="far fa-clock"></i></dt>
                        <dd class="col-sm-10">
                           <p><time itemprop="openingHours" datetime="Mo-Fr 08:30−16:00">пн-пт: 8:30-12:00; 13:00-16:00</time><br>
                           <time itemprop="openingHours" datetime="Sa 09:00−13:00">сб: 9:00-13:00</time></p>
                        </dd>
                        
                        <dt class="col-sm-2 text-center"><i class="fas fa-phone-volume"></i></dt>
                        <dd class="col-sm-10">
                           <dl class="row">
                              <dt class="col-6">Общий:</dt>
                              <dd class="col-6"><a href="tel:+78447955167" itemprop="telephone" content="+78447955167"><small>8-(84479) </small>5-51-67</a></dd>
                           </dl>
                        </dd>
                     </dl>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</article>
@endsection