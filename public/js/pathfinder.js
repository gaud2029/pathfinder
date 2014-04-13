$(document).ready(function() {

    // set size fields when race is selected
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
    });

    // show next level xp on keyup
    $("#xp").keyup(function()
    {
        var entered = $(this).val();
        $("#nextXp").val(getNextXp(entered));
    });



});

function getNextXp(entered)
{
    var xp = [0, 0, 1300, 3300, 6000, 10000, 15000, 23000, 34000, 50000, 71000, 105000, 145000, 210000, 295000, 425000, 600000, 850000, 1200000, 1700000, 2400000];
    for (var i = 2; i < xp.length; i++)
    {
        if (xp[i] > entered)
            return xp[i];
    }

    return 0;
}
