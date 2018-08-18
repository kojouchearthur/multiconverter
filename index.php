<!Doctype html>
<html lang="en">
<head>
    <title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html, charset=utf-8" />
	<meta name="HandheldFriendly" content="true"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/mystyle.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
</head>

<body>
<nav class="navbar navbar-inverse" style="margin-bottom:0px;">
  <div class="container-fluid">
    <h3 id="" style="text-align:center;color:white;">Convert Values Between Several units</h3>
  </div>
</nav>
<div class="jumbotron well well-lg" style="margin-top:-10px;position:sticky;top:0;z-index:1000;">
    <div>
	  <h5 id="tm"><!--chronology-->
	    <span id="crndt"></span><!--date-->
	    <span id="crntm"></span><!--time-->
	  </h5>
	</div>  
</div>


  <div class="container">
    <div class="row">
	  <div class="col-md-12">
	     
	  </div>
	</div><br>
	<div class="row">
	  <div class="col-xs-12 col-sm-5">
	    <div id="" style="text-align:center;">
		  <h4 id="opSect"></h4>
		</div>
	  </div>
	  <div class="col-xs-12 col-sm-2" style="justify-content:;">
	    <div style="justify-content:;">
	    <div class="form-group">
		  <select class="form-control" id="opSel" name="" style="width:100%;">
		    <optgroup label="Weight">  
			  <option  selected="selected" disabled="disabled">Select Conversion</option>
			  <option value="KgPd">Kg - Pound</option>
			  <option vlaue="KgSt">Kg - Stone</option>
			</optgroup>
		    <optgroup label="Length">
		      <option value="KmMi">Km - Mile</option>
			  <option value="FtM">Ft - Metre</option>
			  <option value="YdM">Yard - Metre</option>
			</optgroup>
			<optgroup label="Area">
			  <option value="Ft2M2">Ft&sup2; - Metre&#178;</option>
			  <option value="HcAc">Hectare - Acre</option>
			</optgroup><!--
			<optgroup label="Temperature">
			  <option value="CeF">Celsius - Farenheit</option>
			  <option value="CeK">Celsius - Kelvin</option>
			</optgroup> -->
			<optgroup label="Volume">
			  <option value="GaL">Gallon - Litre</option>
			  <option value="LBbl">Litre - US Barrel (Liquid)</option>
			</optgroup>
			<optgroup label="Currency">
			  <option value="USD">USD - NGN</option>
			  <option value="EUR">EUR - NGN</option>
			  <option value="GBP">GBP - NGN</option>
			  <option value="GHC">GHC - NGN</option>
			</optgroup>
		  </select>	
		</div><br>
		</div>
	  </div>
      <div class="col-xs-12 col-sm-5"></div>	  
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-4 cls">
	  <div class="input-group">
	    <span class="input-group-addon"><i style="font-size:20px;" class="fa fa-money"></i></span>
	    <input type="" id="fVal" class="form-control" placeholder=""/>
	  </div>
	  <div id="fValNote" class="valNote" style="color:;"></div>
	</div>
	
	<div id="gh" class="col-xs-12 col-sm-4 cls">
	  <div id="ij" style="text-align:center;font-size:;">
	    <button id="swp" class="btn btn-warning">
	      <span class=""><i style="font-size:15px;" class="fa fa-exchange"></i></span><br>
		</button>
	  </div>
	</div>
	<div class="col-xs-12 col-sm-4 cls">
	  <div class="input-group" id="sValg">
		<span class="input-group-addon"><i style="font-size:20px;" class="fa fa-money"></i></span>
		<input type="text" id="sVal" class="form-control" placeholder="" disabled/>
	  </div>
	  <div id="sValNote" class="valNote" style="color:orange;"><span id="loader" style="display:none;"><i style="font-size:14px;" class="fa fa-cog fa-spin"></i></span></div>
	</div>
	
	</div><br><br>
	<div class="row">
	  <div class="col-xs-12">
	    <ul class="">
		  <li><mark>Select</mark> from the list the type of conversion you wish to perform.</li>
		  <li><mark>Enter the value</mark> you want to convert in the box on the left</li>
		  <li>Get the <mark>result</mark> (computed/converted value) from the box on your right</li>
		  <li>Enter only <mark>numerical</mark> values are Symbols and alphabets will produce an <mark>Error</mark></li>
		  <li>Use the orange-colored button to <mark>Swap</mark> between the two units of the conversion type you have chosen, to enter different value.<br>E.g: Swap between KG and POUND depending on the value you wish to convert.</li>
		  
		</ul> 
	  </div>
	</div>

  </div>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscriptN.js"></script>	
</body>
</html>