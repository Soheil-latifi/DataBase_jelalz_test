<?php
	include_once "Person.php";
   class Buyer extends Person  {
	   
	   
      /* Member variables */
       private  $Budget;
	   
	   	  
      /* Member functions */
  		function __construct(){
  		}
  

	  
	  
	  
      function __destruct() {  
           
      }
  
  
      /* get,set functions */

	  
	  
	  public function setBudget($Budget){
         $this->Budget = $Budget;
      } 
      public function getBudget(){
         return $this->Budget ;
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