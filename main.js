const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (() => {
    loginForm.style.marginLeft = "-50%";
    loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (() => {
    loginForm.style.marginLeft = "0%";
    loginText.style.marginLeft = "0%";
});
signupLink.onclick = (() => {
    signupBtn.click();
    return false;
});
var objPeople = [{

    username: "tiep",
    password: "1"
}]
var i = 0;
// var success = -1;

function getInfo() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    for (var i = 0; i < objPeople.length; i++) {
        if (username == objPeople[i].username && password == objPeople[i].password) {
            document.getElementById("infor").innerHTML = "wellcome - " + username;
            document.getElementById("wrapper").style.display = 'none';
            document.getElementById("infor").style.display = 'block';
            document.getElementById("logout").style.display = 'block';
            return;
        } else if (username == "" || password == "") {
            alert("Khong duoc de trong tai khoan mat khau nha babe!");
        } else {
            alert("Sai tai khoan hoac mat khau roi babee!");
        }
    }
}

function logout() {
    document.getElementById("wrapper").style.display = 'block';
    document.getElementById("infor").style.display = 'none';
    document.getElementById("logout").style.display = 'none';
    document.getElementById("inforname").style.display = 'none';
    // document.getElementsById("").reset();

}

function registerUser() {
    var registerUser = document.getElementById("newUsername").value;
    var registerPassword = document.getElementById("newPassword").value;
    var registerRePassword = document.getElementById("rePassword").value
    var newUser = {
        username: registerUser,
        password: registerPassword
    }
    for (i = 0; i < objPeople.length; i++) {
        if (registerUser == objPeople[i].username) {
            alert("Tai khan nay da ton tai");
            return;
        } else if (registerPassword.length < 5 || registerRePassword != registerPassword) {
            alert("Mat khau khong du 5 ki tu hoac khong trung khop");
        } else {
            alert("Dang Ki thanh cong");
        }

    }
    console.log(objPeople);
    objPeople.push(newUser)

}