<!doctype html>
<html lang="fr">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav id="menu_top" class="container-fluid">
        <div class="row">
            <div id="menu_top_div" class="col-3"><a><i id="menulogo" class="fas fa-home"></i>Accueil</a></div>
            <div id="menu_top_div" class="col-3"> <a data-toggle="collapse" href="#collapse_film" aria-expanded="false" aria-controls="collapse_film"><i id="menulogo" class="fas fa-film"></i>Films<i id="menucarret"class="far fa-caret-square-down"></i></a>
                <div id="collapse_film" class="collapse">
                    Zboubinou
                </div>
            </div>
            <div id="menu_top_div" class="col-3"> <a data-toggle="collapse" href="#collapse_serie" aria-expanded="false" aria-controls="collapse_serie"><i id="menulogo" class="fas fa-umbrella"></i>Séries<i id="menucarret" class="far fa-caret-square-down"></i></a>
                <div id="collapse_serie" class="collapse">
                    Zboubinou
                </div>
            </div>
            <div id="menu_top_div" class="col-3">
                <form action="">
                    <label for=""><i class="fas fa-search"></i></label><input type="text" placeholder="Rechercher ...">
                </form>
            </div>
        </div>
    </nav>
    <section class="container-fluid">
        <div class="row">
            <div id="item" class="col-3">
                <h3 id="item-titre" class="col-12">Titre</h3>
                <div id="item-image" class="col-12">Image</div>
            </div>
        </div>
    </section>
    <style>
        #item {
            padding: 10px;
        }

        #item-titre {
            text-align: center;
            text-decoration: underline;
        }

        #menu_top {
            margin: 0 0 250px 0;
        }
        #menu_top_div {
            padding: 10px 25px;
            height: 70px;
            font-size: 24px;
            text-align: center;
            line-height: 50px;
            transition: 1s;
        }

        #menu_top_div:hover {
            margin-top: 5px;
            transition: 0.5s;
        }

        #menulogo {
            float: left;
            margin-right: 25px;
        }

        #menucarret {
            float: right;
        }

        #menu_top_div>a>svg {
            margin-top: 10px;
            font-size: 30px;
        }
        #menu_top_div>form>input {
            width: 80%;
            height: 50px;
            line-height: 50px;
            border: 0;
            margin: 0;
            padding: 10px 25px;
        }

        #menu_top_div>form>label {
            width: 20%;
            text-align: center;
        }
    </style>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>