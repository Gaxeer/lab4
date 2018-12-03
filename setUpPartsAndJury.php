<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>

<body class="setUp">
    <?php 
if (empty($_POST)){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location:index.php");
    exit();
}

$data = $_POST;

if($data['part'] && $data['jury'])
{
    $partNumber  = (int)$data['part'];
    $juryNumber  = (int)$data['jury'];

?>

    <form method="POST" action="createTournament.php">
        <div class="notBootstrapContainer">
            <div class="pathJuryCol">
                    <div class="pathColTitle">
                        УЧАСТНИКИ
                    </div>
                    <?php

    for($i = 1;$i<=$partNumber;$i++)
    {
        echo "<input class='part' max='15'  type='text' name='parts[]'  placeholder='Part №$i' required/><br>";
    }

    ?>
            </div>

            <div class="buttonBlock">
                <input class="buttonSubmit" type="submit" value="Отправить" />
            </div>

        <div class="pathJuryCol">
                <div class="juryColTitle">
                    ЖЮРИ
                </div>

                    <?php
    for($i = 1;$i<=$juryNumber;$i++)
    {
        echo "<input class='jury' max='15' type='text' name='jury[]' placeholder='Jury №$i'/><br>";
    }

    ?>

        </div>

    </div>

    </form>

    </div>




    <?php } ?>
</body>

</html>