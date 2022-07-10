function log(){  
    var n=document.getElementById("username").value;
    var p=document.getElementById("password").value;  
    
    if(n==""){
        alert("!!--user name is empty please provide the username--!!");
        return false;
    }
    else if(p==""){
        alert("!!--password is empty please provide the password--!!");
        return false;
    } 
    else{
        return true;
    }

}











function reg(){
    var name=document.getElementById("usernames").value;
    var ps=document.getElementById("passwords").value; 
    var cp=document.getElementById("cpassword").value;
    var e=document.getElementById("email").value;
    var ph=document.getElementById('phone').value;
    
    var passw=  /^[A-Za-z]\w{7,14}$/;   
    var phoneno = /^\d{10}$/;
    mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

     
    if(name==""){
        alert("!!--user name is empty please provide the username--!!");
        return false;
    }
    else if(ps==""){
        alert("!!--password is empty please provide the password--!!");
        return false;
    }
    else if(!(ps.match(passw))){
        alert("!!--password is not match with our condition-->a password between 7 to 16 characters which contain only characters, numeric digits, underscore and first character must be a letter !!");
        return false;//Anandage19_
    }
    else if(!(ps==cp)){
        alert("!!--password and confirm password are not matching--!!");
        return false;
    }
    else if(e==""){
        alert("!!--email is empty please provide the email--!!");
        return false;
    }
    else if(!(e.match(mailformat))){
        alert("!!--email is not in the correct format --!!");
        return false;
    }
    
    else if(ph==""){
        alert("!!--phone number is empty please provide the phonenumber--!!");
        return false;
    }
    else if(!(ph.match(phoneno))){
        alert("!!--phone number is not in the correct format --!!");
        return false;
    }

    else{
        return true;
    } 

}