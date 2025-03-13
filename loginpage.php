<!DOCTYPE html>
<html>
<head>
  <title>Online Appointment</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 
  <style>
    body {
      background-image: url(https://www.shutterstock.com/image-photo/doctor-600nw-558136654.jpg);
      background-size: cover;
      background-position: center;
      font-family: Arial, sans-serif; /* Adding a default font-family for better readability */
    }
    form{
      text-align: center;
    }
   .wrapper{
    width: 300px;
    color: black; 
    padding: 45px;
    margin:100px auto;
    
  }
  h1 {
      margin-bottom: 20px;
    }

    .input-box {
      position: relative;
      margin-bottom: 20px;
    }
  input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    i {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
    }
    button {
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      width: 100px;
      border-radius: 20px;
      cursor: pointer;
      
    }
    .remeber-forgot {
      margin-bottom: 20px;
     text-align:left;
     margin-right: 30px;
     font-style: italic;
    }
    .forgot-password{
      float: right;
    }
    .register-link{
      font-style: italic;
    }
  </style>
</head>
<body>
  <div class='wrapper'>
    <form id="loginForm" onsubmit="return validateForm()">
       <h1>Login</h1>
      <div class='input-box'>
        <input type='text' id="name" placeholder="Username" required>
        <i class='bx bxs-user'></i>
        </div>
        <div class='input-box'>
        <input type='password'id="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class='remeber-forgot'>
        <input type='checkbox'> Remember me
        <a href='http://127.0.0.1:5500/PROJECT/forgot.html' class="forgot-password">Forgot Password?</a>
      </div>
      <button type="submit">LOGIN</button>
      <div class='register-link'>
        <p>Don't have an account? <a href='http://127.0.0.1:5500/PROJECT/REGISTER.html'>Register</a></p>
      </div>
    </form>
  </div>

  <script>
    function validateForm() {
      var name = document.getElementById("name").value;
      var password = document.getElementById("password").value;

      // Regular expressions for exactly 13 alphabets and exactly 6 numbers
      var alphabetsExactly13 = /^[A-Za-z]{1,13}$/;
      var numbersExactly6 = /^[0-9]{6}$/;

      // Check if name contains exactly 13 alphabets
      if (!name.match(alphabetsExactly13)) {
        alert("Username should contain exactly 13 alphabets.");
        return false; // Prevent form submission
      }

      // Check if password contains exactly 6 numbers
      if (!password.match(numbersExactly6)) {
        alert("Password should contain exactly 6 numbers.");
        return false; // Prevent form submission
      }

      // Redirect to homepage
      window.location.href = "http://127.0.0.1:5500/PROJECT/homepage.html";
      return false; // Prevent default form submission
    }
  </script>
</body>
</html>

