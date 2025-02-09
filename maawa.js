
//signup
function handleSubmit() { 
  const firstname = document.getElementById("First name").value.trim();
  const lastname = document.getElementById("Last name").value.trim();
  const birthday = document.getElementById("Birthday").value.trim();
  const gender = document.getElementById("Gender").value.trim();
  const number = document.getElementById("Number").value.trim();
  const email = document.getElementById("Email").value.trim();
  const password = document.getElementById("Password").value.trim();
  const messageEl = document.getElementById("message"); 
  
  

  if (!firstname || !lastname || !birthday || !gender || !number || !email || !password) {
    messageEl.textContent = "Please fill out all fields.";
    messageEl.style.color = 'red';
    return;
  } 

if (localStorage.getItem(email)) {
    messageEl.textContent = "Account already exists.";
    messageEl.style.color = 'red';
} else {
    localStorage.setItem(email, password);
    messageEl.textContent = "Account created successfully! You can now log in.";
    messageEl.style.color = 'green';
    setTimeout(() => {
      window.location.href = "Login.php";
      }, 1000);
} 
}


// Login
function submit(){
  const email = document.getElementById("Email").value.trim();
  const password = document.getElementById("Password").value.trim();
  const messageEl = document.getElementById("message"); 


  if (!email || !password) {
    messageEl.textContent = "Please fill out all fields.";
    messageEl.style.color = 'red';
    return;
  } 

  const storedPassword = localStorage.getItem(email);

  if(storedPassword === password) {
    messageEl.style.color = "green";
    messageEl.textContent = "Login successful!";
    setTimeout(() => {
      window.location.href = "home.php";
      }, 1000);
  } else {
    messageEl.textContent = "Invalid username or password.";
  }

} 


// forgot password
function login() {
  window.location.href = "Login.php";
}

function newPassword() {
  const email = document.getElementById("Email").value.trim();
  const newPassword = document.getElementById("New password").value.trim();
  const confirmPassword = document.getElementById("Confirm password").value.trim();
  const messageEl = document.getElementById("message"); 

  if (!email || !newPassword || !confirmPassword) {
    messageEl.textContent = "Please fill out all fields.";
    messageEl.style.color = 'red';
    return;
  } 

  const storedPassword = localStorage.getItem(email);

  if (storedPassword){
    if (newPassword === confirmPassword) {
      localStorage.setItem(email, newPassword);
      messageEl.textContent = "Successfully created a new password.";
      messageEl.style.color = 'green';
    } else {
      messageEl.textContent = "Password did not match. Please try again.";
      messageEl.style.color = 'red';
    }
  } else {
     messageEl.textContent = "Account does not exist";
     messageEl.style.color = 'red';
  }tsq
}

//admin
function Admin_submit() {
  const password = document.getElementById("Password").value.trim();
  const messageEl = document.getElementById("message"); 

  if (!password) {
    messageEl.textContent = "Please fill out the field.";
    messageEl.style.color = 'red';
    return;
  } 


  if (password === '1234') {
    window.location.href = "crud.php";
  } else {
    messageEl.textContent =  `Invalid passcode. Please try again`
    messageEl.style.color = 'red';
  }
}


