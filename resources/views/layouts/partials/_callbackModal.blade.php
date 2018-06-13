<?php
use ukvp\Utils;
$utils= new Utils;
?>

<div class="modal fade" id="giveCallbackModal" tabindex="-1" role="dialog" aria-labelledby="giveCallbackModalTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title d-flex flex-column" id="giveCallbackModalTitle">Давайте мы Вам позвоним<small>и ответим на все Ваши вопросы</small></h5>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         
         <form class="needs-validation" id="giveCallbackForm">
            <div class="modal-body">
               <div class="form-group">
                  <label for="giveCallbackModalPhone">Номер Вашего мобильного телефона</label>
                  <input type="tel" class="form-control" id="giveCallbackModalPhone" name="clientPhoneNumber" data-inputmask="'mask': '+7 (###) ###-##-##', 'greede': false" value="" required>
                  <div class="invalid-feedback" id="giveCallbackModalPhone_Error"></div>
               </div>

               <div class="form-group">
                  <label for="giveCallbackModalName">Как можно к Вам обращаться?</label>
                  <input type="text" class="form-control" id="giveCallbackModalName" name="clientName" value="" placeholder="Имя, Отчество" required>
               </div>
               
               @if($utils->isWorkTime())
                  <input type="hidden" id="giveCallbackModalCallBackAt" name="callbackAt" value="">
               @else
                  @php
                     $nextWorkTime = $utils->getNextWorkDay();
                     $nextWorkDayEnd = $utils->getWorkDayEnd($nextWorkTime);
                  @endphp
                  <p>К сожалению, наши операторы не могут позвонить Вам немедленно. Мы позвоним Вам в ближайшее рабочее время: {{strftime("%d.%m.%Y",$nextWorkTime)}}
                  с {{strftime("%R",$nextWorkTime)}} до {{strftime("%R",$nextWorkDayEnd)}}.</p>
                  <input type="hidden" id="giveCallbackModalCallBackAt" name="callbackAt" value="{{$nextWorkTime}}">
               @endif
               
               <div class="form-group">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="PersonalDataAgreement" required>
                     <label class="form-check-label" for="PersonalDataAgreement">Даю <a href="{{asset('storage/personal_data_agreement.pdf')}}">согласие на обработку</a> моих персональных данных</label>
                  </div>
               </div>
            </div>
               
            <div class="modal-footer">
               <button type="submit" id="giveCallbackModalSend" class="btn btn-primary">Позвонить мне</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
            @method('PUT')
            @csrf
          </form>
      </div>
   </div>
</div>

<div class="modal" id="giveCallbackThanksModal" tabindex="-1" role="dialog" aria-labelledby="giveCallbackModalThanksTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title d-flex flex-column" id="giveCallbackModaThankslTitle">Благодарим за Ваше обращение!<small>Наш сотрудник перезвонит Вам в ближайшее время.</small></h5>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
         </div>
      </div>
   </div>
</div>