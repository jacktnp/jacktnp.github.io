function changeImg(x) {
    x.style.height = "64px";
    x.style.width = "64px";
}

function normalImg(x) {
    x.style.height = "32px";
    x.style.width = "32px";
}

function setNode() {
	var divcol = document.createElement("div");
	var attrcol = document.createAttribute("class");
	var divcont = document.createElement("div");
	var attrcont = document.createAttribute("class");
	appendNode(divcol, attrcol, divcont, attrcont);
}

function appendNode(divcol, attrcol, divcont, attrcont) {
	var row = document.getElementById("row");
	attrcol.value = "column";
	attrcont.value = "content";
	divcol.setAttributeNode(attrcol);
	divcont.setAttributeNode(attrcont);
	divcol.appendChild(divcont);
	row.appendChild(divcol);
}