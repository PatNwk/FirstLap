function updateEmailLink() {
    // Get values from input elements
    var subject = document.getElementById("SubjetInput").value;
    var name = document.getElementById("NameInput").value;
    var body = document.getElementById("bodyInput").value;

    // Create the email body with some spacing
    var emailBody = body + "\n\n" +
                    "Cordialement " + name;

    // Get the emailLink element
    var emailLink = document.getElementById("emailLink");

    // Set the mailto link with encoded subject and body
    emailLink.href = "mailto:someone@example.com" +
                     "?subject=" + encodeURIComponent(subject) +
                     "&body=" + encodeURIComponent(emailBody);
}
