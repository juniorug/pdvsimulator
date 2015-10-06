<html>
 <head>
  <title>PHP Teste</title>
 </head>
 <body background="img/background2.png" background-repeat="no-repeat" style="background-repeat: no-repeat;">
    <div class="content">
 <?php 
	if (!isset($_SESSION)) { session_start(); }
	if( !isset($_SESSION["sessionId"]) ) {
	    $_SESSION["sessionId"] = 1;
	} else if( (isset($_POST['msg'])) && ($_POST['msg'] ==  '*214#')){
	    $_SESSION["sessionId"] = $_SESSION["sessionId"] + 1;	
	}
	//variaveis
	if (isset($_POST['msg'])){
	   $msg = $_POST['msg'];
	   //echo 'msg'; echo $msg;	
	} else {
	   $msg =  '*214#';
	}	
	$command = 'curl -d "<?xml version=\"1.0\" encoding=\"utf-8\" ?><css><sessionId>'.$_SESSION["sessionId"].'</sessionId><channel>USSD</channel><serviceType>MO</serviceType><msisdn>1185583823</msisdn><userType>POS</userType><msg>'.$msg.'</msg></css>" http://10.129.169.229:8000/carrier/gateway/vivo/css/pdv';
	$output = shell_exec($command);
	$decoded = urldecode($output);
	$start_pos = strpos($decoded, '<msg>') + 5;
	$end_pos = strpos($decoded, '</msg>');
	$message = substr($decoded, $start_pos, ($end_pos - $start_pos));
	echo "<pre>"; printf($message); echo"</pre>";
	
 ?>
	 <form action = "index.php" method = "post">
	     <input type = "text" name = "msg" size = "10">
	     <input type = "submit" value = "Send">	
	 </form>
    </div>
 </body>
</html>
