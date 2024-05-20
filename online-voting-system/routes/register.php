<html>
    <head>
        <title>OVS - Registratrion</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="../css/icon.jpg" rel="icon">
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>VoTe</h1>  
            <h2>Registration</h2>
            </div><br><br><br><br><br>
            <hr>

            
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input type="text" name="add" placeholder="Address" required style="width: 40.5rem;"><br><br>
                    <div id="upload">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../">Login here</a>
                </form>
        </center>
    </body>
</html>