window.onload = function (){
  let entrar = true;
  while (entrar == true){
    let tabla = prompt("Dame la tabla del:");
    if(tabla >10){
      alert("solo del 1 al 10");
      continue;
    }else{
      for (let i = 0; tabla*i < 109; i++){
          console.log(tabla+" x "+i+ " = "+tabla*i);
    }
  }
  break;


  }


}
