$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allNextBtn3  = $('.nextBtn-3'),
        allNextBtn4  = $('.nextBtn-4'),
        // allNextBtn5  = $('.nextBtn-5'),
        allNextBtn2 = $('.nextBtn-2');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
           var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;


            if($.trim($('#investor_age').val()).length == 0 &&  $.trim($('#investor_net').val()).length == 0 )
            {     
             isValid = false;
             $('#investor_age').addClass('has-error');
             $('#investor_net').addClass('has-error');
      

            }
            else
            {
             isValid = true;
             $('#investor_age').removeClass('has-error');
             $('#investor_net').removeClass('has-error');
            
            }


            
       $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });



    allNextBtn2.click(function () {
        var curStep = $(this).closest(".setup-content"),
         curStepBtn = curStep.attr("id"),
         nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
         curInputs = curStep.find("input[type='text'],input[type='url']"),
         isValid = true;

         if($.trim($('#percentage_liquid').val()).length == 0  && $.trim($('#investor_rate').val()).length == 0 )
         {
             
          isValid = false;        
          $('#percentage_liquid').addClass('has-error');
          $('#investor_rate').addClass('has-error');

         }

         else
         {
             isValid = true;
          $('#percentage_liquid').removeClass('has-error');
          $('#investor_rate').removeClass('has-error');
         }


         
    $(".form-group").removeClass("has-error");
     for (var i = 0; i < curInputs.length; i++) {
         if (!curInputs[i].validity.valid) {
             isValid = false;
             $(curInputs[i]).closest(".form-group").addClass("has-error");
         }
     }

     if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
 });



 allNextBtn3.click(function () {
    var curStep = $(this).closest(".setup-content"),
     curStepBtn = curStep.attr("id"),
     nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
     curInputs = curStep.find("input[type='text'],input[type='url']"),
     isValid = true;

     if($.trim($('#investor_stability').val()).length == 0  && $.trim($('#investor_goal').val()).length == 0 )
     {
         
      isValid = false;
      $('#investor_stability').addClass('has-error');
      $('#investor_goal').addClass('has-error');
     }

     else
     {
      isValid = true;
      $('#investor_stability').removeClass('has-error');
      $('#investor_goal').removeClass('has-error');
     }


     
$(".form-group").removeClass("has-error");
 for (var i = 0; i < curInputs.length; i++) {
     if (!curInputs[i].validity.valid) {
         isValid = false;
         $(curInputs[i]).closest(".form-group").addClass("has-error");
     }
 }

 if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
});




allNextBtn4.click(function () {
    var curStep = $(this).closest(".setup-content"),
     curStepBtn = curStep.attr("id"),
     nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
     curInputs = curStep.find("input[type='text'],input[type='url']"),
     isValid = true;

     if($.trim($('#investor_anticipate').val()).length == 0  && $.trim($('#investor_instruments').val()).length == 0 )
     {
         
      isValid = false;
      $('#investor_anticipate').addClass('has-error');
      $('#investor_instruments').addClass('has-error');
     }

     else
     {
      isValid = true;
      $('#investor_anticipate').removeClass('has-error');
      $('#investor_instruments').removeClass('has-error');
     }


     
$(".form-group").removeClass("has-error");
 for (var i = 0; i < curInputs.length; i++) {
     if (!curInputs[i].validity.valid) {
         isValid = false;
         $(curInputs[i]).closest(".form-group").addClass("has-error");
     }
 }

 if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
});








    $('div.setup-panel div a.btn-success').trigger('click');
});