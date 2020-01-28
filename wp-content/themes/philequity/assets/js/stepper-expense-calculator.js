$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content-expense'),
        allNextBtn = $('.nextBtn-expense'),
        BackBtn = $('.backBtn-expense-2');

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

    BackBtn.click(function () {

        // window.location.href="#step-1-expense";


        var curStep = $(this).closest(".setup-content-expense"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;


            if($.trim($('#expense_field1').val()).length == 0 &&  $.trim($('#expense_field2').val()).length == 0 
            &&  $.trim($('#expense_field3').val()).length == 0  &&  $.trim($('#expense_field4').val()).length == 0)
            {     
             isValid = false;
             $('#expense_field1').addClass('has-error');
             $('#expense_field2').addClass('has-error');
             $('#expense_field3').addClass('has-error');
             $('#expense_field4').addClass('has-error');
      

            }
            else
            {
             isValid = true;
             $('#expense_field1').removeClass('has-error');
             $('#expense_field2').removeClass('has-error');
             $('#expense_field3').removeClass('has-error');
             $('#expense_field4').removeClass('has-error');
            
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



    allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content-expense"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;


            if($.trim($('#expense_field1').val()).length == 0 &&  $.trim($('#expense_field2').val()).length == 0 
            &&  $.trim($('#expense_field3').val()).length == 0  &&  $.trim($('#expense_field4').val()).length == 0)
            {     
             isValid = false;
             $('#expense_field1').addClass('has-error');
             $('#expense_field2').addClass('has-error');
             $('#expense_field3').addClass('has-error');
             $('#expense_field4').addClass('has-error');
      

            }
            else
            {
             isValid = true;
             $('#expense_field1').removeClass('has-error');
             $('#expense_field2').removeClass('has-error');
             $('#expense_field3').removeClass('has-error');
             $('#expense_field4').removeClass('has-error');
            
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