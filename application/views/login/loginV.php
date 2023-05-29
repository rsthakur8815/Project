<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
</head>
<body>	
<div class="text-center" align="center" style="padding:2% 0">
	<div class="logo" style="color: #22367f;">

    <div class="container">
<?php echo form_open("login/index") ?>
<span class="border border-0"></span>
<h1>Login</h1>
<div class="row"> <!--to small the box -->
    <div class="col-lg-6"><!--both small the box -->
    <div class ="form-group">
        <label for="username">Username</label>
      <!--  <input type="email" class="form-control" value="email">-->
      <?php  echo form_input(['class'=>'form-control','placeholder'=>'Enter username','name'=>'uname','value'=>set_value('uname')]);?>
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
    <?php echo form_error('uname');?>
</div>
</div>
<div class="row">
    <div class="col-lg-6"> <!--to small the box -->
<div class ="form-group"> <!--both small the box -->
        <label for="pwd">Password</label>
        <?php  echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'password','name'=>'pass','value'=>set_value('pass')]);?>
 </div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
    <?php echo form_error('pass');?>
</div>
</div>
<div style="margin-top:10px;"></div>
<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);?>
<?php echo form_reset(['type'=>'reset','class'=>'btn btn-secondary','value'=>'Reset']);?>

</div>
</body>
</html>