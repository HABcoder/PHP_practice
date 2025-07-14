<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sign-Up Form</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .signup-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button:hover {
            background-color: #0056b3;
        }
        
        @media (max-width: 480px) {
            .signup-container {
                margin: 0 15px;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="curd.php" method="POST">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="text" id="password" name="pass" required>
            </div>
            
            <div class="form-group">
                <label>Comment</label>
                <input type="text" id="confirm-password" name="comment" required>
            </div>
            
            <button type="submit" name="ins">Sign Up</button>
        </form>
    </div>
</body>
</html>

