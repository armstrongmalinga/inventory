<?php  //Special functions Reports
function displayReports(){
	
	reportsMenu();
	
	
	echo 'This is a sample text.';
	
}
	
function reportsMenu(){


echo '
<div align="right">
<form class="forms" action="sales.php" method="get" name="productDisplayForm">

	<select class="input" name="formSearchBy">
	<option value="product_name">Search By</option> 
  <option value="product_name">Product Name</option>
  <option value="product_generic_name">Generic Name</option>
	</select>
	
	<select class="input" name="formDisplay">
	<option value="5">Display by</option> 
  <option value="5">5</option>
  <option value="10">10</option>
  <option value="15">15</option>
  <option value="100">100</option>
	</select>
	
	<input class="input" name="searchBox" type="text" value="" size="15" maxlength="20" />
	<a href="#" class="bigbutton">Monthly</a>
	
	
	</form> 
	</div>';
	
/* 
<select class="input" name="formSearchBy">
	<option value="product_name">Search By</option> 
  <option value="product_name">Product Name</option>
  <option value="product_generic_name">Generic Name</option>
	</select>
	
	<select class="input" name="formDisplay">
	<option value="5">Display by</option> 
  <option value="5">5</option>
  <option value="10">10</option>
  <option value="15">15</option>
  <option value="100">100</option>
	</select> */

}



 ?>

