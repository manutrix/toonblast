<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toon Blast Stats - Équipe: La p'tite vie</title>

    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <style>
        img.logo {
            height: 32px;
            margin: 7px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-inverse navbar-expand-lg">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img class="logo" src="images/logo.png">
        </div>
        <span class="navbar-brand">La p'tite vie</span><span class="navbar-brand">2018-04-16</span>

    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">

        <div class="col-sm-2 sidenav collapse navbar-collapse" id="navbarSupportedContent">
            <p><a href="index.php">Semaine dernière</a></p>
            <hr/>
            <p><a href="2018-04-16.php">2018-04-16</a></p>
            <p><a href="2018-04-23.php">2018-04-23</a></p>
            <p><a href="2018-04-30.php">2018-04-30</a></p>
            <p><a href="2018-05-07.php">2018-05-07</a></p>
        </div>

        <div class="col-sm-8 text-left">
            <h3>Statistiques d'équipe</h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Niveau</th>
                    <td>9 251</td>
                </tr>
                <tr>
                    <th>Dons</th>
                    <td>733</td>
                </tr>
                <tr>
                    <th>Progression</th>
                    <td>1 795</td>
                </tr>
            </table>
            <h3>Top niveaux</h3>
            <p>Les 5 plus hauts niveaux à la fin de la semaine</p>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Joueur</th>
                    <th>Niveau</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Manouche</td>
                    <td>1 005</td>
                </tr>
                <tr>
                    <td>Patou</td>
                    <td>822</td>
                </tr>
                <tr>
                    <td>Kinou</td>
                    <td>780</td>
                </tr>
                <tr>
                    <td>Maxx</td>
                    <td>573</td>
                </tr>
                <tr>
                    <td>Ceres</td>
                    <td>494</td>
                </tr>
                </tbody>
            </table>
            <h3>Top Dons</h3>
            <p>Les joueurs ayant fait le plus de dons à la fin de la semaine</p>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Joueur</th>
                    <th>Dons</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Patou</td>
                    <td>108</td>
                </tr>
                <tr>
                    <td>Manouche</td>
                    <td>91</td>
                </tr>
                <tr>
                    <td>Kinou</td>
                    <td>66</td>
                </tr>
                <tr>
                    <td>Stéphane</td>
                    <td>53</td>
                </tr>
                <tr>
                    <td>Peanut03</td>
                    <td>52</td>
                </tr>
                </tbody>
            </table>
            <h3>Top Progression</h3>
            <p>Les joueurs ayant la plus grande différence entre le niveau en début et en fin de semaine</p>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Joueur</th>
                    <th>Progression</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Stéphane</td>
                    <td>181</td>
                </tr>
                <tr>
                    <td>Pippy</td>
                    <td>172</td>
                </tr>
                <tr>
                    <td>Jim</td>
                    <td>145</td>
                </tr>
                <tr>
                    <td>Peanut03</td>
                    <td>125</td>
                </tr>
                <tr>
                    <td>Toon</td>
                    <td>115</td>
                </tr>
                </tbody>
            </table>
            <h3>Top coffre</h3>
            <p>Les 5 plus haut niveaux dans le coffre</p>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Joueur</th>
                    <th>Niveau</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Sue</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Pippy</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Kinou</td>
                    <td>31</td>
                </tr>
                <tr>
                    <td>Patou</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>FuzzBuster</td>
                    <td>24</td>
                </tr>
                </tbody>
            </table>
            <h3>Mur de la honte</h3>
            <p>Les joueurs qui, malgré qu'ils ont joué durant la semaine, ont fait peu ou pas de dons</p>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Joueur</th>
                    <th>Progression</th>
                    <th>Dons</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Toon</td>
                    <td>115</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Chulita</td>
                    <td>42</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Beth</td>
                    <td>23</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Joanne</td>
                    <td>21</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Maggie</td>
                    <td>16</td>
                    <td>0</td>
                </tr>
                </tbody>
            </table>
            <h3>Au seuil de la porte</h3>
            <p>Comme nous voulons une équipe active, les joueurs qui ne feront aucune progression, peu ou pas de dons et/ou ne
                participeront pas au coffre d'équipe, devront laisser leur place pour des joueurs plus actifs</p>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Joueur</th>
                    <th>Progression</th>
                    <th>Dons</th>
                    <th>Coffre</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Maggysoleil</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Gjgjgj</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Brent</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Josee</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Anna</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Oilersrule</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Jane</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Hdhhddgg</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Nkgf</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Audrey</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Martinette</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Soyons actif!!</p>
</footer>

</body>
</html>


</body>
</html>


