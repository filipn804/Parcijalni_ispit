<?php


$isbn = 132311241241242;

$cijena = 12.99;

$naslov = 'najbolja knjiga';
$autor = 'Ivan';

const MYCAR = "BMW";

$a = 5;
$b = &$a;

echo $b;

$a = 10;

echo $b;

$naStanju = true;

if ($naStanju == true) {
   echo "na stanju";
}

?>


<html>


<style>
table, th, td {
  border:1px solid black;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

</style>


<head>

<body>
<h1>Knjiga mjeseca</h1>

<table style="width:100%">
  <tr>
     <td style="width: 100px;">
        <h5>Naslov</h5>
     </td>
     <td style="width: 100px;">
     <span> <?php echo $naslov ?></span>
     </td>
  </tr>
  <table style="width:100%">
  <tr>
     <td style="width: 100px;">
        <h5>Constant MYCAR</h5>
     </td>
     <td style="width: 100px;">
     <span> <?php echo MYCAR ?></span>
     </td>
  </tr>
  <table style="width:100%">
  <tr>
     <td style="width: 100px;">
        <h5>Autor</h5>
     </td>
     <td style="width: 100px;">
     <span> <?php echo $autor ?></span>
     </td>
  </tr>
  <table style="width:100%">
  <tr>
     <td style="width: 100px;">
        <h5>Cijena</h5>
     </td>
     <td style="width: 100px;">
     <span> <?php echo $cijena ?></span>
     </td>
  </tr>
  <table style="width:100%">
  <tr>
     <td style="width: 100px;">
        <h5>NaStanju</h5>
     </td>
     <td style="width: 100px;">
     <span> <?php echo $naStanju ?></span>
     </td>
  </tr>
  
</table>
</body>
</head>
</html>