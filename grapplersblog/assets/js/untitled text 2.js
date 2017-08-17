//Form Register Validation
function validateForm() {

		if(validateUserName() == true && validatePassword() == true)
    			complete = true;
    		else
    			complete = false;
    	
    	return complete;


    var complete = false;
    
    
	function validateUserName() {
    		//Status of the form being processed
    		  var status = false;
			//Variables from form
  		      var username = document.forms["signup-form"]["username"].value;
    
    		if (username == "") {
       			document.getElementById("user_error").innerHTML="*Enter Username";
       	 		status = false;}
    			
    			else{
    			   document.getElementById("user_error").innerHTML="";
    			   status = true;}
    		
     return status;
    }
    		
    		
    function validatePassword() {
   		 //Status of the form being processed
    	   var status = false;
         //Variables from form
           var password1 = document.forms["signup-form"]["pass1"].value;
           var password2 = document.forms["signup-form"]["pass2"].value;

    	   if (password1 != password2) {
               document.getElementById("pass_error").innerHTML="*Passwords do not match";
               status = false;}
    	
    		else{
    			document.getElementById("pass_error").innerHTML="";
    			status = true;}
    	
    return status
   }
   
   