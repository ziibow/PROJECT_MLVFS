<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct(){ /// เป็นฟังชั่นที่จะทำงานก่อน index จะทำงานเมื่อมีการเรียกใช้คราส Login นี้
            parent::__construct();
			
    }
	function index()
	{	
		$this->load->view('bossView');
		
	}
########### function showFunds แสดงข้อมูลงบประมาณ ############
	function showFunds()
	{
		$data['type']=$this->Member->getMemberType();
		$data['listFunds']=$this->Funds->findByAll();
		$this->load->view('listFunds',$data);
		}
######### END function showFunds แสดงข้อมูลงบประมาณ ###########


########### function showFunds แสดงข้อมูลงบประมาณ ############
	function showFundsByType($typeId)
	{
		if ($typeId ==0)
		{
			$data['listFunds']=$this->Funds->findByAll();
			}else {
		$this->Funds->setTypeId($typeId);
		$data['listFunds']=$this->Funds->getByType();
			}
		$this->load->view('listFundsByType',$data);
		
	}
######### END function showFunds แสดงข้อมูลงบประมาณ ###########


########### function showMember แสดงข้อมูลผู้ใช้งานระบบ ############
	function showMember()
	{
		$data['listMember']=$this->Member->findByAll();
		$this->load->view('listMember',$data);
		
		
		}
######## END function showMember แสดงข้อมูลผู้ใช้งานระบบ ############


########### function showMember แสดงข้อมูลผู้ใช้งานระบบ ############
	function searchMember()
	{
		$memberName = $this->input->post('searchBox');
		$this->Member->setMemberName($memberName);
		$data['listMember']=$this->Member->search();
		$this->load->view('listMemberResult',$data);
		
		
		}
######## END function showMember แสดงข้อมูลผู้ใช้งานระบบ ############

########### function addMember เพิ่มผู้ใช้งานระบบ ############
	function addMember()
	{
		//var_dump($_POST);
		$memberUsername = $this->input->post('memberUsername');
		$memberPassword = $this->input->post('memberPassword');
		$memberName = $this->input->post('memberName');
		$memberLastname = $this->input->post('memberLastname');
		$memberAddress = $this->input->post('memberAddress');
		$memberTel = $this->input->post('memberTel');
		$memberPosition = $this->input->post('memberPosition');
		$memberBirthday = $this->input->post('memberBirthday');
		$memberStatus = $this->input->post('memberStatus');
		//var_dump($_POST);
		//die();
		$this->Member->setMemberUsername($memberUsername);
		$this->Member->setMemberPassword($memberPassword);
		$this->Member->setMemberName($memberName);
		$this->Member->setMemberLastname($memberLastname);
		$this->Member->setMemberAddress($memberAddress);
		$this->Member->setMemberTel($memberTel);
		$this->Member->setMemberPosition($memberPosition);
		$this->Member->setMemberBirthday($this->formatDate($memberBirthday));
		$this->Member->setMemberStatus($memberStatus);
		
		$this->Member->addMember();
		echo 'เพิ่มแล้ว';
		}
########### END function addMember เพิ่มผู้ใช้งานระบบ ########

######### function addMemberView แสดงหน้าshow addview ####
	function addMemberView()
	{
		$this->load->view('addMember');
		}
######## END function addMemberView แสดงหน้าshow addview #####


######### function addMemberView แสดงหน้าshow addview ####
	function addBossView()
	{
		$this->load->view('addBoss');
		}
######## END function addMemberView แสดงหน้าshow addview #####


###### function addFundsView แสดงหน้าshow addFunds ########	
	function editMemberView($memberId)
	{
		$this->Member->setMemberId($memberId);
		//$data['type']= $this->Member->getMemberType();
		$data['member']= $this->Member->getMemberPK();
		$this->load->view('editMember',$data);
		}
###### END function addFundsView แสดงหน้าshow addFunds #####

	function editMemberAction()
	{
		//var_dump($_POST);
		$memberId = $this->input->post('memberId');
		$memberName = $this->input->post('memberName');
		$memberLastname = $this->input->post('memberLastname');
		$memberAddress = $this->input->post('memberAddress');
		$memberTel = $this->input->post('memberTel');
		$memberPosition = $this->input->post('memberPosition');
		$memberBirthday = $this->input->post('memberBirthday');
		$memberStatus = $this->input->post('memberStatus');
		
	
		$this->Member->setMemberId($memberId);
		$this->Member->setMemberName($memberName);
		$this->Member->setMemberLastname($memberLastname);
		$this->Member->setMemberAddress($memberAddress);
		$this->Member->setMemberTel($memberTel);
		$this->Member->setMemberPosition($memberPosition);
		$this->Member->setMemberBirthday($memberBirthday);
		$this->Member->setMemberStatus($memberStatus);
		
		$this->Member->editMember();
		echo 'แก้ไขเสร็จแล้ว';
		}
########### function addFunds เพิ่มงบประมาณ ############		


function deleteMember($memberId){
		
		echo "<body style='text-align: center'><p>คุณต้องการลบข้อมูล หรือไม่</p>
				<p>
				  <a href='".base_url()."index.php/admin/deleteMemberAction/".$memberId."'><input type='button' name='button' id='button' value='ยืนยันการลบ'></a>  &nbsp;&nbsp;&nbsp;
				  <a onClick='parent.jQuery.fancybox.close();'><input type='button' name='button2' id='button2' value='ยกเลิก'></a>
				</p>
				</body>
				";
	}
	
	function deleteMemberAction($memberId)
	{
		$this->Member->setMemberId($memberId);
		$this->Member->deleteMember();
		echo 'ลบสำเร็จ';
		}
		
		
function formatDate($date) {
    $data = explode("/", $date);
	//var_dump($data);
	//die();
    $newdata = sprintf("%d-%d-%d", $data[2], $data[1], $data[0]);
    return $newdata;

}

		function addFunds()
	{
		//var_dump($_POST);
		$fundDate = $this->input->post('fundDate');
		$typeId = $this->input->post('typeId');
		$fundDetail = $this->input->post('fundDetail');
		$fundAmount = $this->input->post('fundAmount');
		
		$this->Funds->setFundDate($fundDate);
		$this->Funds->setTypeId($typeId);
		$this->Funds->setFundDetail($fundDetail);
		$this->Funds->setFundAmount($fundAmount);
		
		$this->Funds->addFund();
		echo 'เพิ่มแล้ว';
		}
		
########### END  function addFunds เพิ่มงบประมาณ ############			

###### function addFundsView แสดงหน้าshow addFunds ########	
	function addFundsView()
	{
		$data['type']= $this->Member->getMemberType();
		$this->load->view('addFunds',$data);
		}
###### END function addFundsView แสดงหน้าshow addFunds #####

###### function addFundsView แสดงหน้าshow addFunds ########	
	function editFundsView($fundId)
	{
		$this->Funds->setFundId($fundId);
		$data['type']= $this->Member->getMemberType();
		$data['funds']= $this->Funds->getPK();
		$this->load->view('editFunds',$data);
		}
###### END function addFundsView แสดงหน้าshow addFunds #####

	function editFundsAction()
	{
		//var_dump($_POST);
		$fundId = $this->input->post('fundId');
		$fundDate = $this->input->post('fundDate');
		$typeId = $this->input->post('typeId');
		$fundDetail = $this->input->post('fundDetail');
		$fundAmount = $this->input->post('fundAmount');
		
		$this->Funds->setFundId($fundId);
		$this->Funds->setFundDate($fundDate);
		$this->Funds->setTypeId($typeId);
		$this->Funds->setFundDetail($fundDetail);
		$this->Funds->setFundAmount($fundAmount);
		
		$this->Funds->editFund();
		echo 'แก้ไขเสร็จแล้ว';
		}
		
##############################################################
 	function allFunds()
	{
		//$data['type']= $this->Member->getMemberType();
		$data['funds']= $this->Funds->getAllFunds();
		
		$data['loan']= $this->Funds->getAllUseFunds();
		
		$sumdata=array();
		$i=0;
		foreach($data['funds']as $r)
		{
			foreach($data['loan']as $s)
			{
					if($r['year']==$s['year'])
					{
						$sumdata[$i]=array();
						$sumdata[$i]['year']=0;
						$sumdata[$i]['sum']=0;
						$sumdata[$i]['year']=$s['year'];
						$sumdata[$i]['sum']=$r['sumfundAmount']-$s['sumloanNum'];
						$i++;
					}
			}
		}
		$data['sumdata']=$sumdata;
		$this->load->view('reportFund',$data);
		//var_dump($data);
		}
##############################################################
		

########### function showVillage แสดงข้อมูลผู้ใช้งานระบบ ############
	function showVillage()
	{
		$data['listVillage']=$this->Village->findByAllVillage();
		$this->load->view('listVillage',$data);
		}
######## END function showMember แสดงข้อมูลผู้ใช้งานระบบ ############
	
	
	function deleteFunds($fundId){
		
		echo "<body style='text-align: center'><p>คุณต้องการลบข้อมูล หรือไม่</p>
				<p>
				  <a href='".base_url()."index.php/admin/deleteFundsAction/".$fundId."'><input type='button' name='button' id='button' value='ยืนยันการลบ'></a>  &nbsp;&nbsp;&nbsp;
				  <a onClick='parent.jQuery.fancybox.close();'><input type='button' name='button2' id='button2' value='ยกเลิก'></a>
				</p>
				</body>
				";
	}
	
	function deleteFundsAction($fundId)
	{
		$this->Funds->setFundId($fundId);
		$this->Funds->deleteFund();
		echo 'ลบสำเร็จ';
		}
		
function magLoan($selct=1)
{
	if($selct == 2){
	$data = $this->Member->getMemberNoloan();
	}
	else if($selct==1)
	{
		$data = $this->Member->getMemberloan();
		}else if($selct==3)
		{
			$data = $this->Member->getMemberAll();
			}
	//var_dump($data);
	$result['listMember']=$data;
	$result['select']=$selct;
	$this->load->view('listMemberLoan',$result);

}
function listLoan()
{
	$data ['listMember']= $this->Member->getMemberNoloan();
	$this->load->view('listLoan',$data);
	}
	
########### function showMember แสดงข้อมูลผู้ใช้งานระบบ ############

	function searchMemberNoLoan()
	{
		$memberName = $this->input->post('searchBox');
		$this->Member->setMemberName($memberName);
		$data['listMember']=$this->Member->searchNoLoan();
		$this->load->view('listLoanResult',$data);
		
		
		}
######## END function showMember แสดงข้อมูลผู้ใช้งานระบบ ############



###### function addFundsView แสดงหน้าshow addFunds ########	
	function addMemberLoanView($memberId)
	{
		$this->Member->setMemberId($memberId);
		$data['type']=$this->Member->getMemberType();
		//$data['type']= $this->Member->getMemberType();
		$data['member']= $this->Member->getMemberPK();
		$this->load->view('addLoan',$data);
		}
###### END function addFundsView แสดงหน้าshow addFunds #####

function addMemberLoanAction()
{
	$memberId=$this->input->post('memberId');
	$typeId=$this->input->post('typeId');
	$loanNum=$this->input->post('loanNum');
	
	$this->Pay->setMemberId($memberId);
	$this->Pay->setTypeId($typeId);
	$this->Pay->setLoanNum($loanNum);
	
	$this->Pay->addLoan();
	$this->Member->setMemberId($memberId);
	$this->Member->updateStatusLoan();
	echo 'เพิ่มสำเร็จ';
	
	}
/////////////////////////////////////////////////	
	function listPaymant()
{
	$data ['listMember']= $this->Member->getMemberloan();
	$this->load->view('listPayment',$data);
	}
	
###### function addFundsView แสดงหน้าshow addFunds ########	
	function addPayMember($memberId)
	{
		$this->Member->setMemberId($memberId);
		$data['type']=$this->Member->getMemberType();
		//$data['type']= $this->Member->getMemberType();
		$data['member']= $this->Member->getMemberPKpayment();
		$this->load->view('paymentLoan',$data);
		}
###### END function addFundsView แสดงหน้าshow addFunds #####

function listPaymentMember($memberId)
{
	$this->Pay->setMemberId($memberId);
	$data['listLoan'] = $this->Pay->getPaymentMember();
	$this->load->view('profileLoan',$data);
	//var_dump($data);
	}
	
function pay($loanId,$memberId)
{
	
	echo "<body style='text-align: center'><p>คุณต้องการชำระหรือไม่</p>
				<p>
				  <a href='".base_url()."index.php/admin/payAction/".$loanId."/".$memberId."'><input type='button' name='button' id='button' value='ยืนยันการชำระ'></a>  &nbsp;&nbsp;&nbsp;
				  <a onClick='parent.jQuery.fancybox.close();'><input type='button' name='button2' id='button2' value='ยกเลิก'></a>
				</p>
				</body>
				";
	}
	
function payAction($loanId,$memberId)
{
	$this->Pay->setLoanId($loanId);
	$this->Pay->updateStatus();
	$this->Pay->setMemberId($memberId);
	$data = $this->Pay->getLoanPaymentMember();
	if(!$data)
	{
		$this->Pay->updateStatusNoLoan();
		}
	echo 'ชำระสำเร็จ';
	
	}
	
function reportAllPay()
{
	$data ['listMember'] = $this->Pay->getReportPay();
	$data ['header']= "รายงานสรุปยอดชำระเงิน";
	//var_dump($data);
	$this->load->view('reportPay',$data);
	}
	
function reportAllNotPay()
{
	$data ['listMember'] = $this->Pay->getReportNotPay();
	$data ['header']= "รายงานสรุปยอดค้างชำระเงิน";
	//var_dump($data);
	$this->load->view('reportPay',$data);
	
	}
	
	
function sumFunds()
{
	$data=$this->Funds->findAllFund();
	var_durm($data);
	}




function checkUser()
{
	$username = $this->input->post('username');
	$this->Member->setMemberUsername($username);
	$data=$this->Member->checkUsername();
	if ($data){
		echo 0;
		}
		else {
			echo $username;
			}
	}
}

?>