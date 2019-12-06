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
  window.open("signup.php","_top");
}

function showLogin()
{
  document.getElementById("root").className = "account-main login";
  document.getElementById("loginRoot").className = "login-wrapper";
  document.getElementById("createRoot").className = "create-wrapper hidden";
  document.getElementById("btnCreate").className = "create-button";
  document.getElementById("btnText").innerHTML = "+";
}