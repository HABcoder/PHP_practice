
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Bio Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }
        
        .bio-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
        }
        
        h1 {
            color: #4a6baf;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        
        input, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border 0.3s;
            box-sizing: border-box;
        }
        
        input:focus, textarea:focus {
            border-color: #4a6baf;
            outline: none;
            box-shadow: 0 0 0 3px rgba(74, 107, 175, 0.2);
        }
        
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        .submit-btn {
            background-color: #4a6baf;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            width: 100%;
            transition: background-color 0.3s;
        }
        
        .submit-btn:hover {
            background-color: #3a5a9f;
        }
        
        .form-footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="bio-container">
        <h1>Personal Bio</h1>
        <form action="show.php" method="post">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            
            <div class="form-group">
                <label for="father-name">Father's Name</label>
                <input type="text" id="father-name" name="father-name" placeholder="Enter your father's name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="Enter your age" min="1" max="120" required>
            </div>
            
            <div class="form-group">
                <label for="hobby">Interests</label>
                <textarea id="hobby" name="hobby" placeholder="Describe your hobbies and interests"></textarea>
            </div>
            
            <button type="submit" class="submit-btn" name='submit'>Submit Bio</button>
        </form>
        
        <div class="form-footer">
            Your information is secure with us
        </div>
    </div>
</body>
</html>