<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php 
    include ("checkSession.php");
    $ip = '10.129.169.229';
    $port = 8000;
    $path = '/carrier/gateway/vivo/css/pdv';
    $url = 'http://'.$ip.':'.$port.$path;   //http://10.129.169.229:8000/carrier/gateway/vivo/css/pdv

    $msisdn = 11985583823;
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="pt-BR" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>PDV Simulator</title>

        <? //icon  ?>
        <link rel="shortcut icon" href="img/vivo-dock.ico"type="image/x-icon"/>
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAO3Bi6Xuw5CUUgAAAdeRSgAAAAAAAAAAAAAAAAAAAAAAAAAAAP///wEAAAAAAAAAAAAAAAAAAAAAewAAAOa9lVzzw3z/8rtk/9+fYbIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD9+fYBAAAAAOGxiS4AAAAA2Y9OAAAAAADlqF+34YkU/9t9Df/Jg1HcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPTRp632y4//77t60OGody8AAAAA4JM0/9FoAP/fk03/qEwPhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADzzJr966hN/+OSJv/ehRf/24gw59Z2Ff/IXAH/145V/4AsBCb28OwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA57mWN96SPvXadwT/1HAF/81kBf/IXQX/yV8H/8ZzMugAAAAAAAAAAAAAAADNDwAAAAAAAAAAAAAAAAAA////AWMAAAAAAAAA1ZNegtN6Kv/IXQT+yF4G/8hdBf/OcCDn0nklxdBzHvrRbxf/0oxWJ7AAAAAAAAAAAAAAAP///wEAAAAA+vj0AAAAAADOs8AOz2wW/8heBv/IXgb/yF0F/8ddBf/IXgb/y18A/9uMRM0AAAAAAAAAAAAAAAD///8BAAAAAOCTUQAAAAAA4JNEt9RxDv/IXgb/yF4G/8heBv/UfjT/14I0/9mKRP/Tfza9AAAAAAAAAAAAAAAA////AQAAAADbpH8b5p9J7d1+B//UbgT/zWMA/8thB//Xgjf/x2IRt8BQAGLFZxY4AAAAAMVsLQAAAAAAAAAAAP///wEAAAAA56tkj+mgL//omSP/67Bk/9iMT//Qagn/ymAE/9BvGv/RdimbAAAAAL2FZgAAAAAAAAAAAAAAAAD///8BAAAAAOu8iBzxwX7/67R4/8xyJ8rnp13F234Q/9NuBf/Ragb/0GoF/8JjGpwAAAAAAAAAAAAAAAAAAAAA////AQAAAAD//9AAOwAAAcdnG0wAAAAA8L16/+ulOP/pnzH/5JEc/91+B//MZgv/AAAAAAAAAAAAAAAAAAAAAP///wEAAAAAAAAAAAAAAAAAAAAAAAAAAPTKjPf0xHj/9cV5//PAcP/sqUD/1II//AAAAAAAAAAAAAAAAAAAAAD///8BAAAAAAAAAAAAAAAAAAAAAAAAAAD106Ji99KU//fQjv/30I7/7cCP/8FgG34AAAAAAAAAAAAAAAAAAAAA////AQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPLVuzfvyKCt57J9wdaLSGYAAAAA+fHpAAAAAAAAAAAA/z8AAP8fAAD+HwAAxh8AAMA/AADgPwAA8AcAAPwDAAD4AwAA8B8AAOAPAADwBwAA/gcAAP4HAAD/DwAA/58AAA==" rel="icon" type="image/x-icon" />

        <? //css  ?> 
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:light&v1' rel='stylesheet' type='text/css' />

        <? //js  ?>
        <script type="text/javascript" src="js/simulator.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>   
        <script>
              inputFocus('<? echo $msg_selected; ?>');
              //inputFocus("msg);
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" style="position: relative;">
                <!-- fixed divs--> 
                <div class="wallpaper" style="position: absolute; z-index: -1;"></div>
                <div class="clear"></div>
                <div class="fixedkeyboard">
                    <div class="innerfixedkeyboard"></div>
                    <div class="numerickeyboard">
                        <table style="margin-top: 4px;">
                            <tr>
                                <td><button class="bt1" onclick="writeNumber('1', '<?echo $msg_selected; ?>')"></button></td>
                                <td><button class="bt2" onclick="writeNumber('2', '<?echo $msg_selected; ?>')"></button></td>
                                <td><button class="bt3" onclick="writeNumber('3', '<?echo $msg_selected; ?>')"></button></td>
                            </tr>
                            <tr>
                                <td><button class="bt4" onclick="writeNumber('4', '<?echo $msg_selected; ?>')"></button></td>
                                <td><button class="bt5" onclick="writeNumber('5', '<?echo $msg_selected; ?>')"></button></td>
                                <td><button class="bt6" onclick="writeNumber('6', '<?echo $msg_selected; ?>')"></button></td>
                            </tr>
                            <tr>
                                <td><button class="bt7" onclick="writeNumber('7', '<?echo $msg_selected; ?>')"></button></td>
                                <td><button class="bt8" onclick="writeNumber('8', '<?echo $msg_selected; ?>')"></button></td>
                                <td><button class="bt9" onclick="writeNumber('9', '<?echo $msg_selected; ?>')"></button></td>
                            </tr>
                            <tr>
                                <td><button class="btasterisk" onclick="writeNumber('*', '<?echo $msg_selected; ?>')"></button></td>                                
                                <td><button class="bt0" onclick="writeNumber('0', '<?echo $msg_selected; ?>')"></button></td>
                                <td><button class="bthash" onclick="writeNumber('#', '<?echo $msg_selected; ?>')"></button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="sendrow">
                        <table style="margin-top: 4px;">
                            <tr>
                                <td><button class="btback" onclick="writeNumber('-1', '<?echo $msg_selected; ?>')"></button></td>
                            </tr>
                            <tr>
                                <td><button class="btsend" onclick="saveValue('<?echo $msg_selected; ?>','<?echo $div_to_show; ?>','<?echo $div_to_hide; ?>')"></button></td>
                            </tr>
                            <tr>
                                <td><button class="btfind" disabled></button></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- tablet top-->             
                <div class="row">
                    <div class="col-xs-1 cornertopleft"></div>
                    <div class="col-xs-4 bordertop"></div>
                    <div class="webcam"></div>
                    <div class="col-xs-4 bordertop"></div>
                    <div class="col-xs-1 cornertopright"></div>
                </div>
                <div class="clear"></div>
                <!-- tablet side buttons-->        
                <div class="row" style="position: relative;">
                    <div class="col-xs-1 buttonleft"></div>
                    <div class="col-xs-10 emptydiv" style="position: relative;">
                        <!-- START DIV DEALER-->
                        <div class="dealer" id="dealer" style="display: <? if($div_to_show == 'dealer'){echo 'block';} else {echo 'none';} ?>;">
                            <form action = "" method = "post">
                                <input type = "text" name = "msg" id="msg1" size = "10" onfocus="this.value = this.value;" autofocus value="*214#">
                            </form>
                        </div>
                        <!-- START DIV USSD-->
                        <div class="ussdinterface" id="ussdinterface" style="display: <? if($div_to_show == 'ussdinterface'){echo 'block';} else {echo 'none';} ?>;">
                            <div class="ussdbody">
                                <?php                     
                        
                                    if (isset($_POST['msg'])){    
                                        $xml = '<?xml version=\"1.0\" encoding=\"utf-8\" ?>
                                                    <css>
                                                        <sessionId>'.$_SESSION["sessionId"].'</sessionId>
                                                        <channel>USSD</channel>
                                                        <serviceType>MO</serviceType>
                                                        <msisdn>'.$msisdn.'</msisdn>
                                                        <userType>POS</userType>
                                                        <msg>'.$msg.'</msg>
                                                    </css>';
                                        
                                        $command = 'curl -d "'.$xml.'" '.$url;

                                        $output = shell_exec($command);
                                        $decoded = urldecode($output); 
                                        $start_pos = strpos($decoded, '<msg>') + 5;
                                        $end_pos = strpos($decoded, '</msg>');
                                        $message = substr($decoded, $start_pos, ($end_pos - $start_pos));
                                        echo "<pre>"; printf($message); echo"</pre>";
                                    }
                                ?>
                            </div>
                            <div style="margin-bottom: 30px;">   
                                <form action = "" method = "post">
                                    <input type = "text" name = "msg" id="msg2" size = "10" onfocus="this.value = this.value;" autofocus value="">
                                </form>
                            </div>
                            <div class="ussdbottom">
                                <button class="btcancel" onclick="cancel()"></button>
                                <button class="btsendussd" onclick="saveValue('<?echo $msg_selected; ?>')"></button>    
                            </div> 
                        </div> 
                        <!-- END DIV USSD-->
                    </div>
                    <div class="col-xs-1 buttonright"></div>
                </div>
                <div class="clear"></div>
                <!-- tablet side gradient-->        
                <div class="row">
                    <div class="col-xs-1 degradeleft"></div>
                    <div class="col-xs-10 emptydiv"></div>
                    <div class="col-xs-1 degraderight"></div>
                </div>
                <div class="clear"></div>
                <!-- tablet side border-->    
                <div class="row">
                    <div class="col-xs-1 borderleft"></div>
                    <div class="col-xs-10 emptydiv"></div>
                    <div class="col-xs-1 borderright"></div>
                </div>
                <div class="clear"></div>
                <div class="row">
                    <div class="col-xs-1 cornerbottomleft"></div>
                    <div class="col-xs-3 borderbottom"></div>
                    <div class="buttonsbottom"></div>
                    <div class="col-xs-3 borderbottom"></div>
                    <div class="col-xs-1 cornerbottomright"></div>
                </div>
                <div class="row">
                    <footer class="footer">
                        <div class="container">
                            <p class="text-muted">
                                &copy; 
                                <?php 
                                    $fromYear = 2015; 
                                    $thisYear = (int)date('Y'); 
                                    echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
                                 ?> 
                                 Ericsson Inovação.    Developed By: Edivaldo Mascarenhas Jr.
                            </p>
                        </div>
                    </footer>            
                </div>
            </div>
        </div>
    </body>
</html>
