<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ayos.css">
    <title>Aesthetic Member Gallery</title>
</head>
<body>
    <div class="header">
        <h1>Member Gallery</h1>
    </div>

    <div class="container">
        <?php
        $members = [
            [
                'name' => 'Alyssa Jharie A. Malonzo',
                'description' => 'Hello! My name is Alyssa Jharie, and I am 21 years old. I was born on February 05, 2003 and currently live in Ilaya Alabang. ',
                'profile_image' => '5.jpg',
                'portfolio_images' => ['6.jpg', '7.jpg', '8.jpg']
            ],
            [
                'name' => 'Remelyn B. Echevarria',
                'description' => 'Hello! My name is Remelyn, and I am 20 years old. I was born on December 3, 2003 and currently live in Muntinlupa City.',
                'profile_image' => '4.jpg',
                'portfolio_images' => ['9.jpg', '10.jpg', '11.jpg']
            ],
            [
                'name' => 'Trisha M. Galope',
                'description' => 'Hello! My name is Trisha, and I am 22 years old. I was born on January 8, 2002 and currently live in Muntinlupa City. ',
                'profile_image' => '3.jpg',
                'portfolio_images' => ['12.jpg', '13.jpg', '14.jpg']
            ]
        ];

        foreach ($members as $member) {
            echo '<div class="member">';
            echo '<h2>' . $member['name'] . '</h2>';
            echo '<h3>' . $member['description'] . '</h3>';
            echo '<img src="' . $member['profile_image'] . '" alt="' . $member['name'] . '">';
            echo '<div class="portfolio">';
            foreach ($member['portfolio_images'] as $image) {
                echo '<img src="' . $image . '" alt="Portfolio Image">';
            }
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>