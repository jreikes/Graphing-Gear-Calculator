<?
//get variables (php no longer allows this to happen automatically, by default)
if ($_POST['gear1']) {
	$gear1 = $_POST['gear1'];
}
elseif ($_GET['gear1']) {
	$gear1 = $_GET['gear1'];
}
if ($_POST['gear2']) {
	$gear2 = $_POST['gear2'];
}
elseif ($_GET['gear2']) {
	$gear2 = $_GET['gear2'];
}
if ($_POST['gear3']) {
	$gear3 = $_POST['gear3'];
}
elseif ($_GET['gear3']) {
	$gear3 = $_GET['gear3'];
}
if ($_POST['gear4']) {
	$gear4 = $_POST['gear4'];
}
elseif ($_GET['gear4']) {
	$gear4 = $_GET['gear4'];
}
if ($_POST['gear5']) {
	$gear5 = $_POST['gear5'];
}
elseif ($_GET['gear5']) {
	$gear5 = $_GET['gear5'];
}
if ($_POST['gear6']) {
	$gear6 = $_POST['gear6'];
}
elseif ($_GET['gear6']) {
	$gear6 = $_GET['gear6'];
}
if ($_POST['gear7']) {
	$gear7 = $_POST['gear7'];
}
elseif ($_GET['gear7']) {
	$gear7 = $_GET['gear7'];
}
if ($_POST['gearR']) {
	$gearR = $_POST['gearR'];
}
elseif ($_GET['gearR']) {
	$gearR = $_GET['gearR'];
}
if ($_POST['finalDrive']) {
	$finalDrive = $_POST['finalDrive'];
}
elseif ($_GET['finalDrive']) {
	$finalDrive = $_GET['finalDrive'];
}
if ($_POST['axle']) {
	$axle = $_POST['axle'];
}
elseif ($_GET['axle']) {
	$axle = $_GET['axle'];
}
if ($_POST['redline']) {
	$redline = $_POST['redline'];
}
elseif ($_GET['redline']) {
	$redline = $_GET['redline'];
}
if ($_POST['tireString']) {
	$tireString = $_POST['tireString'];
}
elseif ($_GET['tireString']) {
	$tireString = $_GET['tireString'];
}
if ($_POST['tireDeformation']) {
	$tireDeformation = $_POST['tireDeformation'];
}
elseif ($_GET['tireDeformation']) {
	$tireDeformation = $_GET['tireDeformation'];
}

//set effective total final drive ratio
if($finalDrive && !$axle)
{
  $final = $finalDrive;
}
elseif($axle && !$finalDrive)
{
  $final = $axle;
}
elseif($axle && $finalDrive)
{
  $final = $axle * $finalDrive;
}

//figure out effective tire circumference (with tire deformation, if checked)
if(ereg("([0-9]{3})/([0-9]{2})/([0-9]{2})", $tireString, $tire)){
  $tire = array("width"=>$tire[1],"profile"=>$tire[2],"wheelSize"=>$tire[3],"circumference");
  $tire[circumference] = 3.141592653589793238462643383279 * ($tire[wheelSize] + 2 * 0.0003937007874015748 * $tire[profile] * $tire[width]);
  if($tireDeformation){
    switch ($tire[profile]) {
    case 30:
        $speedConversion = 0.9664 * 0.0009469696969696969696969696969697 * $tire[circumference];
        break;
    case 35:
        $speedConversion = 0.9691 * 0.0009469696969696969696969696969697 * $tire[circumference];
        break;
    case 40:
        $speedConversion = 0.9707 * 0.0009469696969696969696969696969697 * $tire[circumference];
        break;
    case 45:
        $speedConversion = 0.9676 * 0.0009469696969696969696969696969697 * $tire[circumference];
        break;
    case 50:
        $speedConversion = 0.9693 * 0.0009469696969696969696969696969697 * $tire[circumference];
        break;
    case 55:
        $speedConversion = 0.9682 * 0.0009469696969696969696969696969697 * $tire[circumference];
        break;
    case 60:
        $speedConversion = 0.9674 * 0.0009469696969696969696969696969697 * $tire[circumference];
        break;
    case 65:
        $speedConversion = 0.9652 * 0.0009469696969696969696969696969697 * $tire[circumference];
        break;
	default:
		$speedConversion = 0.967 * 0.0009469696969696969696969696969697 * $tire[circumference];
		break;
	}
  }
  else{
    $speedConversion = 0.0009469696969696969696969696969697 * $tire[circumference];
  }
}

$gear = array("1" => $gear1,"2" => $gear2,"3" => $gear3,"4" => $gear4,"5" => $gear5,"6" => $gear6,"7" => $gear7,"R" => $gearR);

function totalGearing($gear){
  global $final;
  return $gear * $final;
}

function maxSpeed($gear){
  global $redline, $speedConversion;
  return round($speedConversion * ($redline / totalGearing($gear)),1);
}

function engineSpeed($gear,$vehicleSpeed){
  global $speedConversion;
  return round((($vehicleSpeed * totalGearing($gear)) / $speedConversion),1);
}

?>