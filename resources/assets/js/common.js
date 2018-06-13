$('#giveCallbackHeaderBtn').on('click',function(){
    yaCounter48515816.reachGoal('giveCallbackHeader_Click');
});

$('#giveConsultationIndexBtn').on('click',function(){
    yaCounter48515816.reachGoal('giveConsultationIndex_Click');
});

$('#giveCallbackModal').on('show.bs.modal', function () {
    $('#giveCallbackModalPhone').trigger('focus');
});

$('#giveCallbackForm').on('submit', function () {
    var phone = $('#giveCallbackModalPhone').val();
    var name = $('#giveCallbackModalName').val();
    var cbAt = $('#giveCallbackModalCallBackAt').val();
    var token = $('#giveCallbackForm').children('input[name="_token"]').val();

    axios.post('/api/callbackRequest',{
        clientPhoneNumber: phone,
        clientName: name,
        callbackAt: cbAt
        })
        .then(function(response){
            yaCounter48515816.reachGoal('giveCallbackHeader_Send');
            $('#giveCallbackModal').modal('hide');
            $('#giveCallbackThanksModal').modal('show');
        })
        .catch(function(error){
            console.log(error);
            if(error.response.data.field == 'phone'){
                $('#giveCallbackModalPhone_Error').text(error.response.data.message).show();
                $('#giveCallbackModalPhone').addClass('is-invalid');
            }
        });

    return false;
});

