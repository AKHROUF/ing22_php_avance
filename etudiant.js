function chargerDonnees() {
    //setTimeout(()=>{
        var div1 = document.getElementById("div1");
        var s = ""
        fetch('http://127.0.0.1/php_avance/etudiants2.php', {"method":"PUT"}).
        then(rep=>rep.json()).
        then(json=> json.forEach(element => { 
            s += `<tr><td>${element.id}</td><td>${element.nom}</td></tr>`;
        })).then(() => div1.innerHTML = s);
    //}, 5000);
}

