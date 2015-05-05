<?php 
class Member extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $memberId ; ######  รหัสสมาชิก  ######
    var $memberUsername ; ######  ชื่อเข้าใช้งาน  ######
    var $memberPassword ; ######  รหัสผ่าน  ######
    var $memberName ; ######  ชื่อสมาชิก  ######
    var $memberLastname ; ######  นามสกุล  ######
    var $memberSex ; ######  เพศ  ######
    var $memberPosition ; ######  ตำแหน่ง  ######
    var $memberBirthday ; ######  วันเกิด  ######
    var $memberAddress ; ######  ที่อยู่  ######
    var $memberTel ; ######  เบอร์โทร  ######
    var $memberStatus ; ######  สถานะเข้าใช้งาน  ######
    var $statusMember ; ######  สถานะเกี่ยวกับการกู้  ######
    var $memberActiveStatus ; ######  สถานะบัญชีเข้าใช้งาน  ######
###### End Attribute  ###### 

 ###### SET : $memberId ######
    function setMemberId($memberId){
        $this->memberId = $memberId; 
     }
###### End SET : $memberId ###### 


###### GET : $memberId ######
    function getMemberId(){
        return $this->memberId; 
     }
###### End GET : $memberId ###### 


 ###### SET : $memberUsername ######
    function setMemberUsername($memberUsername){
        $this->memberUsername = $memberUsername; 
     }
###### End SET : $memberUsername ###### 


###### GET : $memberUsername ######
    function getMemberUsername(){
        return $this->memberUsername; 
     }
###### End GET : $memberUsername ###### 


 ###### SET : $memberPassword ######
    function setMemberPassword($memberPassword){
        $this->memberPassword = $memberPassword; 
     }
###### End SET : $memberPassword ###### 


###### GET : $memberPassword ######
    function getMemberPassword(){
        return $this->memberPassword; 
     }
###### End GET : $memberPassword ###### 


 ###### SET : $memberName ######
    function setMemberName($memberName){
        $this->memberName = $memberName; 
     }
###### End SET : $memberName ###### 


###### GET : $memberName ######
    function getMemberName(){
        return $this->memberName; 
     }
###### End GET : $memberName ###### 


 ###### SET : $memberLastname ######
    function setMemberLastname($memberLastname){
        $this->memberLastname = $memberLastname; 
     }
###### End SET : $memberLastname ###### 


###### GET : $memberLastname ######
    function getMemberLastname(){
        return $this->memberLastname; 
     }
###### End GET : $memberLastname ###### 


 ###### SET : $memberSex ######
    function setMemberSex($memberSex){
        $this->memberSex = $memberSex; 
     }
###### End SET : $memberSex ###### 


###### GET : $memberSex ######
    function getMemberSex(){
        return $this->memberSex; 
     }
###### End GET : $memberSex ###### 


 ###### SET : $memberPosition ######
    function setMemberPosition($memberPosition){
        $this->memberPosition = $memberPosition; 
     }
###### End SET : $memberPosition ###### 


###### GET : $memberPosition ######
    function getMemberPosition(){
        return $this->memberPosition; 
     }
###### End GET : $memberPosition ###### 


 ###### SET : $memberBirthday ######
    function setMemberBirthday($memberBirthday){
        $this->memberBirthday = $memberBirthday; 
     }
###### End SET : $memberBirthday ###### 


###### GET : $memberBirthday ######
    function getMemberBirthday(){
        return $this->memberBirthday; 
     }
###### End GET : $memberBirthday ###### 


 ###### SET : $memberAddress ######
    function setMemberAddress($memberAddress){
        $this->memberAddress = $memberAddress; 
     }
###### End SET : $memberAddress ###### 


###### GET : $memberAddress ######
    function getMemberAddress(){
        return $this->memberAddress; 
     }
###### End GET : $memberAddress ###### 


 ###### SET : $memberTel ######
    function setMemberTel($memberTel){
        $this->memberTel = $memberTel; 
     }
###### End SET : $memberTel ###### 


###### GET : $memberTel ######
    function getMemberTel(){
        return $this->memberTel; 
     }
###### End GET : $memberTel ###### 


 ###### SET : $memberStatus ######
    function setMemberStatus($memberStatus){
        $this->memberStatus = $memberStatus; 
     }
###### End SET : $memberStatus ###### 


###### GET : $memberStatus ######
    function getMemberStatus(){
        return $this->memberStatus; 
     }
###### End GET : $memberStatus ###### 


 ###### SET : $statusMember ######
    function setStatusMember($statusMember){
        $this->statusMember = $statusMember; 
     }
###### End SET : $statusMember ###### 


###### GET : $statusMember ######
    function getStatusMember(){
        return $this->statusMember; 
     }
###### End GET : $statusMember ###### 


 ###### SET : $memberActiveStatus ######
    function setMemberActiveStatus($memberActiveStatus){
        $this->memberActiveStatus = $memberActiveStatus; 
     }
###### End SET : $memberActiveStatus ###### 


###### GET : $memberActiveStatus ######
    function getMemberActiveStatus(){
        return $this->memberActiveStatus; 
     }
###### End GET : $memberActiveStatus ###### 



############### FUNCTION LOGIN ####################
function login()
{
	$this->db->where('memberUsername',$this->getMemberUsername());
	$this->db->where('memberPassword',MD5($this->getMemberPassword()));
	return $this->db->get('tblmember')->result_array();
	
	}
	
############ FUNCTION FINDBYALL ###############
function findByAll()
	{	
		$this->db->where('memberStatus','member');
		$this->db->where('show',1);
		$query = $this->db->get('tblmember')->result_array();
		return $query;
	}
########## END FUNCTION FINDBYALL #############

function getMemberType()
{
	$query = $this->db->get('tbltype')->result_array();
		return $query;
	}
	
	
############ FUNCTION ADDFUND #################
function addMember()
	{
	$data = array(
			'memberUsername' => $this->getMemberUsername(),
			'memberPassword' => MD5($this->getMemberPassword()),
			
			'memberName' => $this->getMemberName(),
			'memberLastname' => $this->getMemberLastname(),
			'memberAddress' => $this->getMemberAddress(),
			'memberTel' => $this->getMemberTel(),
			'memberPosition' => $this->getMemberPosition(),
			'memberBirthday' => $this->getMemberBirthday(),
			'memberStatus' => $this->getMemberStatus()
		);
	$this->db->insert('tblmember', $data); 
	return $this->db->insert_id();
	}

########## END FUNCTION ADDFUND ###############


function editMember()
	{
	$data = array(
			'memberName ' => $this->getMemberName(),
			'memberLastname' => $this->getMemberLastname(),
			'memberAddress' => $this->getMemberAddress(),
			'memberTel' => $this->getMemberTel(),
			'memberPosition' => $this->getMemberPosition(),
			'memberBirthday' => $this->getMemberBirthday(),
			'memberStatus' => $this->getMemberStatus()
		);
		$this->db->where('memberId',$this->getMemberId());
		$this->db->update('tblmember', $data); 
	
	}

function getMemberPK()
{
		//$this->db->join('tbltype','tbltype.typeId = tblfunds.typeId');
		$this->db->where('tblmember.memberId',$this->getMemberId());
		$query = $this->db->get('tblmember')->result_array();
		return $query;
	}
	
	function deleteMember()
	{
		$data = array(
		'show'=>2
		);
		$this->db->where('memberId',$this->getMemberId());
		$this->db->update('tblmember',$data); 
	
	}
	
	############ FUNCTION FINDBYALL ###############
function search()
	{	
		$this->db->like('memberName',$this->getMemberName());
		$this->db->where('memberStatus','member');
		$query = $this->db->get('tblmember')->result_array();
		return $query;
	}
########## END FUNCTION FINDBYALL #############

function getMemberNoloan()
{
		$this->db->where('loanStatus','Noloan');
		$this->db->where('memberStatus','member');
		$query = $this->db->get('tblmember')->result_array();
		return $query;
	
	}
	
	
function getMemberloan()
{
		$this->db->where('loanStatus','loan');
		$this->db->where('memberStatus','member');
		$query = $this->db->get('tblmember')->result_array();
		return $query;
	
	}
function getMemberAll()
{
		$this->db->where('memberStatus','member');
		$query = $this->db->get('tblmember')->result_array();
		return $query;
	}
	
		############ FUNCTION FINDBYALL ###############
function searchNoLoan()
	{	
		$this->db->like('memberName',$this->getMemberName());
		$this->db->where('memberStatus','member');
		$query = $this->db->get('tblmember')->result_array();
		return $query;
	}
########## END FUNCTION FINDBYALL #############
function updateStatusLoan()
{
	$data=array('loanStatus'=>'loan');
	$this->db->where('memberId',$this->getMemberId());
	$this->db->update('tblmember',$data);
	}
	
function getMemberPKpayment()
{
		$this->db->join('tblloan','tblloan.memberId = tblmember.memberId');
		$this->db->join('tbltype','tbltype.typeId = tblloan.typeId');
		$this->db->where('tblmember.memberId',$this->getMemberId());
		$this->db->limit(1);
		$this->db->order_by('tblmember.memberId','DESC');
		$query = $this->db->get('tblmember')->result_array();
		return $query;
	}
}
?>