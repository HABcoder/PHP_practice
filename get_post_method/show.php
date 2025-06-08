
<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $fname = $_POST['father-name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $hoy = $_POST['hobby'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        :root {
            --primary-color: #4a6baf;
            --secondary-color: #6c5ce7;
            --accent-color: #00cec9;
            --text-color: #333;
            --light-bg: #f5f7fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .welcome-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(39, 39, 39, 0.53);
            padding: 40px;
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
            text-align: center;
        }
        
        .welcome-header {
            margin-bottom: 40px;
        }
        
        .welcome-title {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .welcome-subtitle {
            color: var(--secondary-color);
            font-size: 1.2rem;
            font-weight: 400;
        }
        
        .user-profile {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        .profile-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            text-align: left;
            border: 1px solid #eee;
            transition: transform 0.3s;
        }
        
        .profile-card:hover {
            transform: translateY(-5px);
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            margin-right: 20px;
        }
        
        .profile-info {
            text-align: left;
        }
        
        .profile-name {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        .profile-age {
            color: #777;
            font-size: 1rem;
        }
        
        .profile-details {
            margin-top: 20px;
        }
        
        .detail-item {
            margin-bottom: 15px;
            display: flex;
        }
        
        .detail-label {
            font-weight: 600;
            color: var(--secondary-color);
            width: 150px;
        }
        
        .detail-value {
            color: #555;
            flex: 1;
        }
        
        .hobbies-section {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .hobbies-title {
            color: var(--secondary-color);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .hobbies-list {
            color: #555;
            line-height: 1.8;
            padding-left: 20px;
        }
        
        .edit-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            margin-top: 30px;
            transition: all 0.3s;
        }
        
        .edit-btn:hover {
            background-color: #3a5a9f;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(58, 90, 159, 0.3);
        }
        
        @media (max-width: 600px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-avatar {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .detail-item {
                flex-direction: column;
            }
            
            .detail-label {
                width: 100%;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="welcome-header">
            <h1 class="welcome-title">Welcome, <span id="displayName"><?php echo $name ?></span>!</h1>
            <p class="welcome-subtitle">We're delighted to have you here</p>
        </div>
        
        <div class="user-profile">
            <div class="profile-card">
                <div class="profile-header">
                    <div class="profile-avatar" id="avatarInitial">A</div>
                    <div class="profile-info">
                        <h2 class="profile-name" id="profileName">Name: <?php echo $name." ".$fname ?></h2>
                        <p class="profile-age" id="profileAge">Age: <?php echo $age ?></p>
                    </div>
                </div>
                
                <div class="profile-details">
                    <div class="detail-item">
                        <span class="detail-label">Father's Name:</span>
                        <span class="detail-value" id="fatherName"><?php echo $fname ?></span>
                    </div>
                    
                    <div class="detail-item">
                        <span class="detail-label">Email Address:</span>
                        <span class="detail-value" id="profileEmail"><?php echo $email ?></span>
                    </div>
                </div>
                
                <div class="hobbies-section">
                    <h3 class="hobbies-title">My Hobbies & Interests</h3>
                    <div class="hobbies-list" id="profileHobbies" name='hobby'>
                       <?php echo $hoy ?>
                    </div>
                </div>
                
                <button class="edit-btn" onclick="location.href='post.php'">Enter New Record</button>
            </div>
        </div>
    </div>