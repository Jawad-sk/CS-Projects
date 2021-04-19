<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/style_Home_Sheets.css">
        <link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inknut+Antiqua" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Day & Night Hotel - The Luxurious lifeStyle.</title>
    </head>
<body>
    <div class="mainDiv">
        <div class="leftDiv">
            <br>
            <h1 id="mainHead">Day & Night Hotel</h1>
        </div>
        <div class="headIcon">
            <br>
            <img id="iconImp" src="images/facebookIcon.png" alt="fb" width="30px" height="30px">
            <img id="iconImp" src="images/twitterIcon.png" alt="twiter" width="30px" height="30px">
            <img id="iconImp" src="images/instaIcon.png" alt="insta" width="30px" height="30px">
        </div>
        <div class="navBarDiv">
            <div class="navDiv">
              <a href="#home">  <button class="">Home</button></a>
               <a href="#about"> <button class="about">About</button></a>
              <a href="#team">  <button class="team">Team</button></a>
               <a href="#gallery"> <button class="gallery">Gallery</button></a>
               <a href="#book"> <button >Booking</button></a>
               <a href="admin"> <button class="">Admin</button></a>
               <a href="#contact"> <button >Contact Us</button></a>
            </div>
        </div>
    </div>
    <div class="centerDiv">
        <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade" id="home">
            <div class="numbertext"></div>
            <img src=".\images\pic05.jpg" width=100% height="550px">
            <div class="text">
                <h1 id="slideHead">Day & Night Hotel</h1>
                <br>
                <p id="slideText">WE KNOW WHAT YOU LOVE</p>
                <br>
                <p id="slideText02">WELCOME TO OUR HOTEL</p>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src=".\images\pic01.jpg" width="100%" height="550px">
            <div class="text">
                <h1 id="slideHead">Day & Night Hotel</h1>
                <br>
                <p id="slideText">STAY WITH FAMILY AND FRIENDS</p>
                <br>
                <p id="slideText02">COME AND ENJOY PRECIOUS MOMENT WITH US</p>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src=".\images\pic03.jpg" width="100%" height="550px">
            <div class="text">
            <h1 id="slideHead">Day & Night Hotel</h1>
                <br>
                <p id="slideText">WANT LUXURIOUS VACATIONS</p>
                <br>
                <p id="slideText02">GET ACCOMMODATION TODAY</p>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src=".\images\pic04.jpg" width=100% height="550px">
            <div class="text">
            <h1 id="slideHead">Day & Night Hotel</h1>
                <br>
                <p id="slideText">FEEL FRESH</p>
                <br>
                <p id="slideText02">ENJOY YOUR LIFE</p>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src=".\images\pic02.jpg" width=100% height="550px">
            <div class="text">
            <h1 id="slideHead">Day & Night Hotel</h1>
                <br>
                <p id="slideText">WANT TO RESERVE ROOMS</p>
                <br>
                <p id="slideText02">SCROLL DOWN</p>
            </div>
        </div>


        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
	<a id="book"> </a>
    <div class="roomMainDiv" >
        <div class="roomDiv" >
            <h1 id="roomHead">OUR ROOMS</h1>
            <div class="textRoom">
                <p id="comId"><b>COMFORTABLE ACCOMMODATION</b></p>
            </div>
        </div>
        <div class="barDiv" >
            <hr id="heightIssue">
        </div>
        <div class="ButtonClass" >
            <a target="_blank" href=".\images\pic06.jpg">
                <img src=".\images\pic06.jpg" alt="Deluxe Room" width="280" height="420">
            </a>
            <div class="desc">
                <div>
                    <p id="room01"><b>Deluxe Room</b></p>
                    <div>
                        <p id="leftPrice"><b>$320</b></p>
                        <p id="rightRate"><b>/ NIGHT</b></p>
                    </div>
                </div>
            </div>
            <div class="bookButton">
                <button class="bookButtonStyle" onclick="window.location.href = 'roomReservation.php';"><b>BOOK NOW</b></button>                
            </div>
        </div>
        <div class="ButtonClass02">
            <a target="_blank" href=".\images\pic07.jpg">
                <img src=".\images\pic07.jpg" alt="Luxury Room" width="280" height="420">
            </a>
            <div class="desc">
                <div>
                    <p id="room01"><b>Luxury Room</b></p>
                    <div>
                        <p id="leftPrice"><b>$220</b></p>
                        <p id="rightRate"><b>/ NIGHT</b></p>
                    </div>
                </div>
            </div>
            <div class="bookButton">
                <button class="bookButtonStyle" onclick="window.location.href = 'roomReservation.php';"><b>BOOK NOW</b></button>                
            </div>
        </div>
        <div class="ButtonClass02">
            <a target="_blank" href=".\images\pic08.jpg">
                <img src=".\images\pic08.jpg" alt="Guest House" width="280" height="420">
            </a>
            <div class="desc">
                <div>
                    <p id="room01"><b>Guest House</b></p>
                    <div>
                        <p id="leftPrice"><b>$180</b></p>
                        <p id="rightRate"><b>/ NIGHT</b></p>
                    </div>
                </div>
            </div>
            <div class="bookButton">
                <button class="bookButtonStyle" onclick="window.location.href = 'roomReservation.php';"><b>BOOK NOW</b></button>                
            </div>
        </div>
        <div class="ButtonClass02">
            <a target="_blank" href=".\images\pic09.jpg">
                <img src=".\images\pic09.jpg" alt="Single Room" width="280" height="420">
            </a>
            <div class="desc">
                <div>
                    <p id="room01"><b>Single Room</b></p>
                    <div>
                        <p id="leftPrice"><b>$150</b></p>
                        <p id="rightRate"><b>/ NIGHT</b></p>
                    </div>
                </div>
            </div>
            <div class="bookButton">
                <button class="bookButtonStyle" onclick="window.location.href = 'roomReservation.php';"><b>BOOK NOW</b></button>                
            </div>
        </div>
    </div>
    <div class="offerDiv" id="about">
        <div class="offerHead">
            <div class="offerRoomDiv">
                <h1 id="roomHead">AMENITIES</h1>
                <div class="offerTextRoom">
                    <p id="comId02"><b>OFFERS TO OUR CUSTOMERS</b></p>
                </div>
            </div>
            <div class="barDiv">
                <hr id="heightIssue">
            </div>
        </div>
        <div class="styleRoomOfferDiv">
            <div class="whatDiv">
                <div class="whatOfferDiv">
                    <div class="leftOfferDiv">
                        <img id="iconImportant" src="images/pic10.jpg" alt="Accomodation" width="50px" height="50px">
                    </div>
                    <div class="rightOfferDiv">
                        <p id="offerHead"><b>ACCOMMODATION</b></p>
                        <p id="offerHead02">Our rooms offer comfortable accommodation with free Wi-Fi, central heating etc.</p>
                    </div>
                </div>
            </div>
            <div class="whatDiv02">
                <div class="whatOfferDiv">
                    <div class="leftOfferDiv">
                        <img id="iconImportant" src="images/pic11.jpg" alt="Accomodation" width="50px" height="50px">
                    </div>
                    <div class="rightOfferDiv">
                        <p id="offerHead"><b>DINING</b></p>
                        <p id="offerHead02">Dine in style and at its finest in the Resort Restaurant that serves a wide range of tastes.</p>
                    </div>
                </div>
            </div>
            <div class="whatDiv02">
                <div class="whatOfferDiv">
                    <div class="leftOfferDiv">
                        <img id="iconImportant" src="images/pic12.jpg" alt="Accomodation" width="50px" height="50px">
                    </div>
                    <div class="rightOfferDiv">
                        <p id="offerHead"><b>SPA & MASSAGE</b></p>
                        <p id="offerHead02">Visit the Resort Spa & Massage Salon to indulge yourself with unique relaxing atmosphere.</p>
                    </div>
                </div>
            </div>
            <div class="whatDiv">
                <div class="whatOfferDiv">
                    <div class="leftOfferDiv">
                        <img id="iconImportant" src="images/pic13.jpg" alt="Accomodation" width="50px" height="50px">
                    </div>
                    <div class="rightOfferDiv">
                        <p id="offerHead"><b>CONCIERGE SERVICES</b></p>
                        <p id="offerHead02">Our concierge will be pleased to arrange airline transfers, dinner reservations, and more.</p>
                    </div>
                </div>
            </div>  
            <div class="whatDiv02">
                <div class="whatOfferDiv">
                    <div class="leftOfferDiv">
                        <img id="iconImportant" src="images/pic14.jpg" alt="Accomodation" width="50px" height="50px">
                    </div>
                    <div class="rightOfferDiv">
                        <p id="offerHead"><b>ROOM SERVICE</b></p>
                        <p id="offerHead02">Room service is available around the clock, including breakfast deliveries.</p>
                    </div>
                </div>
            </div>
            <div class="whatDiv02">
                <div class="whatOfferDiv">
                    <div class="leftOfferDiv">
                        <img id="iconImportant" src="images/pic15.jpg" alt="Accomodation" width="50px" height="50px">
                    </div>
                    <div class="rightOfferDiv">
                        <p id="offerHead"><b>BUSINESS CENTER</b></p>
                        <p id="offerHead02">Our business center offers two well-appointed meeting rooms and a privately equipped office.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="galleryMainDiv" >
        <div class="offerHeadGallery">
            <div class="offerRoomDiv">
                <h1 id="roomHead">GALLERY</h1>
                <div class="offerTextRoom">
                    <p id="comId03"><b>OUR GALLERY</b></p>
                </div>
            </div>
            <div class="barDiv">
                <hr id="heightIssue">
            </div>
        </div>
        <div class="galleryDiv" id="gallery">
            <div class="galleryMarginDiv">
                <div class="galleryImgDiv">
                <a target="_blank" href="images/pic16.jpg">
                    <img class="image" src="images/pic16.jpg" alt="pic" width="380px" height="300px">
                    <div class="overlay">
                        <div class="text"><h1><b>Day & Night Hotel<br>-----------</h1></p></div>
                    </div>
                </div> 
                <div class="galleryImgDiv02">
                <a target="_blank" href="images/pic17.jpg">
                    <img src="images/pic17.jpg" alt="pic" width="380px" height="300px">
                    <div class="overlay">
                        <div class="text"><h1><b>Day & Night Hotel<br>-----------</h1></p></div>
                    </div>
                </div>
                <div class="galleryImgDiv02">
                <a target="_blank" href="images/pic18.jpg">
                    <img src="images/pic18.jpg" alt="pic" width="380px" height="300px">
                    <div class="overlay">
                        <div class="text"><h1><b>Day & Night Hotel<br>-----------</h1></p></div>
                    </div>
                </div>
                <div class="galleryImgDiv">
                <a target="_blank" href="images/pic19.jpg">
                    <img src="images/pic19.jpg" alt="pic" width="380px" height="300px">
                    <div class="overlay">
                        <div class="text"><h1><b>Day & Night Hotel<br>-----------</h1></p></div>
                    </div>
                </div>
                <div class="galleryImgDiv02">
                <a target="_blank" href="images/pic20.jpg">
                    <img src="images/pic20.jpg" alt="pic" width="380px" height="300px">
                    <div class="overlay">
                        <div class="text"><h1><b>Day & Night Hotel<br>-----------</h1></p></div>
                    </div>
                </div>
                <div class="galleryImgDiv02">
                <a target="_blank" href="images/pic21.jpg">
                    <img src="images/pic21.jpg" alt="pic" width="380px" height="300px">
                    <div class="overlay">
                        <div class="text"><h1><b>Day & Night Hotel<br>-----------</h1></p></div>
                    </div>
                </div>
                <div class="galleryImgDiv">
                <a target="_blank" href="images/pic22.jpg">
                    <img src="images/pic22.jpg" alt="pic" width="380px" height="300px">
                    <div class="overlay">
                        <div class="text"><h1><b>Day & Night Hotel<br>-----------</h1></p></div>
                    </div>
                </div>
                <div class="galleryImgDiv02">
                <a target="_blank" href="images/pic23.jpg">
                    <img src="images/pic23.jpg" alt="pic" width="380px" height="300px">
                    <div class="overlay">
                        <div class="text"><h1><b>Day & Night Hotel<br>-----------</h1></p></div>
                    </div>
                </div>
                <div class="galleryImgDiv02">
                <a target="_blank" href="images/pic24.jpg">
                    <img src="images/pic24.jpg" alt="pic" width="380px" height="300px">
                    <div class="overlay">
                        <div class="text"><h1><b>Day & Night Hotel<br>-----------</h1></p></div>
                    </div>
                </a>
                </div>
            </div>
        </div>
        <div class="offerStepDiv">
        <div class="offerHead">
            <div class="offerRoomDivStep">
                <h1 id="roomHeadStep">4 EASY STEPS</h1>
                <div class="offerTextRoomStep">
                    <p id="comIdStep"><b>HOW TO BOOK A ROOM</b></p>
                </div>
            </div>
            <div class="barDivStep">
                <hr id="heightIssue">
            </div>
        </div>
        <div class="roomStepDiv">
            <div class="whatDivStep">
                <div class="whatOfferDivStep">
                    <div class="upOfferDivStep">
                        <img id="iconImportantStep" src="images/pic25.jpg" alt="Accomodation" width="50px" height="50px">
                        <p id="stepHeadRight">01</p>
                    </div>
                    <div class="downOfferDivStep">
                        <p id="stepHead"><b>FILL OUT AN ONLINE FORM</b></p>
                        <p id="stepHead02">Everything starts with filling out the booking form on our website.</p>
                    </div>
                </div>
            </div>
            <div class="whatDiv02Step">
                <div class="whatOfferDivStep">
                    <div class="upOfferDivStep">
                        <img id="iconImportantStep" src="images/pic26.png" alt="Accomodation" width="50px" height="50px">
                        <p id="stepHeadRight">02</p>
                    </div>
                    <div class="downOfferDivStep">
                        <p id="stepHead"><b>CONFIRM YOUR BOOKING</b></p>
                        <p id="stepHead02">After that, our receptionists will contact you to confirm your booking.</p>
                    </div>
                </div>
            </div>
            <div class="whatDiv02Step">
                <div class="whatOfferDivStep">
                    <div class="upOfferDivStep">
                        <img id="iconImportantStep" src="images/pic27.png" alt="Accomodation" width="50px" height="50px">
                        <p id="stepHeadRight">03</p>
                    </div>
                    <div class="downOfferDivStep">
                        <p id="stepHead"><b>SELECT YOUR ROOM</b></p>
                        <p id="stepHead02">You can also select an exact room type during your booking confirmation.</p>
                    </div>
                </div>
            </div>
            <div class="whatDiv02Step">
                <div class="whatOfferDivStep">
                    <div class="upOfferDivStep">
                        <img id="iconImportantStep" src="images/28.jpg" alt="Accomodation" width="50px" height="50px">
                        <p id="stepHeadRight">04</p>
                    </div>
                    <div class="downOfferDivStep">
                        <p id="stepHead"><b>CHECK IN AT THE HOTEL</b></p>
                        <p id="stepHead02">When you arrive at the hotel, don’t forget to check in at the front desk.</p>
                    </div>
                </div>
            </div>
        </div>
		
        <div class="teamDiv">
            <div class="teamHead">
                <div class="teamProDiv">
                <h1 id="roomHeadStep">OUR TEAM</h1>
                <div class="textTeam">
                    <p id="comId"><b>TRUE PROFESSIONALS TEAM</b></p>
                </div>
            </div>
            <div class="barTeamDiv">
                <hr id="heightIssue">
            </div>
        </div>
        <div class="whatDivTeam" id="team">
            <div class="upDivTeam">
                <img id="profilePicture" src="images/kashifImage.jpg" alt="Kashif's Image" width="150px" height="150px">
                <p id="nameProfile">MUHAMMAD KASHIF</p>
                <p id="nameDone">Front-End Developer</p>
                <p id="nameContact">Contact : kashif.mmn1999@gmail.com</p>
            </div>
        </div>
        <div class="whatDiv02Team">
            <div class="upDivTeam">
                <img id="profilePicture" src="images/jawadsImage.jpeg" alt="jawad's Image" width="150px" height="150px">
                <p id="nameProfile">JAWAD SHAIKH</p>
                <p id="nameDone">Back-End Developer</p>
                <p id="nameContact">Contact : jawad2114@gmail.com</p>
            </div>
        </div>
        <div class="whatDiv02Team">
            <div class="upDivTeam">
                <img id="profilePicture" src="images/vishalsImage.jpeg" alt="vishal's Image" width="150px" height="150px">
                <p id="nameProfile">VISHAL KUMAR</p>
                <p id="nameDone">Back-End Developer</p>
                <p id="nameContact">Contact : vishaldodeja12@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="footerDiv" id="contact">
        <div class="footerLeftDiv">
            <p id="contactHead">OUR CONTACTS</p>
            <br><br>
            <p id="contactPara">PHONE NO : 0900-7860-1</p>
            <br>
            <p id="contactPara">EMAIL : info@DNhotel.org</p>
            <br>
            <p id="contactPara">ADDRESS : Shahrah-e-faisal, Karachi,</p>
            <p id="contactPara02">Pakistan.</p>
        </div>
        <div class="footerMiddleDiv">
            <p id="contactHead">POPULAR NEWS</p>
            <br><br>
            <p id="contactPara03">5 Facilities Every Hotel <br> Should have</p>
            <p id="contactPara04">Jan 04, 2019</p>
            <br>
            <p id="contactPara05">Making the Most of Your<br> Stay at Resort Hotel</p>
            <p id="contactPara04">Jan 04, 2019</p>
        </div>
        <div class="footerRightDiv">
		<form method="post">
        <p id="contactHead">CONTACT VIA EMAIL</p>
        <br><br>
            <p id="contactPara06">FULL NAME:</p>
            <input name="name" class="inputAll" required><br>
			 <p id="contactPara06">Phone No# :</p>
            <input name="phone" class="inputAll" required>
        <br>
            <p id="contactPara06">EMAIL ADDRESS :</p>
            <input name="email" class="inputAll" required>
        <br>
          <h4 id="contactPara06">HUMAN VERIFICATION</h4><br>
                        <p id="contactPara06">TYPE BELOW THIS CODE <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p id="contactPara06">ENTER THE RANDOM CODE :</p>
							<input  type="text" class="inputAll" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" /><br>
						<input type="submit" name="submit" class="footerButton" class="btn btn-primary">
				<?php
							
										if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
				
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$con=mysqli_connect("localhost","root","","hotel");
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					if(mysqli_query($con,$sql))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									

							$msg="Your code is correct";
							}
							}	
			?>
			</form>
        </div>
    </div>
    <div class="copyrightDiv">
        <br>
        <p id="copyDiv">©&nbsp; 2020 DAY & NIGHT HOTEL . All Rights Reserved | Design by DAY & NIGHT HOTEL</p>
    </div>
</body>
<script src="js/slideshow.js" type="text/javascript" ></script>
</html>