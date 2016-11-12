<!DOCTYPE html>
<html>
<head>
	<title>MY CHAT TEST</title>
	<script src="test/phpfreechat/client/lib/jquery-1.8.2.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="test/phpfreechat/client/themes/default/pfc.min.css" />
  	<script src="test/phpfreechat/client/pfc.min.js" type="text/javascript"></script>
</head>
<body>
<div id="mychat"></div>
<script type="text/javascript">
  $('#mychat').phpfreechat({ serverUrl: 'test/phpfreechat/server' });
</script>
</body>
</html>