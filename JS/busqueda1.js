document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('search').addEventListener('keyup', function () {
        var query = this.value;
        if (query.length > 0) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '../PHP/busqueda_producto.php?query=' + query, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var results = JSON.parse(xhr.responseText);
                    var resultsDiv = document.getElementById('results');
                    resultsDiv.innerHTML = '';
                    for (var i = 0; i < results.length; i++) {
                        var li = document.createElement('li');
                        li.setAttribute('data-product', results[i].id);
                        li.textContent = results[i].nombre;
                        li.addEventListener('click', function() {
                            var productId = this.getAttribute('data-product');
                            window.location.href = 'producto_detalle.php?id=' + productId;
                        });
                        resultsDiv.appendChild(li);
                    }
                }
            };
            xhr.send();
        } else {
            document.getElementById('results').innerHTML = '';
        }
    });
});