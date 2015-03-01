<!DOCTYPE html>
    <html>

    <head>


    <link href="pretty.css" rel="stylesheet">

    <!-- Local JavaScript -->
    <!--**************************************************
        *                    SETTING                     *
        *				    BACKGROUND 	             	 *
        ************************************************** -->

<style media="screen" type="text/css">
body {
  background-image: url("/images/bg.jpg")
}
</style>

    </head>

<form action='index.php' method='post' class="form-wrapper cf">
        <input type="text" placeholder="Search here..." required>
        <button type="submit">Search</button>
</form>   

<body class="metro">

<table style="position:absolute;left:0px;top:-2000px;"></table>

<center>
    <h2 style="color: #DA4F49; opacity: 0.95; font-family: Arial, Helvetica, sans-serif; font-size: 50px; margin-bottom: 0px; margin-top: 100px;">
        <b>SEARCH<b>&nbsp;&nbsp;<b>YOUR </h2>

    <hr style="height: 3px; width: 708px; margin-bottom: 10px; margin-top: 0px; background-color: #999;"/>


    <h1 style="color: #4F87A2; opacity: 0.85; font-family: Arial, Helvetica, sans-serif; font-size: 180px; font-weight: 150;  line-height: 0.70em; margin: 0 auto;">
        <b>FUTURE</b></h1>

    <hr style="height: 3px; width: 708px; margin-top: 6px; margin-bottom: 0; background-color: #999;" />
</center>

<?php
        $conn = mysql_connect('fdb13.biz.nf:3306', '1816672_jobs', 'password12');
        mysql_select_db('1816672_jobs', $conn);
      if(isset($_POST['entry'])){
          $entry = htmlspecialchars($_POST['entry']);

            $query = "SELECT DISTINCT(job_titles.job_id), job_titles.job_title, job_titles.category_id, job_categories.percent_growth, job_categories.category_id
                      FROM job_titles
                      INNER JOIN `job_categories` on job_titles.category_id = job_categories.category_id
                      WHERE (job_titles.job_id LIKE '%$entry%' OR job_titles.job_title LIKE '%$entry%' OR job_titles.category_id LIKE '%$entry%')
                      ORDER BY job_categories.percent_growth DESC
                      ;";
            $result = mysql_query($query);

        while ($jobs = mysql_fetch_array($result)){  
            $output .=
                    "<div class='hot-container'>
                    <a href='job/job.php?job_id=".$jobs['job_id']."'
                    class='btn btn-blue'>".$jobs['job_title'].'&nbsp;&nbsp;&nbsp;&nbsp;'.round($jobs['percent_growth']).'%'."</a>
                    </div>";
            }
           
      }
      else{
     echo "<p style='color: black; margin: 5px; border: solid 1px; border-color: rgba(185, 185, 185, 0.3); 
             padding: 5px; text-align: center; border-radius: 5px; 
             background-color: rgba(245, 245, 245, 0.85); opaciity: 0.5; font-family: Arial, Helvetica, sans-serif; width: 800px;
             margin-left: auto; margin-right: auto; font-size: 15px; font-weight: 200; line-height: 1.55em;'>

     Decisions are hard. We aim to simplify them. Simply search a career and see if it has a promising growth. 
     This empowers the youth of today by making them informed about what lies ahead. 
     Data provided by Canadian Government. Developed for CODE (Canadian Open Data Experience).

           </p>";
        }
?>


<div id="searchResults">
<?php print("$output");?>
</div>


</body>
    </html>

