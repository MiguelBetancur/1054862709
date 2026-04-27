function consumir_api(){
    var endPoint = "https://fakestoreapi.com/products"

    fetch(endPoint)
    .then(function(response){
        return response.json()
    })
    .then (function(data){
        var producto;
        producto=producto.count(personas);
        Ploty.newPlot('myDiv', producto)
    })
}