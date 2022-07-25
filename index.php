<!-- creare un array di array. 
Ogni array figlio avrà come chiave una data di questo formato DD-MM-YYYY 
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack-25-07</title>
</head>
<body>
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<?php foreach($posts as $key => $post) { ?>
    <div class="box">
        <h2> <?php echo $key ?></h2>
        <?php foreach($post as $child) { ?>
            <h4> <?php echo $child['title'] ?></h4>
            <p> <?php echo $child['text'] ?></p>
            <h5> <?php echo $child['author'] ?></h5>
        <?php } ?>  
    </div>
<?php } ?>
</body>
</html>