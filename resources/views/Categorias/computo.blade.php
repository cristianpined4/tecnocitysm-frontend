<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<div class="container">
    <h1>COMPUTO</h1>

    <div class="Productscategoria">
        <h2>ACCESORIOS</h2>
        <span></span><span></span><span></span>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Accesorio1.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>CARGADOR UNIVERSAL MAXELL ULC-100 PARA PORTATIL</h5>
                    <h6>$32.60</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Accesorio2.jpeg') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>BASE DE VENTILACION PARA LAPTOP TARGUS AWE69</h5>
                    <h6>$15.95</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Accesorio3.jpg') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>Cable USB a Lightning, de 1,2 m, con forro de mezclilla</h5>
                    <h6>$7.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Accesorio4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> SPLITTER HDMI 4K DE 4 PUERTOS ARGOM ARG-AV-5114</h5>
                    <h6>$21.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Accesorio5.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> ADAPTADOR DISPLAY PORT MACHO A VGA HEMBRA ETOUCH ITEM# 335750</h5>
                    <h6>$9.90</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Accesorio6.jpg') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Cable HDMI® reforzado, de 1,8 m</h5>
                    <h6>$5.75</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Accesorio7.jpeg') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>  CABLE USB PARA IMPRESORA ETOUCH 6FT. ITEM# 735050</h5>
                    <h6>$2.50</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <span></span>
         <h2>ALMACENAMIENTO</h2>
         <span></span><span></span><span></span>

         <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Disco1.jpeg') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> DISCO SOLIDO SSD KINGSTON 240GB A400 SA400S37/240G</h5>
                    <h6>$24.95</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>


        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Disco2.jpeg') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> DISCO SOLIDO SSD KINGSTON 960GB A400 2.5 SA400S37/960G</h5>
                    <h6>$69.95</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>


        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Disco3.jpeg') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> DISCO SOLIDO SSD KINGSTON 2TB SKC600 2.5 SKC600/2048G</h5>
                    <h6>$249.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Disco4.jpeg') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> DISCO DURO EXTERNO 2TB SEAGATE EXPANCION STKM2000400</h5>
                    <h6>$89.90</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Almacenamiento1.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MEMORIA MICRO SD ADATA 16GB UHS-I AUSDH16GUICL10-RA1</h5>
                    <h6>$4.75</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Almacenamiento2.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MEMORIA MICRO SD KINGSTON CANVAS SDCS2/256GB</h5>
                    <h6>$29.90</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Almacenamiento3.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> SSD KINGSTON PCIe NVMe™ NV2 M.2 500 GB SNV2S/500G</h5>
                    <h6>$49.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Almacenamiento4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> SSD KINGSTON FURY PCIe 4.0 NVMe™ NV2 M.2 1 TB SFYRS/1000G</h5>
                    <h6>$139.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <h2>LAPTOPS</h2>
         <span></span><span></span><span></span>

         <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Laptop1.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Laptop Lenovo IdeaPad 3 i5-1135G7, 8GB DDR4, 256GB SSD, 15.6" W10H Blue 82H800HECL</h5>
                    <h6>$755.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Laptop2.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> LAPTOP GIGABYTE AORUS i5-12500H/ KF-E3US333SH/ 15.6 FHD / 8GB / 512GB SSD</h5>
                    <h6>$1,360.07</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Laptop3.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Laptop Gaming HP 15FA0000LA  16GB 512GB 15.6" Azul</h5>
                    <h6>$929.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Laptop4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> LAPTOP LENOVO IDEAPAD 5 14ALC05 /RYZEN 7 5700U 1.8G/ 512GB SSD/ 8GB RAM/ 14"/ WIN 11/ 82LM00UEUS</h5>
                    <h6>$648.97</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <h2>MEMORIAS RAM</h2>
         <span></span><span></span><span></span>

         <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/memoria1.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MEMORIA RAM ADATA UDIMM PC 8GB DDR4 ADATA AD4U32008G22-SGN 3200MHz CL22</h5>
                    <h6>$39.90</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/memoria2.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MEMORIA RAM PC 8GB DDR4 3200MHZ ADATA AX4U32008G16A-ST60 DIMM XPG SPECTRIX D60G RGB</h5>
                    <h6>$52.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/memoria3.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MEMORIA RAM FURY BEAST RGB DDR4 16GB 3200MHZ CL16 UDIMM RGB KF432C16BBA/16</h5>
                    <h6>$39.10</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/memoria4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MEMORIA RAM PATRIOT DDR4, 3200MHZ, 8GB, PSD48G320081 SL</h5>
                    <h6>$39.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    </div>
</div>
<br>
@endsection
