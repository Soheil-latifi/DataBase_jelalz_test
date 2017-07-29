<?php
	include_once "Person.php";
   class Renter extends Person  {
	   
	   
      /* Member variables */
       private  $Marriage;
       private  $FamilyNum;
       private  $Rentestimate;  
       private  $Mortage;  
	   
	   	  
      /* Member functions */
  		function __construct(){
  		}
  

	  
	  
	  
      function __destruct() {  
           
      }
  
  
      /* get,set functions */

	  
      public function setMarriage($Marriage_){
         $this->Marriage = $Marriage_;
      } 
      public function getMarriage(){
         return $this->Marriage ;
      }
	  
      public function setFamilyNum($FamilyNum_){
         $this->FamilyNum = $FamilyNum_;
      } 
      public function getFamilyNum(){
         return $this->FamilyNum ;
      }    
	  
      public function setRentestimate($Rentestimate_){
         $this->Rentestimate = $Rentestimate_;
      } 
      public function getRentestimate(){
         return $this->Rentestimate ;
      }
	  
	  public function setMortage($Mortage_){
         $this->Mortage = $Mortage_;
      } 
      public function getMortage(){
         return $this->Mortage ;
      }	  
	   

  
       /* Member functions */

	   /* Add Renter function */
      public function Add_Renter(){
			

      }
	  
	  	 /* Show Renter function */
	  public function Show_Renter(){
      
	  
      }
	  
	  	  /* Edit Renter function */
	  public function Edit_Renter($OldSSN_,$Marriage_,$FamilyNum_,$Rentestimate_,$Mortage_,$SSN_){
      
	  
      }
	  
	  	   /* Search Renter function */
	  public function Search_Renter($SSN_){
      
	  
      }

	  
	      /* Delete Renter function */
	  public function Delete_Renter($SSN_){
      

      }
	  
	  

}
?>