
	$("#investor_profiling_form").on("submit", function (event) {
		if (event.isDefaultPrevented()) {
			// handle the invalid form...
			formError();
			submitMSG(false, "Did you fill in the form properly?");
		} else {
			// everything looks good!
			event.preventDefault();
			submitForm();
		}
	});


	function submitForm(){
		// Initiate Variables With Form Content

		var investor_age = $("#investor_age").val();
		var investor_net = $("#investor_net").val();
	
		var percentage_liquid = $("#percentage_liquid").val();
		var investor_rate = $("#investor_rate").val();

		var investor_stability = $("#investor_stability").val();
		var investor_goal = $("#investor_goal").val();
	
		var investor_anticipate = $("#investor_anticipate").val();
		var investor_portfolio = $("#investor_portfolio").val();

		var investor_comfortablity = $("#investor_comfortablity").val();
		 var investor_instruments = $("#investor_instruments").val();

		// console.log("investor_age",investor_age);
		// console.log("investor_net",investor_net);
		// console.log("percentage_liquid",percentage_liquid);
		// console.log("investor_rate",investor_rate);

		// console.log("investor_stability",investor_stability);
		// console.log("investor_goal",investor_goal);
		// console.log("investor_anticipate",investor_anticipate);
		// console.log("investor_portfolio",investor_portfolio);

		// console.log("investor_comfortablity",investor_comfortablity);
		// console.log("investor_instruments",investor_instruments);


		var finalRes =	addResult(investor_age,investor_net,percentage_liquid, investor_rate, investor_stability, investor_goal, investor_anticipate,
			investor_portfolio, investor_comfortablity, investor_instruments);
			

			if (finalRes < 13) {
			console.log("final result is below <13:", finalRes);

			
		}

		if (finalRes >=14 && finalRes <=26) {
			console.log("final result is >13 but below 26:", finalRes);

		}

		if (finalRes >26) {
			console.log("final result is > 26:", finalRes);

		}


		// $.post("results.php", {fResult:finalRes},function(postresult){

		// 	$("#postdiv").html(postresult);
			
		// 	});

		$.ajax({
			type: "POST",
			url: "results.php",
			data: "finalRes=" + finalRes,	
		});

		
	

		// console.log(finalRes);

    };
	
	

	function addResult(res1,res2,res3,res4,res5,res6,res7,res8,res9,res10) {

		var result = parseInt(res1) +  parseInt(res2) +  parseInt(res3) +  parseInt(res4) +  
		parseInt(res5) +  parseInt(res6) +  parseInt(res7) +  parseInt(res8) +  parseInt(res9) +  parseInt(res10) ;

		return result;
	}



function formSuccess(){
    $("#investor_profiling_form")[0].reset();
	submitMSG(true, "Message Submitted!")
	
}

function formError(){
    $("#investor_profiling_form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

