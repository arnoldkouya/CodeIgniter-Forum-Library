<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Comments | Codeigniter Forum Libray v1</title>
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
			<p>Subject <font color="blue"><?php echo $single_topic['lib_subject']; ?></font></p>
			<p>Description  <?php echo $single_topic['desc_subject']; ?></p>
			<hr>
		<p>List of comments</p>
		  <!--You can make your loop here-->
		    <p style="background-color:#ccc">User name   say :  Message here </p>
          <!--You can make your loop here-->

          <form action="addcoment" method="post" accept-charset="utf-8">
          	<label for="message">Message</label><br>
          	<textarea name="message" rows="5"></textarea><br>
          	<input type="submit" name="add comment" value="comment">
          </form>

			
		</div>
	</div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by  Arnold KOUYA Developer PHP Backend -- Codeigniter Forum Libray v1
	</div>

</body>
</html>