$(function() {
    // date element ophalen
    let dateElement = $("#date");

    // on change
    dateElement.on("change", function(e) {
        // datum ophalen (value)
        let selectedDate = e.target.value;

        // ajax call
        $.get("/CLE2/Christa/available_dates.php?date=" + selectedDate, function(data){
                $("#time").empty();
                $.each(data, function(index, val) {
                    // option toevoegen aan time (select) element
                    $("#time").append('<option value="'+val+'">'+val+'</option>');
                });

            });
        
    })
});