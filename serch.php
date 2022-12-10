<?php
    $key=$_GET['id'];
    $array = array();
    $con=mysql_connect("localhost","root","shopdb");
    $db=mysql_select_db("database name",$con);
    $query=mysql_query("select * from cart where <image> LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['title'];
    }
    echo json_encode($array);
?>