 <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white pb-0">
   <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Включить навигацию">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="{{config('app.url')}}" id="org_url">
         <img id="header-logotype" src="{{asset('images/logo.png')}}" class="mr-2" alt="Кредитный потребительский кооператив &quot;Касса взаимопомощи&quot;">
         <div class="d-none d-md-flex flex-column">
            <span id="brand-opf">Кредитный потребительский кооператив</span>
            <span id="brand-name">Касса взаимопомощи</span>
            <span id="brand-slogan">Надежно. Выгодно. Удобно.</span>
         </div>
      </a>
   
      <header_branch_selector></header_branch_selector>

      {{--<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" id="giveCallbackHeaderBtn" data-target="#giveCallbackModal">Заказать звонок</button>--}}
         
   </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-green p-0 mb-2">
   <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav justify-content-center w-100">
            <li class="nav-item"><a class="nav-link" href="/shareholders">Пайщику</a></li>
            <li class="nav-item"><a class="nav-link" href="/loans">Займы</a></li>
            <li class="nav-item"><a class="nav-link" href="/deposits">Сбережения</a></li>
            <li class="nav-item"><a class="nav-link" href="/docs">Документы</a></li>
            <li class="nav-item"><a class="nav-link" href="/contacts">Контакты</a></li>
         </ul>
      </div>
   </div>
</nav>
   
@include('layouts.partials._callbackModal')