<?
$hits = 0;
$page = $_SERVER['REQUEST_URI'];
# Add hit to Pages          -->
$qp = strpos($page, "?");
$sl = strlen($page) - $qp;
$v = substr($page, 0, $sl);
$sql = "select * from pagehits where page = '".$v."'";
$rs = mysql_queryi($sql) or die($sql."<br>".'Select Query failed: ' . mysqli_error());
if(mysqli_num_rows($rs) == 0)
   {
   # Free resultset
   mysqli_free_result($rs);
   $sql = "insert into pagehits (page, hits) values (";
   $sql .= "'".$v."', 1);";
   $rs = mysqli_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysqli_error());
   $hits = "1st visitor";
   }
else
   {
   while ($row = mysqli_fetch_assoc($rs)) 
      {
   	  $hits = ($row['hits'] + 1)." visitors";
	  break;
   	  }
   # Free resultset
   mysqli_free_result($rs);
   $sql = "update pagehits set hits = hits + 1 ";
   $sql .= "where page = '".$v."';";
   $rs = mysqli_query($sql) or die($sql."<br>".'Update Query failed: ' . mysqli_error());
   }
# Free resultset
mysql_free_result($rs);
?>
