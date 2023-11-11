<!DOCTYPE html>
<html>
<head>
    <title>Catalogos</title>
  <style>
    /* Estilos para los elementos del catálogo */
    body{
        background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 250vh;
            margin: 10;
            background-color: #5c5e5c;
            
    }
    .catalog {
      display: flex;
      flex-wrap: wrap;
    }   

    .item {
      width: 100px;
      margin: 50px;
      border: 5px #70707a;
      padding: 150px;
      text-align: center;
      font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .item img {
      max-width: 250%;
      

    }
    .buy-button {
      background-color: #c6daee;
      color: #595fc9;
      padding: 5px 10px;
      border: 1%;
      cursor: pointer;
    }
    h1 {
            text-align: center;
        }


    .buy-button:hover {
      background-color: #ffffff;
    }
    .option-container {
      text-align: right;
      margin-top: 0px;
      padding-right: 0px;
    }

    /* Estilos para la lista desplegable personalizada */
    .custom-select {

      position: relative;
      display: inline-block;
      width: 200px;
      background-color: rgb(232, 233, 234);
      border: 1px solid;
      border-radius: 7px #e4da;
      overflow: hidden;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            justify-content: center;
            align-items: center;
    }

    .custom-select select {
      width: 100%;
      padding: 10px;
      background: none;
      border: none;
      appearance: none; /* Oculta el estilo nativo del sistema */
      -webkit-appearance: none;
      -moz-appearance: none;
    }

    /* Estilos para las opciones dentro de la lista */
    option {
      background-color: #fff;
      color: #333;
    }
    h1{
        color: rgba(2, 2, 2, 0.667);
        align-items: center;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri;
            justify-content: center;
            align-items: center;
    }
    h2{
        color: rgba(237, 168, 71, 0.667);
        align-items: center;
        justify-content: center;    
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
    }
        
  </style>
</head>
<body>
  <h1>Catálogo de Ropa</h1>
  <div class="catalog">
    <div class="item">
      <img src="1.jpg" alt="Catalogo de hombre">
      <h2>Catalogo Hombre</h2>
      <p></p>
     <a href="https://www.priceshoes.com/catalogos/1122958?section=B%C3%A1sicos"> <button class="buy-button">Seleccionar</button></a>
    </div>

    <div class="item">
      <img src="2.jpg" alt="Catalogo de Mujer">
      <h2>Catalogo Mujer</h2>
      <p></p>
      <a href="https://www.priceshoes.com/catalogos/1130392?section=B%C3%A1sicos"><button class="buy-button">Seleccionar</button></a>
    </div>


      <div class="item">
        <img src="3.jpg" alt="Catalogo de Niño">
        <h2>Catalogo Niño</h2>
        <p></p>
        <a href="https://www.priceshoes.com/catalogos/1122951?section=B%C3%A1sicos"> <button class="buy-button">Seleccionar</button></a>
      </div>

      <div class="item">
        <img src="4.jpg" alt="Catalogo de Niña">
        <h2>Catalogo Niña</h2>
        <p></p>
        <a href="https://www.priceshoes.com/catalogos/1122951?section=B%C3%A1sicos"> <button class="buy-button">Seleccionar</button></a>
      </div>
    
      <div class="option-container">
        <div class="custom-select">
          <select>
            <option value="opcion1">Cerrar cuenta</option>
            <option value="opcion2">Borrar cuenta</option>
            <option value="opcion3">Catalogos</option>
            <option value="opcion4">Buscar prenda</option>
            <option value="opcion5">Prueba RA</option>
          </select>
        </div>
      </div>
  </div>
</body>
</html>
