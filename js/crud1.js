// window.onload = function () {
var localStorageKeyName = 'data';

loadFromLocalStorage();

function addProduct(id, name, precioClaro, precioAhora) {
    var products = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);

    products = JSON.parse(dataInLocalStorage);

    let indice = products.findIndex(item => item.id === id);

    if (indice == -1) {
        var product = {
            id: id,
            name: name,
            precioClaro: precioClaro,
            precioAhora: precioAhora,
            cant: 1
        };
        appendObjectToLocalStorage(product);
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Producto Agregado',
            showConfirmButton: false,
            timer: 1000
        })
    } else {
        Swal.fire({
            position: 'top-end',
            icon: 'info',
            title: 'Producto ya está en tu carrito',
            showConfirmButton: false,
            timer: 1000
        })
    }
}

function appendObjectToLocalStorage(obj) {
    var products = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);

    if (dataInLocalStorage !== null) {
        products = JSON.parse(dataInLocalStorage);
    }

    products.push(obj);

    localStorage.setItem(localStorageKeyName, JSON.stringify(products));

    loadFromLocalStorage();


}

function loadFromLocalStorage() {
    var products = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName),
        gridBody = document.querySelector("#myTable tbody");

    if (dataInLocalStorage !== null) {
        products = JSON.parse(dataInLocalStorage);
    }

    // Draw TR from TBODY
    gridBody.innerHTML = '';

    products.forEach(function (x, i) {
        var tr = document.createElement("tr"),
            tdName = document.createElement("td"),
            tdPrecioClaro = document.createElement("td"),
            tdPrecioAhora = document.createElement("td"),
            tdcant = document.createElement("input"),
            tdTotalClienteClaro = document.createElement("td"),
            tdTotalPrecioAhora = document.createElement("td"),
            tdRemove = document.createElement("td"),
            btnRemove = document.createElement("button");



        tdcant.className = 'form-control';
        tdcant.type = 'number';
        tdcant.style = "text-align:right;";
        tdcant.pattern = "[0-9]{10}";
        tdcant.min = "1";
        tdcant.max = "10";

        tdTotalClienteClaro.setAttribute("style", "text-align:right;");
        tdTotalPrecioAhora.setAttribute("style", "text-align:right;");

        tdName.innerHTML = x.name;
        tdPrecioClaro.innerHTML = "$" + x.precioClaro;
        tdPrecioAhora.innerHTML = "$" + x.precioAhora;
        tdcant.value = x.cant;
        tdTotalClienteClaro.innerHTML = "$" + (x.cant * x.precioClaro);
        tdTotalPrecioAhora.innerHTML = "$" + (x.cant * x.precioAhora);
        tdcant.addEventListener('change', (event) => {
            editFromLocalStorage(i, event);
        });
        tdcant.addEventListener('keypress', (event) => {
            valideKey(event);
        });

        btnRemove.textContent = 'Remove';
        btnRemove.className = 'btn btn-xs btn-danger';
        btnRemove.addEventListener('click', function () {
            removeFromLocalStorage(i);
        });

        tdRemove.appendChild(btnRemove);

        tr.appendChild(tdName);
        tr.appendChild(tdPrecioClaro);
        tr.appendChild(tdPrecioAhora);
        tr.appendChild(tdcant);
        tr.appendChild(tdTotalClienteClaro);
        tr.appendChild(tdTotalPrecioAhora);
        tr.appendChild(tdRemove);



        gridBody.appendChild(tr);
    });

    var trTotal = document.createElement("tr"),
        tdn = document.createElement("td"),
        tdpc = document.createElement("td"),
        tdpa = document.createElement("td"),
        tdc = document.createElement("td"),
        tdtcc = document.createElement("td"),
        tdtpa = document.createElement("td"),
        tdr = document.createElement("td");

    tdc.innerHTML = "$" + products.reduce((total, item) => total + parseInt(item.cant), 0);
    tdtcc.innerHTML = "$" + products.reduce((total, item) => total + (parseFloat(item.precioClaro) * parseFloat(item.cant)), 0);
    tdtpa.innerHTML = "$" + products.reduce((total, item) => total + (parseFloat(item.precioAhora) * parseFloat(item.cant)), 0);

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


    document.getElementById('totalCarrito').innerHTML = products.length + " Add = $" + products.reduce((total, item) => total + (parseFloat(item.precioClaro) * parseFloat(item.cant)), 0);

}

function editFromLocalStorage(index, e) {
    var products = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);

    products = JSON.parse(dataInLocalStorage);

    products[index].cant = e.target.value == '' ? 1 : e.target.value < e.target.min ? 1 : e.target.value > e.target.max ? e.target.max : e.target.value;

    localStorage.setItem(localStorageKeyName, JSON.stringify(products));

    loadFromLocalStorage();
}

function removeFromLocalStorage(index) {
    var products = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);

    products = JSON.parse(dataInLocalStorage);

    products.splice(index, 1);

    localStorage.setItem(localStorageKeyName, JSON.stringify(products));

    loadFromLocalStorage();
}
// }

// load a format
numeral.register('format', 'percentage', {
    regexps: {
        format: /(%)/,
        unformat: /(%)/
    },
    format: function (value, format, roundingFunction) {
        var space = numeral._.includes(format, ' %') ? ' ' : '',
            output;

        value = value * 100;

        // check for space before %
        format = format.replace(/\s?\%/, '');

        output = numeral._.numberToFormat(value, format, roundingFunction);

        if (numeral._.includes(output, ')')) {
            output = output.split('');

            output.splice(-1, 0, space + '%');

            output = output.join('');
        } else {
            output = output + space + '%';
        }

        return output;
    },
    unformat: function (string) {
        return numeral._.stringToNumber(string) * 0.01;
    }
});