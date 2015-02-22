<?php
switch($_POST[id]){
	case 'job_projections':
		$startMonth=1;
		$generateRandom=false;

		$conn = mysql_connect('fdb13.biz.nf:3306', '1816672_jobs', 'password12');
		mysql_select_db('1816672_jobs', $conn);
		$job_id = $_POST['job_id'];
		$query = "SELECT * FROM job_projections WHERE category_id = '$job_id';";
		$result = mysql_query($query);

		$values = mysql_fetch_array($result);

		$data['num'][0]=$values['2012'];
		$data['num'][1]=$values['2013'];
		$data['num'][2]=$values['2014'];
		$data['num'][3]=$values['2015'];
		$data['num'][4]=$values['2016'];
		$data['num'][5]=$values['2017'];
		$data['num'][6]=$values['2018'];
		$data['num'][7]=$values['2019'];
		$data['num'][8]=$values['2020'];
		$data['num'][9]=$values['2021'];
		$data['num'][10]=$values['2022'];

		$bar_x_title[1]='2012';
		$bar_x_title[2]='2013';
		$bar_x_title[3]='2014';
		$bar_x_title[4]='2015';
		$bar_x_title[5]='2016';
		$bar_x_title[6]='2017';
		$bar_x_title[7]='2018';
		$bar_x_title[8]='2019';
		$bar_x_title[9]='2020';
		$bar_x_title[10]='2021';
		$bar_x_title[11]='2022';



		############## do not edit below this line ########

		for($i=0;$i<11;$i++){
			
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