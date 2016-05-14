"use strict";

window.onload = function() {
	document.querySelector("#message").innerHTML = "";
	document.querySelector("#clear").onclick = clearDisplay;
};

function clearDisplay() {
	document.querySelector("#message").innerHTML = "";
}