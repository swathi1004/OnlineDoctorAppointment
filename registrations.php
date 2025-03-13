<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: white;
            border-radius: 8px;
            text-align: center;
            padding: 50px;
            width: 400px; /* Set width */
            height: 400px; /* Set height */
            margin: auto;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .name input {
            border-radius: 8px;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid lightblue;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        .name {
            border-radius: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            display: inline-block;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1 align="center">Registration Form</h1>
    <form method="POST" action="register.php">
    <div class="name">
        <input type="text" id="firstname" name="fname" placeholder="Firstname" required>
        <input type="text" id="lastname" name="lname" placeholder="Lastname" required>
        <br><br>
        <input type="email" id="mail" name="mail" placeholder="Your Email" required>
        <br><br>
        <input type="password" id="password" name="pass" placeholder="Your Password" required>
        <br>
        <input type="password" id="confirm_password" placeholder="Confirm Password" required>
        <br><br>
        <button onclick="validateForm()">REGISTER</button>
    </div>
</form>

    <script>
        function validateForm() {
            var firstname = document.getElementById("firstname").value;
            var lastname = document.getElementById("lastname").value;
            var mail = document.getElementById("mail").value;
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (firstname && lastname && mail && password && confirm_password) {
                alert('Registration successful');
            } else {
                alert('Please fill out all fields');
            }
        }
    </script>
</body>
</html>
