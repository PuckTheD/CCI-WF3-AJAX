$(document).ready(function(){

    $(".card-header ul li a").click(function(){
        console.log($(this).attr("href"));

        $.ajax({
            url: $(this).attr('href'),
            success: function(data){
                $('.card-body').empty();
                $('.card-body').css('color','red');
                $('.card-body').append(data);
            },
            error:function(){

            }

        });

        return false;

    })

    //JSON

    $.ajax({
        url:"js/etudiant.json",
        dataType:"json",
        success:function (data) {
            //console.log(data);
            $('.liste-admis').prepend("<h1>Liste des étudiants admis<//h1> <br>" );
            $('.liste-non-admis').prepend("<h1>Liste des étudiants non admis<//h1> <br>" );
            for (let i= 0; i < data.etudiants.length; i++){
                //console.log(data.etudiants[i]);

                if (data.etudiants[i].moyenne > 9){
                    console.log("Admis ===> " + data.etudiants[i].nom + " " + data.etudiants[i].prenom);
                    var content = "<ul>";
                    content += "<li>" +data.etudiants[i].prenom+ " " +data.etudiants[i].nom + "</li>";
                    content +="</ul>"

                    $('.liste-admis').append( content);
                } else {
                    console.log("Nom admis ===> " + data.etudiants[i].nom + " " + data.etudiants[i].prenom);
                    var content = "<ul>";
                    content += "<li>" +data.etudiants[i].prenom+ " " +data.etudiants[i].nom + "</li>";
                    content +="</ul>"

                    $('.liste-non-admis').append( content);
                }
            }
        },
        error:function () {

        }
    })
});