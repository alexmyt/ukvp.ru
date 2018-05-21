@extends('layouts.master')
@section('title','Информация для пайщиков')
@section('description','Условия членства в КПК-КВП. Сведения об органах управления, способы защиты прав, отвестственность пайщиков. Способы участия в управлении КПК')
@section('keywords','вложить деньги, вклад, займ, срочный заем, сберегательные вклады, выгодные вклады, займы урюпинск, займы новониколаевка, займы нехаево, займы борисоглебск, займы волжский, займы средняя ахтуба, займы краснослободск, займ в кредитном кооперативе, кредитный кооператив, кредитный потребительский кооператив, займ кооператив, денежные займы, займы в рублях')
@section('content')
@include('layouts.partials._header',['pageHeader'=>'Информация для пайщиков'])
<article>
   <div class="container">
      <h2>Условия членства в КПК-КВП</h2>
      <p class="lead">Услуги предоставляются только пайщикам кооператива.</p>
      <p>Имея при себе паспорт, Вы можете обратиться в ближайшее отделение КПК-КВП, ознакомиться с <a href="{{ asset('storage/organisation_chart.pdf') }}">Уставом</a> и <a href="{{ asset('docs') }}">положениями</a>. Если Вас все устраивает, необходимо написать заявление о вступлении в кооператив, оплатить членский, вступительный и паевой взносы.</p>
      <p>Сотрудники кооператива ответят на все ваши вопросы и дадут любые консультации по работе КПК-КВП</p>
      <table class="table table-bordered table-hover">
         <thead>
           <tr>
             <th>Наименование взноса</th>
             <th class="d-none d-sm-table-cell">Основание</th>
             <th class="d-none d-sm-table-cell">Назначение</th>
             <th>Размер взноса</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td><strong>Вступительный взнос</strong></td>
             <td class="d-none d-sm-table-cell">Вступление в КПК-КВП</td>
             <td class="d-none d-sm-table-cell">Оформление пакета документов вновь принятого пайщика и осуществление уставной деятельности КПК-КВП</td>
             <td>500 руб. для физических лиц; 1000 руб. для юридических лиц.</td>
           </tr>
           <tr>
             <td><strong>Паевой взнос</strong></td>
             <td class="d-none d-sm-table-cell">Вступление в КПК-КВП</td>
             <td class="d-none d-sm-table-cell">Осуществление уставной деятельности КПК-КВП</td>
             <td>1000 руб. для физических лиц; 3000 руб. для юридических лиц.</td>
           </tr>
           <tr>
             <td><strong>Ежегодный членский взнос</strong></td>
             <td class="d-none d-sm-table-cell">Членство в КПК-КВП</td>
             <td class="d-none d-sm-table-cell">Текущие расходы и осуществление уставной деятельности КПК-КВП</td>
             <td>500 руб.</td>
           </tr>
           <tr>
             <td><strong>Членский взнос</strong></td>
             <td class="d-none d-sm-table-cell">Членство в КПК-КВП, получение займа</td>
             <td class="d-none d-sm-table-cell">1. Осуществление уставной деятельности КПК-КВП<br>
               2. Административно-хозяйственные расходы в соответствии со сметой</td>
             <td>Устанавливается в соответствии с положением согласно договора займа.</td>
           </tr>
           <tr>
             <td><strong>Дополнительный взнос</strong></td>
             <td class="d-none d-sm-table-cell">Решение Общего собрания</td>
             <td class="d-none d-sm-table-cell">Покрытие убытков Кооператива в соответствии с действующим законодательством Российской Федерации.</td>
             <td>Утверждается решением Общего собрания.</td>
           </tr>
         </tbody>
      </table>
      
      <h2>Ответственность пайщиков по обязательствам Кооператива</h2>
      <p>Все пайщики кооператива солидарно несут субсидиарную ответственность по обязательствам кооператива в пределах невнесенной части дополнительного взноса каждого из пайщиков. </p>
      
      <h2>Участие в управлении кооперативом</h2>
      <p>Высшим органом управления кооператива является Общее собрание пайщиков. Каждый пайщик вправе лично участвовать в работе Общего собрания, избирать членов выборных органов или вынести на голосование свою кандидатуру. В случае проведения общего собрания в форме собрания уполномоченных, интересы пайщиков представляют избранные ими на собраниях части пайщиков уполномоченные. Пайщик, не являющийся уполномоченным вправе лично присутствовать на Общем собрании в форме уполномоченных, без права участвовать в голосовании.</p>
         
      <h2>Способы защиты прав пайщиков</h2>
      <p>Действия (бездействие) сотрудников Кооператива могут быть обжалованы единоличному исполнительному органу (Директору) кооператива.</p>
      <p>Действия (бездействие) единоличного исполнительного органа (Директора) могут быть обжалованы в Правление кооператива.</p>
      <p>Решения Правления и Комитета по займам могут быть обжалованы в Ревизионную комиссию Кооператива.</p>
      <p>Решение Ревизионной комиссии может быть обжаловано на очередном Общем собрании пайщиков кооператива.</p>
      <p>Решение Общего собрания пайщиков может быть обжаловано в судебном порядке.</p>
      <p>Жалоба на действие (бездействие) работника или решение органа кооператива подается в письменном виде в порядке, установленном для направления обращений пайщиков.</p>
      <p>Иски пайщиков в суд подаются по месту нахождения головного офиса кооператива.</p>
         
      <h2>Рассмотрение обращений</h2>
      <p>Обращения пайщиков направляются в Кооператив в письменном виде с приложением документов (в том числе заверенных копий), подтверждающих обстоятельства, на которые они ссылаются в указанных обращениях по месту нахождения Кооператива или его отделения. Обращения пайщиков рассматриваются в головном офисе Кооператива в г. Урюпинске.</p>
      <p>Срок рассмотрения обращений составляет не более 15 рабочих дней с момента его регистрации в журнале регистрации обращений.</p>
      <p>Обращение должно содержать: фамилию, имя и отчество (при наличии), почтовый адрес пайщика, направляющего обращение, номер договора, заключенного между кооперативом и пайщиком (в случае обращения, связанного с получением финансовой услуги), изложение существа требований и фактических обстоятельств, на которых они основываются, а также доказательства этих обстоятельств, наименование органа, должности, фамилии, имени, отчества работника кооператива, действия (бездействие) которого обжалуются, иные сведения, которые пайщик посчитает нужным включить в обращение. </p>
      <p>Ответ на обращение направляется пайщику в письменном виде на почтовый или электронный адрес, указанный в договоре на получение финансовой услуги, или вручается ему лично в офисе кооператива.</p>
      <p>На устное обращение пайщика ему выдается устный ответ в день получения обращения.</p>
      <p>Также обращения пайщиков могут быть направлены в <a href="https://www.npnokk.ru/">Союз СРО НОКК</a> по адресу: <em>403877 Волгоградская область г. Камышин, ул. Некрасова, д. 4 "А"</em>,
      или в <a href="http://www.cbr.ru/">Банк России</a> по адресу: <em>107016, г. Москва, ул. Неглинная, д. 12</em>.</p>
         
      <h2>Раскрытие информации</h2>
      <p>Кооператив по заявлению пайщика предоставляет ему для ознакомления: <a href="{{ asset('storage/organisation_chart.pdf') }}">Устав</a>,
         <a href="{{ asset('storage/membership_clause.pdf') }}">Положение о членстве</a>,
         <a href="{{ asset('storage/regulation_of managements.pdf') }}">Положение об органах</a>,
         <a href="{{ asset('storage/cond_raising_funds.pdf') }}">Положение о порядке и условиях привлечения денежных средств пайщиков</a>,
         <a href="{{ asset('storage/regulation_granting_loans.pdf') }}">Положение о порядке предоставления займов пайщикам</a>,
         <a href="{{ asset('storage/regulation_of_property.pdf') }}">Положение о порядке формирования и использования имущества</a> и
         <a href="{{ asset('storage/income_distribution_clause.pdf') }}">Положение о распределении дохода кооператива</a>;
         протоколы общего собрания членов кооператива; годовую бухгалтерскую (финансовую отчетность; смету доходов и расходов кооператива и отчет о ее исполнении.
         Ознакомление с указанной документацией производится в офисе кооператива в присутствии его сотрудника.</p>
      <p>По заявлению пайщика ему могут быть предоставлены заверенные копии документов:</p>
      <p>по займам – договор займа, заявление на получение займа, согласие на обработку персональных данных и на взаимодействие с третьими лицами, расходный кассовый ордер или платежное поручение о предоставлении заемщику суммы займа, а также оригинал справки о полном исполнении обязательств по договору займа/ выписки по счету займа, или иная информация о займе, затребованная заемщиком;</p>
      <p>по сбережениям – договор передачи личных сбережений, приходный кассовый ордер или платежное поручение о получении от пайщика суммы сберегательного взноса, а также в оригинале справка с любой информацией о сберегательном взносе, затребованной пайщиком.</p>
         
      <h2>Страхование ответственности</h2>
      <p>Кооператив не является участником системы обязательного страхования вкладов физических лиц.</p>
      <p>Страхование жизни и здоровья заемщика не является обязательным условием предоставления займа.</p>

      <h2>Органы управления кооперативом</h2>
      <dl class="row">
      <p>
         <dt class="col-sm-3">Правление:</dt>
         <dd class="col-sm-9"><strong>Председатель правления:</strong><br>
         Павлов Владимир Васильевич<br>
         <strong>Члены правления:</strong><br>
         Астахова Елена Сергеевна<br>
         Власова Елена Владимировна<br>
         Горбунов Анатолий Михайлович<br>
         Ерков Владимир Михайлович<br>
         Кривошеев Владимир Петрович<br>
         Соловьев Иван Лукич<br>
         Сподарик Владимир Васильевич<br>
         Шипилова Лариса Алексеевна
         </dd>
         
         <dt class="col-sm-3">Единоличный исполнительный орган:</dt>
         <dd class="col-sm-9"><strong>Директор:</strong><br>
         Протопопова Людмила Николаевна
         </dd>
         
         <dt class="col-sm-3">Комитет по займам:</dt>
         <dd class="col-sm-9"><strong>Председатель комитета:</strong><br>
         Назарова Марина Петровна<br>
         <strong>Члены комитета:</strong><br>
         Павлова Людмила Алексеевна<br>
         Нехаева Алеся Николаевна<br>
         Ухлова Наталия Николаевна<br>
         Иванова Людмила Юрьевна<br>
         </dd>

         <dt class="col-sm-3">Ревизионная комиссия:</dt>
         <dd class="col-sm-9"><strong>Председатель:</strong><br>
         Милославская Лидия Владимировна<br>
         <strong>Члены правления:</strong><br>
         Авилова Елена Николаевна<br>
         Зубрилкина Елена Петровна<br>
         </dd>
      </p>
      </dl>
         
   </div>
</article>
@endsection