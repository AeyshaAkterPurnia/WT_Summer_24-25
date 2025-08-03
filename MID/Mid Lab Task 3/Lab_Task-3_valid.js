
    function handlesubmit(){
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var address = document.getElementById("address").value;
        var city = document.getElementById("city").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var cpassword = document.getElementById("cpassword").value;
        


        if(fname ==="" || lname ==="" || address ==="" || city ===""|| phone ==="" || email==="" || password ==="" || cpassword ==="" ){
         alert("please fill this form");
        return false;   
        }

        if(fname !== [a-z][a-z] || lname !== [a-z][a-z]){
          alert("Name must be letter");
         return false;   
        }
        
         if(isNan(phone) ||phone.length !==11){
         alert("Phone number exactly 11 digit");
         return false; 
        }

      
         if(password !==cpassword || password !==[a-z]/[A-z]/$){
            alert("password and confirm password should be same and must contain at least oner uppercase, one lowercase,one digt and one special character");
            return false;
         }       
            

        alert("Confirm");
        return false;
    }

    
