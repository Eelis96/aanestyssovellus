
document.forms['login'].addEventListener('submit', loginUser );

function loginUser(event){
    event.preventDefault();
    const username = document.forms['login']['username'].value;
    const password = document.forms['login']['password'].value;

    if(username.length <= 0){
        showMessage('error', 'Username Required');
        return;
    }

    if(password.length <= 4){
        showMessage('error', 'Password Is Too Short');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if(data.hasOwnProperty('success')){
            window.location.href = "index.php?type=success&msg=Welcome";
            return;
        }else{
            showMessage('error', 'Login Failed!');
        }
    }
    ajax.open("POST","backend/loginUser.php", true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.send(`username=${username}&password=${password}`);
}

