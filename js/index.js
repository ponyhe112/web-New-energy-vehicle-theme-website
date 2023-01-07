var tabs = document.getElementById("tabs").getElementsByTagName("li");
console.log(tabs);
var lists = document.getElementById("lists").getElementsByTagName("ul");
console.log(lists);
for (var i = 0; i < tabs.length; i++) {
    tabs[i].onclick = showlist;
}



function showlist() {
    for (var i = 0; i < tabs.length; i++) {
        if (tabs[i] === this) {
            tabs[i].className = "active";
            lists[i].className = "clearfix active";
        } else {
            tabs[i].className = "";
            lists[i].className = "clearfix";
        }

    }
}
var seckillNav = document.getElementById("seckillNav");
window.onscroll = function() {
    var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop || 0;

    if (scrollTop >= 260) {
        seckillNav.className = "seckill-nav seckill-navfixed"
    } else {
        seckillNav.className = "seckill-nav";
    }
    console.log(scrollTop);
}

function regsiter() {
    if ((document.getElementById('username').value) == "") {
        document.getElementById('username').placeholder = "账号不能为空！！！";
    }
    if ((document.getElementById('password').value) == "") {
        document.getElementById('password').placeholder = "密码不能为空！！！";
    }
}

function color(x) {
    x.style.color = "black";

}

function normal(x) {
    x.style.color = "white";

}