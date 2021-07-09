<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/pay.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#FFF8DC;
		padding:50px;
		border:2px ridge black;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:white;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: white;
		font-size:17px;
		font-weight:bold;
		background:black;
	}
	.button:hover{
		background-color:gray;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="dummy1"){
				 var arr=["dummy2","dummy3","dummy4","dummy5","dummy6","dummy7","dummy8","dummy9","dummy10"];
				 }
				 else if(a==="dummy2"){
					var arr=["dummy1","dummy3","dummy4","dummy5","dummy6","dummy7","dummy8","dummy9","dummy10"];
				}
				else if(a==="dummy3"){
					var arr=["dummy1","dummy2","dummy4","dummy5","dummy6","dummy7","dummy8","dummy9","dummy10"];
				}
				else if(a==="dummy4"){
					var arr=["dummy1","dummy2","dummy3","dummy5","dummy6","dummy7","dummy8","dummy9","dummy10"];
				 }
				 else if(a==="dummy5"){
					var arr=["dummy1","dummy2","dummy3","dummy4","dummy6","dummy7","dummy8","dummy9","dummy10"];
				 }
				 else if(a==="dummy6"){
					var arr=["dummy1","dummy2","dummy3","dummy4","dummy5","dummy7","dummy8","dummy9","dummy10"];
				 }
				 else if(a==="dummy7"){
					var arr=["dummy1","dummy2","dummy3","dummy4","dummy5","dummy6","dummy8","dummy9","dummy10"];
				 }
				 else if(a==="dummy8"){
					var arr=["dummy1","dummy2","dummy3","dummy4","dummy5","dummy6","dummy7","dummy9","dummy10"];
				 }
				 else if(a==="dummy9"){
					var arr=["dummy1","dummy2","dummy3","dummy4","dummy5","dummy6","dummy7","dummy8","dummy10"];
				 }
				 else if(a==="dummy10"){
				 var arr=["dummy1","dummy2","dummy3","dummy4","dummy5","dummy6","dummy7","dummy8","dummy9"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:black;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Avinash">dummy1</option>
			<option value="Harshal">dummy2</option>
			<option value="Prathamesh">dummy3</option>
			<option value="Ajay">dummy4</option>
			<option value="Vaishali">dummy5</option>
			<option value="Monika">dummy6</option>
			<option value="Ravina">dummy7</option>
			<option value="Nishant">dummy8</option>
			<option value="Avdhut">dummy9</option>
			<option value="Rushi">dummy10</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='white'"onMouseOut="this.style.color='gray'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button type="button" class="btn btn-outline-dark">Home</button>
	</a>
</div>
</body>
</html>