console.log("el script esta linkeado");

let string = "Un string";
console.log(string);

let array = "1, 2, 3, cuatro";
console.log(array);

let boolean = true;
console.log(boolean);

const yo = "Mauro";
console.log(yo);


let ironMan = {
  nombre: "Iron Man",
  equipo: "Avengers",
  poderes: ["Volar", "Lanzar misiles", "Disparar láser"],
  energia: 100,
  getPoder: function(numero){
    console.log(this.poderes[numero]);
  }
}

let Hulk = {
  nombre: "Hulk",
  equipo: "Avengers",
  poderes: ["Aplastar", "Gritar", "Golpear"],
  energia: 100,
  getPoder: function(numero){
    console.log(this.poderes[numero]);
  }
}

let misDatos = {
  nombre:"Mauro",
  apellido: "Maiani",
  dni: 298765432,
  comidaFavorita:"milanga",
  edad: 37,
}

for (let props in misDatos){
  console.log(misDatos[props]);
}

let saludar = "Hola, mi nombre es " + misDatos.nombre + " " + misDatos.apellido + " y tengo " + misDatos.edad + " años.";
console.log(saludar);
