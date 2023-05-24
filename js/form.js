function jsvalidation(){  
      let name=document.getElementById("name").value;  
      let email=document.getElementById("email").value;
      let mobile=document.getElementById("number1").value;
      let pass1=document.getElementById("pass1").value;  
      let pass2=document.getElementById("pass2").value;
      let add=document.getElementById("address").value;

if (name==null || name.length<3){  
 let a=document.getElementById("sname").innerHTML=" *Name must be greater than 3 character!" ;
  return false;  
}
else if(email==null || email.length<=11){  
 let b=document.getElementById("semail").innerHTML=" *Please enter correct email with @ symbol" ;
  return false;  
  } 
else if(mobile== "" || mobile== null) {
    alert("Mobile Number is MUST!");
    return false;
  }
else if(pass1==null || pass1.length<=5) {  
 let d=document.getElementById("spass1").innerHTML=" *Password must be atleast five character" ;
  return false;  
  }  
else if(pass2==null || pass2!=pass1){  
 let e=document.getElementById("spass2").innerHTML=" *Conform password must be same as password" ;
  return false;  
  }  
else if(pass2==null || pass2!=pass1){  
 let =document.getElementById("spass2").innerHTML=" *Conform password must be same as password" ;
  return false;  
  } 

  }  

/*var x = document.forms["myForm"]["fname"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }*/
