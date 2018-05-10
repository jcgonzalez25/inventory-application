<!doctype html>
<?php include 'excelstore.php' ?>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>    
    <link rel="stylesheet" href="foundation-6/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="foundation-6/css/app.css"/>
   <link rel="stylesheet" type="text/css" href="foundation-icons/foundation-icons.css"/>

   </head>
   <body>
    <!-- head -->
    <ul class="menu menu-hover-lines">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Update Purchase Order</a></li>
      <li><a href="#">Edit Inventory Item</a></li>
      <li><a href="#">View Inventory Needed</a></li>
      <li><a href="#">Products</a></li>
    </ul>

  <div class="row">
    <div class="table-scroll">
      <table>
        <tr>
          <th> Item Number </th> 
          <th> Material </th>
          <th> Customer </th>
          <th> Purchase Order </th>
          <th> Quantity </th>
          <th> Oldest Date </th>
          <th> Latest Date </th>
          <th> Pallet </th>
          <th> Lot </th>
          <th> Referance Number </th>
          <th> Date Code </th>
          <th> Supplier Code </th>
          <th> Min Stock Level </th>
          <th> Max Stock Level </th>
          <th> Reorder QTY </th>
          <th> Material Type </th>
        </tr>

        <?php 
    $myfile = fopen("inventory sample.csv","r") or die("unable to open file");
    $column_num = 1;
    while( ($row = fgets($myfile)) !== false ){ 
    $col = explode(",",$row);
    echo "<tr>";
        for($i=0; $i<16; $i++){
          echo "<td>".$col[$i]."</td>";  
        }
    echo "</tr>";
      }
      ?>
      </table>
    </div>
  </div>










    <script type="text/javascript" src="/foundation-6/js/jo.js"></script>
    <script type="text/javascript" src="/foundation-6/js/vendor/foundation.js"></script>
  </body>
</html>
