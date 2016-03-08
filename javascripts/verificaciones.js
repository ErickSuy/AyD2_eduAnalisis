
function key_is_numeric(e)
{
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57))
    {
        return false;
    }
    return true;
}

function key_is_double(e)
{
    if (e.which != 8 && e.which != 0 && e.which != 46 && (e.which < 48 || e.which > 57) )
    {
        return false;
    }
    return true;
}

function key_is_letter(e)
{
    if (e.which >= 65 && e.which <= 90  || e.which >= 97 && e.which <= 122 || e.which == 209 || e.which == 241 || e.which == 32)
    {
        return true;
    }
    return false;
}

function is_empty_l(val,label)
{
    if(is_empty(val))
    {
        $(label).html("Campo vacio").show();
        return true;
        alert(label);
    }
    return false;
}

function is_empty(val)
{
    if (val.length == 0) return true;
    return false;
}