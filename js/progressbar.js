// Trouver un job
/*function FindJob(poste) {
    var moi = ['motivé', 'sérieux']

    if (poste) {

        entretien = poste.apply

        while (contratPro) {

            moi.append('competences')

        }
    }
}

*/

$(document).ready(function(){
    $('.hiderow').hide();

    $('.pt').hide();
    $('.pt').fadeIn(200);
    $('#indic').text('Cliquez sur les sous-titres pour dévoiler les compétences')




    $('.pt1').click(function() {
        $('.hiderow1').slideToggle(1600);
        $('#indic').text('Certaines barres sont cliquables, et mènent à des réalisations.')

    })

    $('.pt2').click(function() {
        $('.hiderow2').slideToggle(1200);

    })



});

function toggleAttr (element, attribut, valeurs){
    if ($(element).attr(attribut) == valeurs[0]){
        $(element).attr(attribut, valeurs[1]);
    } else if ($(element).attr(attribut) == valeurs[1])
    {
        $(element).attr(attribut, valeurs[0]);
    }
}

function frameLooper(text, id) {
    var myString = text;
    var myArray = myString.split("");
    var loopTimer;
    if(myArray.length > 0) {
        document.getElementById(id).innerHTML += myArray.shift();
    } else {
        clearTimeout(loopTimer);
        return false;
    }
    loopTimer = setTimeout('frameLooper()',70);
}






    
    
