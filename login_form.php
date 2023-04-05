<?php
// start session to store user information
session_start();

// connect to the database
$conn = mysqli_connect("localhost", "root", "", "university");

// check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // retrieve form data
  $jamb = mysqli_real_escape_string($conn, $_POST['jamb']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);

  // validate user credentials
  $sql = "SELECT * FROM university WHERE jamb='$jamb' AND lname='$lname'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) == 1) {
    // successful login, store user information in session
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['lname'] = $user['lname'];

    // redirect to homepage
    header('Location: homepage.php');
    exit();
  } else {
    // invalid credentials, display error message
    $error = "Invalid Details";
  }
}

// close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/native/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<!-- <script src="https://use.fontawesome.com/4e1a12fbcb.js"></script> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/password_check.js"></script>
    <title>BlackWoods University Login</title>
<style>
        
	/* @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800'); */
	

	/* GENERAL */
	* {
	box-sizing: border-box;
	}

	body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
	}

	h1 {
	font-weight: bold;
	margin: 0;
	}

	h2 {
	text-align: center;
	}

	p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
	}

	span {
	font-size: 12px;
	float:left;
	}

	a {
	color: #333;
	font-size: 14px;
	text-decoration: underline;
	margin: 15px 0;
	}
	
	/* CONTAINER AND OVERLAY*/
	.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	/* overflow: hidden; */
	width: 768px;
	max-width: 100%;
	height: 600px;
	margin-top: 50px;
	}

	.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
	}

	.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
	}

	.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
	}

	.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
	overflow-y:visible;
	overflow-x:hidden;
	}

	.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
	}

	@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
	}

	.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
	}

	.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
	}

	.overlay {
	background: #01bacf;
	background: -webkit-linear-gradient(to right, #01bacf, #82b440);
	background: linear-gradient(to right, #01bacf, #82b440);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
	}

	.container.right-panel-active .overlay {
  	transform: translateX(50%);
	}

	.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
	}

	.overlay-left {
	transform: translateX(-20%);
	}

	.container.right-panel-active .overlay-left {
	transform: translateX(0);
	}

	.overlay-right {
	right: 0;
	transform: translateX(0);
	}

	.container.right-panel-active .overlay-right {
	transform: translateX(20%);
	}

	.social-container {
	margin: 10px 0px;
	margin-top:-10px;
	}

	.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 25px;
	width: 25px;
	}

	/* FORM */
	form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	min-height: 100%;
	text-align: center;
	}

	input, .form-control {
	background-color: #eee;
	border: none;
	border-radius:10px;
	padding: 5px 10px;
	margin: 5px 0;
	width: 100%;
	font-size:15px;
	}
	#gender{
	width:280px;
	border-radius: 5px;
	background-color: #eee;
	border:none;
	height:35px;
	font-size:15px;
	}
	.has-feedback{
	width:280px;
	}
	.has-feedback .form-control{
	font-size:14px;
	/* color:black !important; */
	}
	
	/* BUTTONS */
	input[type="submit"], button {
	border-radius: 20px;
	border: 1px solid #01bacf;
	background-color: #01bacf;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
	cursor:pointer;
	} 
	input[type="submit"]:active, button:active {
	transform: scale(0.95);
	}
	input:focus{
		outline:2px solid #2c3e60;
	}
	button:focus {
	outline: none;
	}
	
	button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
	}

	/* MOBILE STYLE HIDING*/
	.container-mobile{
	display:none;
	}
	.img-mobile{
		display:none;
	}
	/* .sign-header{
		/* margin-top:-50px; 
	} */
	.logo-img{
		position:relative;
		margin-left:-200px;
		margin-top:-120px;
		margin-bottom:100px;
		/* margin-left:-1px; */
	}
	
	select:invalid{
		color:gray;
	}
	.eye-icon{
		margin-right:-250px; 
		font-size:16px; 
		margin-top:-30px; 
		position:relative; 
		cursor:pointer; 
		float:right;
	}
	

	/* MEDIA QUERIES */
	@media only screen and (max-width:600px) {
	body{
		margin:0;
		padding:0;
		background:#ddd;
		
	}
	#container{
		display: none;
	}
	.container-mobile{
		height:80vh;
		display:block;
		overflow:visible;
		border-radius: 10px;
		box-shadow: 0 14px 28px rgba(20, 119, 185, 0.25), 
					0 10px 10px rgba(6, 88, 126, 0.22);
		
	}
	.img-mobile{
		display:block;
		position:relative;
		/* margin-left:-250px; */
		/*margin-top:50px; */
		/* margin-bottom:50px; */
	}

	form {
	/* position: absolute; */
	/* background:#2c3e50; */
	border-radius:10px;
	height: 100%;
	transition: all 0.6s ease-in-out;
	padding:0 50px;
	width:350px;
	}
	.sign-link{
		margin-top:10px;
		margin-left:50px;
	}
	input:focus{
		outline:none;
		/* outline-style: solid;
		outline-color:#2c3e60;
		outline-width: 2px;
		-moz-outline-radius: 10px; */
	}
	
	.img-mobile{
		/* border:2px solid red; */
		/* padding:20px; */
		/* width:100%; */
		width:350px;
		/* height:30%; */
		margin-top:-10px;
		margin-bottom: 20px;
		/* border-radius: 10px;; */
		background-color: #2c3e50;
	}
	.down-mobile{
		padding-left:50px;
		padding-right:50px;
		/* border: 2px solid blue; */
	}
	.img-responsive{
		margin:auto;
		/*
		margin-top:30px;
		width:250px;
		height: 50px; */
	}
	}


	@media only screen and(max-width:400px){
	.sign-in-container input{
	width:100%;
	}
	}

</style>
</head>
<body>

  <!-- Desktop View -->
<div class="container" id="container">
	
	<div class="form-container sign-in-container" >
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<h3 class="sign-header">Log In To Your Student Account </h3>
			<span></span>
			<input type="number" name="jamb" id="email" placeholder="Jamb Reg No" required />
			<input type="password" name="lname" placeholder="Surname" id="password" required />
			<span class="bi bi-eye-slash eye-icon" id="togglePassword"></span>
			<a href="#">Forgot your password?</a>
			<input type="submit" value="LOG IN">
		</form>
		<?php if(isset($error)) { echo $error; } ?>
	</div>
	<div class="form-container sign-up-container" id="sign-up-container">
		<form action="form.php" method="post" role="form" id="signup_form" name="signUp_form">
			<h3 class="sign-header">Apply to be a student!</h3>
			
			<!-- <span>Start your journey with us!</span> -->
			<input type="text" class="form-control" name="fname" id="FirstName"  placeholder="Enter your FirstName">
			<input type="text" class="form-control" name="lname" id="LastName" placeholder="Enter your LastName">
			<input type="date" class="form-control" name="dob" id="DateOfBirth" placeholder="Enter Date of Birth">
			<select name="states" id="StateOfOrigin" class="form-control" form="ApplicationForm">
				<option value="disabled">Enter State of Origin</option>
				<option value="abuja">ABUJA FCT</option>
				<option value="abia">ABIA</option>
				<option value="adamawa">ADAMAWA</option>
				<option value="akwa ibom">AKWA IBOM</option>
				<option value="anambra">ANAMBRA</option>
				<option value="bauchi">BAUCHI</option>
				<option value="bayelsa">BAYELSA</option>
				<option value="benue">BENUE</option>
				<option value="borno">BORNO</option>
				<option value="crossriver">CROSS RIVER</option>
				<option value="delta">DELTA</option>
				<option value="ebonyi">EBONYI</option>
				<option value="edo">EDO</option>
				<option value="ekiti">EKITI</option>
				<option value="enugu">ENUGU</option>
				<option value="gombe">GOMBE</option>
				<option value="imo">IMO</option>
				<option value="jigawa">JIGAWA</option>
				<option value="kaduna">KADUNA</option>
				<option value="kano">KANO</option>
				<option value="katsina">KATSINA</option>
				<option value="kebbi">KEBBI</option>
				<option value="kogi">KOGI</option>
				<option value="kwara">KWARA</option>
				<option value="lagos">LAGOS</option>
				<option value="nassarawa">NASSARAWA</option>
				<option value="niger">NIGER</option>
				<option value="ogun">OGUN</option>
				<option value="ondo">ONDO</option>
				<option value="osun">OSUN</option>
				<option value="oyo">OYO</option>
				<option value="plateau">PLATEAU</option>
				<option value="rivers">RIVERS</option>
				<option value="sokoto">SOKOTO</option>
				<option value="taraba">TARABA</option>
				<option value="yobe">YOBE</option>
				<option value="zamfara">ZAMFARA</option>
			</select>
			<input type="email" class="form-control" name="email" placeholder="Enter email">
			<input type="text" class="form-control" name="course" id="course" placeholder="What course do you wish to study?">
			<input type="number" class="form-control" name="jamb" id="jamb" placeholder="Enter JAMB Reg. No.">
			<input type="number" class="form-control" name="waec" id="waec" placeholder="Enter WAEC Exam No.">
			<input type="number" class="form-control" name="score" id="score" placeholder="Enter JAMB score">
			<br>

			<button type="submit" value="submit" class="btn btn-primary">Submit</button>
			<?php if(isset($error)) { echo $error; } ?>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<div class="logo-img">
					<img src="./img/native/logo-overlay.png" alt="">
				</div>
				<h3>Hey there!</h3 >
				<p>Already apllied to be a student?</p>
				<button class="ghost" id="signIn">Log In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<div class="logo-img">
					<img src="./img/native/logo-overlay.png" alt="">
				</div>
				<h3>Hey there!</h3>
				<p>Haven't apllied yet? Start your journey with us!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


		<!-- -------------
			MOBILE VIEW
			------------- -->

	<div class="container-fluid  form-container-mobile container-mobile"  id="container-mobile">
		<form action="#" method="post" id="logIn_form" name="logIn-form" >

				<div class="responsive img-mobile">
				<img src="./img/logo-overlay.png" class="img-responsive" alt="ProArtist logo">
			</div>
			

			
				<h3>Log In</h3>
				<span></span>
				<input type="email" name="email" id="email" placeholder="Email" required />
				<input type="password" name="password" id="password" placeholder="Password" required />
				<a href="#">Forgot your password?</a>
				<br>
				<button>Log In</button>
				<br>
			
			
		</form>
		<div class="sign-link"><a href="signup-mobile.html" id="sign-up-small">Don't have an account yet? Sign up</a></div>
	</div>
    
<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');
	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});

	const togglePassword = document.querySelector("#togglePassword");
	const password = document.querySelector("#password");

	togglePassword.addEventListener("click", function () {
		const type = password.getAttribute("type") === "password" ? "text" : "password";
		password.setAttribute("type", type);
		this.classList.toggle("bi-eye");
	});

</script>   
<script src="js/bootstrap.min.js"></script>


</body>
</html>