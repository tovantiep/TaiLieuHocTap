const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (() => {
    loginForm.style.marginLeft = "-50%";
    loginText.style.marginLeft = "-50%";
    $('#error-message').css('display', 'none');
    $('#success-message').css('display', 'none');
});
loginBtn.onclick = (() => {
    loginForm.style.marginLeft = "0%";
    loginText.style.marginLeft = "0%";
    $('#error-message').css('display', 'none');
    $('#success-message').css('display', 'none');
});
signupLink.onclick = (() => {
    signupBtn.click();
    return false;
});
var objPeople = [{
    username: "tovantiep",
    password: "123456"
}]
$(document).ready(function() {
    $('#login_btn').click(function() {
        var username = $('#username').val();
        var password = $('#password').val();
        var success = -1;
        $("#frmlogin").submit(function(event) {
            event.preventDefault();
        });
        for (i = 0; i < objPeople.length; i++) {
            if (username == objPeople[i].username && password == objPeople[i].password) {
                $('#wrapper').css('display', 'none');
                $('#infor').css('display', 'block');
                $('#logout').css('display', 'block');
                $('#inforname').html('Welcome - ' + username);
            } else if (username == '' || password == '') {
                //
            } else {
                myText = $("#error-message").text("Tài khoản hoặc mật khẩu không đúng");
                $('#error-message').css('display', 'block');
                $('#success-message').css('display', 'none');
            }
        }
    });
    $('#register_btn').click(function() {
        var newUsername = $('#newUsername').val();
        var newPassword = $('#newPassword').val();
        var Repassword = $('#Repassword').val();
        $("#frmRegister").submit(function(event) {
            event.preventDefault();
        });
        for (i = 0; i < objPeople.length; i++) {
            if (newUsername == '' || newPassword == '' || newEmail == '' || Repassword == '') {
                console.log("Không được để trống");
            } else if (newUsername == objPeople[i].username) {
                myText = $("#error-message").text("Tài khoản đã tồn tại");
                $('#error-message').css('display', 'block');
                $('#success-message').css('display', 'none');
                return;
            } else if (Repassword != newPassword) {
                console.log("Mật khẩu không trùng khớp");
                myText = $("#error-message").text("Mật khẩu không trùng khớp");
                $('#error-message').css('display', 'block');
                $('#success-message').css('display', 'none');
            } else {
                var newUser = {
                    username: newUsername,
                    password: newPassword
                }
                for (i = 0; i < objPeople.length; i++) {
                    if (newUsername == objPeople[i].username) {
                        myText = $("#error-message").text("Tài khoản đã tồn tại");
                        $('#error-message').css('display', 'block');
                        $('#success-message').css('display', 'none');
                        return;
                    }
                }
                objPeople.push(newUser);
                console.log(objPeople);
                myText = $("#success-message").text("Đăng kí thành công");
                $('#error-message').css('display', 'none');
                $('#success-message').css('display', 'block');
                return;
            }

        }

    });
    $('#logout').click(function() {
        $('#wrapper').css('display', 'block');
        $('#infor').css('display', 'none');
        $('#logout').css('display', 'none');
        $('#inforname').css('display', 'none');
        $('#error-message').css('display', 'none');
        $('#form-inner').trigger(reset);
    });
    $("#frmlogin").validate({
        rules: {
            username: {
                required: true,
                maxlength: 15,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            username: {
                required: "Bắt buộc nhập username",
                maxlength: "Hãy nhập tối đa 15 ký tự",
                minlength: "Tên quá ngắn"
            },
            password: {
                required: "Bắt buộc nhập password",
                minlength: "Hãy nhập ít nhất 5 ký tự"
            }
        }
    });
    $("#frmRegister").validate({
        rules: {
            newUsername: {
                required: true,
                maxlength: 10,
                minlength: 5
            },
            newEmail: {
                required: true,
                email: true
            },
            newPassword: {
                required: true,
                minlength: 5
            },
            Repassword: {
                required: true,
                minlength: 5,
                equalTo: "#newPassword"
            }
        },
        messages: {
            newUsername: {
                required: "Không để trống",
                maxlength: "Quá dài rồi"
            },
            newEmail: {
                required: "không để trống",
                email: "Email chưa đúng định dạng"
            },
            newPassword: {
                required: "Không để trống",
                minlength: "Mật khẩu của bạn quá ngắn"
            },
            Repassword: {
                required: "Không để trống",
                minlength: "Mật khẩu của bạn quá ngắn",
                equalTo: "Mật khẩu của bạn không trùng khớp"
            }
        }
    });
});