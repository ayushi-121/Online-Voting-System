<html>
    <head>
        <title>OVS - Home</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/icon.jpg" rel="icon">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>VoTe</h1>
            <h2>Login</h2>  
            </div><br><br><br><br><br>
            <hr>

            <div id="loginSection">
            <br><br><br>
                <form action="api/login.php" method="POST">
                    <input type="text" name="name" placeholder="User Name" required><br><br>
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>

            </center> 
    </body>
</html>