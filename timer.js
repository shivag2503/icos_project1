var counter = 0;

function setCounter()
{
    counter = setInterval("auto_logout()", 10000);
}

function resetCounter()
{
    if (counter != 0)
    {
        clearInterval(counter);
        counter = 0;
        counter = setInterval("auto_logout()", 10000);
    }
}

function auto_logout()
{
    window.location = "logout.php";
}