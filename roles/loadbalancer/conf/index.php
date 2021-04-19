<html>
	<head> <title> Httpd Webserver </title> </head>
	<body bgcolor="aqua">
		<h1> Hello guys it's Ansible Automation </h1>
		<h2> Proxy server: </h2>
		<?php
   			$ip = shell_exec("/sbin/ifconfig");
   			echo "<h1><pre>$ip</pre></h1>";
		?>
</body>
</html>
