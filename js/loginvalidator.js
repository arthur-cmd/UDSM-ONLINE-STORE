function validate() {





    if (document.myform.username.value == "") {
        alert("please enter your username");
        document.myform.username.focus();
        return false;
    }



    if (document.myform.pass.value == "") {
        alert("please enter your password");
        document.myform.pass.focus();
        return false;
    }


    return (true);

}