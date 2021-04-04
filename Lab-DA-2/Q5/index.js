let message;
let receiver;
let color;
let color1;

let types;
let type_value;
// place this after <body> to run it after body has loaded.
var myimage = document.getElementById('myimage');
var ColorSelect= document.getElementById('ColorSelect');

function getDetails() {
	types = document.getElementsByName("cardType");
	receiver = document.getElementById("receiverTxt").value;
	color = document.getElementById("color").value;
	color1 = document.getElementById("color1").value;
	
	for (let i = 0; i < types.length; i++) {
		if (types[i].checked) {
			type_value = types[i].value;
		}
	}

	switch (type_value) {
		case "birthday":
			message = "Happy Birthday";
			break;
		case "loveYou":
			message = "I love you";
			break;
		case "missingYou":
			message = "I miss you";
			break;
		case "congratulations":
			message = "Congratulations";
			break;
	}
}

function makeCard() {
	getDetails();
    console.log(color1)
	document.getElementById("message").innerHTML = message + "!";
	document.getElementById("receiver").innerHTML = receiver;
    document.getElementById("receiver").style.color = color1;
	//document.getElementById("receiver").innerHTML = receiver.fontcolor(color1);
	document.getElementById("card").style.backgroundColor = color;
}
