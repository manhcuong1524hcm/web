function $(name) {
  return document.getElementById(name);
}
function Trim(name) {
  var left = /^\s+/;
  var right = /\s+$/;
  name.value = name.value.replace(left, "").replace(right, "");
}
function IsNull(name) {
  var name2 = $(name);
  Trim(name2);
  if (name2.value == "") {
    name2.focus();
    return true;
  }
  return false;
}
function IsLogin() {
  if (IsNull("txtUserName")) {
    $("error").innerHTML = "Vui lòng nhập tên đăng nhập";
    return false;
  }
  if (IsNull("txtPassWord")) {
    $("error").innerHTML = "Vui lòng nhập mật khẩu";
    return false;
  }
  return true;
}
function IsRegister() {
  if (IsNull("txtFullName")) {
    $("error").innerHTML = "Vui lòng nhập tên";
    return false;
  }
  if (IsNull("txtUserName")) {
    $("error").innerHTML = "Vui lòng nhập tên đăng nhập";
    return false;
  }
  if (IsNull("txtPassWord")) {
    $("error").innerHTML = "Vui lòng nhập mật khẩu";
    return false;
  }
  if (IsNull("txtPrePass")) {
    $("error").innerHTML = "Vui lòng nhập mật khẩu";
    return false;
  }
  if ($("txtPassWord").value != $("txtPrePass").value) {
    $("error").innerHTML = "Mật khẩu xác nhận không đúng";
    return false;
  }
  if (IsNull("txtEmail")) {
    $("error").innerHTML = "Vui lòng nhập email";
    return false;
  }
  if (!IsEmail("txtEmail")) {
    $("error").innerHTML = "Email không hợp lệ";
    return false;
  }
  return true;
}
