<?php
session_start();
include("db_connect.php");
if(isset($_COOKIE['userid'])&&$_COOKIE['useremail']){
	
	$userid=$_COOKIE['userid'];
$useremail=$_COOKIE['useremail'];

$sqluser ="SELECT * FROM tbl_users WHERE Password='$userid' && Email='$useremail'";

$retrieved = mysqli_query($db,$sqluser);
    while($found = mysqli_fetch_array($retrieved))
	     {
              $firstname = $found['Firstname'];
		      $sirname= $found['Sirname'];
			  //$institution = $found['Institution'];	
			  $emails = $found['Email'];
			  	   $id= $found['id'];			  
          	  $role= $found['Role'];	
			  $profile= $found['Pic_name'];
   
  	    }
}else{
	 header('location:index.php');
      exit;
}

			
			
			echo"<div class='charts'>		
			<div class='mid-content-top charts-grids'>
				<div class='middle-content'>
						<h4 class='title'>DRUGS REGISTRATION FORM</h4>
					<!-- start content_slider -->
				         <div class='alert alert-info'>
                             <i class='fa fa-info'></i>&nbsp;Use the form below to enter drug details
                         </div>
		<form action='register.php' method='post' >
				<div class='charts'>
					<div class='col-md-4 charts-grids widget'>
						<div class='card-header' style='font-weight: bold;font-family: 'Palatino Linotype', serif'>
							<h3>Drugs Details</h3>
						</div>
						
						<div id='container' style='width: 100%; '>
							
							<div class='input-group' style='margin-bottom:10px;margin-top: 10px;'>
    <span class='input-group-addon'>Generic Name</span>
   <input type='text' name='fname' placeholder='Enter drug trade name' value='' class='form-control' >
       </div>
       <div class='input-group' style='margin-bottom:10px;margin-top: 10px;'>
    <span class='input-group-addon'>Strength</span>
   <input type='text' name='strength' placeholder='Enter drug strength' value='' class='form-control' >
       </div>
        <div class='input-group' style='margin-bottom:10px;'>
          <span class='input-group-addon'>Type of Medicine</span>
   <select  name='medstype'  id='gender' style='height:30px; width: 100%' > 
            				                    				     		                           
		                            <option>Tablet</option>										             			 	
				                     <option>Syrup</option>
				                     <option>Capsules</option> 
				                     <option>Drops</option> 
				                     <option>Inhaler</option>
				                     <option>Injection</option>               
            				                         </select>

  </div>
       
       <div class='input-group' style='margin-bottom:10px;'>
    <span class='input-group-addon'>Quantinty</span>
   <input type='text' id='txt4'  onkeyup='sum();' placeholder='Amount' name='quantity' class='form-control' />
    </div>
    <div class='input-group' style='margin-bottom:10px;'>
       <span class='input-group-addon'>Purchased Price</span>   
   <input type='text' id='txt1'  onkeyup='sum();' name='pprice' placeholder='Purchasing Price' class='form-control' />
 </div>
       
 
    
  
  <div class='input-group' style='margin-bottom:10px;'>
          <span class='input-group-addon'>Per Marker </span>
          
          <input type='text' id='txt2'  onkeyup='sum();' placeholder='e.g 1.5' name='marker' />
     </div>
      
      
      <p>         			
          <span class='costperelement'></span>
     </p>
     
	 

      
						</div>
							
					</div>
					
					<div class='col-md-4 charts-grids widget states-mdl'>
						<div class='card-header' style='font-weight: bold;font-family: 'Palatino Linotype', serif'>
							<h3>Vendor Details</h3>
						</div>
						
<div class='input-group' style='margin-bottom:10px;margin-top: 10px'>
    <span class='input-group-addon'>Vendor Full Name</span>
     <input type='text' name='vendorname' placeholder='Vendor full name' class='form-control' value=''>
     </div>
     <div class='input-group' style='margin-bottom:10px;'>
     
      <span class='input-group-addon'>Location</span>
   <input type='text' name='vendorlocation' placeholder='Vendor location' class='form-control' value=''  >
  </div>
  <div class='input-group' style='margin-bottom:10px;'>
    <span class='input-group-addon'>Contact phone</span>
     <input type='phone' name='vendorphone' placeholder='Enter Vendor phone' class='form-control' value='' >
     </div>
     <div class='input-group' style='margin-bottom:10px;'>
    <span class='input-group-addon'>Vendor Email</span>
   <input type='email' name='vendoremail' placeholder='Amount' value='' class='form-control' >
    </div>
<div class='input-group' style='margin-bottom:10px; margin-top:15px;'>
    <span class='input-group-addon'>Manufactured date</span>
   <input type='date' placeholder='Purchased date' name='ppdss' class='form-control' value='' >
   </div>
  <div class='input-group' style='margin-bottom:10px; margin-top:15px;'>
    <span class='input-group-addon'>Expire date</span>
   <input type='date' placeholder='Expire date' name='dob' class='form-control' value='' >
   </div>	
  
  
  
       
					</div>
			
					<div class='clearfix'> </div>
				</div>

 

<div class='modal-footer'>

      	<input type='submit' class='btn btn-success'  id='btns1' value='Submit' name='studentrecord'> &nbsp;
      		      	<input type='reset' class='btn btn-success'  id='btns' value='Clear' name=''> 

      	    </div>
  
  
</form>

                           
				        </div>
		
				</div>

					
		</div>";
		?>
		





















       

			    
           </br >
												
	            </br >
             	