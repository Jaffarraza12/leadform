
<?php  require ('config/connection.php');
require ('model/user.php');
$user = new  user($con);?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>International Intitute For Journalisim</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="header">
        <div class="header-inner">
            <div class="logo" >
                <a href="https://internationalinstituteforjournalism.com/"><img src="img/logo2.png" alt=""></a>
                <div class="social">
                    <a href="#"> <img src="img/mob-01.png" alt=""> 0313-3250191 </a><br/>
                    <a href="#"> <img src="img/mob-01.png" alt=""> 03133250181</a>
                </div>
            </div>
            <div style="position:absolute;width: 200px;top:30px;left:400px;  background-color: white;background: transparent;
}

">
                <h2>www.iifj.pk</h2>
            </div>


        </div>
    </div>
</header>
<section>
    <table border="1" cellpadding="2" cellspacing="2" style="width: 100%">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Location</th>
            <th>Register Date and Time</th>
        </tr>

            <?php foreach ($user->getall() as $row ){

            echo '<tr>';
            echo '<td>'.$row->name.'</td>';
            echo '<td>'.$row->email.'</td>';
            echo '<td>'.$row->gender.'</td>';
            echo '<td>'.$row->phone.'</td>';
            echo '<td>'.$row->location.'</td>';
            echo '<td>'.$row->sts.'</td>';
                echo '</tr>';
            }?>




        </tr>
    </table>
</section>




<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+923113250191", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
</body>
</html>