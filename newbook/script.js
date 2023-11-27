function loadBookingDetails() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var date = document.getElementById('date').value;
    var people = document.getElementById('people').value;
    var message = document.getElementById('message').value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('output').innerHTML = xhr.responseText;
        }
    };

    // Append form data to the URL
    var url = "process.php?name=" + encodeURIComponent(name) +
              "&email=" + encodeURIComponent(email) +
              "&date=" + encodeURIComponent(date) +
              "&people=" + encodeURIComponent(people) +
              "&message=" + encodeURIComponent(message);

    xhr.open("GET", url, true);
    xhr.send();
}
