<!doctype html>
<html>
	<head>
	<?php
		$conn = mysql_connect('fdb13.biz.nf:3306', '1816672_jobs', 'password12');
		mysql_select_db('1816672_jobs', $conn);
		$job_id = $_GET['job_id'];
		$query1 = "SELECT category_id FROM job_titles WHERE job_id='$job_id';";
		$result1 = mysql_query($query1);
		$values1 = mysql_fetch_array($result1);
		$tmp = $values1['category_id'];
		$query2 = "SELECT job_category FROM job_categories WHERE category_id = '$tmp';";
		$result = mysql_query($query2);
		$values = mysql_fetch_array($result);

		$query3 = "SELECT job_title FROM job_titles WHERE job_id='$job_id';";
		$resultjob = mysql_query($query3);
		$valuesjob = mysql_fetch_array($resultjob);

	?>
		<title><?php echo $values['job_category'] ?></title>
		<link href="job.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="agGraph.css" />
		<script type='text/javascript' src='prototype.js'></script>
		<script type='text/javascript' src='graphM.prototype.js'></script>

		<script type='text/javascript'>
			var graph1={
				divID:'job_projections',
				ShowNote:'yes',
				NoteText:'Predicted Job openings (in thousands) in the particular category.'
			}
		</script>
	<head>
	<body>
		<header>
			<div id="job">
			<h1><?php echo $valuesjob['job_title'] ?></h1>
			</div>
		</header>

		<header>
			<div id="category">
			<h2>Category: <?php echo $values['job_category'] ?></h2>
			</div>
		</header>


		<div id="title">
			<h4>
			Projected Job Category growth: 
			</h4>
		</div>
		<div id="job_projections">
		</div>
		<script type='text/javascript'>
			var job_id = "<?php echo $tmp ?>";
			draw(graph1, job_id);
		</script>



		<footer>Canadian Open Data Experience</footer>

	</body>

</html>