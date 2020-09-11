let username = "Mohsen";
let password = "nasusisbroken1";

function credentials() {
    let provided_username = document.getElementById("name").value;
    let provided_password = document.getElementById("pass").value;

    if (provided_username == username && provided_password == password) {
        window.location.href = "bookings.php";
    }
    else {
        document.getElementById('check_pass').innerHTML = "Wrong Credentials";
    }
}