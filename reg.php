<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <title>Instagram</title>
    </head>
    <body> 
        <div class="container-fluid mt-1">
            <div class="card">
                <div class="card-header text-center text-dark">
                	<img src="/image/insta.png" height="150" width="150">
					<h1>Instagram</h1>
                </div>
                <div class="card-body bg-warning">
                    <form method="POST" action="pfn.php">
                        <input type="text" class="form-control" placeholder="Usernamre" required></br>
                        <input type="password" class="form-control" id="txtpass" placeholder="Enter Password" required><br>
                        <input type="password" class="form-control" id="txtrepass" placeholder="Re type Password" onkeyup="pass()" required><br>
                        <input type="submit" id="btn" class="btn btn-primary w-100" value="Register" ></br>
                        <a href="login.php" class="btn btn-danger w-100 mt-2">Click here to Login</a><br>
                    </form>
                </div>
        	</div>
        </div>
        <script>
        function pass()
        {
        var c=document.getElementById("txtrepass");
        var password=document.getElementById("txtpass").value;
        var repassword=document.getElementById("txtrepass").value;
        var b=document.getElementById("btn");
        if(password!=repassword)
        { 
        c.style.color="red";
        b.disabled = true;
        }
        else
        {
        c.style.color="green";
        b.disabled = false;
        }
        }
        </script>
       </body>
</html>