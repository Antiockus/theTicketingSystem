<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticketing App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <?php require "header.php"; ?>
        <form class="form" action="process_clients.php" method="post">
            <fieldset>

                <input type="hidden" name="hon" value="" />
                <label for="client_name">Client Name</label><br>
                <input type="text" class="form-control" id="client_name" name="client_name" value="" placeholder="Enter the
         client name*" required /><br>
                <label for="client_url">Client URL</label><br>
                <input type="text" class="form-control" id="client_url" name="client_url" value="" placeholder="Enter the
         client url" /><br>
                <label for="client_description">Describe the client:</label><br>
                <textarea name="client_description" class="form-control" id="client_description" cols="30" rows="10"></textarea><br>

                <input type="submit" name="s" value="Create Client"></fieldset>
        </form>
    </div>
    <?php require "footer.php"; ?>