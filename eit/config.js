var loginPopup = document.getElementById("login-popup");
var regisPopup = document.getElementById("regis-popup");

function login() {
	let loginPopup = document.getElementById("login-popup");
	let regisPopup = document.getElementById("regis-popup");
	show(loginPopup);
	hide(regisPopup);
}

function regis() {
	let loginPopup = document.getElementById("login-popup");
	let regisPopup = document.getElementById("regis-popup");
	hide(loginPopup);
	show(regisPopup);
}

function indexWeb() {
	let intro = document.getElementById("intro");
	let post = document.getElementById("post");
	let loginPopup = document.getElementById("login-popup");
	let regisPopup = document.getElementById("regis-popup");
	hide(intro);
	show(post);
	hide(regisPopup);
	hide(loginPopup);
}

function show(element) {
    element.classList.remove("hide");
    element.classList.add("show");
}

function hide(element) {
    element.classList.remove("show");
    element.classList.add("hide");
}

function popupClose() {
	let loginPopup = document.getElementById("login-popup");
	let regisPopup = document.getElementById("regis-popup");
	hide(loginPopup);
	hide(regisPopup);
}