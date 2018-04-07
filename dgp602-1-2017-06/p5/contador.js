var data;

function preload() {
   data = loadTable("https://raw.githubusercontent.com/profesorfaco/dgp602.data/gh-pages/data/titanic.csv", "csv", "header");
}

function setup() {
   createCanvas(windowWidth, windowHeight);
   noLoop();
}

function draw() {
   var pasajeros = 0;
   var vivos = 0;
   for (var y = 0; y < data.getRowCount(); y++) {
      pasajeros++
      if (data.get(y, 1) == 1) {
         vivos++;
      }
   }
   textSize(20);
   text("De un total de "+ pasajeros+" pasajeros, solamente "+vivos+" sobrevivieron.", 10, 30);
}