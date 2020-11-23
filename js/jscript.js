




function fields()   

                                 
{	
	
    var firstname = document.forms["form"]["firstname"];
	var lastname = document.forms["form"]["lastname"];
	var email = document.forms["form"]["email"];
    var address = document.forms["form"]["address"];
	var city = document.forms["form"]["city"];
	var country = document.forms["form"]["country"];	
	var zip = document.forms["form"]["zip"];	
	var cardname = document.forms["form"]["cardname"];	
	var cardnumber = document.forms["form"]["cardnumber"];
	var expmonth = document.forms["form"]["expmonth"];	
	var expyear = document.forms["form"]["expyear"];
	var cvv = document.forms["form"]["cvv"];	




	
    if (firstname.value == "")                                  
    { 
        window.alert("Please enter your first name."); 
        name.focus(); 
        return false; 
    } 
	
    if (lastname.value == "")                                  
    { 
        window.alert("Please enter your last name."); 
        age.focus(); 
        return false; 
    } 	

       
    if (email.value == "")                                   
    { 
        window.alert("Please enter an e-mail address."); 
        email.focus(); 
        return false; 
    } 
	
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
	
	
    if (address.value == "")                                  
    { 
        window.alert("Please enter your address."); 
        name.focus(); 
        return false; 
    } 	
	
    if (city.value == "")                                  
    { 
        window.alert("Please enter a city."); 
        name.focus(); 
        return false; 
    } 	
	
    if (country.value == "")                                  
    { 
        window.alert("Please enter a country."); 
        name.focus(); 
        return false; 
    } 
	
    if (zip.value == "")                                  
    { 
        window.alert("Please enter a zip or postal code."); 
        name.focus(); 
        return false; 
    } 	
		
    if (cardname.value == "")                                  
    { 
        window.alert("Please enter your cart name."); 
        name.focus(); 
        return false; 
    } 

    if (cardnumber.value == "")                                  
    { 
        window.alert("Please enter a cart number."); 
        name.focus(); 
        return false; 
    } 

    if (cardnumber.value.length < 16 ||  cardnumber.value.length > 16)                                  
    { 
        window.alert("Please enter a cart number of 16 digits."); 
        name.focus(); 
        return false; 
    } 
	
	if (expmonth.value == "")                                  
    { 
        window.alert("Please enter a expiration month."); 
        name.focus(); 
        return false; 
    } 
	
	if (expyear.value == "")                                  
    { 
        window.alert("Please enter a expiration year."); 
        name.focus(); 
        return false; 
    }	

	
	if (cvv.value == "")                                  
    { 
        window.alert("Please enter the CVV number."); 
        name.focus(); 
        return false; 
    }

    if (cvv.value.length < 3 ||  cvv.value.length > 3)                                  
    { 
        window.alert("Please enter a valid CVV number of 3 digits."); 
        name.focus(); 
        return false; 
    }			
	
   
    else{                           
		
		return true;				
    } 
	


}





