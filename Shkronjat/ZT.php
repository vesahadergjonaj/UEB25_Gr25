<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>

  <link rel="stylesheet" href="style.css">
  <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background-image: url(Figurat/bgfig2.png);
}
@keyframes floatIn {
  0% {
    transform: translate(-50%, -70%);
    opacity: 0;
  }
  100% {
    transform: translate(-50%, -50%);
    opacity: 1;
  }
}
.container{
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: rgba(5,64,192,255,0.8);
  border-radius: 20px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
  backdrop-filter: blur(7px);
  animation: floatIn 1s ease-in-out backwards;
}
.container .registration{
  display: none;
}
#check:checked ~ .registration{
display: block;
}
#check:checked ~ .login{
display: none;
}
#check{
display: none;
}
.container .form{
  padding: 32px;
}
.form header{
  font-size: 32px;
  font-weight: 500;
  text-align: center;
  margin-bottom: 24px;
}
 .form input{
   height: 60px;
   border-radius: 20px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 20.8px;
   border: 1px solid #ddd;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #009579;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}
.form input.button{
  color: #fff;
  background: #009579;
  border-radius: 20px;
  font-size: 19.2px;
  font-weight: 500;
  letter-spacing: 1px;
  margin-top: 27.2px;
  cursor: pointer;
  transition: 0.4s;
}
.form input.button:hover{
  background: #006653;
}
.signup{
  font-size: 17px;
  text-align: center;
  color: white;
}
.signup label{
  color: #009579;
  cursor: pointer;
}
.signup label:hover{
  text-decoration: underline;
}
/*NAV*/
.row {
margin-top: 5%;
display: flex;
justify-content: space-between;
flex-wrap: wrap; /* ta lejon pershtatjen ne ekrane tvogla */
gap: 20px; /* Opsional: Menaxhon hapsirën mes kolonav */
}
.text-box{
  width: 90%;
  color:#fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
}
.nav-links{
      flex: 1;
      text-align: right;
  }
  .nav-links ul li{
      list-style: none;
      display: inline-block;
      padding: 8px 12px;
      position: relative;
  }   
  .nav-links ul li::after{
      content: '';
      width: 0%;
      height: 2px;
      background: #f44336;
      display: block;
      margin: auto;
      transition:0.5s;
  }
  .nav-links ul li:hover::after{
      width: 100%;

  }
  .nav-links ul li a{
      color: #fff;
      text-decoration: none;
      font-size: 15px; /*ja 15 ja 16*/
  }
  nav{
      display: flex;
      padding: 2% 6%;
      justify-content: space-between ;
      align-items: center;
  }
  nav img{
      width: 150px;

  }
  .header{
      min-height: 100vh; /*hfbshdjbnsd e kom shkru nbody edhe 
                          s'shkojke teksti n'section tdyt ma posht -1 or e jetes*/
      width: 100%;
      background-image: url(Figurat/bgfig2.png); 
      background-position: center;
      background-size: cover;
      position: relative;
  }
 
  body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
  }
  input[type=text] {
    background-color: white;
    background-image: url('Figurat/image.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding-left: 40px;
  }
  .spital-title {
    font-size: 25px; 
    font-weight: 600; 
    color: #f4f4f4; 
    margin-left: 20px; 
    text-align: left
}
  </style>
</head>
<body>
  <section class="header">
    <nav>
      <div class="spital-title"> Healify </div>
      <div class="nav-links">
          <ul>
              <li><a href="home.html">BALLINA</a></li>
              <li><a href="about.html">RRETH NESH</a></li>
              <li><a href="sherbimet.html">SHERBIMET</a></li>
              <li><a href="blog.html">BLOG</a></li>
              <li><a href="contactss.html">KONTAKTI</a></li>
              <li><a href="loginii.html">KYÇU</a></li>
          </ul>
      </div>
  </nav>
  </section>
    
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header style="color: white;">Login</header>
      <form>
        <input type="email" placeholder="Enter your email" required>
        <input type="password"  placeholder="Enter your password" required>
        <a href="forgetpw.html">Forgot password?</a>
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header style="color: white;">Signup</header>
      <form>
        <input type="email" placeholder="Enter your email" required>
        <input type="password" placeholder="Create a password" required>
        <input type="password" placeholder="Confirm your password" required>
        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
  <script src="loginii.js"></script>
</body>
</html>