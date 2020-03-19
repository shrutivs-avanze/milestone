              function signup()
			{
			 
				var name = $("#fname").val().trim();
				var mobile = $("#mobile").val().trim();
				var email = $("#email").val().trim();
				var password = $("#password").val().trim();				
				var month = $("#month").val().trim();
				var day = $("#day").val().trim();
				var year = $("#year").val().trim();
				var city = $("#city").val().trim();
				
				filter  = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				 var sts=true;
				 
				 if(name=="")
				 {
					 sts=false;
					$("#fname").css({"border":"2px solid red"});
					 $("#fnameerror").text("Please enter Name");
					 
				 }
				 else{
					 $("#fname").css({"border":"2px solid green"});
					 $("#fnameerror").text("");
				 }
				 
				  if(mobile==""||mobile.length<10||mobile.length>10||isNaN(mobile))
				 {
					 sts=false;
					 $("#mobile").css({"border":"2px solid red"});
					 $("#mobileerror").text("Please enter mobile");
					 
				 }
				 else{
					 $("#mobile").css({"border":"2px solid green"});
					 $("#mobileerror").text("");
				 }
				 
				 if(email=="")
				{
					sts=false;
					$("#email").css({"border":"2px solid red"});
					$("#emailerror").text("Please enter Email");
				}
				else if(!filter.test(email))
				{
					sts=false;
					$("#email").css({"border":"2px solid red"});
					$("#emailerror").text("Invalid email format");
				}
				else
				{
					$("#email").css({"border":"2px solid green"});
					$("#emailerror").text("");
				}
				
				if(password=="")
				{
					sts=false;
					$("#password").css({"border":"2px solid red"});
					$("#passworderror").text("Please enter password");
				}
				else
				{
					$("#password").css({"border":"2px solid green"});
					$("#passworderror").text("");
				}
				
				
				if ($("#male").is(":checked")||$("#female").is(":checked"))
				{
					$("#gendererror").text("");
				}
				else
				{
					sts=false;
					$("#gendererror").text("Please select gender");
				}
				
				
				
				if(month=="")
				{
					sts=false;
					$("#month").css({"border":"2px solid red"});
					$("#montherror").text("Please enter month");
				}
				else
				{
					$("#month").css({"border":"2px solid green"});
					$("#montherror").text("");
				}
				if(day=="")
				{
					sts=false;
					$("#day").css({"border":"2px solid red"});
					$("#dayerror").text("Please enter day");
				}
				else
				{
					$("#day").css({"border":"2px solid green"});
					$("#dayerror").text("");
				}	
				if(year=="")
				{
					sts=false;
					$("#year").css({"border":"2px solid red"});
					$("#yearerror").text("Please enter year");
				}
				else
				{
					$("#year").css({"border":"2px solid green"});
					$("#yearerror").text("");
				}
				 if(city=="")
				 {
					 sts=false;
					 $("#city").css({"border":"2px solid red"});
					 $("#cityerror").text("Please enter Name");
					 
				 }
				 else{
					 $("#city").css({"border":"2px solid green"});
					 $("#cityerror").text("");
				 }
				 
				 if(sts==true)
				{
					$("#form1").submit();
				}	
				 
			}

       function validate()
		{
			var email = $("#email").val().trim();
			var pass = $("#pwd").val().trim();
			
			 var sts= true;
				
			if(email=="")
			{
				sts=false;
				$("#email").css({"border":"2px solid red"});
				$("#emailerror").text("Please enter Email");
			}	
			else
			{
				$("#email").css({"border":"2px solid green"});
				$("#emailerror").text("");
			}
			
			if(pass=="")
			{
				sts=false;
				$("#pwd").css({"border":"2px solid red"});
				$("#pwderror").text("Please enter Password");
			}	
			else
			{
				$("#pwd").css({"border":"2px solid green"});
				$("#pwderror").text("");
			}
			
		if(sts==true)
		{
			$("#form").submit();
		}
			
		}