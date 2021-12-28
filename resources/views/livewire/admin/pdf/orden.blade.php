<style>
    .factura {
  table-layout: fixed;
}

.fact-info > div > h5 {
  font-weight: bold;
}

.factura > thead {
  border-top: solid 3px #000;
  border-bottom: 3px solid #000;
}

.factura > thead > tr > th:nth-child(2), .factura > tbod > tr > td:nth-child(2) {
  width: 300px;
}

.factura > thead > tr > th:nth-child(n+3) {
  text-align: right;
}

.factura > tbody > tr > td:nth-child(n+3) {
  text-align: right;
}

.factura > tfoot > tr > th, .factura > tfoot > tr > th:nth-child(n+3) {
  font-size: 24px;
  text-align: right;
}

.cond {
  border-top: solid 2px #000;
}



/* tabla con estilo css*/


table {
  margin-top: -300px;
  font-size: 12px;
  margin-left: 45px;
 width: 600px;
  margin-bottom: 20px;
    /* alinea el texto */
  text-align: center;
  
  /* une la tabla, no pertime separacion de cuadricula */
  border-collapse: collapse;
}

th {
    /* tamaño letra */
  font-size: 13px;
  /* grosor de letra */
  font-weight: normal;
  /* espacio en el eje y */
  padding: 8px;
  /* fondo */
  
  /* boder parte de arriba */

  /* border parte de abajo */
  border-bottom: 1px solid rgb(12, 1, 1);
  /* color del texto */
  color: #black;
}

td {
  padding: 8px;
  
  border-bottom: 1px solid rgb(12, 1, 1);
  color: black;
  border-top: 1px solid transparent;
}

tr:hover td {
  
  color: #339;
  

}



.flex-container {
  display: flex;
  flex-wrap: wrap;
  
  }
  
.flex-container .box3 {
  width: 25%;
  text-align: left;
  
}
.flex-container .box4 {
  width: 25%;
  margin-left: 150px ;
  text-align: center;
  
}
.flex-container .box5 {
  width: 25%;
  margin-left: 350px ;
  text-align: center;
  
}
.flex-container .box6 {
  width: 25%;
  margin-left: 450px ;
  text-align: right;
  
}

.flex-container .box {
  
  width: 70%;
  text-align: left;
  font-size: 10px;
}
.flex-container .box2 {
  width: 40%;
  text-align: right;
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotizacion</title>
</head>
<body >
<div id="app" class="" >
  <div class="flex-container" >
    <div class="box">
      <h1>Oh! Diosas</h1>
      <p>Av. Washinton </p>
      <p>Centro Comercial EL Virrey 3er. nivel</p>
      <p>locales 51, 52, 56 y 60</p>
    </div>
    <div class="box2">
      <img style="width: 90px; height:90px" src="https://scontent.ftru2-1.fna.fbcdn.net/v/t1.6435-9/151832684_885168635637235_2906067587046004896_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeHKXI72YRilsGFhOABatbijhnDqHoWziS6GcOoehbOJLuCQRQecDh82nR4ZNr4Jm3G74YnTn7eU4n7QsP0obnQN&_nc_ohc=oiuDe9XUj6wAX9pFXWm&_nc_ht=scontent.ftru2-1.fna&oh=00_AT_m3yyGcpwxvUQ2XA22rdsTAa7YvEIf-2T86HhSzaegbw&oe=61E23D0B" />
    </div>
  </div>
  <hr>
  <div class="flex-container" style="margin-top: 0%">
    <div class="box3">
      <h5>Cotizacion</h5>
      <p>
        Likung Huang
      </p>
    </div>
    <div class="box4">
      <h5>Enviar a</h5>
      <p>
       China
        Likung.@hotmail.com
      </p>
    </div>
    <div class="box5">
      <h5>N° de Proforma</h5>
      <h5>Fecha</h5>
      <h5>Fecha de vencimiento</h5>
    </div>
    <div class="box6">
      <h5>4</h5>
      <p>16/12/2021</p>
      <p>22/12/2021</p>
    </div>
  </div>

  <table  >
    
    <tr> <th>Producto</th> <th>Cantidad</th> <th>Precio</th>
    <th>Subtotal</th> 
    </tr>
    <tr> <td>Eum voluptatem consequatur</td> <td>10</td> <td>0</td>
    <td>0</td>
    </tr>
    <tr> <td>Illo labore.</td><td>20 </td> <td>0</td>
      <td>0</td>
      </tr>
      <tr style="border: none"> <td>Total</td><td> </td> <td></td>
        <td></td>
        </tr>
  </table>

  <div class="cond row">
    <div class="col-12 mt-3">
      <h4>Se adjunta la solicitude Cotizacion</h4>
      
      <p>
        Responder al Correo
        <br />
        Lisset@ohdiosas.com
        
      </p>
    </div>
  </div>
</div>
</body>
</html>
