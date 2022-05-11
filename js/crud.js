let database = 'data'

// https://www.tutofox.com/javascript/como-convertir-valor-a-formato-moneda-en-javascript/
const formatterPeso = new Intl.NumberFormat('es-CO', {
    style: 'currency',
    currency: 'COP',
    minimumFractionDigits: 2
})
// console.log(formatterPeso.format(value))
// → $ 12.500

const formatterDolar = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    minimumFractionDigits: 2
})
// console.log(formatterDolar.format(value))
// → $12,500.00

const formatterEuro = new Intl.NumberFormat('de-DE', {
    style: 'currency',
    currency: 'EUR',
    minimumFractionDigits: 2
})
// console.log(formatterEuro.format(value)) 
// → 12.500,00 €

const getData = async () => {
    const res = await localStorage[database] ? JSON.parse(localStorage[database]) : []
    return res
}

const setData = async (products) => {
    localStorage[database] = JSON.stringify(products)
}

const edit = async (index, e) => {
    let products = await getData()
    products[index].cant = e.target.value == '' ? 1 : e.target.value;
    await setData(products)
    loadProducts();
}

const deleteProduct = async (id) => {
    let products = await getData()
    newProducts = await products.filter(p => p.id != id)
    await setData(newProducts)
    loadProducts()
}

const loadProducts = async () => {
    let gridBody = document.querySelector("#myTable tbody");

    let products = await getData()

    // limipiamos la tabla
    gridBody.innerHTML = '';

    //la volvemos a llenar
    products.map((x, i) => {
        let tr = document.createElement("tr"),
            tdName = document.createElement("td"),
            tdPrecioEmpresa = document.createElement("td"),
            tdPrecioAhora = document.createElement("td"),
            tdcant = document.createElement("input"),
            tdTotalClienteEmpresa = document.createElement("td"),
            tdTotalPrecioAhora = document.createElement("td"),
            tdRemove = document.createElement("td"),
            btnRemove = document.createElement("button");


        tdcant.className = 'form-control';
        tdcant.type = 'number';
        tdcant.style = "text-align:right;";
        tdcant.pattern = "[0-9]{10}";
        tdcant.min = "1";
        tdcant.max = "10";

        tdTotalClienteEmpresa.setAttribute("style", "text-align:right;");
        tdTotalPrecioAhora.setAttribute("style", "text-align:right;");


        tdName.innerHTML = x.name;
        tdPrecioEmpresa.innerHTML = "$" + x.precioEmpresa;
        tdPrecioAhora.innerHTML = "$" + x.precioAhora;
        tdcant.value = x.cant;
        tdTotalClienteEmpresa.innerHTML = formatterPeso.format(x.cant * x.precioEmpresa);
        tdTotalPrecioAhora.innerHTML = formatterPeso.format(x.cant * x.precioAhora);
        tdcant.addEventListener('change', (event) => {
            edit(i, event);
        });

        btnRemove.textContent = 'Remove';
        btnRemove.className = 'btn btn-xs btn-danger';
        btnRemove.addEventListener('click', function () {
            deleteProduct(x.id);
        });

        tdRemove.appendChild(btnRemove);

        tr.appendChild(tdName);
        tr.appendChild(tdPrecioEmpresa);
        tr.appendChild(tdPrecioAhora);
        tr.appendChild(tdcant);
        tr.appendChild(tdTotalClienteEmpresa);
        tr.appendChild(tdTotalPrecioAhora);
        tr.appendChild(tdRemove);



        gridBody.appendChild(tr);
    })

    let trTotal = document.createElement("tr"),
        tdn = document.createElement("td"),
        tdpc = document.createElement("td"),
        tdpa = document.createElement("td"),
        tdc = document.createElement("td"),
        tdtcc = document.createElement("td"),
        tdtpa = document.createElement("td"),
        tdr = document.createElement("td");

    tdc.innerHTML = products.reduce((total, item) => total + parseInt(item.cant), 0)
    tdtcc.innerHTML = formatterPeso.format(products.reduce((total, item) => total + (parseFloat(item.precioEmpresa) * parseFloat(item.cant)), 0))
    tdtpa.innerHTML = formatterPeso.format(products.reduce((total, item) => total + (parseFloat(item.precioAhora) * parseFloat(item.cant)), 0))

    tdc.setAttribute("style", "text-align:right;");
    tdtcc.setAttribute("style", "text-align:right;");
    tdtpa.setAttribute("style", "text-align:right;");


    gridBody.appendChild(trTotal);

    trTotal.appendChild(tdn);
    trTotal.appendChild(tdpc);
    trTotal.appendChild(tdpa);
    trTotal.appendChild(tdc);
    trTotal.appendChild(tdtcc);
    trTotal.appendChild(tdtpa);
    trTotal.appendChild(tdr);

    let totalGeneral = await products.reduce((total, item) => total + (parseFloat(item.precioEmpresa) * parseFloat(item.cant)), 0)

    document.getElementById('totalCarrito').innerHTML = products.length + " Add = " + formatterPeso.format(totalGeneral);

}

const addProduct = async (producto) => {
    let newProduct = await JSON.parse(producto)
    let products = await getData()

    let productoBuscado = await products.find(p => p.id === newProduct.id)
    if (productoBuscado) {
        Swal.fire({
            title: 'Alto!',
            text: 'Producto ya está agregado, puede mirarlo en Ver Carrito',
            icon: 'error',
            confirmButtonText: 'Cerrar'
        })
    } else {
        newProduct.cant = 1
        await products.push(newProduct)
        await setData(products)
        loadProducts();
    }
}

loadProducts()
