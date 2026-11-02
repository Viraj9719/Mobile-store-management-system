<!DOCTYPE html>
<html lang="en">
    <!-- mysql password Java2023@ -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DS ARCADE - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Animate.css for animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container login-container">
        <div class="row">
        <div class="card animate__animated animate__fadeIn">
           
            <div class="card-header" >
                <div class="logo animated-logo" >
                    <img src="resouse/logo.png" style="height: 50px;margin-left: 36%;">
                </div>
                 <h4 class="animate__animated animate__fadeInDown" style="margin-left: 20%;">DS ARCADE Login</h4>
            </div>
     
            <div class="card-body p-4">
                <form action="process/loginpro.php" method="POST">
                    <div class="floating-label mb-3">
                        <div class="input-group">
                               <label for="username" style="color: white;margin-top: 5px;">Username</label>
                            <span class="input-group-text" style="margin-left: 5px;"><i class="fas fa-user icon-pulse"></i></span>
                            <input type="text" class="form-control floating-input" id="" name="uname" required>
                         
                        </div>
                    </div>
                    
                    <div class="floating-label mb-4">
                        <div class="input-group">
                             <label for="password" style="color: white;margin-top: 5px;">Password</label>
                            <span class="input-group-text" style="margin-left: 10px;"><i class="fas fa-lock" ></i></span>
                            <input type="password" class="form-control floating-input" id="" name="pass"  required>
                            <span class="input-group-text password-toggle" onclick="togglePassword()">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </span>
                           
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        
                        <div class="offset-3 col-6 text-end">
                            <a href="#" class="text-decoration-none">Forgot password?</a>
                        </div>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary animate__animated animate__pulse animate__infinite" >Login</button>
                    </div>
                </form>
                
                
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>