<?php

  $fName = $lName = $comp = $add1 = $add2 = $city = $State = $Zcode = $country = $phone = $Fax = $email = "";

  $fNameErr = $lNameErr = $compErr = $add1Err = $add2Err = $cityErr = $StateErr = $ZcodeErr = $countryErr = $phoneErr = $FaxErr= $emailErr = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['f_name']))
	{
      $fNameErr = "First Name cannot be empty!";
    }
    else{
      $fName = $_POST['f_name'];
    }

    if(empty($_POST['lName'])){
      $lNameErr = "Last Name cannot be empty!";
    }
    else
	{
      $lName = $_POST['lName'];
    }

    if(empty($_POST['comp'])){
      $compErr = "company cannot be empty!";
    }
    else{
      $comp = $_POST['comp'];
    }

    if(empty($_POST['add1'])){
      $add1Err = "Address cannot be empty!";
    }
    else{
      $add1 = $_POST['add1'];
    }

    if(empty($_POST['add2'])){
      $add2Err = "Address cannot be empty!";
    }
    else{
      $add2 = $_POST['add2'];
    }

    if(empty($_POST['city'])){
      $cityErr = "City cannot be empty!";
    }
    else{
      $city = $_POST['city'];
    }

    if(empty($_POST['State'])){
      $StateErr = "What is ur State?";
    }
    else{
      $State = $_POST['State'];
    }

    if(empty($_POST['Zcode']))
	{
      $ZcodeErr = "Zipcode can not be empty";
    }
    else{
      $Zcode = $_POST['Zcode'];
    }
	
	if(empty($_POST['country']))
	{
      $CountryErr = "country can not be empty";
    }
    else{
      $country = $_POST['country'];
	  
	  
	  if(empty($_POST['phone']))
	{
      $phoneErr = "phone can not be empty";
    }
    else{
      $phone = $_POST['phone'];
	  
	  
	 if(empty($_POST['Fax']))
	{
      $FaxErr = "Fax can not be empty";
    }
    else{
      $Fax = $_POST['Fax'];

if(empty($_POST['email']))
	{
      $emailErr = "email can not be empty";
    }
    else{
      $email = $_POST['email'];	  

 


  }

?>




<html>
	<title>
	Donor Registration
	</title>
	<body>
		<h1><font color="red">Donor Information</font></h1>
		<table align="center" width="60%">
			<tr>
				<td><label>First Name<font color="red">*</font></label></td>
				<td><input type="text" name="f_name" value=""> <?php echo $fNameErr; ?> </span></td>
			</tr>
			<tr>
				<td><label>Last Name<font color="red">*</font></label></td>
				<td><input type="text" name="" value=""> <?php echo $lNameErr; ?> </span></td>
			</tr>
			<tr>
				<td><label>Company</label></td>
				<td><input type="text" name="" value="" ></td>
			</tr>
			<tr>
				<td><label>Address 1<font color="red">*</font></label></td>
				<td><input type="text" name="" value=""> <?php echo $add1Err; ?> </span></td>
			</tr>
			<tr>
				<td><label>Address 2</label></td>
				<td><input type="text" name="" value="" > <?php echo $add2Err; ?> </span></td>
			</tr>
			<tr>
				<td><label>City<font color="red">*</font></label></td>
				<td><input type="text" name="" value=""> <?php echo $CityErr; ?> </span></td>
			</tr>
			<tr>
				<td><label>State<font color="red">*</font></label></td>
				<td>
					<select>
						 <?php echo $StateErr; ?> </span>
						<option value="" disabled selected>Select a State</option>
						
						<option>DHK</option>
						<option>CTG</option>
						<option>MUM</option>
						<option>NYC</option>
						<option>LIV</option>
					</select>
				</td>	
			</tr>
			
			<tr>
				<td><label>Zip Code<font color="red">*</font></label></td>
				<td><input type="text" name="" value="" require=></td>
			</tr>
			<tr>
				<td><label>Country<font color="red">*</font></label></td>
				<td>
					<select>
						<option value="" disabled selected>Select a Country</option>
						<option>BANGLADESH</option>
						<option>INDIA</option>
						<option>USA</option>
						<option>UK</option>
					</select>
				</td>	
			</tr>
			<tr>
				<td><label>Phone</label></td>
				<td><input type="text" name="" value="" ></td>
			</tr>
			<tr>
				<td><label>Fax</label></td>
				<td><input type="text" name="" value="" ></td>
			</tr>
			<tr>
				<td><label>Email<font color="red">*</font></label></td>
				<td><input type="Email" name="" value="" required></td>
			</tr>
			<tr>
				<td><label>Donation Amount<font color="red">*</font></label></td>
				<td colspan="2">
					<input type="radio" name="Donation" value="" checked>None
					<input type="radio" name="Donation" value="50">$50
					<input type="radio" name="Donation" value="75">$75
					<input type="radio" name="Donation" value="100">$100
					<input type="radio" name="Donation" value="250">$250
					<input type="radio" name="Donation" value="Other">Other
				</td>
			</tr>
			<tr>
				<td><label><h6>(Check a Button or <br> type in your amount)</h6></label></td>
				<td colspan="2"><label>Other Amount    $</label>
				<input type="text" name="" value="" ></td>
			</tr>
			<tr>
				<td><label>Recurring Donation</label></td>
				<td colspan="2">
					<input type="checkbox" name="" value="">I am interested in giving in a regular basis
				</td>
			</tr>
			<tr>
				<td><label><h6>(Check If Yes)</h6></label></td>
				<td colspan="2">
					<label>Monthly Credit Card $</label>
					<input type="text" name="" value="" >For<input type="number" name="" value="">Month
				</td>	
			</tr>
			
		</table>
		<h2><font color="red">Honorarium and Memorial Donation Information</font><h2>
		<table align="center" width="60%">
			<tr>
				<td><label>I would like to <br> make this donation</label></td>
				<td>
					<input type="radio" name="donate" value="">To honor
					<input type="radio" name="donate" value="">In Memory of
				</td>
			</tr>
			<tr>
				<td><label>Name</label></td>
				<td><input type="text" name="" value="" ></td>
			</tr>
			<tr>
			<tr>
				<td><label>Acknowledge Donation to</label></td>
				<td><input type="text" name="" value="" ></td>
			</tr>
			<tr>
			<tr>
				<td><label>Address</label></td>
				<td><input type="text" name="" value="" ></td>
			</tr>
			<tr>
			<tr>
				<td><label>City</label></td>
				<td><input type="text" name="" value="" ></td>
			</tr>
			<tr>
			<tr>
				<td><label>State</label></td>
				<td>
					<select>
						<option value="" disabled selected>Select a State</option>
						<option>DHK</option>
						<option>CTG</option>
						<option>LIV</option>
						<option>MUM</option>
						<option>NYC</option>
					</select>
				</td>	
			</tr>
			<tr>
				<td><label>Zip</label></td>
				<td><input type="number" name="" value="" ></td>
			</tr>
			<tr>
			
		</table>
		<h2><font color="red">Additional Information</font></h2>
		<p>Please enter your name, company or Organization as you would like it to appear in our publications:</p>
		<table align="center" width="60%">
			<tr>
				<td><label>Name</label></td>
				<td><input type="text" name="" value="" ></td>
			</tr>
		</table>
		<input type="checkbox" name="" value="">I would like my to remain anonymous <br>
		<input type="checkbox" name="" value="">My employer offers a mathing gift program. I will mail the matching gift form. <br>
		<input type="checkbox" name="" value="">Please save the cost of acknowledging this gift by not mailing a thank you letter.<br>
		<table align="center" width="10">
			<tr>
				<td><label>Comments<br>
				<h6>(Please type any <br> questions of feedback <br> here)</h6></label></td>
				<td><textarea row="4" column="100" name="" value="" > </textarea></td>
			</tr>
			<tr>
				<td><label>How may we contact you?</label></td>
				<td><input type="checkbox" name="" value="">Email<br>
					<input type="checkbox" name="" value="">Postal Mail<br>
					<input type="checkbox" name="" value="">Telephone<br>
					<input type="checkbox" name="" value="">Fax
				</td>
			</tr>	
			
		</table>
		<p>I would like to receive newsletters and information about special events by:</p>
		<table align="center" width="10%">
			<tr>
				<td><input type="checkbox" name="" value="" >Email<br>
				<input type="checkbox" name="" value="" >Postal mail</td>
			</tr>
		</table>
		<input type="checkbox" name="" value="">I would like information about volunteering with the <br>
		<table align="center">
		<tr>
			<td><button type="submit" name="Reset" value="">Reset</td>
		
			<td><button type="submit" name="Continue" value="">Continue</td>
		</tr>
		</table>
	</body>
</html>