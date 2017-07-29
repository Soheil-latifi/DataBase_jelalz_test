


<?php
 include_once "PropertyClass.php";
 
   class RentProperty extends Property{
	   
	   
      /* Member variables */
      
       private  $Mortage;
       private  $Rent;  
       private  $FamilyNum;  
       private  $Marriagestate;  
      /* Member functions */
  


	  function __construct()
	   {
      }
	  
	  
      function __destruct() {  
           
      }
  
  
      /* get,set functions */

	  
      public function setMortage($Mortage_){
         $this->Mortage = $Mortage_;
      } 
      public function getMortage(){
         return $this->Mortage ;
      }
	  
      public function setRent($Rent_){
         $this->Rent = $Rent_;
      } 
      public function getRent(){
         return $this->Rent ;
      }    
	  
      public function setFamilyNum($FamilyNum_){
         $this->FamilyNum = $FamilyNum_;
      } 
      public function getFamilyNum(){
         return $this->FamilyNum ;
      }
	  
      public function setMarriagestate($Marriagestate_){
         $this->Marriagestate = $Marriagestate_;
      } 
      public function getMarriagestate(){
         return $this->Marriagestate ;
      }
	 public function setBusinessNum($BusinessNum_){
         $this->BusinessNum = $BusinessNum_;
      } 
      public function getBusinessNum(){
         return $this->BusinessNum ;
      }
	  	

       /* Member functions */

	  
	  
	  	 
	  

}
?>