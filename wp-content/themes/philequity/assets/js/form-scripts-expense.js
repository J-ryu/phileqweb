
	var frm = $('#expense_calculator_form');

	$("#expense_calculator_form").on("submit", function (event) {
		if (event.isDefaultPrevented()) {
			// handle the invalid form...
			formError_expense();
			submitMSG_expense(false, "Did you fill in the form properly?");
		} else {
			// everything looks good!
			//  event.preventDefault();
			submitForm_expense();

			// var test_1 = $("#expense_field1").val();
			// var test_2 = $("#expense_field2").val();
			// console.log(test_1)
			// console.log(test_2)
		}
	});


	function submitForm_expense(){
		// Initiate Variables With Form Content

		 var net_salary = parseInt($("#expense_field1").val().replace(/,/g, ''), 10);
		 var thirteenth_month = parseInt($("#expense_field2").val().replace(/,/g, ''), 10);
		
		 var mid_year = parseInt($("#expense_field3").val().replace(/,/g, ''), 10);
		 var other_income = parseInt($("#expense_field4").val().replace(/,/g, ''), 10);

		 var net_salary_projection = annualProjection(net_salary);
		 var other_income_projection = annualProjection(other_income);


		 var electricity_expenses = parseInt($("#expense_field5").val().replace(/,/g, ''), 10);
		 var water_expenses = parseInt($("#expense_field6").val().replace(/,/g, ''), 10);

		//  console.log(water_expenses);
		//  if (water_expenses.isNaN()) {
		// 	 console.log("water_expenses undefined / Nan / EMPTY")
		// 	 water_expenses = 0;
		//  }
		
		

		 var telephone_expenses = parseInt($("#expense_field7").val().replace(/,/g, ''), 10);
		 var internet_expenses = parseInt($("#expense_field8").val().replace(/,/g, ''), 10);
		 var mobile_expenses = parseInt($("#expense_field9").val().replace(/,/g, ''), 10);
		 var cable_expenses = parseInt($("#expense_field10").val().replace(/,/g, ''), 10);
		 var grocery_expenses = parseInt($("#expense_field11").val().replace(/,/g, ''), 10);
		 var dailyfood_expenses = parseInt($("#expense_field12").val().replace(/,/g, ''), 10);
		 var child_allowance_expenses = parseInt($("#expense_field13").val().replace(/,/g, ''), 10);
		 var gasoline_expenses = parseInt($("#expense_field14").val().replace(/,/g, ''), 10);
		 var condo_expenses = parseInt($("#expense_field15").val().replace(/,/g, ''), 10);
		 var newspaper_expenses = parseInt($("#expense_field16").val().replace(/,/g, ''), 10);
		 var other_expenses = parseInt($("#expense_field17").val().replace(/,/g, ''), 10);
		 var car_expenses = parseInt($("#expense_field18").val().replace(/,/g, ''), 10);
		 var creditcard_expenses = parseInt($("#expense_field19").val().replace(/,/g, ''), 10);
		 var entertainment_expenses = parseInt($("#expense_field20").val().replace(/,/g, ''), 10);
		 var life_insurance_expenses = parseInt($("#expense_field21").val().replace(/,/g, ''), 10);
		 var other_insurance_expenses = parseInt($("#expense_field22").val().replace(/,/g, ''), 10);
		 var car_ammor_expenses = parseInt($("#expense_field23").val().replace(/,/g, ''), 10);
		 var house_expenses = parseInt($("#expense_field24").val().replace(/,/g, ''), 10);
		 var other_debt_expenses = parseInt($("#expense_field25").val().replace(/,/g, ''), 10);
		 var children_tuition_expenses = parseInt($("#expense_field26").val().replace(/,/g, ''), 10);
		 var transportation_expenses = parseInt($("#expense_field27").val().replace(/,/g, ''), 10);
		 

		 var electricity_expenses_projection = isNaN(annualProjection(electricity_expenses)) ? 0 : annualProjection(electricity_expenses);
		 var water_expenses_projection 		 = isNaN(annualProjection(water_expenses)) ? 0 : annualProjection(water_expenses) ;
		 var telephone_expenses_projection   = isNaN(annualProjection(telephone_expenses)) ? 0 : annualProjection(telephone_expenses);
		 var internet_expenses_projection    = isNaN(annualProjection(internet_expenses)) ? 0 : annualProjection(internet_expenses);
		 var mobile_expenses_projection 	 = isNaN(annualProjection(mobile_expenses)) ? 0 : annualProjection(mobile_expenses);
		 var cable_expenses_projection 		 = isNaN(annualProjection(cable_expenses)) ? 0 : annualProjection(cable_expenses);
		 var grocery_expenses_projection     = isNaN(annualProjection(grocery_expenses)) ? 0 : annualProjection(grocery_expenses);

		 var dailyfood_expenses_projection           = isNaN(annualProjection(dailyfood_expenses)) ? 0 : annualProjection(dailyfood_expenses);
		 var child_allowance_expenses_projection     = isNaN(annualProjection(child_allowance_expenses)) ? 0 : annualProjection(child_allowance_expenses);
		 var gasoline_expenses_projection            = isNaN(annualProjection(gasoline_expenses)) ? 0 : annualProjection(gasoline_expenses);
		 var condo_expenses_projection               = isNaN(annualProjection(condo_expenses)) ? 0 : annualProjection(condo_expenses);

		
		 var newspaper_expenses_projection           = isNaN(annualProjection(newspaper_expenses)) ? 0 : annualProjection(newspaper_expenses);
		 var other_expenses_projection    			 = isNaN(annualProjection(other_expenses)) ? 0 : annualProjection(other_expenses);
		//  var gasoline_expenses_projection            = isNaN(annualProjection(gasoline_expenses)) ? 0 : annualProjection(gasoline_expenses);
		 var car_expenses_projection    			 = isNaN(annualProjection(car_expenses)) ? 0 : annualProjection(car_expenses);

		 var creditcard_expenses_projection          = isNaN(annualProjection(creditcard_expenses)) ? 0 : annualProjection(creditcard_expenses);
		 var entertainment_expenses_projection    	 = isNaN(annualProjection(entertainment_expenses)) ? 0 : annualProjection(entertainment_expenses);
		 var life_insurance_expenses_projection      = isNaN(annualProjection(life_insurance_expenses)) ? 0 : annualProjection(life_insurance_expenses);
		 var other_insurance_expenses_projection     = isNaN(annualProjection(other_insurance_expenses)) ? 0 : annualProjection(other_insurance_expenses);


		 var car_ammor_expenses_projection           = isNaN(annualProjection(car_ammor_expenses)) ? 0 : annualProjection(car_ammor_expenses);
		 var house_expenses_projection    	    	 = isNaN(annualProjection(house_expenses)) ? 0 : annualProjection(house_expenses);
		 var other_debt_expenses_projection     	 = isNaN(annualProjection(other_debt_expenses )) ? 0 : annualProjection(other_debt_expenses);
		 var children_tuition_expenses_projection     = isNaN(annualProjection(children_tuition_expenses)) ? 0 : annualProjection(children_tuition_expenses);
		 var transportation_expenses_projection     = isNaN(annualProjection(transportation_expenses)) ? 0 : annualProjection(transportation_expenses);

	
		var totalAnnnualIncome =	addResult(net_salary_projection,other_income_projection,thirteenth_month, mid_year);
		var totalAnnualExpenses =  addResultExpense(electricity_expenses_projection,water_expenses_projection,telephone_expenses_projection,
			internet_expenses_projection,mobile_expenses_projection,cable_expenses_projection,grocery_expenses_projection,
			dailyfood_expenses_projection, child_allowance_expenses_projection, gasoline_expenses_projection,condo_expenses_projection,
			newspaper_expenses_projection, other_expenses_projection, car_expenses_projection, creditcard_expenses_projection, 
			entertainment_expenses_projection,life_insurance_expenses_projection,other_insurance_expenses_projection,car_ammor_expenses_projection,
			house_expenses_projection,other_debt_expenses_projection,children_tuition_expenses_projection,transportation_expenses_projection);
		
		var totalSavings =	projectedSavings(totalAnnnualIncome, totalAnnualExpenses);


		 console.log("TOTAL INCOME ANNUALLY", totalAnnnualIncome);
		 console.log("TOTAL EXPENSES ANNUALLY", totalAnnualExpenses);
		 console.log("TOTAL ANNUALY PROJECTED SAVINGS ", totalSavings);


		 var houseHoldTotal = getHouseholdTotal(electricity_expenses_projection, water_expenses_projection, telephone_expenses_projection, internet_expenses_projection, mobile_expenses_projection, cable_expenses_projection, grocery_expenses_projection, condo_expenses_projection, house_expenses_projection);
		 var householdPercentage = (houseHoldTotal / totalAnnualExpenses) * 100 ;
		 console.log("TOTAL ANNUALLY EXPENSES FOR HOUSEHOLD ", householdPercentage);



		 var transportationTotal = getTransportationTotal(gasoline_expenses_projection,car_expenses_projection,car_ammor_expenses_projection, transportation_expenses_projection);
		 var transportationPercentage = (transportationTotal / totalAnnualExpenses) * 100 ;
		 console.log("TOTAL ANNUALLY EXPENSES FOR TRANSPORTATION ", transportationPercentage);



		 var obligationTotal = getobligationTotal(child_allowance_expenses_projection,life_insurance_expenses_projection,other_insurance_expenses_projection,other_debt_expenses_projection,children_tuition_expenses_projection);
		 var obligationPercentage = (obligationTotal / totalAnnualExpenses) * 100 ;
		 console.log("TOTAL ANNUALLY EXPENSES FOR OBLIGATIONS ", obligationPercentage);

		var lifestyleTotal = getLifestyleTotal(dailyfood_expenses_projection,newspaper_expenses_projection,other_expenses_projection,creditcard_expenses_projection,entertainment_expenses_projection);
		var lifestylePercentage = (lifestyleTotal / totalAnnualExpenses) * 100 ;
		console.log("TOTAL ANNUALLY EXPENSES FOR LIFESTYLE ", lifestylePercentage);
		 
		// 	if (finalRes < 13) {
		// 	console.log("final result is below <13:", finalRes);

			
		// }

		// if (finalRes >=14 && finalRes <=26) {
		// 	console.log("final result is >13 but below 26:", finalRes);

		// }

		// if (finalRes >26) {
		// 	console.log("final result is > 26:", finalRes);

		// }


		// $.post("results.php", {fResult:finalRes},function(postresult){

		// 	$("#postdiv").html(postresult);
			
		// 	});

	
		

		// $.ajax({
		// 	type: frm.attr('method'),
		// 	url: frm.attr('action'),
		
		// 	data: {"totalAnnnualIncome": totalAnnnualIncome},
		// 	success: function (data) {
			
		// 		// window.location.href="http://localhost:8888/phil/expense-calculator-results";
		// 		window.location.assign(data);
		// 		console.log(data)
		// 		formSuccess_expense();
		// 	},
		// 	error: function (data) {
				
		// 	},
		// });
		
		// $.ajax({
		// 	type: "POST",
		// 	url: "./expense-calculator",
		// 	data: "totalAnnnualIncome=" + totalAnnnualIncome,
		// });


		// $.ajax({
		// 	type: "POST",
		// 	url: "./expense-calculator",
		// 	data: "totalAnnnualIncome=" + totalAnnnualIncome,
		// 	success: function (data) {
			
		// 				// window.location.href="http://localhost:8888/phil/expense-calculator-results";
		// 				// window.location.assign(data);
		// 				window.location.assign(data);
		// 				// window.location.href = window.location.href+'?totalAnnnualIncome='+totalAnnnualIncome;
		// 				formSuccess_expense();
		// 			},
		// });
	

		// formSuccess_expense();

		// console.log(finalRes);

	};
	


	function annualProjection (projection) {
		
		var sumall = parseInt(projection) * 12;
		return sumall;
	}
	
	function addResultExpense(res1,res2,res3,res4,res5,res6,res7,res8,res9,res10,res11,res12,res13,res14,res15, res16, res17, res18, res19, res20, res21, res22, res23) {

		var result = parseInt(res1) +  parseInt(res2) +  parseInt(res3) +  parseInt(res4) +
		 parseInt(res5) +  parseInt(res6) +  parseInt(res7) +  parseInt(res8) +  
		 parseInt(res9) +  parseInt(res10)  +  parseInt(res11)  +  parseInt(res12)  +  parseInt(res13) +
		 parseInt(res14) +  parseInt(res15) +  parseInt(res16) +  parseInt(res17) +  
		 parseInt(res18) +  parseInt(res19)  +  parseInt(res20)  +  parseInt(res21)  +  parseInt(res22) +
		 parseInt(res23) ;

		return result;
	}


	function addResult(res1,res2,res3,res4) {

		var result = parseInt(res1) +  parseInt(res2) +  parseInt(res3) +  parseInt(res4);
		// parseInt(res5) +  parseInt(res6) +  parseInt(res7) +  parseInt(res8) +  parseInt(res9) +  parseInt(res10) ;

		return result;
	}

	function projectedSavings(res1,res2 ) {

		var result = parseInt(res1) - parseInt(res2);

		return result;
	}




	function getHouseholdTotal(electricity, water, telephone, internet, mobile, cable, grocery, condo, house) {

		var result = parseInt(electricity) + parseInt(water) + parseInt(telephone) + 
		parseInt(internet) + parseInt(internet) + parseInt(mobile) +
		parseInt(cable) + parseInt(grocery) + parseInt(condo) + parseInt(house) ;

		return result;

	}

	function getTransportationTotal(gas,car_maintainance, car_ammor, transportation ) {

		var result = parseInt(gas) + parseInt(car_maintainance) + parseInt(car_ammor) + 
		parseInt(transportation);

		return result;

	}

	function getobligationTotal(children_allowance, life_insurance, insurance_premium, other_debt, childrens_tuition ) {

		var result = parseInt(children_allowance) + parseInt(life_insurance) + 
		parseInt(insurance_premium) + parseInt(other_debt) + parseInt(childrens_tuition);

		return result;

	}

	function getLifestyleTotal(daily_food,news_paper,other_subs,credit_card, entertainment) {

		var result = parseInt(daily_food) + parseInt(news_paper) + parseInt(other_subs) + 
		parseInt(credit_card) + parseInt(entertainment);

		return result;

	}





function formSuccess_expense(){

	

	$("#expense_calculator_form")[0].reset();
	$("#expense-result").removeClass("hidden");
	$("#expense-stepper").addClass("hidden");
	
	// submitMSG(true, "Message Submitted!")
	
}

function formError_expense(){
    $("#expense_calculator_form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG_expense(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}