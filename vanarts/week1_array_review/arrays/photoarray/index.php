<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&display=swap" rel="stylesheet"> 
	<style>
		body { margin: 0px; padding: 0px;
			background: url("imgs/diverlargefade.png");
			background-position: top center;
			background-repeat: no-repeat;
			background-color: #000;
		}

		h1, h2 { 
		font-family: 'Nunito Sans', sans-serif;
		color: #fff; font-size: 70px; margin: 0px; padding: 0px;}

		h1 {font-weight: bold;} 
		h2 {font-weight: normal; text-transform: uppercase;}

		.wrapper {
			width: 1200px;
			margin: 0 auto;
			margin-top: 200px;
		}

		.portfolio
		{
			text-align: center;
		}

		.portfolio h3 {color: #fff; font-family: 'Nunito Sans', sans-serif;
		font-size: 30px; margin: 0px; padding: 0px; margin-top: 100px;}
		.portfolio p {color: #fff; width: 500px; margin: 0 auto; margin-bottom: 50px; font-family: arial;}
		.portfolio .photos .photo { float: left; padding: 30px;}
		.portfolio .photos {overflow: auto;
			padding-bottom: 40px;
			display: inline-block;}

		.testimonial { background: #29446c; padding: 250px 100px;
			background: url("imgs/coralreefkeys.jpg");
			background-size: cover;
			background-position: bottom center;}
		.testimonial .quote { width: 600px;  text-align: center; margin: 0 auto;  }
		.testimonial .quote p {color: #fff; font-size: 24px; line-height: 35px;}
		</style>
</head>
<body>

	<div class="wrapper">

		<div class="header">
			<h1>Water World</h1>
			<h2>Photography</h2>
		</div>

		<div class="portfolio">
			<h3>My Recent Work</h3>
			<p>I've spent years underwater, and I don't just mean financially</p>

			<?php
			$arrPhotos = array(
				array("name"=>"Boy swimming", "photo"=>"boy.png"),
				array("name"=>"Girl swimming", "photo"=>"girl.png"),
				array("name"=>"Family swimming", "photo"=>"family.png"),
				array("name"=>"Yellow Dress swimming", "photo"=>"a.png"),
				array("name"=>"Boy swimming", "photo"=>"b.png"),
				array("name"=>"Boy swimming", "photo"=>"c.png"),
				array("name"=>"Boy swimming", "photo"=>"face.png"),
				array("name"=>"Boy swimming", "photo"=>"d.png")
			);

			foreach($arrPhotos as $key=>$photoDetails)
			{
				?>
					<div class="photos">
						<div class="photo"><img src="imgs/<?=$photoDetails['photo']?>" alt="<?=$photoDetails['name']?>"></div>
					</div>
				<?php
			}
			?>
			
		</div>

		

	</div>

	<div class="testimonial">
		<div class="quote">
			<p>The notification boxes are great way to notify the user about something special on the same page. It's a quick and easy way to tell the user a specify message.</p>
		</div>
	</div>
	
</body>
</html>