<html>
    <head>
        <title> User Login And Registration </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    </head>
    <body>
    <audio autoplay loop>
      <source src="diee.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>

    <script>
		// Set a timeout function to redirect after 30 seconds of inactivity
		var timeoutID = setTimeout(redirect, 30000);

		// Add an event listener to reset the timeout when the user interacts with the page
		document.addEventListener('mousemove', resetTimer);
		document.addEventListener('keypress', resetTimer);

		// Function to reset the timeout
		function resetTimer() {
			clearTimeout(timeoutID);
			timeoutID = setTimeout(redirect, 30000);
		}

		// Function to redirect to a new page
		function redirect() {
			window.location.href = "locked.html";
		}
	</script>
    
    
        <div class="container">
            <div class="login-box">
            <div class="row">
            <button class="btn" onclick="window.location.href='https://stuntstorm.github.io/RINA-BANK/Rina-Bank/Home.html';"> Home </button>
            <br> <br> <br>
  
                <div class="col-md-6 login-left">
                <h2> Login Here </h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <br>
        
                        <button type="submit" class="btn btn-primary"> Login </button>
                    
                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h2> Register Here </h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"> Register </button>
                    </form>
                </div>
            </div>
            
</div>

        </div>
        
    </body>
</html>