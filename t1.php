<?php
echo '
<html>
	<head>
		<style type="text/css">
			body
			{
			  background-color: #F0F0F0;
			}
			#title
			{
			  text-align:center;
			  font-size:24px;
			}
			#menu
			{
			  text-align:center;
			  background-color:#E0E0E0;
			}
			a:visited
			{
			  color:#000000;
			  text-decoration:none;
			}
			a:link
			{
			  text-decoration:none;
			  color:#000000;
			}
			a:hover
			{
			  text-decoration:underline;
			  color:#000099;
			  font-style:italic;
			}
			.ctitle
			{
			  color:#26869C;
			  padding:6px 6px 6px 20px;
			  margin:10px 25px 0px 25px;
			  background-color:#C0C0C0;
			  font-style:bold, italic;
			  font-size:16;
			}
			.content
			{
			  padding:12px 6px 6px 12px;
			  margin:0px 25px 0px 25px;
			  background-color:#D8D8D8;
			  font-size:14;
			}
		</style>
		<script type="text/javascript">
				function test()
				{
				  alert("Hello world!");
				}
		</script>
		<title>Hello World</title>
	</head>
	<body>
		<div id="title">
			Hello World! This is my first HTML web page ( Well, not really :) )
		</div>
		<hr>
		<div id="menu">
			<a href="http://www.google.ro">Google</a>&nbsp|&nbsp
			<a href="https://www.facebook.com/groups/257474547610411/">Facebook group</a>&nbsp|&nbsp
			<a href="http://youtube.com">Youtube</a>
		</div>
		<hr>
		<div class="ctitle">
			Am folosit cateva tag-uri...
		</div>
		<div class="content">
			<h3>Tabel</h3>
			<table border>
				<tr>
					<th>Celula 1</th> <th>Celula 2</th> <th>Celula 3</th>
				<tr>
					<td>Celula 4</td> <td>Celula 5</td> <td>Celula 6</td>
			</table>
			<br>
			<h3>Liste</h3>
			<ul>De cumparat
				<li>Banane</li>
				<li>Bomboane</li>
				<li>Suruburi</li>
			</ul>
			<br>
			<p><b>HTML</b> este <i>interesant</i>.</p>
			
			<h3>JavaScript</h3>
			<input type="button" value="Click" onclick="test()">
		</div>
	</body>
</html>';
?>