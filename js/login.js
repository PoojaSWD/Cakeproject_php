function login()
{
    var uname = document.getElementById("userName").value;
    var pwd = document.getElementById("pwd").value;
    if(uname =='')
    {
        alert("Please enter user name.");
    }
    else if(pwd=='')
    {
        alert("Please enter the password");

    }
    else if(pwd.length < 8 || pwd.length > 8)
    {
        alert("Password must be 8 character long.");
    }
//     else
//     {


//    window.location = "localhost/home.php";
//         }
}

