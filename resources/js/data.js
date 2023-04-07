var data = {
    'produkte': [
        { name: 'Ritterburg', preis: 59.99, kategorie: 1, anzahl: 3 },
        { name: 'Gartenschlau 10m', preis: 6.50, kategorie: 2, anzahl: 5 },
        { name: 'Robomaster' ,preis: 199.99, kategorie: 1, anzahl: 2 },
        { name: 'Pool 250x400', preis: 250, kategorie: 2, anzahl: 8 },
        { name: 'Rasenmähroboter', preis: 380.95, kategorie: 2, anzahl: 4 },
        { name: 'Prinzessinnenschloss', preis: 59.99, kategorie: 1, anzahl: 5 }
    ],
    'kategorien': [
        { id: 1, name: 'Spielzeug' },
        { id: 2, name: 'Garten' }
    ]
};

function getMaxPreis(data){
    let name;
    let maxPreis=0;

    var produkte= data['produkte'];
    console.log(produkte);
    produkte.forEach(function(value,index){
        if(value['preis']>maxPreis){
            maxPreis=value['preis'];
            name=value['name'];
        }
    })
    return name;
}
console.log(getMaxPreis(data));

function getMinPreisProdukt(data){
    let index;
    let minPreis=1000;

    var produkte=data['produkte'];

    for(let i=0; i<produkte.length; i++){
        if(produkte[i]['preis']<minPreis){
            minPreis=produkte[i]['preis'];
            index=i;
        }
    }
    return produkte[index];
}
console.log(getMinPreisProdukt(data));

function getPreisSum(data){
    let sum=0;

    var produkte= data['produkte'];
    console.log(produkte);
    produkte.forEach(function(value,index){

            sum+=value['preis'];

    })
    return sum;
}
console.log(getPreisSum(data));


function getGesamtWert(data){
    let sum=0;

    var produkte= data['produkte'];
    console.log(produkte);
    produkte.forEach(function(value,index){

        sum+=value['preis']*value['anzahl'];

    })
    return sum;
}
console.log(getGesamtWert(data));

function getAnzahlProdukteOfKategorie(data,kategorieName){

    var kategorie=data['kategorien'];
    var produkte= data['produkte'];
    var id;
    var anzahl=0;

    kategorie.forEach(function (value, index){
        if(value['name']==kategorieName){
            id=value['id'];
        }
    })

    produkte.forEach(function (value, index){
        if(value['kategorie']==id){
            anzahl+=value['anzahl'];
        }
    })
    return anzahl;
}
console.log(getAnzahlProdukteOfKategorie(data,'Garten'));
console.log(getAnzahlProdukteOfKategorie(data,'Spielzeug'));


