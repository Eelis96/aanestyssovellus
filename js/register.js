document.forms['register'].addEventListener('submit', registerNewUser);

function registerNewUser(event){
    event.preventDefault();
    
    const username = document.forms['register']['username'].value;
    const password = document.forms['register']['password'].value;
    const password2 = document.forms['register']['confirmPassword'].value;

    if(username.length <= 0){
        showMessage('Username Required');
        return;
    }

    if(password.length <= 4){
        showMessage('Password Is Too Short');
        return;
    }

    if(password.localeCompare(password2) != 0){
        showMessage('Password Not Matching');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if(data.hasOwnProperty('success')){
            window.location.href = "login.php?type=success&msg=Rekisteröityminen Onnistui! Voit Kirjautua Uusilla Tunnuksillasi";
        }else{
            showMessage(data.error);
        }
    }
    ajax.open("POST", "backend/registerNewUser.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("username="+username+"&password="+password);
}