//nafsu zetu te3 signup-in.js bas 3melet copy la2an yemken nzid hon kam function wyemken ghayer blmawjoudin chway chway

//hon bas 3am jib lcss w7eton b2lab variable kermel 2e2der esta3melon
let switchCtn = document.querySelector("#switch-cnt");
let switchC1 = document.querySelector("#switch-c1");
let switchC2 = document.querySelector("#switch-c2");
let switchCircle = document.querySelectorAll(".switch__circle");
let switchBtn = document.querySelectorAll(".switch-btn");
let aContainer = document.querySelector("#a-container");
let bContainer = document.querySelector("#b-container");

//he function esma changeForm 3enda parametre (e)
let changeForm = (e) => {
	// he bt7ot lcss (is-gx) yali khasu bl animation 3and ltag html li 3endu id (switch-cnt)
	switchCtn.classList.add("is-gx");
	// he kermel bas tekhlas lanimation yerja3 ychil lcss (is-gx) [lwa2et hewe 1500 ms]
	setTimeout(function () { 
		switchCtn.classList.remove("is-gx");
	}, 1500);

	switchCtn.classList.toggle("is-txr");//he kermel t7ot aw tchile lcss (is-txr) [7asab eza kan mawjoud bltag aw la] 3and lhtml tag li 3endu id (switch-cnt)
	switchCircle[0].classList.toggle("is-txr");// he mtl li fo2 bas hal mara 3and ltag te3 lcircle 
	switchCircle[1].classList.toggle("is-txr");// mtl li fo2 bas la2an 3ena 2 circle

	switchC1.classList.toggle("is-hidden");//he kermel t7ot aw tchile lcss (is-hidden)
	switchC2.classList.toggle("is-hidden");// same 
	aContainer.classList.toggle("is-txl");// he kermel t7ot aw tchile lcss (is-txl) 3and lcontainer te3it l BMI
	bContainer.classList.toggle("is-txl");// mtl li fo2 bas hal mara lal container te3it l medical history etc
	bContainer.classList.toggle("is-z200");// he mtl li fo2 bas lcss (is-z200) badal lcss (is-txl)
};

//he function esma mainF 3enda parametre (e)
let mainF = (e) => {
	//he lfor kermel tchuf kam button 3ena wt7etelon lfunction getButtons kermel ma 3ida la kl button
	for (var i = 0; i < allButtons.length; i++)
		allButtons[i].addEventListener("click", getButtons);
	//he kermel tchuf lbutton li khason bltebdil wl animation wt7eteln el lfunction changeForm	kermel ma 3ida la kl button
	for (var i = 0; i < switchBtn.length; i++)
		switchBtn[i].addEventListener("click", changeForm);
};

//he kermel lfunction mainF techte8el awal ma na3mel load lal page
window.addEventListener("load", mainF);
