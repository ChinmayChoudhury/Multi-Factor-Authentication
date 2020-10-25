



<!DOCTYPE html>
<html>

<head>

<style>
table {
  border-collapse: collapse;
  width: 40%;
  margin-left: 18px;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #0066ff;
  color: white;
}

h2{
	display: inline-block;
	margin-left: 18px;
}



.button { 
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 18px;
  cursor: pointer;
}

.button1 {border-radius: 4px; background-color: #0066ff;}

.button2 {background-color: #ff6600; display: inline-block; float: right;}

.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

</style>


</head>

<body>
<h1 style="font-family: Cambria; color: blue; margin-left: 18px; margin-bottom: 0px"> CnC National Bank</h1>


<h2>Welcome {username}!</h2>
<a class="button button2" name="button2" href="logout.php"><b>LOGOUT</b></a>

<br><br>

<p style="font-family: Century Gothic; margin-left: 18px;">"There are some things that money can’t buy. For everything else there’s CnC."</p><br>
<?php
      if (isset($_SESSION['succ'])) {
        echo "<p style='color:green'>" . $_SESSION['succ'] . "</p>";
        unset($_SESSION['succ']);
      }
      if (isset($_SESSION['error'])) {
        echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
      }

    ?>
<button class="button button1" name="button1"><b>TRANSFER MONEY</b></button>
<br><br>

<hr>





<table>
  <tr>
    <th>User Name</th>
    <th>Account ID</th>
    <th>Balance</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
</table>

</body>











</html>