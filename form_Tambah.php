<!DOCTYPE html>
<html lang="en">
<head>
    <title>form Tambah data customer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="custom.js"></script>

</head>
<body>
	<div class="input_container">
		<form name="formValid" id="formValidation" action="proses_Tambah.php">
			<div class="input-row">First Name
				<input type="text" name="first_name" placeholder="Your name" required="required">
			</div>
			<div class="input-row">Last Name
				<input type="text" name="last_name" placeholder="Last name" required>
			</div>
			<div class="input-row">Email
				<input type="email" name="email" placeholder="Your email" required>
			</div>
			<div class="input-row">Phone
				<input type="text" name="phone" placeholder="Your phone number" required>
			</div>
			<div class="input-row">Address
				<textarea name="address" placeholder="Your Address" required></textarea>
			</div>
			<div class="text-center">
				<input type="submit" value="Simpan Data">
			</div>
		</form>
	</div>
	
	<script>
    $(document).ready(function () {
    $("#formValidation").validate ({
        rules:{
            first_name:{
                minlength: 2
            },
            last_name:{
                minlength: 2
            },
            email:{
                email:true
            },
            phone:{
                number: true,
                minlength: 10,
                maxlenght: 12
            }
        },
        messages: {
            first_name:{
            required:"First Name is required.",
            minlength:"Name at least 2 characters"
            },
            last_name:{
            required:"Last Name is required",
            minlength:"Name at least 2 characters"
            },
            email:"Email is required",
            phone:"Phone is required",
            address:"Address is required"
        },
    
        submitHandler: function(form) {
          form.submit();
        }
       });
	});
    
   </script>
	<script src="custom.js"></script>

</body>
</html>
