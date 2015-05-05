<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font.css">
<br><br>
 <h2 id="headTitleContent" align="center"><?php echo $header ;?></h2>
	<div class="table" align="center">
  <p>&nbsp;</p>
  <br>
  <div id="searchResult">
<table width="80%" border="0" align="center" cellpadding="7" cellspacing="3">
    <tr> 
        <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ชื่อ - สกุล</p></th>  
        <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>วันที่</p></th>
        <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">ประเภทกองทุน</th>
        <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>จำนวนเงิน </p></th>      
    </tr>
    
    <?php
		if($listMember){
			$sum = 0;
	 			foreach($listMember as $m){
					 $sum = $sum+$m['loanNum'];
	?>
    
    <tr>      
    	<td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p>
			<?php echo $m['memberName'];?>&nbsp;&nbsp;<?php echo $m['memberLastname'];?></p>
        </td>   
        <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p >
			<?php $date = new DateTime($m['loanDate']);echo $date->format('d-m-Y');?></p>
        </td>
       <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p>
	  		<?php echo $m['typeName'];?></p>
       </td>
       <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p>
	   		<?php echo $m['loanNum'];?></p>
       </td> 
    </tr>
    <?php }?>
   <tr>
   		<td colspan="8" align="center"><div class="ajax_paging">
			<?php echo $this->pagination->create_links(); ?></div>
       </td>
  </tr>
   <?php }else{?>
  	<tr>
  		<td colspan="8" align="center">ไม่พบข้อมูล</td>
  </tr>
  <?php }?>
</table>

<p align="center">
  <input type="button" onClick="window.print()" name="button" id="button" value="พิมพ์">
</p>
<br>
<br>
<br>
</div>
</div>
