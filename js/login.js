function login() {

    if ((document.getElementById('username').value) == "") {
        document.getElementById('username').placeholder = "账号不能为空！！！";
    }
    if ((document.getElementById('password').value) == "") {
        document.getElementById('password').placeholder = "密码不能为空！！！";
    }

    if (((document.getElementById('password').value) != "") && ((document.getElementById('username').value) != "")) {
        document.getElementById('log').type = "submit";
    }
}

function register() {

    document.getElementById("act").action = "register.php";

}