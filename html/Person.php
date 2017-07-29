<?php
   class Person {
	   
	   
      /* Member variables */
       private  $Name;
       private  $Sname;
       private  $Phone;  
       private  $Address;  
       private  $Ssn;  
       private  $BusinessNum; 
	   	  
      /* Member functions */
  
  
	  function __construct() {

      }

	  
	  
      function __destruct() {  
           
      }
  
  
      /* get,set functions */

	  
      public function setName($Name_){
         $this->Name = $Name_;
      } 
      public function getName(){
         return $this->Name ;
      }
	  
      public function setSname($Sname_){
         $this->Sname = $Sname_;
      } 
      public function getSname(){
         return $this->Sname ;
      }    
	  
      public function setPhone($Phone_){
         $this->Phone = $Phone_;
      } 
      public function getPhone(){
         return $this->Phone ;
      }
	  
	  public function setAddress($Address_){
         $this->Address = $Address_;
      } 
      public function getAddress(){
         return $this->Address ;
      }	  
	  
	  public function setSsn($Ssn_){
         $this->Ssn = $Ssn_;
      } 
      public function getSsn(){
         return $this->Ssn;
      }	  
	  
      public function setBusinessNum($BusinessNum_){
         $this->BusinessNum = $BusinessNum_;
      } 
      public function getBusinessNum(){
         return $this->BusinessNum ;
      }	  

  
       /* Member functions */

	   /* Add Person function */
      public function Add_Person(){
		
      }
	  
	  	 /* Show Person function */
	  public function Show_Person(){
      
	  
      }
	  
	  	  /* Edit Person function */
	  public function Edit_Person(){
      
	  
      }
	  
	  	   /* Search Person function */
	  public function Search_Person($SSN_){
      
	  
      }

	  
	      /* Delete Person function */
	  public function Delete_Person($SSN_){
      

      }
	  
	  
    		 /* Users List function */
   	   public function Businessnumber($BusinessNum_){
      
	  
	   }
}
?>
