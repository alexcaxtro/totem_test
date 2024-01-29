<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Atención a Paciente</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
	<style>
/* Color del título */         
.header{
	background: #1EBBFF;
}
.header p{
	text-align: center;
	font-size: 16px;
	color: #fff;
	padding: 16px;
	margin: 0;
	font-weight: 700;
}
span{
	color: #fff;
	padding: 16px;
}
.padding-reset{
	padding-left: 0;
	padding-right: 0;
/*use for resing default padding for .row in input text section*/
}
.teaxtbox input[type="text"]{
	width: 100%;
	border: 1px solid #f1f1f1;
	font-size: 18px;
	font-weight: 700;
	padding: 12px;
}
.teaxtbox input[type="text"]:focus{
	outline: none;
}
.commonbutton input[type="submit"]{
	padding: 8px;
	background: #f2f2f2;
	border: none;
	font-size: 18px;
	font-weight: 700;
	width: 100%;
	margin-top: 15px;
	border-radius: 5px;
}
.conflict input[type="submit"]{
	padding: 8px;
	background: #f2f2f2;
	border: none;
	font-size: 18px;
	font-weight: 700;
	width: 100%;
	margin-top: 15px;
	border-radius: 5px;
}
.conflict input[type="submit"]:focus, .commonbutton input[type="submit"]:focus{
	outline: none;
}
#del{
	background: #F40057;
	color: #fff;
}
#plus{
	height: 97px;
}
#aceptar{
	background: #80C683;
	color: #fff;
}

    </style>


</head>
<body>

    <div class="container-fluid">
    	<div class="row">
        <div class="col-md-4 col-md-offset-4">
        	<!-- start of header section -->
        	<div class="row header">
            <div class="col-md-2">
            </div>
            	<div class="col-md-8">
            		<p>Coloque su RUT</p>
            	</div>
            <div class="col-md-2">
            </div>
        	</div> <!-- header div -->
        	<!-- end of header section -->
        	<!-- start of textbox -->
        	<div class="row teaxtbox">
            <div class="col-md-12 padding-reset">
        		<input type="text" name="" value="">
            </div>
        	</div>
        	<!-- end of textbox -->

        <!-- start of button design -->
        <div class="row commonbutton">
            <!-- first row -->
            	<div class="col-md-4">
            		<input type="submit" name="" value="7">
            	</div>
            	<div class="col-md-4">
            		<input type="submit" name="" value="8" class="">
            	</div>
            	<div class="col-md-4">
            		<input type="submit" name="" value="9" class="">
            	</div>
            <!-- second row -->
            	<div class="col-md-4">
            		<input type="submit" name="" value="4" class="">
            	</div>
            	<div class="col-md-4">
        			<input type="submit" name="" value="5" class="">
            	</div>
            	<div class="col-md-4">
            		<input type="submit" name="" value="6" class="">
            	</div>
            <!-- third row -->
            	<div class="col-md-4">
            		<input type="submit" name="" value="1" class="">
            	</div>
            	<div class="col-md-4">
            		<input type="submit" name="" value="2" class="">
            	</div>
            	<div class="col-md-4">
            		<input type="submit" name="" value="3" class="">
            	</div>
			<!-- fourth row -->
			<div class="row commonbutton">
			<div class="col-md-4">
            <input type="submit" name="" value=" " class="" disabled>
            </div>
			<div class="col-md-4">
                	<input type="submit" name="" value="0" class="">
                </div>
                <div class="col-md-4">
                	<input type="submit" name="" value="K" class="">
                </div>
			</div>
        </div> 
        <div class="row commonbutton">
            <div class="col-md-12">
            	<div class="row">
                	<div class="col-md-6">
                		<input type="submit" name="" value="Borrar" id="del">
                	</div>
                	<div class="col-md-6">
                		<input type="submit" name="" value="Aceptar" id="aceptar">
                	</div>
            </div>
            </div> 
        </div> 
        </div>
    </div>
    </div>
</body>
</html>
