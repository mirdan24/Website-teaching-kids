function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
  if (data=="drag1")
  {
    alert("Doskonale! Drzwi otwarte na Politechnike!")
    location.reload();
  }
  if (data=="drag2")
  {
    alert("Niestety niepoprawny wynik!")
  }
  if (data=="drag3")
  {
    alert("Niestety niepoprawny wynik!")
  }
  
}

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min;
}

function  losuj()
{

  var liczba1 = getRandomInt(0,4)+1;
  var liczba2 = getRandomInt(4,8)+1;
  document.getElementById("pole1").innerHTML=liczba1;
  document.getElementById("pole2").innerHTML=liczba2;

  var poprawnyWynik = liczba2 - liczba1;
  var poprawnyId = Math.floor(Math.random()*3)+1;

  var plik1 = "<img id=\"drag1\" src=\""+poprawnyWynik+".png\" draggable=\"true\" ondragstart=\"drag(event)\">";
  document.getElementById("nr"+poprawnyId+"").innerHTML= plik1;

 if (poprawnyId==1)
   { var pusteId1 = 2;
     var pusteId2 = 3;
   }
  else if (poprawnyId==2)
  { var pusteId1 = 1;
    var pusteId2 = 3;
  }
  else
  { var pusteId1 = 2;
    var pusteId2 = 1;
  }

 var niepoprawnyWynik1 = getRandomInt(0,poprawnyWynik);
 var niepoprawnyWynik2 = getRandomInt(poprawnyWynik,9)+1;

var plik2 = "<img id=\"drag2\" src=\""+niepoprawnyWynik1+".png\" draggable=\"true\" ondragstart=\"drag(event)\">";
var plik3 = "<img id=\"drag3\" src=\""+niepoprawnyWynik2+".png\" draggable=\"true\" ondragstart=\"drag(event)\">";
document.getElementById("nr"+pusteId1+"").innerHTML= plik2;
document.getElementById("nr"+pusteId2+"").innerHTML= plik3;
}
