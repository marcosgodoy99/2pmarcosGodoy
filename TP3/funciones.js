function funciones() {

    
    var aux = "";
    const inputid = document.getElementById('id');
    var id = Math.round(Math.random()*826);
    console.log(id);
    const resul =document.getElementById('resultado1');
    const url2 = `https://rickandmortyapi.com/api/character/${id}`;
    var div2 = document.getElementById("resultado1");
    var color2 = "";

    fetch(url2)
    .then(response => response.json())
    .then(personaje => {
        
    
      let nombre = (personaje.name);
      let aux1 = (personaje.gender);
      let foto = (personaje.image);
      let ide = (personaje.id);

      resul.innerHTML = `<br> Nombre: ${nombre} <br> Genero: ${aux1} <br> <img src = ${foto}>`;
      aux = aux1;
  });

    const url ='https://randomuser.me/api/';
    const result = document.getElementById("resultado");
    var div = document.getElementById("midiv")
    var color = "";

    fetch(url)
    .then(Response => Response.json())
    .then(data => {
        
        let foto = data.results[0].picture.large;
        let nombre = data.results[0].name.first;
        let apellido = data.results[0].name.last;
        let dni = data.results[0].id.value;
        let genero = data.results[0].gender;
        let latitud = data.results[0].location.coordinates.latitude;
        let longitud = data.results[0].location.coordinates.longitude;
        
        /*console.log(data.results[0].gender);*/
        result.innerHTML = ` <br> Nombre: ${nombre} <br> Apellido: ${apellido} <br> Genero: ${genero} <br> DNI: ${dni} <br> <img src = ${foto}> <br> <br> LOCACION: <br> Latitud: ${latitud} <br> Longitud: ${longitud} `;

        
        if (genero === "female" || genero === "Female") {

            color = "green"
            genero = "female";
            
        }

        else {

            color = "yellow";
          
        }

        div.style.backgroundColor = color;
    
        
        if(aux === "Female" || aux ==="female") {

            aux = "female";
            color2 = "green";
           

        }
        else {

            color2 = "yellow";
           
        }

        div2.style.backgroundColor = color2;

            console.log(color);
            console.log(color2);
           

            if (genero === aux )  { 
  
            var img = document.createElement("img");
            img.src = "https://angartwork.anghcdn.co/webp/?id=141165152&size=296.jpg";
            const contenedor = document.getElementById ("imagencheck");
            contenedor.appendChild(img);
        }  


    })


    
}



