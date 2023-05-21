<html>
<head>
    <title>Album Art Collage</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>

<ul>
<?php

// 1st and 16th will be larger than the rest
$albums = [
    'https://a5.mzstatic.com/us/r1000/0/Music115/v4/14/a8/69/14a86912-841d-3cb8-cf55-0439b15c6cab/dj.mjduepez.jpg',          // 1
    'https://a5.mzstatic.com/us/r1000/0/Music115/v4/fd/63/ed/fd63ed6c-178c-7fa9-4844-29a7326bf655/06UMGIM01277.rgb.jpg',     // 2
    'https://a5.mzstatic.com/us/r1000/0/Music112/v4/86/c9/bb/86c9bb30-fe3d-442e-33c1-c106c4d23705/17UMGIM88776.rgb.jpg',     // 3
    'https://a5.mzstatic.com/us/r1000/0/Music125/v4/34/d4/89/34d489f5-3066-d89e-ad44-6e28d6dd067e/190295807870.jpg',         // 4
    'https://a5.mzstatic.com/us/r1000/0/Music122/v4/b2/70/c8/b270c885-3e28-3dfa-3bd3-faa6e5fa8540/15UMGIM36851.rgb.jpg',     // 5
    'https://a5.mzstatic.com/us/r1000/0/Music112/v4/bd/b8/e6/bdb8e631-a4c1-c8f7-2716-3e5486aa6598/196589087133.jpg',         // 6
    'https://a5.mzstatic.com/us/r1000/0/Music114/v4/97/e6/70/97e670f6-361b-a23d-617a-52bafcd631cd/075679854247.jpg',         // 7
    'https://a5.mzstatic.com/us/r1000/0/Music122/v4/8b/f1/50/8bf1503a-a4db-4fa6-a3a5-f919509acacd/14UMGIM43392.rgb.jpg',     // 8
    'https://a5.mzstatic.com/us/r1000/0/Music118/v4/9f/da/5d/9fda5dfb-8be4-e656-6fb3-a83cc9dbd60a/192562402849.jpg',         // 9
    'https://a5.mzstatic.com/us/r1000/0/Music125/v4/e7/1f/06/e71f062b-71c8-3b06-49d3-a0842a759684/078221471527.jpg',         // 10
    'https://a5.mzstatic.com/us/r1000/0/Music115/v4/95/5f/15/955f1588-c334-e47d-5e5c-85ac2e054454/00600753029701.rgb.jpg',   // 11
    'https://a5.mzstatic.com/us/r1000/0/Music128/v4/85/1a/73/851a7375-4eab-9931-e5c7-da75d7a82a93/00602498801703.rgb.jpg',   // 12
    'https://a5.mzstatic.com/us/r1000/0/Music115/v4/81/99/8f/81998f7f-54cb-97ef-eca3-fef8dd9bc8a3/00075021034440.rgb.jpg',   // 13
    'https://a5.mzstatic.com/us/r1000/0/Music125/v4/f9/76/d2/f976d242-4e68-1919-6576-ef4c869c077a/dj.umvqrvup.jpg',          // 14
    'https://a5.mzstatic.com/us/r1000/0/Music124/v4/b9/9a/e2/b99ae2d4-5c85-33e4-061e-ebe8dcced9e9/19UMGIM71848.rgb.jpg',     // 15
    'https://a5.mzstatic.com/us/r1000/0/Music124/v4/f4/2b/b6/f42bb6df-b902-5a4d-37cc-dd6fd3cb4dfd/mzi.taqbwohf.jpg',         // 16
    'https://a5.mzstatic.com/us/r1000/0/Music124/v4/bc/69/92/bc699249-6fff-02a3-0d08-9259bd55cf82/06UMGIM18713.rgb.jpg',     // 15
    'https://a5.mzstatic.com/us/r1000/0/Music125/v4/63/6d/64/636d647a-136f-445d-4736-6f3c2f5070ac/828765129527.jpg'          // 18
];

foreach($albums as $album) {
    echo '<li style="--cover: url(\''.$album.'\');"></li>';
}

?>
</ul>

</body>
</html>
