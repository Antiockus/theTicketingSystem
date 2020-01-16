<?php
require "vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader('views/');
$twig = new \Twig\Environment($loader);

?>
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
    <?php require "header.php"; ?>
    <div class="container">
        <div class="jumbotron">
            <h2>Welcome to a Custom Ticketing Solution</h2>
            <h3>You've chosen, or been chosen, to use a system that works better. Welcome, it's safer here.</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>A New Path</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolores provident illo! Iure eius a vel commodi excepturi quasi dicta vero repellat sed rem, earum placeat suscipit minima quaerat nulla obcaecati. Molestiae, culpa dignissimos suscipit amet magnam, earum debitis, fuga quae accusamus voluptatum quos facilis consequatur explicabo. Vero similique laborum totam labore minus placeat ea animi earum delectus nulla recusandae repellendus doloribus asperiores suscipit voluptatibus mollitia, sed quibusdam quae illum velit excepturi sit sequi voluptates provident. Nostrum, voluptates, ad similique facere sapiente distinctio sunt quod eos provident dolorem facilis! Veniam voluptate ipsam perspiciatis? Cupiditate a earum corrupti velit ipsum soluta?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2>The Overseer</h2>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit architecto repellat perspiciatis porro omnis, sed magni quos laborum fuga dolorem explicabo tenetur similique facilis sapiente libero obcaecati neque ipsa. Aut, quas adipisci? Veniam quidem quo sit voluptate! Error cumque aliquam voluptate dicta quam, veniam ab obcaecati, consequatur, officia a fugiat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2>The Combine</h2>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit architecto repellat perspiciatis porro omnis, sed magni quos laborum fuga dolorem explicabo tenetur similique facilis sapiente libero obcaecati neque ipsa. Aut, quas adipisci? Veniam quidem quo sit voluptate! Error cumque aliquam voluptate dicta quam, veniam ab obcaecati, consequatur, officia a fugiat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Reverence</h2>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit architecto repellat perspiciatis porro omnis, sed magni quos laborum fuga dolorem explicabo tenetur similique facilis sapiente libero obcaecati neque ipsa. Aut, quas adipisci? Veniam quidem quo sit voluptate! Error cumque aliquam voluptate dicta quam, veniam ab obcaecati, consequatur, officia a fugiat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="https://unsplash.it/1000" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <h2>The path for humanity</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum odio in, at qui exercitationem alias explicabo distinctio quisquam eligendi quaerat asperiores rem ex porro deserunt aliquid dignissimos ducimus dolorem esse laudantium et. Rerum eligendi, consectetur soluta esse sit optio provident harum tempora quibusdam, id sequi et vero corporis distinctio quas quaerat, quia aliquid! Nobis nam minus dicta enim hic beatae! Fuga quisquam ex perferendis porro fugit, quos id. Officia eum consequatur quidem repellat ea maxime. Maiores corrupti deserunt, exercitationem explicabo ratione consequuntur beatae natus mollitia repellat ut illum quam nam reiciendis nostrum, quos perspiciatis eveniet in. Corrupti provident voluptatum numquam.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex doloribus, omnis similique exercitationem id ut natus ipsam nemo quaerat eius porro non velit impedit tenetur consequatur soluta iure incidunt atque possimus ad quibusdam. Est laboriosam, praesentium laudantium consequatur vero assumenda libero exercitationem perspiciatis tempora eos eligendi sit aspernatur voluptatibus distinctio.</p>
            </div>
        </div>
    </div>
    <?php require "footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>