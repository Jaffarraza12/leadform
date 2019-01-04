<?php  require ('config/connection.php');
  if(isset($_POST['save'])){
	  extract($_POST);
	  $data['name'] = $name;
	  $data['email'] = $email;
	  $data['gender'] = $gender;
	  $data['phone'] = $phone;
	  $data['location'] = $location;
	  require ('model/user.php');
	  $user = new  user($con);
	  $validate = $user->validate($data);
	  if($validate=="")
	  {
		  if( $user->save($data)) {
				$success_message = " You have successfully subscribe to OUR LIST";
		  } else {
				$error_message = " There is something wrong ";
		  
		  }
	  } else {
		$error_message = $validate;
	  }
	  
	  
	  
	  
  }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apna Work </title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="header">
        <div class="header-inner">
            <div class="logo">
                <a href="home.html"><img src="img/ultimate%20fitness%20logo.png" alt=""></a>
                <div class="social">
                    <a href="#"> <img src="img/mob-01.png" alt=""> 03-111-222-832 </a>
                </div>
            </div>


        </div>
    </div>
</header>
<section>
    <div class="banner">
        <div class="banner-image">

            <div class="col-md-7">
                <div class="sec1">
                    <div class="left-pannel">
                        <p><img src="img/arrow_06.png" alt=""><span>Burn Stubbrorn Fat and Get Fit</span></p>
                        <p><img src="img/arrow_06.png" alt=""><span>No GYM, No Exercise, No Diet!</span></p>
                        <p><img src="img/arrow_06.png" alt=""><span>Natural, Longer Lasting Results</span></p>
                        <p><img src="img/arrow_06.png" alt=""><span>Tone your body into a sexy shape and exude confidence!</span></p>
                        <p><img src="img/arrow_06.png" alt=""><span>Boost your energy and feel healthier!</span></p>
                        <p><img src="img/arrow_06.png" alt=""><span>Eat, Drink  and Still Shrink with this New and Easy way of Weight Loss</span></p>
                    </div>

                    <img src="img/Arrow_png.png" class="arrow" style="width: 750px; margin-top: 70px" alt="">
                    <img src="img/downarrow1.png" class="downarrow" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class=" sec2">
				    <?php
                       if(isset($success_message)) {
						   echo '<div class="alert alert-success">'.$success_message.'</div>';
						   
					   }
					   
					   if(isset($error_message)) {
						   echo '<div class="alert alert-danger">'.$error_message.'</div>';
						   
					   }
						
					?>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form">
                            <label>Name:</label>
                            <input type="text" name="name" >
                        </div>
                        <div class="form">
                            <label>Email:</label>
                            <input type="email" name="email" >
                        </div>
                        <div class="form">
                            <label>Phone:</label>
                            <input type="tel" name="phone" >
                        </div>
                        <div class="form">
                            <label>Location:</label>
                            <input type="text" name="location" >
                        </div>
                        <div class="form">
                            <label>Gender:</label>
                            <select name="gender">
                                <option value="male">Male</option>
                                <option value="Female">Female</option>
                                <option value="choose your gender" selected="selected">Choose Your Gender</option>
                            </select>
                        </div>
                        <div class="button">
                            <input name="save" type="submit" class="btn-apna"   alt=" ">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<footer>

    <div class="footer">
        <div class="footer-social">
            Follow Us
            <a href="#"><img src="img/social_03.png" alt=""></a>
        </div>
        <div class="right-footer">
            <h1>&copy; Copyright 2018 | All right Reserved.</h1>
            <h2>All content is owned by <a href="#">appertunity.net</a> - Powered by <a href="#">Appertunity</a></h2>
        </div>
    </div>
</footer>


<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+92333 2828005", // WhatsApp number
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