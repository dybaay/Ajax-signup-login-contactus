

        //***********AJAX************//
function _(el) {
    return document.getElementById(el); 
}
function ajax_data(php_file, el, send_data) {
    _(el).innerHTML = "Loading...";
    var xhttp = new XMLHttpRequest();
   xhttp.open('POST', php_file, true);
    xhttp.setRequestHeader("Content-type" ,"application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function() {
        if(xhttp.readyState === 4 && xhttp.status === 200){
            _(el).innerHTML = xhttp.responseText;
        }
    }
    xhttp.send(send_data);
}

function openSignUpForm() {
    ajax_data("./signup.php", "pages", null);
}
function openLoginForm() {
    ajax_data("./login.php", "pages", null);
}
function openContactUsForm() {
    ajax_data("./contactus.php", "pages", null);
}

function contactForm() {
    var email = _("email").value;
    var message = _("message").value;
    var send_data =
            "&email="+email+
            "&message="+message;
            ajax_data("app/contact_db.php", "contact_response", send_data);

}

function signUp() {
    var formdata = new FormData();
    var ajax = new XMLHttpRequest();

   
    var username = _('username').value;
    var email = _('email').value;
    var password = _('password').value; 
    var photo = _('photo').files[0]; 

  
    formdata.append('username', username);
    formdata.append('email', email);
    formdata.append('password', password);
    formdata.append('photo', photo);

    ajax.open("POST", './signup_db.php');
    ajax.send(formdata);
    ajax.onreadystatechange = function() {
        _('signup_response').innerHTML = ajax.responseText;
    }

}
function login() {
var username = $('#username').val();
var password = $('#password').val();
$.ajax({
    type: 'POST',
    url: 'app/ajax_login.php',

    data:{
        username: username,
        password: password
    },

    success: function(response){
        $("#login_response").html(response);
        if(response === "login"){
            $("#login_response").html("Redirecting...");
            setTimeout(function(){
                window.location = "dashboard.php"
             });
        }
    }


});

}