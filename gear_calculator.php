<?
$resourceName = "Gear Calculator";

$presetVehicle = $_POST[presetVehicle];

if ($presetVehicle == "s2000_00-03") {
	  $finalDrive = "1.16";
	  $axle = "4.10";
	  $redline = "8900";
	  $tireString = "225/50/16";
	  $gear1 = "3.133";
	  $gear2 = "2.045";
	  $gear3 = "1.481";
	  $gear4 = "1.161";
	  $gear5 = "0.971";
	  $gear6 = "0.811";
	  $gear7 = "";
	  $gearR = "2.8";
	  $tireDeformation = "ON";
}
elseif ($presetVehicle == "s2000_04+") {
	  $finalDrive = "1.206";
	  $axle = "4.10";
	  $redline = "8000";
	  $tireString = "245/40/17";
	  $gear1 = "3.133";
	  $gear2 = "2.045";
	  $gear3 = "1.481";
	  $gear4 = "1.161";
	  $gear5 = "0.943";
	  $gear6 = "0.765";
	  $gear7 = "";
	  $gearR = "2.8";
	  $tireDeformation = "ON";
}
elseif ($presetVehicle == "996") {
	  $finalDrive = "3.44";
	  $axle = "";
	  $redline = "7300";
	  $tireString = "285/30/18";
	  $gear1 = "3.82";
	  $gear2 = "2.20";
	  $gear3 = "1.52";
	  $gear4 = "1.22";
	  $gear5 = "1.02";
	  $gear6 = "0.84";
	  $gear7 = "";
	  $gearR = "";
	  $tireDeformation = "ON";
}
elseif ($presetVehicle == "360_modena") {
	  $finalDrive = "4.44";
	  $axle = "";
	  $redline = "8500";
	  $tireString = "275/40/18";
	  $gear1 = "3.29";
	  $gear2 = "2.16";
	  $gear3 = "1.61";
	  $gear4 = "1.27";
	  $gear5 = "1.03";
	  $gear6 = "0.85";
	  $gear7 = "";
	  $gearR = "";
	  $tireDeformation = "ON";
}
elseif ($presetVehicle == "m3_e46") {
	  $finalDrive = "";
	  $axle = "3.64";
	  $redline = "8000";
	  $tireString = "255/40/18";
	  $gear1 = "4.23";
	  $gear2 = "2.53";
	  $gear3 = "1.67";
	  $gear4 = "1.23";
	  $gear5 = "1.00";
	  $gear6 = "0.83";
	  $gear7 = "";
	  $gearR = "";
	  $tireDeformation = "ON";
}
elseif ($presetVehicle == "m3_e36") {
	  $finalDrive = "";
	  $axle = "3.23";
	  $redline = "7000";
	  $tireString = "235/40/17";
	  $gear1 = "4.21";
	  $gear2 = "2.49";
	  $gear3 = "1.66";
	  $gear4 = "1.24";
	  $gear5 = "1.00";
	  $gear6 = "";
	  $gear7 = "";
	  $gearR = "3.89";
	  $tireDeformation = "ON";
}
elseif ($presetVehicle == "viper") {
	  $finalDrive = "";
	  $axle = "3.07";
	  $redline = "6000";
	  $tireString = "335/30/18";
	  $gear1 = "2.66";
	  $gear2 = "1.78";
	  $gear3 = "1.30";
	  $gear4 = "1.00";
	  $gear5 = "0.74";
	  $gear6 = "0.50";
	  $gear7 = "";
	  $gearR = "";
	  $tireDeformation = "ON";
}
elseif ($presetVehicle == "srt-10") {
	  $finalDrive = "";
	  $axle = "3.07";
	  $redline = "6000";
	  $tireString = "345/30/19";
	  $gear1 = "2.66";
	  $gear2 = "1.78";
	  $gear3 = "1.30";
	  $gear4 = "1.00";
	  $gear5 = "0.74";
	  $gear6 = "0.50";
	  $gear7 = "";
	  $gearR = "";
	  $tireDeformation = "ON";
}

include($path."/gear_functions.php");
?>

<table border="0" cellspacing="12" cellpadding="0">
  <tr>
    <td colspan="4" align="left">
	  <img src="<?=$path;?>/images/title.gif" width="570" height="77" alt="" border="0" alt="Gear Calculator - Copyright © 2002 by John Reikes"><br>
	  <b>Enter the following ratios:</b>
	</td>
  </tr>
  <form method="POST" name="gearing" action="technical_resources.php?resource=gear_calculator">
  <tr>
  	<td align="left">
		<select name="presetVehicle" onChange="this.form.submit()">
			<option value="" selected>Find variables for a vehicle</option>
<!--
			<option value="c5">Chevrolet Corvette (C5)</option>
			<option value="c5_z06">Chevrolet Corvette Z06 (C5)</option>
			<option value="993" >Porsche 993</option>
			<option value="997" >Porsche 997</option>			<option value="m3_e36">BMW M3 (E36)</option>
-->
			<option value="viper">Dodge Viper (92-02)</option>
			<option value="srt-10">Dodge SRT-10 (03+)</option>
			<option value="m3_e36">BMW M3 (E36 3.2L US)</option>
			<option value="m3_e46">BMW M3 (E46)</option>
			<option value="360_modena" >Ferrari 360 Modena</option> 
			<option value="996" >Porsche 996</option> 
			<option value="s2000_00-03">Honda S2000 (00-03)</option>
			<option value="s2000_04+" >Honda S2000 (04+)</option>
		</select>
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  Final drive or transfer<br>
	  ratio (if applicable):
	<td align="left" width="75">
	  <input type="text" name="finalDrive" value="<?=$finalDrive?>" size="6" maxlength="6">
	</td>
	<td colspan="2" rowspan="4" align="center" valign="middle">
	  <?
	    if($gear && $tire && $redline && $final){
		  echo '<a href="javascript: window.open(\''.$path.'/graph.php?gear1='.$gear1.'&gear2='.$gear2.'&gear3='.$gear3.'&gear4='.$gear4.'&gear5='.$gear5.'&gear6='.$gear6.'&gear7='.$gear7.'&gearR='.$gearR.'&redline='.$redline.'&finalDrive='.$finalDrive.'&axle='.$axle.'&tireString='.$tireString.'&tireDeformation='.$tireDeformation.'\',\'\',\'status=no,width=620,height=430\'); void(\'\');"><img border="0" src="'.$path.'/graph_small.php?gear1='.$gear1.'&gear2='.$gear2.'&gear3='.$gear3.'&gear4='.$gear4.'&gear5='.$gear5.'&gear6='.$gear6.'&gear7='.$gear7.'&gearR='.$gearR.'&redline='.$redline.'&finalDrive='.$finalDrive.'&axle='.$axle.'&tireString='.$tireString.'&tireDeformation='.$tireDeformation.'"></a><br>';
		  echo "(click on graph for a larger version)";
		}
		else{
		  echo "&nbsp;";
		}
	  ?>
	</td>
  </tr>
	<td align="left" width="125">
	  Axle ratio<br>
	  (if applicable):
	<td align="left" width="75">
	  <input type="text" name="axle" value="<?=$axle?>" size="6" maxlength="6">
	</td>
  <tr>
    <td align="left" width="125">
	  Engine max<br>
	  speed (RPM):
	<td align="left" width="75">
	  <input type="text" name="redline" value="<?=$redline?>" size="6" maxlength="6">
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  Tire size<br>
	  (ie. 255/40/17):
	<td align="left" width="75">
	  <input type="text" name="tireString" value="<?=$tireString?>" size="9" maxlength="9">
	</td>
	<td align="left" width="225">
	  <?
	    if(!$tire && $tireString){
		  echo "<font color=\"#EE2222\">Invalid tire size!</font>";
		}
	  ?>
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  1st gear:
	<td align="left" width="75">
	  <input type="text" name="gear1" value="<?=$gear[1]?>" size="6" maxlength="6">
	</td>
	<td align="left" width="225">
	  Total gearing in first gear:<br>
	  Maximum speed in first gear:
	</td>
	<td align="left">
	  <?
	  if($gear[1] && $final && $tire){
	    echo totalGearing($gear[1])."<br>";
		echo maxSpeed($gear[1])." mph";
	  }
	  ?>
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  2nd gear:
	<td align="left" width="75">
	  <input type="text" name="gear2" value="<?=$gear[2]?>" size="6" maxlength="6">
	</td>
	<td align="left" width="225">
	  Total gearing in second gear:<br>
	  Maximum speed in second gear:
	</td>
	<td align="left">
	  <?
	  if($gear[2] && $final && $tire){
	    echo totalGearing($gear[2])."<br>";
		echo maxSpeed($gear[2])." mph";
	  }
	  ?>
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  3rd gear:
	<td align="left" width="75">
	  <input type="text" name="gear3" value="<?=$gear[3]?>" size="6" maxlength="6">
	</td>
	<td align="left" width="225">
	  Total gearing in third gear:<br>
	  Maximum speed in third gear:
	</td>
	<td align="left">
	  <?
	  if($gear[3] && $final && $tire){
	    echo totalGearing($gear[3])."<br>";
		echo maxSpeed($gear[3])." mph";
	  }
	  ?>
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  4th gear:
	<td align="left" width="75">
	  <input type="text" name="gear4" value="<?=$gear[4]?>" size="6" maxlength="6">
	</td>
	<td align="left" width="225">
	  Total gearing in fourth gear:<br>
	  Maximum speed in fourth gear:
	</td>
	<td align="left">
	  <?
	  if($gear[4] && $final && $tire){
	    echo totalGearing($gear[4])."<br>";
		echo maxSpeed($gear[4])." mph";
	  }
	  ?>
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  5th gear:
	<td align="left" width="75">
	  <input type="text" name="gear5" value="<?=$gear[5]?>" size="6" maxlength="6">
	</td>
	<td align="left" width="225">
	  Total gearing in fifth gear:<br>
	  Maximum speed in fifth gear:
	</td>
	<td align="left">
	  <?
	  if($gear[5] && $final && $tire){
	    echo totalGearing($gear[5])."<br>";
		echo maxSpeed($gear[5])." mph";
	  }
	  ?>
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  6th gear:
	<td align="left" width="75">
	  <input type="text" name="gear6" value="<?=$gear[6]?>" size="6" maxlength="6">
	</td>
	<td align="left" width="225">
	  Total gearing in sixth gear:<br>
	  Maximum speed in sixth gear:
	</td>
	<td align="left">
	  <?
	  if($gear[6] && $final && $tire){
	    echo totalGearing($gear[6])."<br>";
		echo maxSpeed($gear[6])." mph";
	  }
	  ?>
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  7th gear:
	<td align="left" width="75">
	  <input type="text" name="gear7" value="<?=$gear[7]?>" size="6" maxlength="6">
	</td>
	<td align="left" width="225">
	  Total gearing in seventh gear:<br>
	  Maximum speed in seventh gear:
	</td>
	<td align="left">
	  <?
	  if($gear[7] && $final && $tire){
	    echo totalGearing($gear[7])."<br>";
		echo maxSpeed($gear[7])." mph";
	  }
	  ?>
	</td>
  </tr>
  <tr>
    <td align="left" width="125">
	  Reverse gear:<br>
	  (will not be graphed)
	<td align="left" width="75">
	  <input type="text" name="gearR" value="<?=$gear[R]?>" size="6" maxlength="6">
	</td>
	<td align="left" width="225">
	  Total gearing in reverse gear:<br>
	  Maximum speed in reverse gear:
	</td>
	<td align="left">
	  <?
	  if($gear[R] && $final && $tire){
	    echo totalGearing($gear[R])."<br>";
		echo maxSpeed($gear[R])." mph";
	  }
	  ?>
	</td>
  </tr>
  <tr>
    <td colspan="4">
	  <input type="checkbox" name="tireDeformation" value="ON"<?
	  if($tireDeformation == "ON"){
	    echo " checked";
	  }?>> Check this box to factor in for tire deformation/flex.
	</td>
  </tr>
  <tr>
    <td colspan="4" align="left">
	  <input type="image" src="<?=$path;?>/images/go.gif" border="0" value="Submit" name="B1" style="background-color: #000000;"> <input type="image" src="<?=$path;?>/images/reset.gif" border="0" value="Reset" name="B2" style="background-color: #000000;">
	</td>
    </form>
  </tr>
  <tr>
    <td colspan="4" align="left">
	  Keep in mind tire deformation, clutch/torque converter slippage, and wind may cause actual results to differ slightly.<br>
	</td>
  </tr>
</table>