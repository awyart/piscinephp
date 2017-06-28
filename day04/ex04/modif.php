<?php

function ft_err()
{
    echo "ERROR\n";
    return (0);
}

if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] === "OK")
{
    if (!(file_exists("../htdocs/private/passwd")))
    {
        ft_err();
        return;
    }
    $pass = unserialize(file_get_contents("../htdocs/private/passwd"));
    if ($pass)
    {
        $test = 0;
        foreach ($pass as $key => $elem)
        {
            if ($elem["login"] === $_POST["login"] && $elem["passwd"] === hash('whirlpool', $_POST["oldpw"]))
            {
                $test = 1;
                $pass[$key]['passwd'] = hash('whirlpool', $_POST["newpw"]);
            }
        }
        if ($test)
        {
            @file_put_contents("../htdocs/private/passwd", serialize($pass));
            echo "OK\n";
        }
        else
            ft_err();
    }
    else
        ft_err();
}
else
    ft_err();
?>