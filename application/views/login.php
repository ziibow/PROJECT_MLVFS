<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>::MAELEARM VILLAGE::</title>
		
		<link rel="stylesheet" href="<?php echo base_url();?>css/formLogin.css">
     	<link rel="stylesheet" href="<?php echo base_url();?>css/menu.css">
  		<link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
    	<link rel="stylesheet" href="<?php echo base_url();?>css/header.css">
    	<link rel="stylesheet" href="<?php echo base_url();?>css/table.css">
     	<link rel="stylesheet" href="<?php echo base_url();?>css/font.css">
	  	<link href="<?php echo base_url()?>css/pace-theme-barber-shop.css" rel="stylesheet" />
        
     <script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
  	
     
         
 	 <script>
	 	$(document).ready(function(){
	
			$("#loginBt").click(function(){
				
			  $.post("<?php echo base_url();?>index.php/home/Login",
			  {
				username:$("#username").val(),
				password:$("#password").val()
			  },
			  function(data){
				if(data==1){
					window.location.replace("<?php echo base_url();?>index.php/CheckLogin");
				}else if(data==0){
					alert('ไม่พบผู้ใช้งานนี้ในระบบ');
				}else if(data==3){
					alert('กรุณากรอกข้อมูลให้ครบถ้วน');
				}
			  });
			});
 });
 
	 </script>
    
    
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>
	
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" id="homeLoginBody" >
	
	<div id="header">
		<div id="logo">
				<img src="<?php echo base_url();?>imgs/logo.png" width="150px"></div>
			<div class="img"></div>
				<p class="p">ระบบบริหารจัดการ ระบบเงินกู้กองทุนหมู่บ้าน บ้านแม่เลิม<br>
							The Administration Management Loan Village Fund System For Mae Learm Village</p></div>
<br><br><br><br><br>

   <!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" >

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>เข้าชื่อใช้งานระบบ</h1><!--END TITLE-->
    
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="username" type="text" class="input username"  id="username"  autofocus s autocomplete="off" placeholder="ชื่อเข้าใช้งาน" required /><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password"   id="password" autocomplete="off"  placeholder="รหัสผ่าน"  required/><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="button" name="submit" value="เข้าสู่ระบบ" class="button" id="loginBt" /><!--END LOGIN BUTTON-->
    
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->
</body>
</html>

