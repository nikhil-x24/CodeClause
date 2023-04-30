<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<link href="styles.css" rel="stylesheet">
<script src="contact_scripts.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<div class="form-container">
    		<h2 class="title">Contact Us </h2>
			<p id="msg" class="text-danger"></p>
			<p id="success"></p>
			<div id="hide_form">
    		<div class="row">
    			<div class="col-sm-6">
    				<label class="label">Name </label>
    				<input type="text" name="fname" id="fname" class="form-control" placeholder="Your name?">
    			</div>
    			
    			<div class="col-sm-6">
    				<label class="label">Email </label>
    				<input type="email" name="email" id="email" class="form-control" placeholder="Your email?">
    			</div>

    			<div class="col-sm-6">
    				<label class="label">Mobile</label>
    				<input type="number" name="email" id="mobile" maxlength="10" class="form-control" placeholder="Your mobile number?">
    			</div>

    			<div class="col-sm-6">
    				<label class="label">Gender</label>
    				<select name="category" id="category" class="form-control" required>
						<option value="">Select Any </option>
						<option value="">Male</option>
						<option value="">Female</option>
    				 	<option value="Other">Other </option>
    				</select>
    			</div>
          
    		<div class="col-sm-12">
    			<div class="form-group">
    			<label class="label">Message </label>
    			<textarea name="msg" id="msg" class="form-control"></textarea>
    		</div>
    	</div>
    	<div class="col-sm-2">
		</div>
        		<div class="col-sm-4">
    				<label class="label"></label>
    				<br> 
    				<span style="float: right">
    				 <img alt="Img_Not_Found" src="captchaimg.php" id="captcha"> <i class="fa fa-sync" aria-hidden="true" class=".refv" onClick="refreshCaptcha();"></i>
    				</span>
    			</div>
    			<div class="col-sm-4">
    				<label class="label"></label>
    				 <input type="text" name="captcha_val" id="captcha_val" class="form-control" placeholder="Enter Captcha">
    			</div>
    	<div class="col-sm-2">
    	</div>

    	<div class="col-sm-12">
    		<div class="form-group text-center">
    		  	<br>
				<button class="btn btn-primary" id="sendnow">Send Message </button>
				<div id="subloader"></div>
    		</div>
    	</div>

    		</div>
        </div>

    		</div>
		</div>

		<div class="col-sm-2">
		</div>
	</div>
</div>

</body>
</html>