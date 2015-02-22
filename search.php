<?php
        $conn = mysql_connect('fdb13.biz.nf:3306', '1816672_jobs', 'password12');
        mysql_select_db('1816672_jobs', $conn);

if(isset($_POST['searchVal'])){
        $entry = htmlspecialchars($_POST['searchVal']);

        if (preg_match("/[Nn]\\d\\d\\d\\d/", $entry)) {
            $query = "SELECT DISTINCT(category_id), job_category FROM job_categories WHERE category_id = '$entry';";
            $result = mysql_query($query);
        } else if (preg_match("/\\d\\d\\d\\d/", $entry)) {
            $query = "SELECT DISTINCT(job_categories.category_id), job_categories.job_category FROM job_categories LEFT JOIN job_titles ON job_titles.category_id = job_categories.category_id WHERE job_titles.job_id = '$entry';";
            $result = mysql_query($query);
        } else {
            $query = "SELECT DISTINCT(job_categories.category_id), job_categories.job_category FROM job_categories LEFT JOIN job_titles ON job_titles.category_id = job_categories.category_id WHERE job_titles.category_id LIKE '%$entry%' OR job_title LIKE '%$entry%';";
            $result = mysql_query($query);
        }

        while ($jobs = mysql_fetch_array($result))
        {
            echo "<a href='job/job.php?job_id=".$jobs['category_id']."'>".$jobs['job_category']."</a></br>";
        }
    }
?>