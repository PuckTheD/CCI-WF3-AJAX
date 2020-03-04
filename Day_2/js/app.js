$(document).ready(function() {

    $.ajax({

        url:"js/country.json",
        dataType:"json",
        success: function (data) {
            for (var i = 0; i < data.length; i++) {
                $('#ville').append("<option value="+data[i].code+">"+data[i].name+"</option>");

                $('#ville').change(function () {
                    findByCountry($('#ville').val());
                })
            }
        },
        error: function (xhr) {
            console.log(xhr.status)
        }
    })
});

function findByCountry(country) {

    $.ajax({
        // https://datahelpdesk.worldbank.org/knowledgebase/articles/898590-country-api-queries

        url:"http://api.worldbank.org/v2/country/"+ country +"?format=json",
        dataType:"json",
        success: function (data) {
            //console.log(data);
            $('.lead').html("Vous avez choisi:  " + data[1][0].name + " , sa capitale est  " +
                data[1][0].capitalCity );
            $('.temp').html("il se situe en " + data[1][0].region.value)

        },
        error: function (xhr) {
            console.log(xhr.status)
        }
    })
}