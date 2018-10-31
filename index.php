<?php 
$ini = parse_ini_file('config.ini');
?>

<!doctype html>
<html lang="en">

<head> 
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- seo meta tags -->
    <meta name="Description" content="The website of Algatrix. It showcases some of his websites, and you can get in touch with him.">

    <title>
        <?php echo $ini['title'] ?> | Portal
    </title>
    <link href="https://fonts.googleapis.com/css?family=Chivo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="./dist/index.css">

    <style>
        .logo {
            width: <?php echo $ini['logo_width'] ?>; 
            animation: <?php echo $ini['logo_animation']; 
            echo ' '; 
            echo $ini['logo_animation_time'] ?> 
            forwards infinite;
        }

        @media only screen and (max-width: 750px) { 
            .logo {
                width: <?php echo $ini['logo_mobile_width'] ?>;
            }
        };

    </style>
</head>

<body>
    <div id="body-particles">
    </div>
    <div class="logo__box">
        <img src="<?php echo $ini['logo_url'] ?>" alt="logo" class="logo" >
    </div>
    <div class="content">
        <?php 
            for ($i = 1; $i <= 3; $i++) {
                $name = $ini['icon_' . $i . '_name'];
                $url = $ini['icon_' . $i . '_url'];
                $redirect = $ini['icon_' . $i . '_redirect'];

                echo '<a class="content__box" href="' . $redirect . '">';
                echo '<img src="' . $url . '" alt="' . $name . '" class="content__icon">';
                echo '<h2 class="heading-secondary">' .$name . '</h2>';
                echo '</a>';
            };
        ?>
    </div>
    <script>
        var value = <?php echo $ini['amount_of_particles'] ?>;
        var size = <?php echo $ini['particle_size'] ?>;
    </script>
    <script src="dist/index.js"></script>
</body>

</html>