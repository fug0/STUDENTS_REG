$(document).ready(function () {
    $.ajax(
        'php/index.php',
        {
            type: "POST",
            dataType: "html",
            data: $('#regForm').serialize(),
            success: function(data) {
                result = $.parseJSON(data);
                $('#result').html(result.name);
            }
        }
    );
    $('#button').on("click", function (e) {
        e.preventDefault();
        $.ajax(
            'php/button_ajax.php',
            {
                type: "POST",
                dataType: "html",
                data: $('#regForm').serialize(),
                success: function(data) {
                    inputname = $.parseJSON(data);
                    $('#inpRes').html(inputname.name);
                }
            }
        );
        return false;
    });
});