<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PDV Simulator</title>
        <? //icon  ?>
        <link rel="shortcut icon" href="img/vivo-dock.ico"type="image/x-icon"/>
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAO3Bi6Xuw5CUUgAAAdeRSgAAAAAAAAAAAAAAAAAAAAAAAAAAAP///wEAAAAAAAAAAAAAAAAAAAAAewAAAOa9lVzzw3z/8rtk/9+fYbIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD9+fYBAAAAAOGxiS4AAAAA2Y9OAAAAAADlqF+34YkU/9t9Df/Jg1HcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPTRp632y4//77t60OGody8AAAAA4JM0/9FoAP/fk03/qEwPhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADzzJr966hN/+OSJv/ehRf/24gw59Z2Ff/IXAH/145V/4AsBCb28OwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA57mWN96SPvXadwT/1HAF/81kBf/IXQX/yV8H/8ZzMugAAAAAAAAAAAAAAADNDwAAAAAAAAAAAAAAAAAA////AWMAAAAAAAAA1ZNegtN6Kv/IXQT+yF4G/8hdBf/OcCDn0nklxdBzHvrRbxf/0oxWJ7AAAAAAAAAAAAAAAP///wEAAAAA+vj0AAAAAADOs8AOz2wW/8heBv/IXgb/yF0F/8ddBf/IXgb/y18A/9uMRM0AAAAAAAAAAAAAAAD///8BAAAAAOCTUQAAAAAA4JNEt9RxDv/IXgb/yF4G/8heBv/UfjT/14I0/9mKRP/Tfza9AAAAAAAAAAAAAAAA////AQAAAADbpH8b5p9J7d1+B//UbgT/zWMA/8thB//Xgjf/x2IRt8BQAGLFZxY4AAAAAMVsLQAAAAAAAAAAAP///wEAAAAA56tkj+mgL//omSP/67Bk/9iMT//Qagn/ymAE/9BvGv/RdimbAAAAAL2FZgAAAAAAAAAAAAAAAAD///8BAAAAAOu8iBzxwX7/67R4/8xyJ8rnp13F234Q/9NuBf/Ragb/0GoF/8JjGpwAAAAAAAAAAAAAAAAAAAAA////AQAAAAD//9AAOwAAAcdnG0wAAAAA8L16/+ulOP/pnzH/5JEc/91+B//MZgv/AAAAAAAAAAAAAAAAAAAAAP///wEAAAAAAAAAAAAAAAAAAAAAAAAAAPTKjPf0xHj/9cV5//PAcP/sqUD/1II//AAAAAAAAAAAAAAAAAAAAAD///8BAAAAAAAAAAAAAAAAAAAAAAAAAAD106Ji99KU//fQjv/30I7/7cCP/8FgG34AAAAAAAAAAAAAAAAAAAAA////AQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPLVuzfvyKCt57J9wdaLSGYAAAAA+fHpAAAAAAAAAAAA/z8AAP8fAAD+HwAAxh8AAMA/AADgPwAA8AcAAPwDAAD4AwAA8B8AAOAPAADwBwAA/gcAAP4HAAD/DwAA/58AAA==" rel="icon" type="image/x-icon" />
        <? //css  ?> 
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:light&v1' rel='stylesheet' type='text/css'>
        <? //js  ?>
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
                   //echo 'msg is setted'; 	
                } else {
                   //echo 'msg is NOT setted';  
                   $msg =  '*214#';
                }	
                     //  echo 'msg'; echo $msg;
                $command = 'curl -d "<?xml version=\"1.0\" encoding=\"utf-8\" ?><css><sessionId>'.$_SESSION["sessionId"].'</sessionId><channel>USSD</channel><serviceType>MO</serviceType><msisdn>1185583823</msisdn><userType>POS</userType><msg>'.$msg.'</msg></css>" http://10.129.169.229:8000/carrier/gateway/vivo/css/pdv';
		$output = shell_exec($command);
		/*echo "<pre>$output</pre>";*/
		//$better_token = rand(1 , 9999);
		//$GLOBALS["sessionId"] = rand(1 , 9999);
	
		//echo "sessionId:";	
		//echo $_SESSION["sessionId"];
		//print_r($_SESSION);
		$decoded = urldecode($output);
		$start_pos = strpos($decoded, '<msg>') + 5;
		$end_pos = strpos($decoded, '</msg>');
		$message = substr($decoded, $start_pos, ($end_pos - $start_pos));
		echo "<pre style='width: 260px; height: 112px;'>"; printf($message); echo"</pre>";
            ?>
            <form action = "index.php" method = "post">
                <input type = "text" name = "msg" size = "10">
                <input type = "submit" value = "Send">	
            </form>
        </div>
    </body>
</html>
