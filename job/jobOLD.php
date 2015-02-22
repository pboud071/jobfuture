<!doctype html>
<html>
	<head>
		<title>Job Title</title>
		<link href="job.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="agGraph.css" />
		<script type='text/javascript' src='prototype.js'></script>
		<script type='text/javascript' src='graphM.prototype.js'></script>
	<head>

	<body>


		
		<header>
				<h1>Job Title</h1>
		</header>



		<div id="resultDiv1"/>
		<div id="resultDiv2"/>
		<script type='text/javascript'>
			var graph1={
				divID:'resultDiv1',
				ShowNote:'yes',
				NoteTitle:'Note',
				NoteText:'Little note about this graph goes here...'
			}
	
			var graph2={
				divID:'resultDiv2',
				ShowNote:'yes',
				NoteTitle:'Note',
				NoteText:'Now with multiple graphs :)'
			}
		</script>

		<input type="button" value="Generate Graph" id="startButton" onclick="draw(graph1);" />

		<footer>Canadian Open Data Experience</footer>

	</body>

</html>