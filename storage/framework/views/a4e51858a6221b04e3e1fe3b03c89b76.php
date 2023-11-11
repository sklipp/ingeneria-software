<!DOCTYPE html>
<html>
<head>
    <title>Buscar prenda</title>
  <style>
    .search-container {
      text-align: center;
      margin-top: 20px;
      
    }
    body{
        background-color: #d6e1cdab;
    }

    .search-input {
      width: 300px;
      padding: 10px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-right: 10px;
    }

    .search-button {
      background-color: #54585d;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .container {
            background-color: rgba(153, 153, 153, 0.8);
            padding: 20px;
            border-radius: 0px;
            text-align: center;
        }


    .search-button:hover {
      background-color: #bdc8d4;
    }
    h1 {
            text-align: center;
            cursor: pointer; 
            color: #be6355;
       }

        .form-group {
            margin: 20px 0;
        }

        .form-group input {
            width: 85%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .option-container {
      text-align: right;
      margin-top: 20px;
      padding-right: -500px;
    }

    
    .custom-select {

      position: relative;
      display: inline-block;
      width: 200px;
      background-color: #7a7575;
      border: 1px solid #f7f9f9;
      border-radius: 5px;
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
      color: #55be6f;
    }
  </style>
</head>
<body>
    <div class="container">
        <h1>Buscador</h1>
        <div class="form-group">
  <div class="search-container">
    <input class="search-input" type="text" placeholder="Buscar en el catálogo">
    <button class="search-button">Buscar</button>
  </div>

  <!-- Aquí debes agregar la estructura de tu catálogo -->
  <div class="catalog">
    <!-- Los elementos del catálogo van aquí -->
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
</body>
</html>
<?php /**PATH /home/luis/Descargas/Ingeneria/inge-app/resources/views/Buscar.blade.php ENDPATH**/ ?>