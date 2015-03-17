<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add Topic | Codeigniter Forum Libray v1</title>
	<style type="text/css">
	body{
	}
	#cadre{
		margin: 0px auto 0px auto;
		width:900px;
		height:auto;
	}
	#header{
		margin: 0px auto 0px auto;
		width:900px;
		height:100px;
		background-color: blue;

	}
	h1{
		color:#fff;
		text-align: center;
		text-transform: uppercase;
		padding: 30px 0 0 0;
	}
	#subject{
		margin: 30px auto 0px auto;
	}
	a{
		text-decoration: none;
	}
	a:hover{
		font-weight: bold;
	}
	#footer{
		width: 100%;
  height: 30px;
  background: #FFF;
  position: fixed;
  left: 0;
  bottom: 0;
  right: 0;
  border: 1px dotted #B7C1CC;
  text-align: center;
  line-height: 30px;
  font-size: 11px;
  color: #555;
	}


		
	</style>
</head>
<body>
	
	<div id="cadre">
		<div id="header">
			<h1>Codeigniter Forum Library </h1>
		</div>

		<div id="subject">
			<h3>Add a new Topic</h3>
			<form action="insert_topic" method="POST" accept-charset="utf-8">
							<label for="">The title</label><br>
						<input type="text" name="lib" value="" placeholder="Enter the topic title"><br>						
						<label for="">Descritpion</label><br>
						<textarea name="desc" row="50" placeholder="Enter the description"></textarea><br>
						<font color="red"><?php echo validation_errors(); ?></font>
						<input type="submit" name="add" value="Add">
			</form>			
		</div>
	</div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by  Arnold KOUYA Developer PHP Backend -- Codeigniter Forum Libray v1
	</div>

</body>
</html>