 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon portfolio</title>
    <link href="./assets/images/CSS/index.css?t=<t?time()?>" rel="stylesheet ">
 </head>
 <body>
 <header>
        <?php include '_header.php'; ?>
    </header>
    <main>
    <div class="slider">
        <img src="./assets/images/slider.jpg" class="slider-background">
    </div>
        <section class="slider-content">
            <h1>Dounayha Abdillah</h1>
            <p> Je suis developpeur full-stack</p>
        </section>
       
        <?php include 'a_propos_de_moi.php'; ?>
        <?php include '_competences.php'; ?>
        <?php include '_portfolio.php'; ?>
        <?php include '_contact.php'; ?>
        </main>
 </body>
 </html>