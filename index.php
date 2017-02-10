<html>
<head>
<title>Portfolio</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.css" /> 
	<script type="text/javascript" src="css/jquery.js"></script>
	<script type="text/javascript" src="css/bootstrap.js"></script>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico"/> 
<style type="text/css">
	.hide{
		display: none;
	}
</style>

</head>
<body>

<script type="text/javascript">
	$('body').on('click','nav a', function(e) {
    $('#main').removeClass('hide');
    $('#main').children().addClass('hide');
    $('#home').addClass('hide');
    $($(this).attr('href')).slideDown('slow').removeClass('hide');
    e.preventDefault(); 
});
</script>

<nav class="navbar navbar-inverse navbar-fixed-top"  id="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
     		<a style="font-size:24px;" class="navbar-brand" href=".">My Portfolio</a>
  		</div>
  		<div class="collapse navbar-collapse" id="myNavbar">
	    <ul class="nav navbar-nav navbar-right">
	      <li class="active navbar-items"><a href="#home">Home</a></li>
	      <li class="navbar-items"><a href="#about">About</a></li>
	      <li class="navbar-items"><a href="#education">Education</a></li>
	      <li class="navbar-items"><a href="#skills">Skills</a></li>
	      <li class="navbar-items"><a href="#works">Works</a></li>
	      <li class="navbar-items"><a href="#contact">Contact</a></li>
	    </ul>
		</div>
	</div>
</nav>


<!--HOME-->
<div id="home" class="container-fluid grey_shade">
	<h2 class="title" align="center">H E L L O !</h2>
	<center><img id="image" src="img/i.jpg" alt="my image"/></center>
	<div  style="border-bottom: 3px dashed #252525; width: 50%;margin-left: 25%; padding-top: 15px;"></div>
	<div class="container" align="center">
		<h3 align="center">My name is <strong>Mominul Haque Sejan</strong></h3><br> 
		<div class="col-md-3"></div>
			<div class="col-md-5">
				Welcome to my portfolio
			</div>
	</div>
</div> 


<div id="main" class="hide">
<!--ABOUT-->
<div id="about" class="container-fluid grey_shade">
	<h2 class="title" align="center">About Me</h2>
	<div class="container">
	<div class="col-md-4"><img style="width:240px;height:auto;border: 4px solid black; border-radius: 50%;" src="img/me.jpg" alt="my pic2" /></div>
	<div class="col-md-6" style="vertical-align: middle;">I am studying <i>Computer Science and Engineering</i> at East West University, Bangladesh.<br>This is my final year of undergraduate degree.</div>
	</div>
	<div class="container">
	 	<div class="col-md-5" style="padding-left: 10%">
		 	<h3><u>Some information about me:</u></h3>
		 	<ul>
		 		<li>Always punctual</li>
		 		<li>Quick learner and can adopt to new environment quickly</li>
		 		<li>Keen to learn new things</li>
		 		<li>Can work hard to achieve new goals</li>
		 		<li>Can work efficiently under stress</li>
		 		<li>Always try to find easy and alternative way to solution of any problem</li>
		 	</ul>
	 	</div>
	 	<div class="col-md-7" style="padding-left: 10%">
		 	<h3><u>Likes and interests:</u></h3>
		 	<ul>
		 		<li>Like to play cricket and watch football games</li>
		 		<li>Like to play computer games</li>
		 		<li>Like plant trees</li>
		 		<li>Like to <b>Sleep</b></li>
		 	</ul>
		</div>
	</div>
</div>

<!--Education-->
<div id="education" class="container-fluid grey_shade">
	<h2 class="title" align="center">Educational Backgrounds</h2>
	<div class="container">
	
	<div class="col-md-7">
		<h3>Bachelor in Computer Science and Engineering</h3>
		<div style="padding-left: 10%; border-left: 2px solid blue;">
			Session	:	2013-(continue)<br>
			Institute	:	East West University, Bangladesh<br>
			Result	:	2.78 (CGPA) (Current)
		</div>
		<h3>Higher Secondary Certificate</h3>
		<div style="padding-left: 10%; border-left: 2px solid blue;">
			Result	:	5.0<br>
			Year	:	2012<br>
			Group	:	Science<br>
			Board	:	Dhaka
		</div>
		<h3>School Secondary Certificate</h3>
		<div style="padding-left: 10%; border-left: 2px solid blue;">
			Result	:	5.0<br>
			Year	:	2010<br>
			Group	:	Science<br>
			Board	:	Dhaka
		</div>
	</div>
	<div class="col-md-3">
		<h3>Other Certificates</h3>
		Trainee at Top Up IT training.<br>
		<b>Concentration:</b>.NET & C#
	</div>
	</div>
</div>

<!--SKILLS-->
<div id="skills" class="container-fluid grey_shade">
	<h2 class="title" align="center">My Skills</h2>
	<div class="container">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			Programming (Structural and OOP) in C, C++, C#<br>
			<div class="progress">
			 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; text-align: right;">80%</div>
			</div>
			.NET and C# (Desktop app)<br>
			<div class="progress">
			 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; text-align: right;">90%</div>
			</div>
			ASP.NET (WEB APP)<br>
			<div class="progress">
			 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; text-align: right;">70%</div>
			</div>
			PHP<br>
			<div class="progress">
			 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; text-align: right;">70%</div>
			</div>
			JavaScript/jQuery<br>
			<div class="progress">
			 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; text-align: right;">50%</div>
			</div>
			MySQL and Microsoft SQL Server<br>
			<div class="progress">
			 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; text-align: right;">80%</div>
			</div>
			Graphics design, Photoshop, Illustrator<br>
			<div class="progress">
			 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%; text-align: right;">85%</div>
			</div>

		</div>
	</div><br>
			<div  style="text-align:  right; font-family: 'Play'; font-weight: bold;font-size: 16px;">
				"In three words I can sum up everything I've learned about life: 'it goes on'".<br>
				- Robert Frost
			</div>
</div>

<!--WORKS-->
<div id="works" class="container-fluid grey_shade" style="min-height: 100%;">
	<h2 class="title" align="center">My Works</h2>
	<div class="container-fluid">	<div class="col-md-2"></div>
		<div class="col-md-7">
		<h2>Worked on Projects</h2>
			<ol>
				<li style="line-height: 30px;">Student Course Advising System (.NET & C#)</li>
				<li style="line-height: 30px;">Bus Ticket Management System (.NET & C#)</li>
				<li style="line-height: 30px;">Basic CRUD application (PHP, JS & mySQL)</li>
				<li style="line-height: 30px;">Student Course Tracking System (PHP, JS & mySQL)</li>
				<li style="line-height: 30px;">Making a Chromium based Web Browser using .NET , Telerik WinForms UI and Cef Sharp</li>
			</ol>
	</div>
	<div class="col-md-2"></div>
	</div>
	<div  style="padding-top: 10%;text-align: right; font-family: 'Play'; font-weight: bold;font-size: 16px;">
		"Two things are infinite: the universe and human stupidity; and I'm not sure about the universe".<br>
			- Albert Einstein
	</div>
</div>

<!--Contacts-->
<div id="contact" class="container-fluid grey_shade" style="padding-top: 25px;">
	<h2 class="title" align="center">Contact Info</h2>
	<div class="col-md-3" style="padding-left: 5%;">
		<h3><span class="glyphicon glyphicon-envelope"></span> Email</h3>
		<div style="padding-left: 15px;">
			<i class="fa fa-envelope-o" aria-hidden="true"></i> sejan840@gmail.com<br>
			<i class="fa fa-envelope-o" aria-hidden="true"></i> sejan@innocent.com
		</div>
	</div>
	
	<div class="col-md-3">
		<h3><span class="fa fa-mobile"></span> Phone</h3>
		<div style="padding-left: 15px;">
			<i class="fa fa-phone"></i> 01910500346<br>
			<i class="fa fa-phone"></i> 01843900643
		</div>
	</div>
	<div class="col-md-3">
		<h3><span class="glyphicon glyphicon-globe"></span> Social Network</h3>
		<div style="padding-left: 15px;">
			<i class="fa fa-facebook-square" aria-hidden="true"></i> <a href="https://fb.me/isejan" target="_Blank"> <b> Facebook</b></a><br>
			<i class="fa fa-twitter" aria-hidden="true"></i> <a href="https://twitter.com/sejanH" target="_Blank"> <b> Twitter</b></a><br>
			<i class="fa fa-google-plus" aria-hidden="true"></i> <a href="https://plus.google.com/+MominulHaqueSejan" target="_Blank"> <b> Google PLus</b></a>

		</div>
	</div>

	<div  style="margin-bottom: 30px;padding-top: 30%;text-align: right; font-family: 'Play'; font-weight: bold;font-size: 16px;">
		The best teachers are those who show you where to look, but don't tell you what to see.<br>
			- Alexandra K. Trenfor
	</div>

</div>
</div>
<script type="text/javascript">
	$('body').on('click','nav a', function(e) {
    $('#main').removeClass('hide');
    $('#main').children().addClass('hide');
    $($(this).attr('href')).removeClass('hide');
   // e.preventDefault();
});
</script>


<footer>
	M o m i n u l&nbsp;&nbsp; H a q u e&nbsp;&nbsp; S e j a n &copy; 2 0 1 7
</footer>
</body>
</html>