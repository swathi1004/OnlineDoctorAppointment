


<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e2d6d6;
            padding: 20px;
           
        }
        
      .navbar {
        width: 100opx;
        display: flex;
        
        padding: 15px 20px; /* Adjusted padding */
        align-items: center;
        justify-content: space-between;
        background: linear-gradient(145deg, #333, #555); /* Dark gradient */
        box-shadow: 0 2px 4px rgba(0,0,0,0.3); /* Enhanced shadow for depth */
      }

      .navbar .logo {
        width: 120px; /* Adjusted logo size for better fit */
        transition: transform 0.5s ease; /* Smooth transition for hover effect */
      }

      .navbar .logo:hover {
        transform: scale(1.1); /* Slightly enlarges the logo on hover */
      }

      ul {
        display: flex;
        list-style-type: none; /* Removes default bullet points */
        padding-left: 0; /* Removes default padding */
      }

      ul li {
        padding: 10px 20px; /* Increased padding for larger clickable area */
      }

      ul li a {
        font-weight: bold;
        color: #f8f9fa;
        text-decoration: none;
        font-size: 18px; /* Larger font size */
        transition: color 0.3s ease-out; /* Smooth color transition on hover */
      }

      ul li a:hover {
        color: #ff4081; /* Bright color for hover state */
      }


        form {
            background-color: #a2a1a1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        .rating {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .rating input[type="radio"] {
            display: none;
        }

        .rating label {
            cursor: pointer;
            font-size: 30px;
            margin-right: 5px;
        }

        .rating input[type="radio"]:checked ~ label {
            color: #ffc107;
        }

        #ratingText {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="https://marketplace.canva.com/EAE2x-ic0Gk/1/0/1600w/canva-caduceus-logo%2Chealth-logo%2Cmedical-logo-2lhCTZ-v9hc.jpg" class="logo">
        <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">FIND DOCTORS</a></li>
        <li><a href="#">MY APPOINTMENTS</a></li>
        <li><a href="#">FEEDBACK</a></li>
        <li><a href="http://127.0.0.1:5500/loginpage.html">LOG OUT</a></li>
        </ul>
     </div>
    <h1>Feedback</h1>
    <form  action="#" method='#' >
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="rating">Rating:</label>
        <div class="rating">
            <input type="radio" id="circle5" name="rating" value="5">
            <label for="circle5">⭐️</label>
            <input type="radio" id="circle4" name="rating" value="4">
            <label for="circle4">⭐️</label>
            <input type="radio" id="circle3" name="rating" value="3">
            <label for="circle3">⭐️</label>
            <input type="radio" id="circle2" name="rating" value="2">
            <label for="circle2">⭐️</label>
            <input type="radio" id="circle1" name="rating" value="1">
            <label for="circle1">⭐️</label>
        </div>

        <div id="ratingText">Please rate</div>

        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments"></textarea>

        <input type="submit" value="Submit Feedback">
    </form>

    <script>
        const ratingInputs = document.querySelectorAll('.rating input[type="radio"]');
        const ratingText = document.getElementById('ratingText');

        ratingInputs.forEach(input => {
            input.addEventListener('change', () => {
                ratingText.textContent = `Rating: ${input.value}`;
            });
        });
    </script>
</body>
</html>