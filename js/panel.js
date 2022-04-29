// Create a "close" button and append it to each list item

var x1 = document.getElementById("myUL");
var myNodelist = x1.getElementsByTagName("LI");
document.get;
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function () {
    var div = this.parentElement;
    div.style.display = "none";
  };
}

// Add a "checked" symbol when clicking on a list item
var list = document.getElementById("myUL");
list.addEventListener(
  "click",
  function (ev) {
    if (ev.target.tagName === "LI") {
      ev.target.classList.toggle("checked");
    }
  },
  false
);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === "") {
    alert("Por Favor escriba algo!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function () {
      var div = this.parentElement;
      div.style.display = "none";
    };
  }
}

//SECION DEL SIDENAV EN LAS WEB'S

//SECION DE BARRA NAV  TODOS
function openNav() {
  barra = document.getElementById("mySidenav");
  barra.style.width = "100vw";
  //barra.style.opacity = "1";
  // document.body.style.backgroundColor = "rgba(0,0,0,0.3)";
}

function closeNav() {
  barra = document.getElementById("mySidenav");
  barra.style.width = "0";
  //barra.style.opacity = "0";
  // document.body.style.backgroundColor = "white";
}




