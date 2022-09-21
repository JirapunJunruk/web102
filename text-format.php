<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p.justify{
            background-color: #cde;
            text-align: justigy;
            width: 300px;
        }
        span.super{
            vertical-align: super;
        }
        span.sub{
            vertical-align: sub;
        }
        div.middle-vert{
            background-color: #cde;
            width: 300px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            display: table-cell;
        }
        p.indent{
            background-color: #cde;
            text-indent: 50px;
            width: 300px;
        }
    </style>
</head>
<body>
    <p class="justify">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eaque nostrum voluptas amet atque, laboriosam possimus accusantium? Fugit laboriosam vel in magni officia fuga cumque recusandae. Nostrum reprehenderit itaque ad?
    </p>
    <p>e=mc <span class="super">2</span>(super)</p>
    <p>O <span class="sub">2</span>(sub)</p>
    <div class ="middle-vert">Middle-vert</div>
    <p class="indent">
        Lorem, ipsum dolor sit amet conseddctetur adipisicing elit. Labore maxime sint totam, quis quo doloremque est add nesciunt quaerat obcaecati reiciendis delectus voluptatum recusandae. Exercitationem recusandae cumque add impedit deserunt quidem minus!
    </p>
</body>
</html>