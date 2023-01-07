function regsiter() {
    if ((document.getElementById('username').value) == "") {
        document.getElementById('username').placeholder = "账号不能为空！！！";
    }
    if ((document.getElementById('password').value) == "") {
        document.getElementById('password').placeholder = "密码不能为空！！！";
    }

    if (((document.getElementById('password').value) != "") && ((document.getElementById('username').value) != "")) {
        document.getElementById('zhuce').type = "submit";
    }
}