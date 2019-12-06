<script>
var login = true;
document.getElementById('btnCreate').onclick = toggleMenu;
window.onload = windowLoaded;

function windowLoaded() {
  showLogin();
}

function toggleMenu()
{
  login = !login;
  if(login)
    showLogin();
  else
    showCreate();
}

function showCreate()
{
  document.getElementById("root").className = "account-main create";
  document.getElementById("loginRoot").className = "login-wrapper hidden";
  document.getElementById("createRoot").className = "create-wrapper";
  document.getElementById("btnCreate").className = "create-button create";
  document.getElementById("btnText").innerHTML = "-";
}

function showLogin()
{
  document.getElementById("root").className = "account-main login";
  document.getElementById("loginRoot").className = "login-wrapper";
  document.getElementById("createRoot").className = "create-wrapper hidden";
  document.getElementById("btnCreate").className = "create-button";
  document.getElementById("btnText").innerHTML = "+";
}
</script>

<style>
body{
  margin-top: 200px;
  color: white;
}

.account-wrapper{
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  width: 400px;
  height: auto;
}

.account-main{
  transform: rotate3d(-0.5,0.5,0, 20deg);
  transform: translateY(-50px);
  transition: 0.5s;
}
/* transform: rotate3d(-0.5,0.5,0, 20deg); */
.account-main.login{
  transform: rotate3d(-0.5,0.5,0, 20deg);
  transition: 0.5s;
}

.account-main.create{
  transform: rotate3d(0,-0.8,0.1, 200deg);
  transition: 0.5s;
}

.account-input{
  margin: auto;
  width: 370px;
  height: 60px;
  overflow: hidden;
  margin-bottom: 15px;
  transform: translate3d(-3px,-3px,0px);
  transition: 0.1s;
}

.account-input.invert {
  transform: translate3d(0px,0px,0px);
}

.account-input:hover{
  transform: translate3d(-6px,-6px,0px);
  transition: 0.1s;
}

.account-input.invert:hover{
  transform: translate3d(3px,-3px,0px);
  transition: 0.1s;
}

.account-input > input{
  background-color: white;
  width: 100%;
  height: 30px;
  margin: 0;
  padding: 0;
  text-decoration: none;
  border: none;
  resize: none;
  color: black;
  font-size: 20px;
  font-family: 'Montserrat', sans-serif;
  font-weight: 300;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-left: 10px;
  letter-spacing: .5px;
}

.account-input.invert > input{
  background-color: #262626;
  color: white;
}

.account-input-submit{
  position: absolute;
  right: 15px;
  width: 150px;
  height: 40px;
  margin-bottom: 15px;
}

.account-input-submit > input{
  margin: auto;
  background-color: #2e2e2e;
  width: 100%;
  height: 100%;
  color: white;
  transform: translate3d(-3px,-3px,0px);
  border: none;
  font-size: 18px;
  font-family: 'Montserrat', sans-serif;
  font-weight: 300;
  cursor: pointer; 
  transition: 0.1s;
}

.account-input-submit.invert > input{
  background-color: white;
  color: black;
  transition: 0.1s;
}

.account-input-submit > input:hover{
  transform: translate3d(-5px,-5px,0px);
  transition: 0.1s;
}

.account-input-submit.invert > input:hover{
  transform: translate3d(0px,-5px,0px);
  transition: 0.1s;
}

.account-input-head{
  width: 100px;
  height: 20px;
  background-color: #363535;
  text-align: center;
}

.account-input-head.invert{
  background-color: #fafafa;
}

.account-input-head > p {
  font-family: 'Montserrat', sans-serif;
  font-weight: 200;
  margin: auto;
  display: inline-block;
  font-size: 15px;
}

.account-input-head.invert > p {
  color: black;
  font-weight: 400;
}

.login-wrapper{
  position: relative;
  background-color: gray;
  width: auto;
  height: 265px;
  margin: 0;
  overflow: hidden;
  box-shadow: 20px 30px 40px rgba(0,0,0,0.05);
  opacity: 1;
  transition: 0.25s;
}

.login-wrapper.hidden{
  opacity: 0;
  transition: 0.25s;
  pointer-events: none;
}

.login-header{
  position: relative;
  background-color: #e7e6e6;
  width: 400px;
  height: auto;
  margin: 0;
}

.login-header > p{
  margin: 0;
  font-size: 30px;
  padding-left: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  color: black;
  font-family: 'Montserrat', sans-serif;
  font-weight: 300;
}

.login-body{
  width: 100%;
  height: 200px;
  padding-top: 10px;
  background-color: #efefef;
}

.create-button{
  position: absolute;
  background-color: #2e2e2e;
  width: 50px;
  height: 50px;
  right: 15px;
  top: -15px;
  box-shadow: 10px 10px 30px rgba(0,0,0,0.3);
  cursor: pointer; 
  transition: 0.5s;
  text-align: center;
}

.create-button > p{
  display: inline-block;
  font-size: 40px;
  margin: 0;
  padding: 0;
  font-family: 'Montserrat', sans-serif;
  font-weight: 300;
}

.create-button.create{
  background-color: #fbfbfb;
  color: black;
  right: 335px;
  z-index: 1;
  transition: .6s;
}

.create-button:hover{
  box-shadow: 5px 5px 30px rgba(0,0,0,0.9);
  transform: scale(0.8);
  transition: .3s;
}

.create-wrapper{
  position: absolute;
  background-color: #383838;
  width: auto;
  height: 390px;
  margin: 0;
  top: 0;
  right: 0;
  overflow: hidden;
  box-shadow: -20px 20px 40px rgba(0,0,0,0.3);
  opacity: 1;
  transition: 0.25s;
  transform: rotateY(180deg);
}

.create-wrapper.hidden{
  opacity: 0;
  pointer-events: none;
  transition: 0.25s;
}

.create-header{
  position: relative;
  background-color: #2e2e2e;
  width: 400px;
  height: auto;
  margin: 0;
}

.create-header > p{
  margin: 0;
  font-size: 30px;
  padding-left: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
  font-family: 'Montserrat', sans-serif;
  font-weight: 300;
}

.create-body{
  width: 100%;
  height: 200px;
  padding-top: 10px;
  background-color: #373737;
}
</style>

<div class="account-wrapper">
  <div id="root" class="account-main">
    <!-- Login Menu -->
    <div class="login-wrapper hidden" id="loginRoot">
      <div class="login-header">
        <p> Login </p>
      </div>
      <div class="login-body">

        <div class="account-input">
          <div class="account-input-head">
            <p> Name </p>
          </div>
          <input type="text" name="username" form="login" placeholder="Username" maxlength="25">
          </input>
        </div>

      <div class="account-input">
          <div class="account-input-head">
            <p> Password </p>
          </div>
          <input type="password" name="username" form="login" placeholder="********" maxlength="25">
          </input>
        </div>
    
    <div class="account-input-submit" >
          <input form="postForm" type="submit" value="Submit">
          </input>
        </div>
    
    

      </div>
    </div>

    <!-- Button Seperation Menu -->
    <div id="btnCreate" class="create-button create">
      <p id="btnText"> + </p>
    </div>
    
    <!-- Create Menu -->
    <div class="create-wrapper hidden" id="createRoot">
      <div class="create-header">
        <p> Create Account </p>
      </div>
      <div class="create-body">
        
        <div class="account-input invert">
          <div class="account-input-head invert">
            <p> Name </p>
          </div>
          <input type="text" name="username" form="create" placeholder="Username" maxlength="25">
          </input>
        </div>
      
        <div class="account-input invert">
          <div class="account-input-head invert">
            <p> Email </p>
          </div>
          <input type="email" name="email" form="create" placeholder="user@user.com" maxlength="35">
          </input>
        </div>

        <div class="account-input invert" style="margin-bottom: 2.5px;">
          <div class="account-input-head invert">
            <p> Password </p>
          </div>
          <input type="password" name="password" form="create" placeholder="********" maxlength="25">
          </input>
        </div>

<div class="account-input invert" style="margin-bottom: 0px;">
          <input type="password" name="passwordCheck" form="create" placeholder="********" maxlength="25">
          </input>
        </div>

<div class="account-input-submit invert" >
          <input form="postForm" type="submit" value="Submit">
          </input>
        </div>

      </div>
    </div>
  </div>
</div>

<form style="display: none;" action="/php/login.php" method="post" id="loginForm" enctype="multipart/form-data">
</form>
<form style="display: none;" action="/php/create.php" method="post" id="createForm" enctype="multipart/form-data">
</form>