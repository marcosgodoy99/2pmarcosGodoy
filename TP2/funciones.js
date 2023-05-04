
function funciones() {
  
  const personajeidinput=document.getElementById('id');
  const resul=document.getElementById('resultado');
  const personajeid= personajeidinput.value;
  const url= `https://rickandmortyapi.com/api/character/${personajeid}`;

 
  fetch(url)
      .then(response => response.json())
      .then (data =>{
        const nombre = data.name;
        const especie = data.species;
        let  episodios = data.episode;
        let contador = 0;
        let foto = data.image;
        
        episodios.forEach(function(aux,i) {  
          contador = i;
      })
    
        
        const resulString= `nombre:${nombre} <br> especie: ${especie} <br> Aparecio en: ${contador} episodios <br> <img src = ${foto}>`;
        resul.innerHTML = resulString;
      })

      }