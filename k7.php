<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="1">
</head>
<body>
<h1>Display Current Date & Time</h1>
<h2>
<?php
echo "The time from the server is <span style='color:red';> " . date("h:i:sa")."</span>";
echo '<br />';
echo "Today's Date is <span style='color:red';>" . date("d-m-Y");
date_default_timezone_set('Asia/Kolkata');
echo " </span> and Current Time is <span style='color:red';>" . date("h:i:s a")."</span>";
?>
</h2>
</body>
</html>
