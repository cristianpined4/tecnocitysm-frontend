//Constantes a emplear
const btnCard = document.getElementById('carretilla-icon');
const contenedorProductos = document.querySelector('.containerProducts');


btnCard.addEventListener('click', () =>{
    contenedorProductos.classList.toggle('hidden-card');
});
//=============================================================
//Funcionalidad del carrito

//Constantes necesarias
const informacion = document.querySelector('.cardProduct');
const rowProduct  = document.querySelector('.row-product');
const valorTotal = document.querySelector('.totalPagar');
const contadorProduct = document.getElementById('contadorProducts');

//Lista con los contenedores de los productos
const listaProductos = document.querySelector('.Productscategoria');


//Para los arreglos de los productos
let allproducts = localStorage.getItem('carrito') ? JSON.parse(localStorage.getItem('carrito')) : [];
console.log(allproducts.length);

console.log(localStorage.getItem('carrito'));

listaProductos.addEventListener('click', e =>{
    if(e.target.classList.contains('add-carrito')){
        const product = e.target.parentElement;
        const infoProductos = {
            quantity:1,
            title:product.querySelector('h5').textContent,
            price:product.querySelector('h6').textContent,
        }

        //Recorre los objetos para ver si ya esxiste en el carrito
        const existe = allproducts.some(product => product.title === infoProductos.title);

        if(existe){
            const products = allproducts.map(product =>{
                if(product.title === infoProductos.title){
                    product.quantity++;
                    return product;
                }
                else{
                    return product
                }
            });
            allproducts = [...products]
        }else{
            allproducts = [...allproducts,infoProductos]
        }
        console.log(allproducts);
        localStorage.setItem('carrito', JSON.stringify(allproducts));
        showHTML();
    }
});

/*var carritoRecuperado = localStorage.getItem('carrito');

if(carritoRecuperado){
    allproducts = JSON.parse(carritoRecuperado);
    showHTML();

}*/

//Para eliminar
rowProduct.addEventListener('click', (e) =>{
    if(e.target.classList.contains('fa-square-xmark')){

        console.log(e.target.parentElement);
        const product = e.target.parentElement;
        const title = product.querySelector('p').textContent;

        allproducts = allproducts.filter(product => product.title !== title);
        showHTML();
    }
});


//Funcion para mostrar
const showHTML = () =>{

    console.log(allproducts.length);
    console.log(allproducts.length);
    console.log(allproducts.length);
    console.log(allproducts.length);
    if(allproducts.length === 0){
        contenedorProductos.innerHTML = `
            <p class ="vacio">El carrito esta vacio</p>
            `
        localStorage.removeItem('carrito');
        contadorProduct.innerText = '0';
    }else{
        console.log("Creando el html");

        //Limpiando el html
        rowProduct.innerHTML = '';
        //Variables para el total
        let totalCarrito = 0;
        let totalProductos = 0;

        allproducts.forEach(product =>{
            console.log(allproducts.length === 1 ? 'si' : 'no');
            const contenedorProductoss = document.createElement('div');
            contenedorProductoss.classList.add('cardProduct');

            contenedorProductoss.innerHTML = `
            <div class="productinfo-carrito">
            <span class="cantidad">${product.quantity}</span>
            <p class="ProductoCarInfo">${product.title}</p>
            <span class="Precio">${product.price}</span>
           </div>
           <i class="fa-solid fa-square-xmark"></i>
            `
            rowProduct.append(contenedorProductoss);
            contenedorProductos.innerHTML = '';
            contenedorProductos.appendChild(rowProduct);
            console.log(allproducts);
            localStorage.setItem('carrito', JSON.stringify(allproducts));

            //Operacion para la los totale
            totalCarrito = totalCarrito + parseInt(product.quantity * product.price.slice(1));
            totalProductos = totalProductos + product.quantity;

             if(allproducts.length === 0){
                 console.log("Esta vacio");
                 contenedorProductoss.innerHTML = `
                    <p class ="vacio">El carrito esta vacio</p>
                    `
             }
        });

        //Parte que se encarga de llevar la cuenta del carrito
        valorTotal.innerHTML = `$${totalCarrito}`;
        contadorProduct.innerText = totalProductos;
    }
}




//evento de carga inicial del archivo js
document.addEventListener('DOMContentLoaded', () =>{
    showHTML();
});
