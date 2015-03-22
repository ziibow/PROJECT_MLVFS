<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>::MAELEARM VILLAGE::</title>
		
		<link rel="stylesheet" href="<?php echo base_url();?>css/loginForm.css">
     	<link rel="stylesheet" href="<?php echo base_url();?>css/menu.css">
  		<link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
    	<link rel="stylesheet" href="<?php echo base_url();?>css/header.css">
    	<link rel="stylesheet" href="<?php echo base_url();?>css/table.css">
     	<link rel="stylesheet" href="<?php echo base_url();?>css/font.css">
	  	<link href="<?php echo base_url()?>css/pace-theme-barber-shop.css" rel="stylesheet" />
        
     <script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
  	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
     
     
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
     <script>
     	 $(document).ready(function(){
		 $('.load').load( '<?php echo base_url();?>index.php/home/loginForm' ); 
 });
	</script>
	
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" id="homeLoginBody" >
	
	<div id="header">
		<div id="logo">
			<img src="<?php echo base_url();?>imgs/logo.png" width="150">
        </div>
	  <p class="p">ระบบบริหารจัดการ ระบบเงินกู้กองทุนหมู่บ้าน บ้านแม่เลิม<br>
	  The Administration Management Loan Village Fund System For Mae Learm Village</p>
    </div>
<br><br><br><br><br>

<!--<div id="wrapper" align="center">
    
       <h2>เข้าใช้งานระบบ</h2>
         <input type="text" name="username" id="username" />
         <input type="password" name="password" id="password" />
         <input type="submit" name="Submit" value="Submit" id="loginBt" />
       
	</div>-->
  
   <div class="loginForm" align="center">
<form id="formLoginPost" action="<?php echo base_url();?>index.php/login/redirects" method="post">
     <table width="450" border="0" align="center" cellpadding="5" cellspacing="0" class="load">
       
     </table>
</form>
</div>
</body>
</html>

