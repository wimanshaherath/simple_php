

function validate(){

    var name=document.forms['loginForm']['username'];
    var password=document.forms['loginForm']['password'];

    if(name.value==""){
        document.getElementById('message').innerHTML='Please enter a valid user name';
        name.focus();
        return false;
    }
    if(password.value==""){
        document.getElementById('message2').innerHTML='Please enter a valid password';
        return false;
    }

}

function validate1(){

    var email=document.forms['regFrom']['email'];
    var name=document.forms['regFrom']['username'];
    var password=document.forms['regFrom']['password'];

    if(email.value==""){
        document.getElementById('message').innerHTML='Please enter a valid email';
        email.focus();
        return false;
    }
    if(name.value==""){
        document.getElementById('message').innerHTML='Please enter a valid user name';
        name.focus();
        return false;
    }
    if(password.value==""){
        document.getElementById('message2').innerHTML='Please enter a valid password';
        password.focus();
        return false;
    }

}

function toggling(){
    var ele=document.getElementById('regform');
    var ele1=document.getElementById('logform');
    var frm=document.getElementById('form');
    
    if(ele1.style.top==="0px"){
        ele1.style.top="-330px";
        ele.style.top='-315px';
        frm.style.height='400px';
    }
    else{
        ele1.style.top="0px";
        ele.style.top='325px';
        frm.style.height='380px';
    }
    
}
