<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home | Codeigniter Forum Libray v1</title>
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
			<table border="1">
				<caption valign="center">LIST OF TOPICS</caption>
				<a href="<?php echo site_url('welcome/addtopic'); ?>" title="">Add a new Topic</a>
				<thead>
					<tr>
						<th>Topics</th>
						<th>Description</th>
						<th>Comments</th>
					</tr>
				</thead>
				<tbody>
				 <?php foreach ($subjects as $subject) { ?>
					<tr>
						<td><?php echo $subject['lib_subject']; ?></td>
						<td><?php echo $subject['desc_subject']; ?></td>
						<td>
							<a href="<?php echo base_url(); ?>index.php/welcome/deletetopic/<?php echo $subject['id_subject']; ?>" title="" onClick="javascript:if(window.confirm('Do yu want to delete ths topic ?')){window.location.href='<?php echo base_url('welcome') ; ?>'; return true;} else {return false;}">
								<h5>Delete topic</h5>
							</a>

							<a href="index.php/welcome/viewcomment/<?php echo $subject['id_subject']; ?>" title=""><h5>View comments(<?php echo $subject['number_comment']; ?>)</h5></a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			
		</div>

	</div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by  Arnold KOUYA Developer PHP Backend -- Codeigniter Forum Libray v1
	</div>

</body>
</html>