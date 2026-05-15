function consumirApi(){
    fetch('endPoint')
        .then(response => response.json())
        .then(cantidades => {
            let mayor = cantidades[0];

            for (let i=1;i<cantidades.length;i++){
                if(cantidades[i]>mayor){
                    mayor=cantidades[i];
                }
            }
        })
}
