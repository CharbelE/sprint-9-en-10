<head>
 <title>Convert Tempratuur</title>
 </head>
 <body>
 <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
 graden:
 <input type = "text" name = "degree" size=4>
 <select name="scale">
     <option value="celcius">Celsius</option>
     <option value="fahrenheit">Fahrenheit</option>
     <option value="kelvin">Kelvin</option>
 </select>
 <br/>
 <input type = "submit" name = "Convert Temperature"/>
 </form>

<?php

 if (array_key_exists('degree',$_GET)){
	$scale = $_GET['scale'];
	$degree = $_GET['degree'];
	$firstLength = strlen($_GET['degree']);

	if(($firstLength > 0) && (is_numeric($_GET['degree'])))
		{
		if ($scale == "celcius")//als je celcius hebt aangeklikt gaat hij celsius omrekenen naar fahrenheit en kelvin en laar hij alle drie zien
		{
			 print "<table border><tr><th colspan=2> Resultaat</th></tr><tr><td>$degree</td><td>celsius</td></tr>";
			 $c_2_f = $degree*9/5+32;
			 print "<tr><td>$c_2_f</td><td>fahrenheit</td></tr>";
			 $c_2_k = $degree+273.15;
			 print "<tr><td>$c_2_k </td><td>kelvin</td></tr>";
		}

		if ($scale == "fahrenheit")//als je kelvin hebt aangeklikt gaat hij kelvin omrekenen naar celcius en kelvin en laar hij alle drie zien
		{
			 print "<table border><tr><th colspan=2> Resultaat</th></tr><tr><td>$degree</td><td>farhenheit</td></tr>";
			 $f_2_c = ($degree -32)*5/9;
			 print "<tr><td>$f_2_c</td><td>celsius</td></tr>";
			 $f_2_k = $f_2_c+273.15;
			 print "<tr><td>$f_2_k </td><td>kelvin</td></tr>";
		}

		 if ($scale == "kelvin")//als je kelvin hebt aangeklikt gaat hij kelvin omrekenen naar fahrenheit en celsius en laar hij alle drie zien
		{
			 print "<table border><tr><th colspan=2> Resultaat</th></tr><tr><td> 
			 $degree</td><td>kelvin</td></tr>";
			 $k_2_f = ($degree - 273.15) * 9 / 5 + 32;
			 print "<tr><td>$k_2_f</td><td>fahrenheit</td></tr>";
			 $k_2_c = $degree-273.15;
			 print "<tr><td>$k_2_c </td><td>celsius</td></tr>";
		}
	 }
	 else
		echo "<span style = \"color:red\">*Please Enter a Valid tempratuur.</span>";//laat zien dat je geen goed tempratuur geeft
}
 ?>