const pollQueryString = window.location.search;

const pollParams = new URLSearchParams(pollQueryString);

if(pollParams.has('id')){

    getPollData(pollParams.get('id'));

}

document.getElementById('optionsUl').addEventListener('click', giveVote);

function getPollData(id){
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        data = JSON.parse(this.responseText);
        showPoll(data);
    }
    ajax.open("GET", "backend/getPoll.php?id=" + id);
    ajax.send();
}

function showPoll(data){
    document.querySelector('h2').innerHTML = data.topic;
    const ul = document.getElementById('optionsUl');

    data['options'].forEach(option => {
        const newLi = document.createElement('li');
        newLi.classList.add('list-group-item');
        newLi.dataset.optionid = option.id;

        const newButton = document.createElement('button');
        newButton.classList.add('btn');
        newButton.classList.add('btn-lg');
        newButton.classList.add('btn-primary');
        newButton.dataset.optionid = option.id;

        const buttonText = document.createTextNode(option.name);

        newButton.appendChild(buttonText);
        newLi.appendChild(newButton);
        ul.appendChild(newLi);

    });
}

function giveVote(event){

    let id = event.target.dataset.optionid;

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        data = JSON.parse(this.responseText);
    }
    ajax.open("GET", "backend/giveVote.php?id=" + id);
    ajax.send();
}