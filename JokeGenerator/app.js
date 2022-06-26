// SELECTORS
const jokeDIV = document.querySelector('.joke-title');
const jokeDIV2 = document.querySelector('.joke-answer');
const button = document.querySelector('.get-joke');
const anotherbutton = document.querySelector('.get-another-joke');
const revealButton = document.querySelector('#reveal-punchline')
const revealpunch = document.getElementById("joke-answer");

//First get joke
getJoke = () => {
    // button and punchline hides/shows
    revealButton.classList.toggle("show");
    button.classList.add("hide");

    //ajax get request via joke api
    const ajax = new XMLHttpRequest;
    const url = 'https://backend-omega-seven.vercel.app/api/getjoke'

    ajax.open('GET', url, true);

    ajax.onreadystatechange = function(){
        if (this.status === 200) {
            let data = JSON.parse(this.responseText);
            jokeDIV.innerHTML = data[0].question;
            jokeDIV2.innerHTML = data[0].punchline;
        
        } else {
            this.error = error();
        }
    }
    ajax.send();

}

//Revealing joke punchline
revealAnswer = () => {
    jokeDIV2.classList.remove("hide");
    revealButton.classList.remove("show");
    anotherbutton.classList.add("show");
}

getanotherJoke = () => {
    // more hide/shows
    revealpunch.classList.toggle("hide");
    revealButton.classList.toggle("show");
    anotherbutton.classList.add("hide");
    anotherbutton.classList.remove("show");

    //api call for another joke
    const ajax = new XMLHttpRequest;
    const url = 'https://backend-omega-seven.vercel.app/api/getjoke'

    ajax.open('GET', url, true);

    ajax.onreadystatechange = function(){
        if (this.status === 200) {
            let data = JSON.parse(this.responseText);
            jokeDIV.innerHTML = data[0].question;
            jokeDIV2.innerHTML = data[0].punchline;

        } else {
            this.error = error();
        }
    }
    ajax.send();

}

//error handling
error = () =>{
     jokeDIV.textContent = 'Something has gone wrong!';  
}