<html>
	<head>
		<title>Register</title>
	</head>
    <body>
        <form action="register_authentication.php" method="POST">
            <div>
                <br/><br/><br/><br/>
            </div>	
            <center>
                <h2>Register Here</h2>
                <div>
                    <label><b>Firstname :</b></label>
                    <input type="text" name="firstname" />
                </div>
                <div>
                    <label><b>Lastname :</b></label>
                    <input type="text" name="lastname" />
                </div>
                <div>
                    <label><b>Username :</b></label>
                    <input type="text" name="username" />
                </div>
                <div>
                    <label><b>Password :</b></label>
                    <input type="password" name="password" />
                </div>
                <br/>
                <div>
                    <button name="register">Register</button>
                </div>
                <a href="login.php">Login</a>
            </center>
        </form>
    </body>
</html>