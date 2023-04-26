
let Gra = {
    'Gracz': {'Pojemnik': '#WynikGracza' , 'Wynik': 0},

    'Si': {'Pojemnik': '#WynikSi' , 'Wynik': 0},
    
    'Karty': ['2C','3C','4C','5C','6C','7C','8C','9C','10C','KC','QC','JC','AC','2D','3D','4D','5D','6D','7D','8D','9D','10D','KD','QD','JD','AD','2H','3H','4H','5H','6H','7H','8H','9H','10H','KH','QH','JH','AH','2S','3S','4S','5S','6S','7S','8S','9S','10S','KS','QS','JS','AS'],
    
    'WartosciKart': {'2C':2,'3C':3,'4C':4,'5C':5,'6C':6,'7C':7,'8C':8,'9C':9,'10C':10,'KC':10,'QC':10,'JC':10,'AC':[1, 11],'2D':2,'3D':3,'4D':4,'5D':5,'6D':6,'7D':7,'8D':8,'9D':9,'10D':10,'KD':10,'QD':10,'JD':10,'AD':[1, 11],'2H':2,'3H':3,'4H':4,'5H':5,'6H':6,'7H':7,'8H':8,'9H':9,'10H':10,'KH':10,'QH':10,'JH':10,'AH':[1, 11],'2S':2,'3S':3,'4S':4,'5S':5,'6S':6,'7S':7,'8S':8,'9S':9,'10S':10,'KS':10,'QS':10,'JS':10,'AS':[1, 11]},

    'Wygrana':0,
    'Przegrana':0,
    'Remis':0
};
const Gracz = Gra['Gracz'];
const Si = Gra['Si'];

//Akcja 1.1 / 2.1
function DobierzKarte(activeplayer) {
    const LiczbaLosowa = Math.floor(Math.random() * (Gra['Karty'].length));
    const ObecnaKarta = Gra['Karty'].splice(LiczbaLosowa, 1);
    
    AktualizujWynik(ObecnaKarta, activeplayer);

    PokazWynik(activeplayer);
    
}

//Akcja 1.2 /2.2
function AktualizujWynik(ObecnaKarta, activeplayer){
        if(ObecnaKarta == 'AC' || ObecnaKarta == 'AD' || ObecnaKarta == 'AH' || ObecnaKarta == 'AS'){
        if((activeplayer['Wynik'] + Gra['WartosciKart'][ObecnaKarta][1]) <= 21){

            activeplayer['Wynik'] += Gra['WartosciKart'][ObecnaKarta][1];
        }
        else{
            activeplayer['Wynik'] += Gra['WartosciKart'][ObecnaKarta][0];
        }
    }
    else{
        activeplayer['Wynik'] += Gra['WartosciKart'][ObecnaKarta];
    }   
}

//Akcja 1.3 /2.3
function PokazWynik(activeplayer){
    if(activeplayer['Wynik']>21){
        document.querySelector(activeplayer['Pojemnik']).textContent = 'Wynik wiekszy niż 21!';
        document.querySelector(activeplayer['Pojemnik']).style.color = 'yellow';
    }
    else{
        document.querySelector(activeplayer['Pojemnik']).textContent = activeplayer['Wynik'];
    }
}

//Akcja 2.4
function ZnajdzZwyciezce(){
    let Wygrany;

    if(Gracz['Wynik']<=21){
        if(Si['Wynik']<Gracz['Wynik'] || Si['Wynik']>21){
            Gra['Wygrana']++;
            Wygrany = Gracz;
        }
        else if(Si['Wynik'] == Gracz['Wynik']){
            Gra['Remis']++;
        }
        else{
            Gra['Przegrana']++;
            Wygrany = Si;
        }
    }
    else if(Gracz['Wynik']>21 && Si['Wynik']<=21){
        Gra['Przegrana']++;
        Wygrany = Si;
    }
    else if(Gracz['Wynik']>21 && Si['Wynik']>21){
        Gra['Remis']++;
    }
    return Wygrany;
}

//Akcja 2.5
function ZmienWynik(Wygrany){
    if(Wygrany == Gracz){
        document.querySelector('#ZakonczenieGry').textContent = 'Gracz wygrał!';
        document.querySelector('#ZakonczenieGry').style.color = 'green';
    }
    else if(Wygrany == Si){
        document.querySelector('#ZakonczenieGry').textContent = "Gracz przegrał!";
        document.querySelector('#ZakonczenieGry').style.color = 'red';
    }
    else{
        document.querySelector('#ZakonczenieGry').textContent = 'Remis!';
        document.querySelector('#ZakonczenieGry').style.color = 'orange';
    }

}

//Akcja 2.6
function TablicaWynikow(){
    document.querySelector('#Wygrana').textContent = Gra['Wygrana'];
    document.querySelector('#Przegrana').textContent = Gra['Przegrana'];
    document.querySelector('#Remis').textContent = Gra['Remis'];
}


//Akcja 1 
document.querySelector('#Dobierz').addEventListener('click', Dobierz);

function Dobierz(){
    if(Si['Wynik'] === 0){
        if(Gracz['Wynik']<=21){
            DobierzKarte(Gracz);
        }
    }
}


//Akcja 2
document.querySelector('#Zostan').addEventListener('click', Zostan)

function Zostan(){
    if(Gracz['Wynik']===0){
        alert('Należy dobrać kartę!');
    }
    else{
        while(Si['Wynik']<18){
            DobierzKarte(Si);
        }
            ZmienWynik(ZnajdzZwyciezce());
            TablicaWynikow();
    }
}

//Akcja 3
document.querySelector('#Rozdaj').addEventListener('click', Rozdaj);

function Rozdaj(){

    if(Gracz['Wynik']=== 0){
        alert('Należy dobrać kartę!');
    }
    else if(Si['Wynik']===0){
        alert('Najpierw zatwierdz swoje karty przed zakończeniem rozdania');
    }
    else{

    Gra['Karty'] = ['2C','3C','4C','5C','6C','7C','8C','9C','10C','KC','QC','JC','AC','2D','3D','4D','5D','6D','7D','8D','9D','10D','KD','QD','JD','AD','2H','3H','4H','5H','6H','7H','8H','9H','10H','KH','QH','JH','AH','2S','3S','4S','5S','6S','7S','8S','9S','10S','KS','QS','JS','AS'];

    document.querySelector('#ZakonczenieGry').textContent = '';

    Gracz['Wynik'] = 0;
    document.querySelector(Gracz['Pojemnik']).textContent = Gracz['Wynik'];
    document.querySelector(Gracz['Pojemnik']).style.color = 'black';
    Si['Wynik'] = 0;
    document.querySelector(Si['Pojemnik']).textContent = Si['Wynik'];
    document.querySelector(Si['Pojemnik']).style.color = 'black';

    }
}

window.addEventListener("load", () => {
    fetch("1b-database.php", { method: "POST" })
    .then(res => res.text())
    .then(txt => document.getElementById("demo").innerHTML = txt);
  });