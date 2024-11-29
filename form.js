document.getElementById("email-form").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent form submission from refreshing the page
  
    // Retrieve form values
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const number = document.getElementById("number").value;
    const course = document.getElementById("course").value;
    const message = document.getElementById("message").value;
  
    // Prepare the data to send
    const data = {
      name: name,
      email: email,
      number: number,
      course: course,
      message: message,
    };
  
    // Send data to Google Apps Script Web App
    const scriptURL = "YOUR_GOOGLE_APPS_SCRIPT_URL"; // Replace with your Web App URL
    fetch(scriptURL, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(data),
    })
      .then((response) => {
        if (response.ok) {
          document.getElementById("status").textContent = "Message sent successfully!";
          document.getElementById("status").style.color = "green";
          document.getElementById("email-form").reset();
        } else {
          throw new Error("Message failed to send.");
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        document.getElementById("status").textContent = "Message failed to send. Please try again.";
        document.getElementById("status").style.color = "red";
      });
  });
  