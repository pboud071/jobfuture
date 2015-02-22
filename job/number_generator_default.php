<?php
switch($_POST[id]){
	case 'resultDiv1':
		$startMonth=3;
		$generateRandom=true;

		$data['num'][0]=43;
		$data['num'][1]=33;
		$data['num'][2]=23;
		$data['num'][3]=33;
		$data['num'][4]=43;
		$data['num'][5]=53;
		$data['num'][6]=63;
		$data['num'][7]=73;
		$data['num'][8]=83;
		$data['num'][9]=93;
		$data['num'][10]=103;
		$data['num'][11]=113;

		$bar_x_title[1]='Jan';
		$bar_x_title[2]='Feb';
		$bar_x_title[3]='Mar';
		$bar_x_title[4]='Apr';
		$bar_x_title[5]='May';
		$bar_x_title[6]='Jun';
		$bar_x_title[7]='Jul';
		$bar_x_title[8]='Aug';
		$bar_x_title[9]='Sep';
		$bar_x_title[10]='Oct';
		$bar_x_title[11]='Nov';
		$bar_x_title[12]='Dec';



		############## do not edit below this line ########

		for($i=0;$i<12;$i++){
			
			if($generateRandom){ $data['num'][$i]=rand(10,1000); }
			
			$data[xTitle][$i]=$bar_x_title[$startMonth];
			if($startMonth==12){$startMonth=0;}
			$startMonth++;	

		}
	break;
	
	case 'resultDiv2':
		$startMonth=3;
		$generateRandom=false;

		$data['num'][0]=43;
		$data['num'][1]=33;
		$data['num'][2]=23;
		$data['num'][3]=33;
		$data['num'][4]=43;
		$data['num'][5]=53;
		$data['num'][6]=63;
		$data['num'][7]=73;
		$data['num'][8]=83;
		$data['num'][9]=93;
		$data['num'][10]=103;
		$data['num'][11]=113;

		$bar_x_title[1]='Jan';
		$bar_x_title[2]='Feb';
		$bar_x_title[3]='Mar';
		$bar_x_title[4]='Apr';
		$bar_x_title[5]='May';
		$bar_x_title[6]='Jun';
		$bar_x_title[7]='Jul';
		$bar_x_title[8]='Aug';
		$bar_x_title[9]='Sep';
		$bar_x_title[10]='Oct';
		$bar_x_title[11]='Nov';
		$bar_x_title[12]='Dec';



		############## do not edit below this line ########

		for($i=0;$i<12;$i++){
			
			if($generateRandom){ $data['num'][$i]=rand(10,1000); }
			
			$data[xTitle][$i]=$bar_x_title[$startMonth];
			if($startMonth==12){$startMonth=0;}
			$startMonth++;	

		}
	break;
	
	

}

# convert a complexe value to JSON notation, and send it to the browser
require_once('json.php');
$json = new Services_JSON();

$data['msg']='Success';
$output = $json->encode($data);

echo($output);


?>