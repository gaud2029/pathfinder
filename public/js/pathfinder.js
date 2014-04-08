$(document).ready(function() {

    $("select#race").change(function()
    {
        if (['Gnome', 'Halfling'].indexOf($("select#race option:selected").text()) > -1)
        {
            $("select#size").val('S');
            $("#sizeModifier").val('+1');
        }
        else
        {
            $("select#size").val('M');
            $("#sizeModifier").val('');
        }
    })

});
