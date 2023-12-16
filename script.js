function validateForm() {
    const userName = document.getElementById("user_name").value;
    const userEmail = document.getElementById("user_email").value;
    const password = document.getElementById("user_password").value;

    if (userName === "") {
        document.getElementById("user_name_error").style.display = "block";
        return false;
    } else {
        document.getElementById("user_name_error").style.display = "none";
    }
    if (userEmail === "") {
        document.getElementById("user_email_error").style.display = "block";
        return false;
    } else {
        document.getElementById("user_email_error").style.display = "none";
    }
    if (password === "") {
        document.getElementById("user_password_error").style.display = "block";
        return false;
    } else {
        document.getElementById("user_password_error").style.display = "none";
    }
    alert("Форма успешно отправлена");
    return true;
}
