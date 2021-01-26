<?php include'php/Connection.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Test Site</title>
        <link rel="stylesheet" href="testcss.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <script src="Scripts.js"></script>
		
		<div class="flex_Container">
			
			<div class="flex_Container_Item SINumbers">
            	<div class="flex_item_ClockIn SONumber" id="Number1" value ="1">1</div>
            	<div class="flex_item_ClockIn SONumber" id="Number2" value ="2">2</div>
            	<div class="flex_item_ClockIn SONumber" id="Number3" value ="3">3</div>
            	<div class="flex_item_ClockIn SONumber" id="Number4" value ="4">4</div>
            	<div class="flex_item_ClockIn SONumber" id="Number5" value ="5">5</div>
				<div class="flex_item_ClockIn SONumber" id="Number6" value ="6">6</div>
            	<div class="flex_item_ClockIn SONumber" id="Number7" value ="7">7</div>
            	<div class="flex_item_ClockIn SONumber" id="Number8" value ="8">8</div>
            	<div class="flex_item_ClockIn SONumber SONumber" id="Number9" value ="9">9</div>
            	<div class="flex_item_ClockIn SOClear" id="NumberClear" value ="Clear">X</div>
            	<div class="flex_item_ClockIn SONumber" id="Number0" value ="0">0</div>
            	<div class="flex_item_ClockIn SONow" id="NumberSignIn" value ="Sign In">o</div>
				        <div class="Login_Number">
            <input class="SignInNumber" type="number" maxlength="6" required readonly>
			
        </div>
        	</div>
			<div class="flex_Container_Item">
				<div>
				<label>Login</label>
				<input class="Login_texbox Login_User" type="number">
				<label>Password</label>
				<input class="Login_texbox Login_User_password" type="password">
				<input type="button" value="Login">
				</div>
				
			</div>
			
			<div class="flex_Container_Item">
				<?php include'php/SunToSatDates.php'; ?>
			</div>
			
		</div>
        <label class="Clock_In_Message"></label>
		<br>
		
		<?php include'php/ShowUsers.php';?>
		
		<?php include'php/CheckShifts.php';?>

		
    </body>
</html>