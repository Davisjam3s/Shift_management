// Typing number script
$(document).ready(function ()
{
    $(".SONumber").click(function()
        {
            var NewSignInNumber = $(this).attr("Value");
            var CurrentSignInNumber = $('.SignInNumber').val();
            var UpdateSignInNumber = CurrentSignInNumber+NewSignInNumber;
            var getLength =  UpdateSignInNumber.length;
            if(getLength > 7){
                $(".Clock_In_Message").show().text("Your sign in number is only 7 digets").delay(500).fadeOut(800);
            }else{
                $(".SignInNumber").val(UpdateSignInNumber);
            }
                    
        });
});

// Clear Numbers script
$(document).ready(function()
{
    $(".SOClear").click(function()
    {
        $(".SignInNumber").val("");
		$(".Clock_In_Message").show().text("Cleared").delay(500).fadeOut(800);
    });
});

// Sign in script (placeholder)
var InOrOut = 0;
$(document).ready(function()
{
    $(".SONow").click(function()
    {
        var CurrentSignInNumber = $('.SignInNumber').val();
        var getLength =  CurrentSignInNumber.length;
		var CurrentDate = new Date();
		var CurrentTime = CurrentDate.getHours() + ":" + CurrentDate.getMinutes();
		var testNumber = 5285046;
		
        if(getLength < 7)
		{
            $(".Clock_In_Message").show().text("Must be 7 digits long").delay(500).fadeOut(800);
        }else{
				
			if(CurrentSignInNumber == testNumber)
			{
				if (InOrOut == 0){ 
					InOrOut =1; $(".Clock_In_Message").text("You have clocked in at " + CurrentTime);
					$(".SignInNumber").val("");
				}
				else if(InOrOut == 1){
					InOrOut =0; $(".Clock_In_Message").show().text("You have clocked Out at " + CurrentTime);
				$(".SignInNumber").val("");
				}
			}
        }
        
    });
});
