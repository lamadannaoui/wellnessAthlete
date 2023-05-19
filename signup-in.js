//hon bas 3am jib lcss te3 klchi bedi esta3emlu
let switchCtn = document.querySelector("#switch-cnt");
let switchC1 = document.querySelector("#switch-c1");
let switchC2 = document.querySelector("#switch-c2");
let switchCircle = document.querySelectorAll(".switch__circle");
let switchBtn = document.querySelectorAll(".switch-btn");
let aContainer = document.querySelector("#a-container");
let bContainer = document.querySelector("#b-container");
let allButtons = document.querySelectorAll(".submit");

let getButtons = (e) => e.preventDefault(); // hon he ekhtisar la function eza de3ti fiya oulili bsir bekteba bchakla ltabi3i

let changeForm = (e) => {  //same hon bas hon fi kaza cha8le b2alb lfunction fa fta7et { }
	switchCtn.classList.add("is-gx");// hon bas kermel ya3mel animation 
	setTimeout(function () { 
		switchCtn.classList.remove("is-gx");
	}, 1500);// he kela bas kermel elu ywa2ef ba3d 1.5s kermel may3id aw ysatel 

	switchCtn.classList.toggle("is-txr");//hon bas kermel khali ybadel bed left w right 
	switchCircle[0].classList.toggle("is-txr");
	switchCircle[1].classList.toggle("is-txr");

	switchC1.classList.toggle("is-hidden");//hon kermel maykoun kelchi fo2 ba3d fa wahde btedwi w wahde btetfi
	switchC2.classList.toggle("is-hidden");
	aContainer.classList.toggle("is-txl");//hon kermel left w right
	bContainer.classList.toggle("is-txl");
	bContainer.classList.toggle("is-z200");//bas kermel ghayer bl position 
};

let mainF = (e) => { //kamen hon e5tisar la function bas b2alba 2 for 3am yesta3emlu lfunction li fo2 
	for (var i = 0; i < allButtons.length; i++)
		allButtons[i].addEventListener("click", getButtons);
	for (var i = 0; i < switchBtn.length; i++)
		switchBtn[i].addEventListener("click", changeForm);
};

window.addEventListener("load", mainF);//hon bas kermel lfunction tkoun che8ale de8ri awal mayfut 3al page 
