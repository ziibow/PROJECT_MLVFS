<html>
<head>
<meta charset="utf-8">
<title>::MAELEARM VILLAGE::</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font.css">
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<link rel="stylesheet" href="<?php echo base_url();?>fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo base_url();?>fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<link rel="stylesheet" href="<?php echo base_url();?>fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <script>
	$(document).ready(function() {
		$('.content').load('<?php echo base_url();?>index.php/admin/showMember');
$('.dropdown a').click(function(event) {
				 event.preventDefault();
				 var href = $(this).attr('href');			
}); 

  	$('.submenu').click(function(event) {
				 event.preventDefault();
				 var href = $(this).attr('href');
					$('.content').load(	href);
}); 	
	}); 

$('.editMember').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		maxWidth	: 1000,
		maxHeight	: 530,
		minWidth	: 1000,
		minHeight	: 530,
		fitToView	: true,
		width 		: '100%',
		height		: '100%',
		padding     : 5,
		beforeClose : function() {
					
       		$('.content').load('<?php echo base_url();?>index.php/admin/showMember');

    }
	
});

$('.deleteMember').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		maxWidth	: 1000,
		maxHeight	: 530,
		minWidth	: 1000,
		minHeight	: 530,
		fitToView	: true,
		width 		: '100%',
		height		: '100%',
		padding     : 5,
		beforeClose : function() {
					
       		$('.content').load('<?php echo base_url();?>index.php/admin/showMember');

    }
	
});


$('.addMember').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		maxWidth	: 1000,
		maxHeight	: 530,
		minWidth	: 1000,
		minHeight	: 530,
		fitToView	: true,
		width 		: '100%',
		height		: '100%',
		padding     : 5,
		beforeClose : function() {
					
       		$('.content').load('<?php echo base_url();?>index.php/admin/showMember');

    }
	
});

$('.addFunds').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		maxWidth	: 1000,
		maxHeight	: 530,
		minWidth	: 1000,
		minHeight	: 530,
		fitToView	: true,
		width 		: '100%',
		height		: '100%',
		padding     : 5,
		beforeClose : function() {
					
       		$('.content').load('<?php echo base_url();?>index.php/admin/showFunds');

    }
	
});

$('.editFunds').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		maxWidth	: 1000,
		maxHeight	: 530,
		minWidth	: 1000,
		minHeight	: 530,
		fitToView	: true,
		width 		: '100%',
		height		: '100%',
		padding     : 5,
		beforeClose : function() {
					
       		$('.content').load('<?php echo base_url();?>index.php/admin/showFunds');

    }
	
});

$('.deleteFunds').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		maxWidth	: 1000,
		maxHeight	: 530,
		minWidth	: 1000,
		minHeight	: 530,
		fitToView	: true,
		width 		: '100%',
		height		: '100%',
		padding     : 5,
		beforeClose : function() {
					
       		$('.content').load('<?php echo base_url();?>index.php/admin/showFunds');

    }
	
});
$('.addLoanMember').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		maxWidth	: 1000,
		maxHeight	: 530,
		minWidth	: 1000,
		minHeight	: 530,
		fitToView	: true,
		width 		: '100%',
		height		: '100%',
		padding     : 5,
		beforeClose : function() {
					
       		$('.content').load('<?php echo base_url();?>index.php/admin/listLoan');

    }
	
});
$('.addPayment').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		maxWidth	: 1000,
		maxHeight	: 530,
		minWidth	: 1000,
		minHeight	: 530,
		fitToView	: true,
		width 		: '100%',
		height		: '100%',
		padding     : 5,
		beforeClose : function() {
					
       		$('.content').load('<?php echo base_url();?>index.php/admin/listPayment');

    }
	
});
$('.listLoanMember').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		maxWidth	: 1000,
		maxHeight	: 530,
		minWidth	: 1000,
		minHeight	: 530,
		fitToView	: true,
		width 		: '100%',
		height		: '100%',
		padding     : 5,
		beforeClose : function() {
					
       		$('.content').load('<?php echo base_url();?>index.php/admin/listPaymant');

    }
	
});
</script>


  </head>
  <body>
  <div id="header">
	<div id="logo">
		<img src="<?php echo base_url();?>imgs/logo.png" width="150px"></div>
	<div class="img"></div>
		<p class="p">ระบบบริหารจัดการ ระบบเงินกู้กองทุนหมู่บ้าน บ้านแม่เลิม<br>
		The Administration Management Loan Village Fund System For Mae Learm Village</p></div>
<br><br><br><br><br>
<div id="menu">
		<ul class="dropdown">
 			<li id="headMenubg">
       			 <a class="mainMenu"  id="headMenu" onClick="return false" style="font-size:25px;">
                 <img class="iconAction" src="<?php echo base_url();?>img/icon/menu.png" height="30px">&nbsp;&nbsp;เมนู
                 </a>
        	</li>
      		<li>
        		 <a class="mainMenu" href="" onClick="return false">
  <img class="iconAction" src="<?php echo base_url();?>img/icon/magChilldent.png" height="30px" > จัดการข้อมูลกองทุน</a>
        <ul>
          	<li><a class="submenu" href="<?php echo base_url();?>index.php/admin/showFunds">- ดูงบประมาณ</a></li>
         	<li><a class="addFunds" data-fancybox-type="iframe" href="<?php echo base_url();?>index.php/admin/addFundsView">- เพิ่มงบประมาณ</a></li>
           	
        </ul>
      </li>  
      <li><a class="mainMenu" href="" onClick="return false"><img class="iconAction" src="<?php echo base_url();?>img/icon/grap.png" height="30px" > จัดการข้อมูลสมาชิก</a>
        <ul>
          <li><a class="submenu" href="<?php echo base_url();?>index.php/admin/showMember">- ดูข้อมูลสมาชิก</a></li>
		 <li><a class="addMember" data-fancybox-type="iframe" href="<?php echo base_url();?>index.php/admin/addMemberView">- เพิ่มสมาชิก</a></li>
        
        </ul>
      </li>
      <li>
        <a class="mainMenu" href="" onClick="return false"><img class="iconAction" src="<?php echo base_url();?>img/icon/policy.png" height="30px" > จัดการการกู้ยืม</a>
        <ul>
          <li><a class="submenu" href="<?php echo base_url();?>index.php/admin/magLoan">- ข้อมูลการกู้ยืม</a></li>
          		
          <li><a class="submenu" href="<?php echo base_url();?>index.php/admin/listLoan">- ทำรายการกู้ยืม</a></li>
          <li><a class="submenu" href="<?php echo base_url();?>index.php/admin/listPaymant">- ชำระเงินกองทุน</a></li>
            
        </ul>
      </li>
      <li>
        <a class="mainMenu" href="" onClick="return false"><img src="<?php echo base_url();?>img/icon/magMember.png" height="30px" > รายงานสรุปข้อมูลกองทุน</a>
        <ul>
          <li><a class="submenu"  href="<?php echo base_url();?>index.php/boss/memberByArea">- สรุปยอดชำระเงิน</a></li>
          <li><a class="submenu"  href="<?php echo base_url();?>index.php/boss/memberAll">- สรุปยอดค้างชำระเงิน</a></li>
		  <li><a class="submenu" href="<?php echo base_url();?>index.php/boss/police">- สรุปยอดงบประมาณคงเหลือ</a></li>
        </ul>
      </li>
   </ul>
      </li>
    </ul>
    <script src="<?php echo base_url();?>js/menu/tendina.min.js"></script>
    <script>
      $('.dropdown').tendina({
        animate: true,
        speed: 500,
        onHover: false,
        hoverDelay: 300,
        activeMenu: $('deepest'),
        openCallback: function(clickedEl) {
          console.log('Hey dude!');
        },
        closeCallback: function(clickedEl) {
          console.log('Bye dude!');
        }
      });
    </script>
  </div>
</div>
</div>

<div class="content" align="center"></div>

<div class="alertValues"></div>
</body>
</html>