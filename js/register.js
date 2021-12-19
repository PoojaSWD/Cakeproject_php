
const changefname = () =>{
    var fname = document.getElementById('fname').value;
    if(fname.trim().length>0)
{
        fname = fname.charAt(0).toUpperCase()+fname.slice(1).toLowerCase();
        document.getElementById('fname').value = fname
        
}
}

const changelname = () =>{
    var lname = document.getElementById('lname').value;
    if(lname.trim().length>0)
{
        lname = lname.charAt(0).toUpperCase()+lname.slice(1).toLowerCase();
        document.getElementById('lname').value = lname
        
}
}


function formvalidation()
{
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var username = document.getElementById('username').value;
    var email = document.getElementById('useremail').value;
    var pwd = document.getElementById('pwd').value;
    var cpwd = document.getElementById('repwd').value;
    var status=false;


var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
var letters = /^[A-Za-z]+$/;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;



if(fname=='')
{
    alert('Please enter first your name');
    status=false;
}
else if(!letters.test(fname))
{
    alert('Name field required only alphabet characters');
    status=false;

}
else if(lname=='')
{
    alert('Please enter last your name');
    status=false;
}
else if(!letters.test(lname))
{
    alert('Name field required only alphabet characters');
    status=false;
}
else if(username=='')
{
    alert('Please enter the user name.');
    status=false;
}
else if(!letters.test(username))
{
    alert('User name field required only alphabet characters');
    status=false;

}
else if(email=='')
{
    alert('Please enter your user email id');
    status=false;
}
else if (!filter.test(email))
{
    alert('Invalid email');
    status=false;
}
else if(pwd=='')
{
    alert('Please enter Password');
    status=false;
}
else if(cpwd=='')
{
    alert('Enter Confirm Password');
    status=false;
}
else if(!pwd_expression.test(pwd))
{
    alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
    status=false;
}
else if(pwd != cpwd)
{
    alert ('Password not Matched');
    status=false;
}
else if(document.getElementById("repwd").value.length < 8 || document.getElementById("repwd").value.length > 8 )
{
    alert ('Password character should be 8 characters long');
    status=false;
}
else
{        
                                
    //    alert('Your account has been created.Please log in.');
       status=true;   
       // Redirecting to other page or webste code. 
       
}

return status;
}


var showpassword = () => {
    var cpwd = document.getElementById('repwd');
    if(cpwd.type == 'password'){
        cpwd.type="text"
    }else{
        cpwd.type="password"
    }
}






























