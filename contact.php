<?php
    
    /* Contact form server side validation */
    $error = ""; $successMessage = "";
    
    if ($_POST) {
        
        
        
        if (!$_POST["email"]){
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]){
            
            $error .= "The content is required.<br>";
            
        }
        
        if (!$_POST["subject"]){
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
           
            $error .= "An email address is not valid.<br>";

        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><strong> There are error(s) in your form:</strong><br>' . $error .  '</div>';
            
        } else {
            
            
            $emailTo = "abpainrelief@gmail.com";
            
            $subject =  $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)){
                
                $successMessage = '<div class="alert alert-success" role="alert"><strong> Your message has been sent, we\'ll get back to you soon.  </strong></div>';
                
            } else {
                
                 $error = '<div class="alert alert-danger" role="alert"><strong> Your message couldn\'t be sent.</strong></div>';
                
            }
            
        }
             
    }
      
?>



<!doctype html>

<html lang="en">
  
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
    <link rel="icon" href="images/New-Logo-Hands-Favicon.ico" sizes="32x32" />
    <link rel="icon" href="images/New-Logo-Hands-Favicon.ico" sizes="192x192" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
        
    <script src="https://kit.fontawesome.com/6ed392e20b.js" crossorigin="anonymous"></script>

    <title>Contact</title>           
  
</head>
    
    
<body id="contact-body">
        
    <!--Navigation bar -->  
    <nav class=" fixed-top navbar navbar-expand-lg navbar-dark bg-dark ">
        
        <a class="navbar-brand" href="#"><img  id="logo-navbar" src="images/Transparent-bg300.png" class="img-fluid"></a>
          
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
        </button>    

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Treatments</a>
                    
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                            <a class="dropdown-item" href="kinetic.html">Kinetic Chain Release</a>
                        
                            <a class="dropdown-item" href="myofascial.html">Myofascial Release</a>
                      
                            <a class="dropdown-item" href="thai.html">Thai Massage</a>
                        
                            <a class="dropdown-item" href="holistic.html">Holistic Massage</a>
                    
                      </div>
                </li>
                    
                <li class="nav-item">
                    <a class="nav-link" href="corporate.html">Special Offers</a>
                </li>
                    
                  
                    
                <li class="nav-item">
                    <a class="nav-link" href="about_me.html">About Me</a>
                </li>
                    
                <li class="nav-item active">
                    <a class="nav-link " href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
                </li>    
            </ul>
                  
            <div  id= "appointment" class="row justify-content-center ">
                   
                <ul class="social-network social-circle-2">
             
                    <li><h6 class="text-light" style="display: inline-block">Make an appointment</h6></li>
                    <li><a href="contact.php" class="icoCalendar" title="Contact" target=""><i class="fa fa-calendar-check"></i></a></li>
                
                </ul>		
            </div>
               
        </div>
        
    </nav>
      
        
        
    <!--Content -->    
    <div  class="container" >
        <div class="how-section1">
            <div class="row">
                
                <!--Left column content -->  
                <div class="col-md-6 how-img">
                    
                    <br><br>
                    <h1>Get in touch</h1>
                    <p> Agnieszka (‘Aga’) Borowiec<br><a href= "mailto:abpainrelief@gmail.com">abpainrelief@gmail.com</a><br>+44 7521 807 530</p>
                    
                    <div >
    	
                        <ul class="social-network social-circle">
                            <li><a href="tel:+44 7521 807 530" class="icoPhone" title="Phone" target="_blank"><i class="fa fa-phone"></i></a></li>
                
                        </ul>				
		              
                    </div>
                            
                    <h5>Location</h5>
                    <p>Santosa Yoga & Meditation, 21 Albert St.<br>Edinburgh EH7 5LH<br>Mon-Fri, 10:30am-7pm <br>Sat & Sun, 10:30am-6pm</p>
                            
                    <div class="container" id="map">
                                    
                        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2233.243600887561!2d-3.179069683905349!3d55.96248098326791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887b80ac81a1067%3A0x54a70382fddee7cc!2sSantosa%20Wellness%20Centre!5e0!3m2!1sen!2suk!4v1591706015559!5m2!1sen!2suk" width="360" height="290" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                            
                    </div>
                
                </div>
                            
                <!--Right column content -->  
                <div class="col-md-6">
                            
                    <div style="margin-top: 55px" class="container">
    
                        <h5> Alternatively use our contact form</h5>
            
                    <div id="error"><? echo $error.$successMessage; ?> </div>
            
                    <!--Contact form -->   
                    <form method="post">
                        
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
                            <small class="text-muted">We'll never share your email with anyone else.</small>
                        </div>
            
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" >
                        </div>
  
  
                        <div class="form-group">
                            <label for="content">Leave your comment here</label>
                            <textarea class="form-control" name="content" id="content" rows="12"></textarea>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>   
                        
                    </form>    
      
                    </div>
                            
                </div>                 
                                    
            </div>
        </div>  
    </div>  
        
        <!--Logo -->  
    <div class="container" id="logo-container">
        
        <img id="logo-contact" src="images/Transparent-bg300.png" class=" img-fluid" alt=""/>
    
    </div>
        
    <br>
      
    <!--Footer -->      
    <div  id="footer">
        
        <div class="container">
           
    		<h5 class="text-light">Follow Us</h5>
            <br>
            <ul class="social-network social-circle">
                <li><a href="https://www.facebook.com/abpainrelief/" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/agnieszka-borowiec-137589157/" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/aganbo/" class="icoInstagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>				
		 
        </div>
    </div>
      
      
      
    <!--JavaScript -->  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
    <script type="text/javascript">
        
        $("form").submit(function(e) {
                
             var error = "";
                
            if ($("#email").val() == "") {
                    
                 error+= " The email field is required<br>";
                    
            }
                
            if ($("#subject").val() == "") {
                    
                 error+= " The subject field is required<br>";
                    
             }
                
            if ($("#content").val() == "") {
                    
                 error+= "The content field is required";
                    
             }
                
             if (error != "") {
                
            $("#error").html('<div class="alert alert-danger" role="alert"><strong> There are error(s) in your form:</strong><br>' + error +  '</div>');
                    
                  return false;
                    
             }  else {
                    
                    
                   return true;
                    
             }  
                
         });
        
        
    </script>   
    
</body>
</html>


