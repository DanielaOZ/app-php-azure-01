$(document).ready(function(){
  var btnR=document.getElementById("btnR");
  var pais=document.getElementById("pais");
  
  
  axios({
      method: "get",
      url: "https://backendapp-daniels-02.azurewebsites.net/intro-axios/api.php"
  })
      .then((res)=>{
          console.log(res);
          
          pais.setAttribute("value",res.data);
          
      })
  
     
     .catch((err) => console.error(err));
  
  });
  
  btnR.addEventListener('click',function(e){
      var nomb=document.getElementById("name").value;
      var ape=document.getElementById("ape").value;
      var pue=document.getElementById("pue").value;
      var edad=document.getElementById("edad").value;
      var gen=document.querySelector('[name="genero"]:checked').value;
      var pais=document.getElementById("pais").value;
  
      
  axios({
  
      method: "post",
    
      url: "https://6328d073d2c97d8c525d9be8.mockapi.io/empleados",
      
      data:{
  
          Nombre: nomb,
          Apellido: ape,
          Edad:edad,
          Puesto: pue,
          Genero:gen,
          Pais:pais
          
      }//Fin de los datos a enviar
    
    })
    
      .then((res) =>{
      console.log(res)
      nomb=document.getElementById("name").value=""
      ape=document.getElementById("ape").value=""
      pue=document.getElementById("pue").value=""
      edad=document.getElementById("edad").value=""
      })
      .catch((err) => console.error(err));
      
      //console.log("Hola mundo");
  });//Fin del botón
  
  
  
  
      