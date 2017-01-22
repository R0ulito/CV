// Trouver un job
/*function FindJob(poste) {
    var moi = ['motivé', 'sérieux']

    if (poste) {

        entretien = poste.apply

        while (entretien) {

            moi.append('')

        }
    }
}

*/

$(document).ready(function(){
    $('.hiderow').hide();

    $('.pt').hide();
    $('.pt').fadeIn(200);
    $('#indic').text('Cliquez sur les sous-titres pour dévoiller les compétences')




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






    
    
