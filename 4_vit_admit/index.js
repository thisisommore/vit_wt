function log_in() {
    const user_name_input = document.getElementById("user_name");
    const password_input = document.getElementById("password")

    if (user_name_input.value != "admin" || password_input.value != "admin") {
        alert("Invalid credientials")
        return user_name_input.focus()
    } else {
        alert("Login successful")
        location.href += "admit"
    }
}