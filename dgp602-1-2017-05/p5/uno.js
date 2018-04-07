function setup() {
  createCanvas(windowWidth, windowHeight);
  background(0);
}

function draw() {
  for (var x = 0; x < windowWidth; x+=10) {
    fill(random(55,255),random(55,255),random(55,255));
    ellipse(x, windowHeight/2, 50, 50);
  }
}
