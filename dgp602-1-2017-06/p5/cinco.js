var buscador;

function setup() {
  loadJSON('http://datos.gob.cl/api/3/action/package_search?q=', gotData,'jsonp');
  var miCanvas = createCanvas(windowWidth, 400);
  miCanvas.parent('miContenedor');
}

function gotData(data){
   console.log(data);
   buscador = data;
}

function draw(){
  background(235);
  if(buscador){
      textSize(20);
      text("En portada dicen tener 3000 dataset.\nPero la versión Mr. Robot encuentra "+buscador.result.count+"*." , 14, 32);
      textSize(12);
      text("*Muchos dataset están hechos a la chilean way: Formatos que no sirven para hacer Data Exchange, URLs inválidas, URLs sin su recurso, etc. \nSi estos errores superan tu paciencia, puedes ir a buscar otros datasets entre las referencias del README.md", 14, height-32)
    }
}
