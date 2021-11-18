<!DOCTYPE html>
<html>
	<head>
		<title>subscription</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="emailForm.css">
		<link rel+"stylesheet" href="https://use.fontawesome.com/release/v5.5.0/css/all.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="content">
				<header>BECOME A SUBSCRIBER</header>
				<p>subscibe to our blog to get latest updates</P>
			</div>
			<div class="form">
				<form action="emailValidator.php" method="POSt">
					<div class="field">
						<input type="text" name="email" class="formStyle" placeholder="Email (required)" required />
					</div>
					<div class="btn">
					<input type="submit" name="submit" value="SUBMIT">
						<i class="fas fa-arrow-right"></i>
					</div>
				</form>
			</div>
			<div class="bottom">
				<p>we do not share your information</p>
			</div>
		</div>
	</body>
</html>