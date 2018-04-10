 <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
   <div class="container">
      <a class="navbar-brand" href="{{env('APP_URL')}}" id="org_url">
         <img id="header-logotype" src="{{asset('images/logo.png')}}" class="d-inline-block align-top" alt="Кредитный потребительский кооператив &quot;Касса взаимопомощи&quot;">
      </a>
   
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Включить навигацию">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
         <div class="navbar-nav text-uppercase">
            <a class="nav-item nav-link" href="/">Главная</a>
            <a class="nav-item nav-link" href="/shareholders">Членство в КПК</a>
            <a class="nav-item nav-link" href="/loans">Займы</a>
            {{--<a class="nav-item nav-link" href="/deposits">Сбережения</a>--}}
            <a class="nav-item nav-link" href="/docs">Документы</a>
            <a class="nav-item nav-link" href="/contacts">Контакты</a>
         </div>
      </div>

      <header_branch_selector></header_branch_selector>
   </div>
</nav>