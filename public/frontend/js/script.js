let menu = document.querySelector("#menu-bars");
let header = document.querySelector("header");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  header.classList.toggle("active");
};
window.onscroll = () => {
  menu.classList.remove("fa-times");
  header.classList.remove("active");
};

/***********/

let image = document.getElementById("image");
let images = ["./img/portofilo/ss.jpeg", "./img/portofilo/cc.jpeg"];
setInterval(function () {
  let random = Math.floor(Math.random() * 2);
  image.src = images[random];
}, 3000);


let image_index = document.getElementById("image_index");
let images_index = ["./img/Cohort 3/sara.jpg", "./img/Cohort 3/Ahmad Altamimi.jpg","./img/Cohort 3/Sereen Qamhia.jpg"];
setInterval(function () {
  let random = Math.floor(Math.random() * 3);
  image_index.src = images_index[random];
}, 3000);



// Your existing JavaScript code
let cursor1 = document.querySelector(".cursor-1");
let cursor2 = document.querySelector(".cursor-2");

window.addEventListener("mousemove", (e) => {
  cursor1.style.top = e.clientY + "px";
  cursor1.style.left = e.clientX + "px";
  cursor2.style.top = e.clientY + "px";
  cursor2.style.left = e.clientX + "px";
});

let links = document.querySelectorAll("a");
links.forEach((link) => {
  link.addEventListener("mouseenter", () => {
    cursor1.classList.add("active");
    cursor2.classList.add("active");
  });

  link.addEventListener("mouseleave", () => {
    cursor1.classList.remove("active");
    cursor2.classList.remove("active");
  });
});

const inputs = document.querySelectorAll("input,textarea");
inputs.forEach((input) => {
  input.addEventListener("change", () => {
    input.style.color = "orange";
  });
});

let msg = document.getElementById("message");
let btn = document.getElementById("msgbtn");
let form = document.getElementById("myForm");
let inputs1 = document.querySelectorAll(
  'input[type="text"], input[type="email"], input[type="tel"], textarea'
);

btn.onclick = (event) => {
  let isValid = true;

  inputs1.forEach((input) => {
    if (input.hasAttribute("required") && input.value === "") {
      isValid = false;
      input.style.boxShadow = "0 0 4px red";
    }
  });

  if (isValid) {
    if (form.checkValidity()) {
      msg.style.visibility = "visible";
      msg.style.fontSize = "2.5rem";
      setTimeout(() => {
        msg.style.visibility = "hidden";
      }, 5000);

      inputs1.forEach((input) => {
        input.value = "";
        input.style.boxShadow = "";
      });
    } else {
      form.reportValidity();
    }
  }

  event.preventDefault();
};

form.onsubmit = (event) => {
  event.preventDefault();
};

// Get all the download icons
const downloadIcons = document.querySelectorAll(".fas.fa-download");

// Attach a click event listener to each download icon
downloadIcons.forEach((icon) => {
  icon.addEventListener("click", function (event) {
    event.preventDefault();
    const box = event.target.closest(".box");
    const image = box.querySelector("img");
    const previousSrc = image.src;
    image.src = "true.jpg"; // Replace 'new_image.jpg' with your desired image source
    // Set a timeout to revert the image after 5 seconds
    setTimeout(() => {
      image.src = previousSrc;
    }, 4000);
  });
});

document.addEventListener("click", function (event) {
  const target = event.target;

  // Exclude elements with the class 'btn' or 'fas fa-envelope' from event.preventDefault()
  if (
    !target.classList.contains("btn-event") &&
    !target.classList.contains("fa-envelope") &&
    !target.classList.contains("fa-linkedin") &&
    !target.classList.contains("fa-github") &&
    !target.classList.contains("fa-facebook")
  ) {
    event.preventDefault();
  }
});

document.addEventListener("keydown", function (event) {
  
});

// Add more event listeners for other events if needed

// edit the resume

function editResume() {
  // Show the edit form and hide the resume content
  document.getElementById('editForm').style.display = 'block';
  document.getElementById('resume').style.display = 'none';
}

function saveResume() {
  // Get the new values from the form input fields
  const newName = document.getElementById('newName').value;
  const newAge = document.getElementById('newAge').value;
  const newEmail = document.getElementById('newEmail').value;
  // Retrieve other input values as needed

  // Update the resume content with the new values
  document.getElementById('name').textContent = newName;
  document.getElementById('age').textContent = 'Age: ' + newAge;
  document.getElementById('email').textContent = 'Email: ' + newEmail;
  // Update other resume details as needed

  // Hide the edit form and show the updated resume content
  document.getElementById('editForm').style.display = 'none';
  document.getElementById('resume').style.display = 'block';
}


function addProjectForm() {
  // Show the add project form and hide the portfolio
  document.getElementById('addProjectForm').style.display = 'block';
  document.getElementById('portfolio').style.display = 'none';
}

function saveProject() {
  // Get the new project details from the form input fields
  const projectName = document.getElementById('projectName').value;
  const projectDescription = document.getElementById('projectDescription').value;
  // Retrieve other project details as needed

  // Create a new project box element
  const newProjectBox = document.createElement('div');
  newProjectBox.className = 'box';

  // Populate the new project box with the user's input
  newProjectBox.innerHTML = `
      <h3>${projectName}</h3>
      <p>${projectDescription}</p>
      <!-- Other project details -->
  `;

  // Append the new project box to the portfolio section
  const portfolio = document.getElementById('portfolio');
  portfolio.appendChild(newProjectBox);

  // Hide the add project form and show the updated portfolio
  document.getElementById('addProjectForm').style.display = 'none';
  document.getElementById('portfolio').style.display = 'block';
}


function addExperienceForm() {
  // Show the add experience form and hide the experience section
  document.getElementById('addExperienceForm').style.display = 'block';
  document.getElementById('experience').style.display = 'none';
}

function saveExperience() {
  // Get the new experience details from the form input fields
  const experienceDate = document.getElementById('experienceDate').value;
  const companyName = document.getElementById('companyName').value;
  const jobTitle = document.getElementById('jobTitle').value;
  const jobDescription = document.getElementById('jobDescription').value;
  // Retrieve other experience details as needed

  // Create a new experience box element
  const newExperienceBox = document.createElement('div');
  newExperienceBox.className = 'box';

  // Populate the new experience box with the user's input
  newExperienceBox.innerHTML = `
      <p>Date: ${experienceDate}</p>
      <h3>${companyName}</h3>
      <p>Job Title: ${jobTitle}</p>
      <p>${jobDescription}</p>
      <!-- Other experience details -->
  `;

  // Append the new experience box to the experience section
  const experienceSection = document.getElementById('experience');
  experienceSection.appendChild(newExperienceBox);

  // Hide the add experience form and show the updated experience section
  document.getElementById('addExperienceForm').style.display = 'none';
  document.getElementById('experience').style.display = 'block';
}


$(document).ready(function () {
  $("#myForm").submit(function (e) {
      e.preventDefault();

      // Get user input from the form fields
      const name = $("#name").val();
      const email = $("#email").val();
      const phone = $("#phone").val();
      const message = $("#message-text").val();

      // Perform any necessary actions with the user input (e.g., send to a server)

      // Display a success message to the user
      $("#message").text("Your message has been submitted successfully.");
  });
});
