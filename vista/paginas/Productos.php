<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos
    </title>
    <link rel="stylesheet" href="../assets/css/productos.css">
<script src="../assets/js/productos.js"></script>


</head>
<body>
    <section class="contenido">
        <div class="mostrador" id="mostrador">
            <div class="fila" >
                <div class="item" onclick="cargar(this)">
                    <div class="contenido-foto">
                        <img src="../assets/img/si-2.png" alt="">
                        <p class="descripcion">MODELO 1 </p>
                        <span class="precio">$45.000</span>
                    </div>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenido-foto">
                        <img src="../assets/img/si-1.png" alt="">
                        <p class="descripcion">MODELO 2 </p>
                        <span class="precio">$47.000</span>
                    </div>
                </div>
                <div class="item" onclick="cargar(this)" >
                    <div class="contenido-foto">
                        <img src="../assets/img/si-3.png" alt="">
                        <p class="descripcion">MODELO 3 </p>
                        <span class="precio">$48.000</span>
                    </div>
                </div>
                <div class="item" onclick="cargar(this)" >
                    <div class="contenido-foto">
                        <img src="../assets/img/si-4.png" alt="">
                        <p class="descripcion">MODELO 4  </p>
                        <span class="precio">$60.000</span>
                    </div>
                </div>
            </div>
            <div class="fila">
                <div class="item" onclick="cargar(this)" >
                    <div class="contenido-foto">
                        <img src="../assets/img/si-5.png" alt="">
                        <p class="descripcion">Modelo 5 </p>
                        <span class="precio">$50.000</span>
                    </div>
                </div>
                <div class="item" onclick="cargar(this)" >
                    <div class="contenido-foto">
                        <img src="../assets/img/si-6.png" alt="">
                        <p class="descripcion">Modelo 6  </p>
                        <span class="precio">$40.000</span>
                    </div>
                </div>
                <div class="item" onclick="cargar(this)" >
                    <div class="contenido-foto">
                        <img src="../assets/img/si-3.png" alt="">
                        <p class="descripcion">modelo 7 </p>
                        <span class="precio">$40.000</span>
                    </div>
                </div>
                <div class="item" onclick="cargar(this)" >
                    <div class="contenido-foto">
                        <img src="../assets/img/si-4.png" alt="">
                        <p class="descripcion">modelo 8 </p>
                        <span class="precio">$40.000</span>
                    </div>
                </div>
            </div>
        </div> 

        <!--CONTENEDOR DEL ITEM SELECCIONADO -->
        <div class="seleccion" id="seleccion">
            <div class="cerrar" onclick="cerrar()">
                &#x2715
            </div>
            <div class="info">
                <img src="IMG/si-2.png" alt="" id="img">
                <h2 id="modelo">MODELO 1 </h2>
                <p id="descripcion">descripcion modelo 1   </p>

                <span class="precio">$1.300</span>
                <div class="fila">
                    <div class="size">
                        <label for="">size</label>
                        <select name="" id="">
                        <option value="">XS</option>
                        <option value="">S</option>
                        <option value="">M</option>
                        <option value="">L</option>
                    </select>
                    </div>
                    <button>AGREGAR AL CARRITO</button>

                </div>
            </div>
        </div>
    </section>
    <script src="../assets/js/productos.js"></script>
</body>
</html>