<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "shift_site_test";
$conn = mysqli_connect($serverName, $username, $password, $dbname);
if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error()); // check for connection error
}
?>
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
				HEllo
			</div>
			
		</div>
        <label class="Clock_In_Message"></label>
		<br>
		
		<?php
			$sql = "SELECT * FROM users INNER JOIN stores ON users.Store_ID = stores.Store_ID;";
	
			$result = $result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0)
			{
									echo"
					<table>
					<tr class='Titles'>
						<th>User ID</th>
						<th>First name</th>
						<th>Surname</th>
						<th>Store</th>
						<th>Admin Status</th>
					</tr>
					";
				while ($row = mysqli_fetch_assoc($result))
				{
					$UserID = $row["User_ID"];
					$UserFirstname = $row["Firstname"];
					$UserSurname = $row["Surname"];
					//$UserStoreID = $row["Store_ID"];
					$CheckAdmin = $row["IsAdmin"];
					$StoreName = $row["Store_Name"];
					
					if($CheckAdmin == 0)
					{$CheckAdmin = "No";}else{$CheckAdmin = "Yes";}
					

					echo"
					<tr class=''>
					<td>$UserID</td>
					<td>$UserFirstname</td>
					<td>$UserSurname</td>
					<td>$StoreName</td>
					<td>$CheckAdmin</td>
					</tr>
					
					"; 

					
				}
				echo"</table>";
			}else{echo "0 results";}
		
		?>
		
		<?php
			$sql_shifts = "SELECT * FROM shifts
INNER JOIN users ON shifts.User_ID=users.User_ID
INNER JOIN stores ON shifts.Store_ID=stores.Store_ID
INNER JOIN pay_codes ON shifts.Pay_Code_ID=pay_codes.Pay_Code_ID;";
		
			$result_Shifts = $result_Shifts = mysqli_query($conn, $sql_shifts);
			if (mysqli_num_rows($result) > 0)
			{
			echo"
					<table>
					<tr class='Titles'>
						<th>Shift ID</th>
						<th>Firstname</th>
						<th>Surname</th>
						<th>Store</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Start Time</th>
						<th>Clock In Time</th>
						<th>End Time</th>
						<th>Clock Out Time</th>
						<th>Pay Code</th>
					</tr>
					";
				while ($row_Shifts = mysqli_fetch_assoc($result_Shifts))
				{
					$Shift_ID 				= $row_Shifts["Shift_ID"];
					$Shift_Firsname 		=$row_Shifts["Firstname"];
					$Shift_Surname 			=$row_Shifts["Surname"];
					$Shift_Store_Name 		=$row_Shifts["Store_Name"];
					$Shift_Start_Day 		=$row_Shifts["Start_Time_Date"];
					$Shift_End_Day 			=$row_Shifts["Shift_End_Date"];
					$Shift_Start_Time 		=$row_Shifts["Start_Time"];
					$Shift_ClockIn_Time 	=$row_Shifts["Clocked_In_Time"];
					$Shift_End_Time 		=$row_Shifts["End_Time"];
					$Shift_ClockOut_Time 	=$row_Shifts["Clocked_Out_Time"];
					$Shift_Paycode 			=$row_Shifts["Pay_Code_Type"];
					echo"
					<tr class=''>
					<td>$Shift_ID</td>
					<td>$Shift_Firsname</td>
					<td>$Shift_Surname</td>
					<td>$Shift_Store_Name</td>
					<td>$Shift_Start_Day</td>
					<td>$Shift_End_Day </td>
					<td>$Shift_Start_Time</td>
					<td>$Shift_ClockIn_Time</td>
					<td>$Shift_End_Time</td>
					<td>$Shift_ClockOut_Time</td>
					<td>$Shift_Paycode</td>";
				}
				
			}
		?>
		
    </body>
</html>