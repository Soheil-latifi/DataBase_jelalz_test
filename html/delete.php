<?php 
   session_start();
 			
				//	 including 
          include_once "Db_info.php";
			include_once "updateBorder.php"; 
          include_once "Border.php";
 			 include_once "CLasses.php";
 			 include_once "BorderDelete.php";
 			 include_once  "ControlClass.php";
 			 
         	

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="NorVanK" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>admin manegment panel</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--Echo border stuff-->
<?php 
  SearchBorder::ShowHeader($_SESSION["UserName"] , $_SESSION["RSname"]);

?>
    <!-- LOGO HEADER END-->
        
    <!-- MENU SECTION END-->
         <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Search</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                     search what you want!
                    </div>
                </div>
            </div>
            
     <div class="col-md-12 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Search BOX
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class=""><a href="#home-pills" data-toggle="tab">Sale Property</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab"> Rent Property</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Renter</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Buyer</a>
                                </li>
                                <li class=""><a href="#SaleAgreement" data-toggle="tab">Sale Agreement</a>
                                </li> <!-- class = active  -> abi mishe emam -->
                                
                                <li class="active"><a href="#RentAgreement" data-toggle="tab">Rent Agreement</a>
                                </li> <!-- class = active  -> abi mishe emam -->
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade" id="home-pills"> <!-- Property -->
                                    
                                    
                                    
                                    <!-- Property-->
      		                              <?php 
      		                              
      		            		      		   	      
      		            		      		   	     				DeleteBorder::ShowSaleFormDelete();
      		            		      		   	      
      		                              ?>
      		                               
      		                              
                                   <!-- property form end -->
                                    
                                </div>
                                <!-- end property search -->
                                
                                <div class="tab-pane fade" id="profile-pills">
                                    
                                     <?php 
                                     			
      		                              			    
      		                              			    	 DeleteBorder::ShowRentFormDelete();
      		                              			    
      		                            ?>
                                    <!-- RENTTTTTTTTTTTTTTTT Form -->
                                   
                                    
                                </div><!-- end of RENT-->
                                
                                
											 <!-- Renter form  -->                        
                                <div class="tab-pane fade" id="messages-pills">
                                			<?php
                                			
                                		 	 DeleteBorder::ShowRenterFormDelete();
      		                              			    
                                			 ?>
                                <!-- Renter form end -->
                                	</div>
                                
                                
                                
                              		<!--Buyer form -->     
                                <div class="tab-pane fade " id="settings-pills">
										       
												<?php
																															
																		DeleteBorder::ShowBuyerFormDelete();
												?>										       
										       <!--Buyer form end -->                 	     
                                </div>
                                
   										<div class="tab-pane fade " id="SaleAgreement">
										       
												<?php
												
																				DeleteBorder::ShowSaleAgreementFormDelete();
																													  
												  ?>										       
										       <!--Buyer form end -->                 	     
                                </div>
                                                             
	                                 
   										<div class="tab-pane fade active in" id="RentAgreement">
										       
												<?php
														
																	
												 																
																			DeleteBorder::ShowRentAgreementFormDelete();
												  ?>										       
										       <!--Buyer form end -->                 	     
                                </div>
                                
                                <!--REst of search forms -->
                              
                                <!--			following pattern should be followed 
											<div class="tab-pane fade active in" id="settings-pills">
										                        	     
                                </div> 
                                -->                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
            
            
            <!-------------------------------------------- -->
           
            <?php
            $controlobj = new Control();
            
         
          
         
$mysqli = new mysqli($Server, $UserName, $Password, $DBname);
//$mysqli = $controlobj->getmysqliobj();
  $BN =  $_SESSION['BusinessNum'];
				// sale form	            
      if($_SERVER["REQUEST_METHOD"] == "POST") 
      {
           echo "obla";
 // 							Submit          	
				if(strcmp( $_POST['submit'] , "DR" ) == 0  )
					{
						$Ssn=	$_POST["Ssn"];
						 
							$q ="	DELETE FROM Renter
    												  WHERE Ssn = '$Ssn' and BusinessNum = '$BN' ";
						$mysqli->query($q);
					}
					

				if(strcmp( $_POST['submit'] , "DS" ) == 0  )
					{
						$Ssn=	$_POST["Ssn"];
						 
							$q ="	DELETE FROM Buyer
    												  WHERE Ssn = '$Ssn' and BusinessNum = '$BN' ";
						$mysqli->query($q);
					}
					
										
					
					
					if(strcmp( $_POST['submit'] , "DSP" ) == 0  )
					{
						$PC=	$_POST["Postalcode"];
							
							$q ="DELETE FROM Property
								      WHERE Postalcode = '$PC' and  BusinessNum = '$BN'";
						$mysqli->query($q);
					}
					
					
					
///                                 Finds					
				if(strcmp( $_POST['submit'] , "Dubmit1" ) == 0  )
					{
						  	          
            	
            	$PC= $_POST["Postalcode"];
            	$q = "select count(*) 
 							from SaleProperty S , Property P 
  						    where P.Postalcode = S.Postalcode and  P.BusinessNum
     							= '$BN' and P.Postalcode = '$PC' " ;
     							
     					$result=$mysqli->query($q); 
     					$row = $result->fetch_assoc(); 
     					
     					
     						if($row["count(*)"] == 1) {
     							 
     								$q = "select * 
 									from SaleProperty S , Property P 
  						    		where P.Postalcode = S.Postalcode and  P.BusinessNum
     									= '$BN' and P.Postalcode = '$PC' " ;
     								$result=$mysqli->query($q);
     								 
     								$row = $result->fetch_assoc();
     							
     								//	Setting Attributes the class 
									$SaleP = new SaleProperty(); 
									$SaleP->setSname($row["Sname"]);
									$SaleP->setName($row["Name"]);
									$SaleP->setPhone($row["Phone"]);
									$SaleP->setOwnerSsn($row["OwnerSsn"]); 
									$SaleP->setBuildDate($row["BuildDate"]);	
									$SaleP->setMeter($row["Meter"]);
									$SaleP->setBusinessNum($BN);
									$SaleP->setPostalcode($row["Postalcode"]); 
									$SaleP->setAddress($row["Address"]);
									$SaleP->setEstimatedWorth($row["EstimatedWorth"]);	
									DeleteBorder :: ShowDeleteSaleProperty($SaleP);
									//									
/*									 */
									
									     								
     								
     							 
        					}
			 			
			 		}
			 			
			 			
			 						 			
		//                     rent property	 			
					if(strcmp( $_POST['submit'] , "Dubmit2" ) == 0  )
					{
						            
							
            	$PC= $_POST["Postalcode"];
            	$q = "select count(*) 
 							from RentProperty S , Property P 
  						    where P.Postalcode = S.Postalcode and  P.BusinessNum
     							= '$BN' and P.Postalcode = '$PC' " ;
     							
     					$result=$mysqli->query($q); 
     					$row = $result->fetch_assoc(); 
					
							
						
     						if($row["count(*)"] == 1) {
     							 
     								$q = "select * 
 									from RentProperty S , Property P 
  						    		where P.Postalcode = S.Postalcode and  P.BusinessNum
     									= '$BN' and P.Postalcode = '$PC' " ;
     								$result=$mysqli->query($q);
     								 
     								$row = $result->fetch_assoc();
     							
     								//	Setting Attributes the class 
									$RentP = new RentProperty(); 
									$RentP->setSname($row["Sname"]);
									$RentP->setName($row["Name"]);
									$RentP->setOwnerSsn($row["OwnerSsn"]); 
									$RentP->setBuildDate($row["BuildDate"]);	
									$RentP->setMeter($row["Meter"]);
									$RentP->setPhone($row["Phone"]);
									$RentP->setBusinessNum($BN);
									$RentP->setPostalcode($row["Postalcode"]); 
									$RentP->setAddress($row["Address"]);
									$RentP->setMortage($row["Mortage"]);
									$RentP->setRent($row["Rent"]);		
									DeleteBorder :: ShowDeleteSaleProperty($RentP);
									//									
/*							/*		 */
									
									     								
     								
     							 
        					}	
        					
        							 
        							}	
			 		
			 		
	 // 												renter
					if(strcmp( $_POST['submit'] , "Dubmit3" ) == 0  )
					{
						$Ssn	=$_POST['Ssn'] ; 
						
						            
 			 
							$q=     "  	select count(*) from Renter R , Person P 

 					 				    where R.Ssn = P.Ssn and  P.BusinessNum
 									    = '$BN' and P.Ssn = '$Ssn'" ; 
     									
     					$result=$mysqli->query($q);
     					
     					 
     					$row = $result->fetch_assoc();
     					echo $row["count(*)"] ;
     								if($row["count(*)"] == 1)
     								{
     									
										$q=     "  	select * from Renter R , Person P 
 					 									    where R.Ssn = P.Ssn and  P.BusinessNum
 									   							 = '$BN' and P.Ssn = '$Ssn'" ; 
 									   							 
     								$result=$mysqli->query($q); 
     								$row = $result->fetch_assoc();
     								// 				Setting Renter
     								$Renter = new Renter();
     								$Renter->setName($row["Name"]);
									$Renter->setSname($row["Sname"]);
									$Renter->setPhone($row["Phone"]);
									$Renter->setAddress($row["Address"]);
									$Renter->setSsn($row["Ssn"]);
									$Renter->setBusinessNum($row["BusinessNum"]);
									$Renter->setMarriage($row["Marriage"]);
									$Renter->setFamilyNum($row["FamilyNum"]);
									$Renter->setRentestimate($row["Rentestimate"]);
									$Renter->setMortage($row["Mortage"]);
									
 									DeleteBorder::ShowDeletePerson($Renter);   							 
     								}
     					
			 			
			 			}
			 			
			 			
	//                      Buyer			 		
			 			if(strcmp( $_POST['submit'] , "Dubmit4" ) == 0  )
					{
						$Ssn	=$_POST['Ssn'] ; 
						
						            
 			 
							$q=     "  	select count(*) from Buyer R , Person P 

 					 				    where R.Ssn = P.Ssn and  P.BusinessNum
 									    = '$BN' and P.Ssn = '$Ssn'" ; 
     									
     					$result=$mysqli->query($q);
     					
     					 
     					$row = $result->fetch_assoc();
     					
     								if($row["count(*)"] == 1)
     								{
     									
     									
										$q=     "  	select * from Buyer R , Person P 
 					 									    where R.Ssn = P.Ssn and  P.BusinessNum
 									   							 = '$BN' and P.Ssn = '$Ssn'" ; 
 									   							 
     								$result=$mysqli->query($q); 
     								$row = $result->fetch_assoc();
     								// 				Setting Renter
     								
     								$Renter = new Buyer();
     								
     								$Renter->setName($row["Name"]);echo "las";
									$Renter->setSname($row["Sname"]);
									$Renter->setPhone($row["Phone"]);echo "las";
									$Renter->setAddress($row["Address"]);
									$Renter->setSsn($row["Ssn"]);
									$Renter->setBusinessNum($row["BusinessNum"]);
									$Renter->setBudget($row["Budget"]);
									
									
 									DeleteBorder::ShowDeletePersonBuyer($Renter);   							 
     								}
     					
			 			
			 			}	
			 	########################################################
			 	if(strcmp( $_POST['submit'] , "Submit5" ) == 0  )
					{
						            
            	
        			$Sdate=$_POST['Sdate'];
					$Edate=$_POST['Edate'];
					
									 /*
					$q ="select P.Ssn,P.Name , P.Sname , P.Phone , B.Budget 
 from Person P , Buyer B 

      where P.Ssn = B.Ssn and  P.BusinessNum
	   = ' $BN ' and ('$BD  '<B.Budget or B.Budget <'$BU')" ; 
				
							
			if		(	$result =  $mysqli->query($q )   )
							
					while	($row = $result->fetch_assoc() ){
					SearchBorder::ShowBuyer ($row) ;
					
								 }	
								 */		
			 			
			 			}	
			 		
			 		
					}	
			 			
			 			
            	 
             
               
            ?>
            
             <!-------------------------------------------- -->
            
            
            
            
             </div>
         
        </div>

    
    <?php
    
	 SearchBorder::ShowFooter();
 
    ?>    
    </body>
</html>








