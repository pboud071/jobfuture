<?php
if(isset($_SESSION['username'])){
echo"<div class='example'><nav class='horizontal-menu'><ul><li><div class='element input-element' style='align: center; width:700px;'><form action='search.php' method='post'><div class='input-control text'><input type='text' placeholder='Search resources by job or category' style='width:80%;'/><button class='active' style='padding: 7px 12px;'><img src='images/search-3071e9e44daa3fd755860cfeb35f83e4.png' width='75%' height='75%';> </button></div></form></div></li><li><a href='about.php'>help</a></li></ul></nav></div>";
}
else{
echo"<div class='example' style='border: 1px solid rgb(72,72,72);'><nav class='horizontal-menu'><ul><center><li><div class='element input-element' style='align: center; width:560px;'><form action='results.php' method='post' style='margin: 0px 0px 0px; height:0px;'><div class='input-control text' style='background-color: #BCB9B9;'><input type='text' name ='entry' placeholder='Search by job or category' style='width:500px;magin bottom:0pt;'/><button style='padding: 6px 10px;'><img src='images/search-3071e9e44daa3fd755860cfeb35f83e4.png' width='75%' height='75%';> </button></div></form></div></li></center><li></u1></nav></div>";
}
?>

