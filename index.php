
<!--TOOK OUT THE PHP START THING NOT SURE WHTAT IT DID BUT IT HAS ERRORS
<?php session_start() ?>
-->
<!DOCTYPE html>
    <html style="">

    <head>

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="iconFont.css" rel="stylesheet">
    <link href="docs.css" rel="stylesheet">
    <link href="pretty.css" rel="stylesheet">
	<link rel="icon" type="images/ico" href="images/favicon.ico">

    <!-- Load JavaScript Libraries -->
    <script src="jquery.min.js"></script>
    <script src="jquery.widget.min.js"></script>
    <script src="jquery.mousewheel.js"></script>
    <script src="prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="docs.js"></script>
    <script src="github.info.js"></script>
    <script src="start-screen.js"></script>
    
    <!--**************************************************
        *                    SETTING                     *
        *				    BACKGROUND 	             	 *
        ************************************************** -->
    <style media="screen" type="text/css">
body {
    background: url("images/bg.jpg") no-repeat fixed center center / cover #363843 !important;
}
</style>


    </head>
    
    <body class="metro">

<table style="position:absolute;left:0px;top:-2000px;"></table>

<div id="isc_styleTester" style="position:absolute;left:0px;top:-2000px;"></div>


<div id="isc_1" style="POSITION:absolute;LEFT:0px;TOP:0px;WIDTH:100px;HEIGHT:100px;…ISIBILITY:hidden;-moz-box-sizing:border-box;OVERFLOW:hidden;"></div>


<script></script>

<!--

 Velocity - no script warning 

-->

<noscript></noscript>

<div id="isc_2" class="normal" onscroll="return isc_VLayout_2._handleCSSScroll()" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; cursor: default; display: inline-block; outline-style: none;">



    </div>


    <div class='example' style='border: 1px solid rgb(72,72,72);'>
        <nav class='horizontal-menu'><ul><center><li>
            <div class='element input-element' style='align: center; width:560px;'>
                <form action='index.php' method='post' style='margin: 0px 0px 0px; height:0px; align: center'>
                    <div class='input-control text' style='background-color: #BCB9B9;'>
                        <input type='text' name ='entry' placeholder='Search by job or category' style='width:500px;magin bottom:0pt;'/>
                        <button style='padding: 6px 10px;'><img src='images/search-3071e9e44daa3fd755860cfeb35f83e4.png' width='75%' height='75%';> 
                        </button></div></form></div></li></center><li></u1></nav></div>;

    <div id="isc_3" class="normal" onscroll="return isc_VLayout_0._handleCSSScroll()" style="position: relative; top: 7%; width: 779px; margin-left: auto; margin-right: auto; h…072; padding: 0px; box-sizing: border-box;">
    
    <center>
    <h2 style="color: white; font-family: Century Gothic, Lucida Grande, Arial, sans-sherif;font-weight: 200; 
    font-size: 40px; font-weight:normal; line-height: 0.0em; margin-bottom: 10px;"><b>SEARCH<b>&nbsp;&nbsp;<b>YOUR 
    </h2></center>
<hr style="align: center; color:rgba(0,0,0, 0.5); width: 555px; margin-left: auto; margin-right: auto; margin-top: 1.8em; margin-bottom: 0.5em;" />

    <center>
<h1 style="color: rgba(255, 255, 255, 0.85); font-family: Century Gothic, Lucida Grande, Arial, sans-sherif;font-weight: 200; 
    font-size: 180px; font-weight:normal; line-height: 0.7em; padding-bottom">
    <b>FUTURE</b></h1></center>

<hr style="align: center; color:rgba(0,0,0, 0.5); width: 555px; margin-left: auto; margin-right: auto; margin-top: 1.4em; margin-bottom: 0.5em;" />



<?php
        $conn = mysql_connect('fdb13.biz.nf:3306', '1816672_jobs', 'password12');
        mysql_select_db('1816672_jobs', $conn);
      if(isset($_POST['entry'])){
          $entry = htmlspecialchars($_POST['entry']);

            $query = "SELECT DISTINCT(job_titles.job_id), job_titles.job_title FROM job_titles WHERE (job_id LIKE '%$entry%' OR job_title LIKE '%$entry%' OR category_id LIKE '%$entry%');";
            $result = mysql_query($query);
        

        while ($jobs = mysql_fetch_array($result))
        {
            $output .= "<a  style='color: #FFF;' href='job/job.php?job_id=".$jobs['job_id']."'>".$jobs['job_title']."</a></br>";
        }
      }else{
     echo" <p class='generic' style='color: #FFF; font-family: Century Gothic, Lucida Grande, Arial, sans-sherif; align: center; font-size: 15px;line-height: 1.55em;''>Desicions are hard. We aim to simply them. Search your potential future career and see if it has a promising growth. This empowers the youth of today by making them informed about what lies ahead. Data provided by Canadian Government. Developed for CODE (Canadian Open Data Experience).
</p>";
}?>
<?php print("<br>");?>
<div id="searchResults">
<?php print("$output");?>
</div>


<style>
#searchResults{
   
    background-color: rgba(0,0,0, 0.5);
    text-align: center;
}

</style>
    <div id="isc_4" style="POSITION:relative;display:inline-block;-moz-box-sizing:borde…-align:top;VISIBILITY:inherit;Z-INDEX:200072;CURSOR:default;" >
     
        <div id="isc_5" class="normal" onscroll="return isc_HLayout_0._handleCSSScroll()" style="position: absolute; left: 0px; top: 0px; width: 779px; heigh…; box-sizing: border-box; cursor: default;" >

    <div id="isc_6" style="POSITION:relative;display:inline-block;-moz-box-sizing:borde…-align:top;VISIBILITY:inherit;Z-INDEX:200090;CURSOR:default;" >
        <div id="isc_8" class="loginTopTitle" onscroll="return isc_Img_0._handleCSSScroll()" style="position: absolute; left: 0px; top: 0px; width: 345px; heigh…; box-sizing: border-box; overflow: hidden; cursor: default;" >

            <div id="isc_7" style="POSITION:relative;display:inline-block;-moz-box-sizing:borde…-align:top;VISIBILITY:inherit;Z-INDEX:200108;CURSOR:default;" >
    
            </div>
        </div>
    </div>

</div>
<div id="isc_9" class="loginFormUser" onscroll="return isc_VLayout_3._handleCSSScroll()" style="position: absolute; left: 0px; top: 77px; width: 780px; heig…; box-sizing: border-box; cursor: default;" >

<!--  TILES TILES TILES TILES  -->



<!--  TILES TILES TILES TILES  -->
                        


    <div id="isc_A" style="POSITION:relative;display:inline-block;-moz-box-sizing:borde…-align:top;VISIBILITY:inherit;Z-INDEX:200126;CURSOR:default;" >
    
    </div>
</div>
</div>
</div>

<!--
<div id="isc_1X" class="loginBottomLogo" onscroll="return isc_Img_1._handleCSSScroll()" style="position: relative; top: 59%; width: 115px; margin-left: auto; margin-right: auto; h…072; padding: 0px; box-sizing: border-box;">

    <div id="isc_1W" style="POSITION:relative;display:inline-block;-moz-box-sizing:borde…-align:top;VISIBILITY:inherit;Z-INDEX:200666;CURSOR:default;">
        <!--
        <img border="0" style=valign=center draggable="true" name="isc_1Wmain" src="/images/logo_alu.png"></img>
    
    </div>
    -->

</div>
<div id="isc_1Y" onscroll="return isc_Label_1._handleCSSScroll()" style="position: relative; top: 60%; width: 200px; margin-left: auto; margin-right: auto; h…072; padding: 0px; box-sizing: border-box;" >

<!--
        <div id="isc_1Z" style="POSITION:relative;display:inline-block;-moz-box-sizing:borde…-align:top;VISIBILITY:inherit;Z-INDEX:200684;CURSOR:default;" >
            <table style="cellspacing=0; width=295px; height=55px; role=presentation">
                <tbody>
                    <tr>
                    
                        <td style="align=left; valign=center; nowrap=true; padding-top: 20px;padding-bottom: 20px;color: #FCFCFC;font-size: 10px;text-align: center; font-family: Ubuntu,Tahoma,sans-serif">Copyright (c) 2003-2015, Alcatel-Lucent. All Rights Reserved</td>
                    </tr>
                </tbody>
            </table>
        </div>
    -->
    </div>

</div>
<div id="isc_20" style="position: absolute; left: 0px; top: 0px; width: 1px; height:… cursor: default; display: inline-block; visibility: hidden;" dir="ltr" ></div>

<div id="isc_21"  style="position: absolute; left: 12px; top: 0px; width: 5px; height… cursor: default; display: inline-block; visibility: hidden;" ></div>

            <div id="isc_getStyleDeclaration_defaultReferenceElement" style="display: none;"></div>
        </body>
    </html>

