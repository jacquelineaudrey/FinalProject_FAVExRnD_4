<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <title>Register</title>
</head>
<body>
    <div class="elem-left"></div>
    <div class="elem-right"></div>
    <div class="wrapper">
        <div class="header">
            <img src="{{asset('asset/Union.svg')}}" aria-hidden="true" class="logo">
            <h1>Register</h1>
            <h5>Create an account in a second, just like snapping your finger!</h5>
        </div>
        <div class="form-box register">
            <form id="registerForm" action="#">
                <div class="input-box">
                    <input type="text" id="UName" required>
                    <label>Name</label>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="email" id="UEmail" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="text" id="UAddress" required>
                    <label>Address</label>
                </div>
                <div class="input-box">
                    <input type="tel" id="UPhone" required>
                    <label>Phone Number</label>
                </div>
                <div class="input-box">
                    <input type="date" id="UBirth" required>
                    <label>Day of Birth</label>
                </div>
                <div class="input-box">
                    <input type="password" id="UPass" required>
                    <label>Password</label>
                    <img src="./images/eye-closed.svg" id="eyeicon" class="icon">
                </div>
                <button type="submit" class="btn" id="registerbtn">Register</button>
                <div class="login-register">
                    <p>You already have an account? <a href="{{route('login')}}"><b>Login here</b></a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="{{asset('script2.js')}}"></script>
</body>
</html>
