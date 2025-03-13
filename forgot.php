<!DOCTYPE html>
<html lang="en">
<head>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    form{
       text-align:center;
    }
    .box{
      width: 330px;
     padding: 20px;
     margin: 200px auto;
     background-color: #fff;
     border-radius: 8px;
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .num{
      position: relative;
      margin-bottom: 20px;
    }
    input[type="text"]
    {
      width: 50%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    i{
      
      top: 50%;
      right: 10px;
      
    }
    .b{
        background-color: #007bff;
      color: #fff;
      border: none;
    }
    
    </style>
</head>
<body>
  <div class="a">
    <form>
        <div class="box">
            <div class="num">
                <h1 align="center">Change Password</h1>
                <label> </label><input type="password" placeholder="NEW PASSWORD" maxlength="10" required><br><br>
                <input type="password" placeholder="CONFIRM PASSWORD" maxlength="10" required><br>
            </div>   
            <button type='submit' class='b' onclick="alert('sucessfuly sent')">change password</button>   

        <div>  
        </form> 
    <div>                             
</body>
</html>