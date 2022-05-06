function NombreDeChapitre() {
    const nbChapitre = parseInt(window.prompt("Veuillez renseigner le nombre de chapitre que vous souhaitez renseigner"));
    nbChapitre.IsStringInteger = function (str) {
        if(typeof str !='int' ){
            return false;
        }
    }
    if(nbChapitre != null && nbChapitre.IsStringInteger(nbChapitre)){
        return nbChapitre;
    }
    else{
        NombreDeChapitre();
    }
}