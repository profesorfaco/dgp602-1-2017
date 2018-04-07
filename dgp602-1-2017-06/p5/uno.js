var spaceOddity;

function setup() {
  loadJSON('http://api.open-notify.org/astros.json', gotData,'jsonp');
  var miCanvas = createCanvas(windowWidth, 400);
  miCanvas.parent('miContenedor');
}

function gotData(data){
   console.log(data);
   spaceOddity = data;
}

function draw(){
  background(235);
  if(spaceOddity){
    rectMode(CORNER)
    for (var n = 0; n < spaceOddity.number; n++){
    text(spaceOddity.people[n].name+" ("+spaceOddity.people[n].craft+")", 10, 20*(n+1));
    }
  }
}
