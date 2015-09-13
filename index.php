
<!doctype html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>#myform {
    text-align: center;
    padding: 5px;
    border: 1px dotted #ccc;
    margin: 2%;
}
.qty {
    width: 40px;
    height: 25px;
    text-align: center;
}
input.qtyplus { width:25px; height:25px;}
input.qtyminus { width:25px; height:25px;}</style>
    <title>1E-shop - OnePage one product shop</title>
    <meta charset="utf-8">
    <meta name="description" content="1E-shop - Bootstrap Theme from angelostudio.net">
    <meta name="author" content="ANGELOSTUDIO.NET">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/yellow.css" class="colors">
    <link rel="shortcut icon" href="img/ico/32.png" sizes="32x32" type="image/png" />
    <link rel="apple-touch-icon-precomposed" href="img/ico/60.png" type="image/png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/72.png" type="image/png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/ico/120.png" type="image/png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/ico/152.png" type="image/png" />
    <script type="text/javascript" src="js/modernizr.min.js"></script>
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<script>jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});
</script>
<body id="home">
    <a id="menu-link" href="#" class="">
        <span class="menu-icon"></span>
    </a>
    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <ul>
                <li><a href="#home" class="smooth-scroll">Home</a></li>
                <li><a href="#start" class="smooth-scroll">About product</a></li>
                <li><a href="#showcase" class="smooth-scroll">Showcase</a></li>
                <li><a href="#requirements" class="smooth-scroll">Requirements</a></li>
                <li><a href="#features" class="smooth-scroll">Features</a></li>
                <li><a href="#contact" class="smooth-scroll">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div id="wrap">
        <section id="hero" class="m-center text-center bg-shop full-height">
            <div class="center-box">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="hero-unit ">
                                <h1 class="title"><b>Uniclever</b></h1>
                                <h3><!--<b>OnePage / OneProduct / OneTemplate</b>--></h3>  
                                <p><br>
                               One clever answer for all dirty questions.<br>
                               <!-- <b>1E-shop</b> is onePage full responsive bootstrap template.<br>-->
                                </p>
                                <br>
                                <a class="btn white" href="#" data-toggle="modal" data-target="#product-modal"><!--<b>$5</b>--> Create my box</a>
                            </div>
                        </div>  
                       <img src="img/logo.png" alt="#" class="zoom-img img-responsive center-block">
                    
                    </div>
                </div>
                <a href="#requirements1" class="hero-start-link smooth-scroll anchor-link"><i class="fa fa-angle-double-down"></i></span></a>
            </div>
        </section>
    
    
           <section id="requirements1" class="padding-top-bottom text-center">
          <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 anima">
                            <article class="text-center">
                                <img src="img/AibKGkpbT.png" alt="#" class="zoom-img img-responsive center-block">
                                <h3>Individual</h3>
                                <!--<p>Nodal point courier towards decay dome advert wonton soup chrome voodoo.</p>-->
                            </article>
                        </div>                       
                        <div class="col-md-4 col-sm-4 col-xs-12 anima scale-in d1 in">
                            <article class="text-center">   
                                <img src="img/couple-copy-14156165104g8nk.png" alt="#" class="zoom-img img-responsive center-block">
                                <h3>Couple</h3>
                              <!--  <p>Table plastic concrete silent nano-dome industrial grade. Hotdog marketing.</p>-->
                            </article>
                        </div>             
                        <div class="col-md-4 col-sm-4 col-xs-12 anima scale-in d2 in">
                            <article class="text-center">   
                                <img src="img/32441.png" alt="#" class="zoom-img img-responsive center-block">
                                <h3>Family</h3>
                               <!-- <p>Grenade wonton soup faded disposable dome cardboard spook refrigerator dolphin.</p>-->
                            </article>
                        </div>
                    </div>             
                </div>
               <div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
               <p></p>
              
               
                <a href="#start" class="hero-start-link smooth-scroll anchor-link"><i class="fa fa-angle-double-down"></i></span></a>
        </section>
    
    
        <section id="start" class="padding-top-bottom text-center">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>Contents Of Your Box</h2>
             
                         <!--<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
</style>-->

                    </div>
                </div>
            
           
           <?php    $conn = new mysqli(localhost, root, root, uniclever);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                // define the sql/stored procedure and return records
                $sql = "CALL usp_get_template_box();";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                   $rowNum = 0;
                   while($row = $result->fetch_assoc()) {
                       $rowNum+=1;
                       if ($rowNum==1) {
                           echo " 
                        <div class='shoes'> 
		<div class='container'><div class='product-one'><div class='item active item-player'><div class='row' style='margin-right:-5px;''>";
                       } elseif ($rowNum%4==1) {
                           echo "<div class='item item-player'><div class='row' style='margin-right:-5px;''>";
                       }
                       $fil="img/players/" . $row["template_box_item_id"];
                       if (file_exists($fil) != true) $fil = "img/players/player_blank.jpeg";
                       echo "<!--<div class='col-xs-3'>
                               <a href='#x'><img src='" . $fil . "' alt='" . $row["product_id"] . "' class='img-responsive'></a>
                               </div>-->
                           
                           
                           <div class='col-md-3 product-left'> 
					<div class='p-one simpleCart_shelfItem'>							
							<a href='single.html'>
								<img src='img/products/product" . $row["product_id"] . ".jpg' alt=''>
								<div class='mask'>
									<span>Quick View</span>
								</div>
							</a>
						<h4>" . $row["prod_name_short"] . "</h4>
						<p><a class='item_add' href='#'><i></i> <span class=' item_price'>£" . $row["unit_price"] . "</span></a></p>
                         <form id='myform' method='POST' action='#'>
    <input type='button' value='-' class='qtyminus' field='quantity" . $row["product_id"] . "' />
    <input type='text' name='quantity" . $row["product_id"] . "' value='0' class='qty' />
    <input type='button' value='+' class='qtyplus' field='quantity" . $row["product_id"] . "' />
</form>
					
					</div>
				</div>
                           
                           
                           ";
                       if ($rowNum%4==0 or $rowNum==$result->num_rows) echo "</div><!--/row--></div><!--/item-->";
                       
                  ?>
                 <?php 
                       
                        }
               
                } else {
                    echo "No recent table";
                }
                       
                       $conn->close();?>
          <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- vertical center / slider -->
        <section id="showcase" class="">
            <div class="container-fluid">
                <div class="row">
                  <form id="contact-form" action="sendemail.php" class="myform" method="post" novalidate>
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <div class="controls">
                                            <input name="contactName" placeholder="Your name" class="form-control input-lg requiredField" type="text" data-error-empty="Enter name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="contact-mail">Email</label>
                                        <div class=" controls">
                                            <input name="email" placeholder="Your email" class="form-control input-lg requiredField" type="email" data-error-invalid="Invalid email address" data-error-empty="Enter email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="contact-message">Message</label>
                                <div class="controls">
                                    <textarea name="comments" placeholder="Your message" class="form-control input-lg requiredField" rows="5" data-error-empty="Enter message"></textarea>
                                </div>
                            </div>
                            <p>
                                <button name="submit" type="submit" class="btn btn-store btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Email Sent">Send Message</button>
                            </p>
                            <input type="hidden" name="submitted" id="submitted3" value="true">
                        </form>
                </div>
            </div>
        </section>
        <!-- end vertical center / slider -->
        <section id="requirements" class="padding-top-bottom bg-clouds text-center">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>Requirements</h2>
                        <p>Adobe Photoshop CS4+</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="img/ps.png" alt="#" class="img-responsive center-block" width="200" height="200">
                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="features-1">
            <div class="container padding-top-bottom">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>Features</h2>
                        <p>We are here for you</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 anima scale-in ">
                            <article class="text-center">
                                <img src="img/demo1.jpg" alt="#" class="zoom-img img-responsive center-block">
                                <h3>​ORGANISED LAYERS</h3>
                                <p>Nodal point courier towards decay dome advert wonton soup chrome voodoo.</p>
                            </article>
                        </div>                       
                        <div class="col-md-4 col-sm-4 col-xs-12 anima scale-in d1">
                            <article class="text-center">   
                                <img src="img/demo2.jpg" alt="#" class="zoom-img img-responsive center-block">
                                <h3>​SMART OBJECT</h3>
                                <p>Table plastic concrete silent nano-dome industrial grade. Hotdog marketing.</p>
                            </article>
                        </div>             
                        <div class="col-md-4 col-sm-4 col-xs-12 anima scale-in d2">
                            <article class="text-center">   
                                <img src="img/demo3.jpg" alt="#" class="zoom-img img-responsive center-block">
                                <h3>TRANSPARENT BG</h3>
                                <p>Grenade wonton soup faded disposable dome cardboard spook refrigerator dolphin.</p>
                            </article>
                        </div>
                    </div>             
                </div>
            </div>  
        </section>

        <section class="cta-1 bg-dark padding-top-bottom text-center white-text">
            <div class="container-fluid anima scale-in">
                <div class="row">
                    <div class="col-sm-12">
                        <span>​Do you like PAPER CUP - Mockup? </span>
                        <a class="btn" href="#" data-toggle="modal" data-target="#product-modal"><b>$5</b> Buy now</a>
                    </div>  
                </div>
            </div>
        </section>  
        <section id="news" class="content-1 bg-image-2 padding-top-bottom bg-shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <div class="white-box">
                            <h2><b>NICE Product :)</b></h2>
                            <p>Scelerisque pulvinar praesent ultrices, amet condimentum wisi felis et. At lobortis risus ipsum praesent urna. Metus lectus duis porttitor. Tellus debitis suspendisse feugiat, non tellus in sed luctus lacus rutrum, iaculis at risus cras vel sit, qui morbi lacus, ultricies semper. Odio ac, diam donec. Tincidunt cursus vel nulla tincidunt, vitae ut tempor ut orci tortor mi</p>
                            <blockquote class="blockquote-reverse">
                                <p>Jessica Red</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="facts" class="numbers-1 padding-top-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="numbers-item">
                            <h2 class="counter">367</h2>
                            <h4>Purchases</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="numbers-item">
                            <h2><span class="counter">99.1</span> <span>%</span></h2>
                            <h4>User Ratings</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="numbers-item">
                            <h2><span class="counter">17</span> <span>k</span></h2>
                            <h4>Followers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-1 bg-shop padding-top-bottom text-center ">
            <div class="container-fluid anima scale-in">
                <span>​Email for a custom and/or unlimited license.</span>
                <a class="btn dark" href="#" data-toggle="modal" data-target=".text-modal">Mock-up License</a>
            </div>
        </section>
        <section id="contact" class=" padding-top-bottom">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>Contact me</h2>
                        <p>For any questions fill in the form below & we'll get back to you ASAP!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 contact-info">
                        <div id="alert-contact">
                            <div class="alert alert-success" role="alert"><strong>Your message has been sent.</strong></div>
                        </div>
                        <form id="contact-form" action="sendemail.php" class="myform" method="post" novalidate>
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <div class="controls">
                                            <input name="contactName" placeholder="Your name" class="form-control input-lg requiredField" type="text" data-error-empty="Enter name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="contact-mail">Email</label>
                                        <div class=" controls">
                                            <input name="email" placeholder="Your email" class="form-control input-lg requiredField" type="email" data-error-invalid="Invalid email address" data-error-empty="Enter email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="contact-message">Message</label>
                                <div class="controls">
                                    <textarea name="comments" placeholder="Your message" class="form-control input-lg requiredField" rows="5" data-error-empty="Enter message"></textarea>
                                </div>
                            </div>
                            <p>
                                <button name="submit" type="submit" class="btn btn-store btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Email Sent">Send Message</button>
                            </p>
                            <input type="hidden" name="submitted" id="submitted3" value="true">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-1 text-center">
            <div class="container-fluid">
                <a href="#home" class="back-to-top smooth-scroll"><i class="fa fa-chevron-up"></i></a>
                <p>Made with <i class="fa fa-heart color-text"></i> by <a href="http://demo.angelostudio.net">ANGELO Studio</a>.</p>
                <ul class="social-links-2 ">
                    <li><a href="https://twitter.com/angelo_studio"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://dribbble.com/angelo_studio"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="https://vimeo.com/user10293733"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </section>
        <div class="modal fade text-modal" id="text-modal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
            <div class="modal-dialog modal-sm2">
                <div class="modal-content">
                    <div class="modal-header bg-shop">
                        <a class="close-modal" href="#" data-dismiss="modal">
                            <span class="menu-icon"></span>
                        </a>
                        <h2 class=""><b>License</b></h2>
                    </div>
                    <div class="modal-body">
                        <p>In order to simplify the legal terms, here are the rules of the game written in plain English, that you are obliged to follow when using the digital goods at 1E-shop.</p>
                        <p>
                            <br><strong>You are free to…</strong>
                        </p>
                        <ul>
                            <li>Use the digital goods in a website for yourself or a client for personal, open-source or commercial use.</li>
                            <li>Use the digital goods to create an icon for your app or button icons.</li>
                            <li>Use the digital goods to create a logo or other brand material.</li>
                        </ul>
                        <p>
                            <br><strong>You are forbidden to…</strong>
                        </p>
                        <ul>
                            <li>Re-sell the digital goods, host the digital goods or rent the digital goods (either in existing or modiﬁed form).</li>
                            <li>Include the digital goods with a website offered for sale or distributed for free.</li>
                            <li>Convert the digital goods to a theme to sell or distribute for free.</li>
                        </ul>
                        <br>
                        <p>While attribution is optional, it is always appreciated. Intellectual property rights are not transferred with the download of the icons.</p>
                        <p>Should you happen to lost the purchased good, let me know the email you've used upon your purchase, and I will provide you with the new files.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
            <div class="modal-dialog modal-sm2">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="close-modal" href="#" data-dismiss="modal">
                            <span class="menu-icon"></span>
                        </a>
                        <img src="img/cup1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="modal-body">
                        <h3 class="text-center"><b>PaperCup - Mockup </b>($5,00)</h3>
                        
                        
                    </div>
                    
                    <div><form id='myform' method='POST' action='#'>
    <input type='button' value='-' class='qtyminus' field='quantity' />
    <input type='text' name='quantity' value='0' class='qty' />
    <input type='button' value='+' class='qtyplus' field='quantity' />
</form></div>
                    <div class="modal-footer">
                        <form id="buy" action="buy" class="myform" method="post" novalidate>
                            <div class="form-group">
                                <label class="control-label" for="contact-mail">Email</label>
                                <div class=" controls">
                                    <input name="email" placeholder="PayPal Email" class="form-control input-lg requiredField" type="email" data-error-invalid="Invalid email address" data-error-empty="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">password</label>
                                <div class="controls">
                                    <input id="password" class="form-control" type="password" placeholder="PayPal Password" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-block">PAY NOW</button>
                            </div>
                            <p class="text-center"><a href="" data-dismiss="modal">Cancel</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <!-- <section id="style-switcher">
            <h2>Colors <a href="#"><i class="fa fa-tint"></i></a></h2>
            <ul>
                <li id="yellow"></li>
                <li id="purple"></li>
                <li id="turquoise"></li>
            </ul>
        </section>-->
    </div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script type="text/javascript" src="js/placeholders.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.waitforimages.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/main.min.js"></script>
    <script type="text/javascript" src="js/ga.js"></script>
</body>

</html>
