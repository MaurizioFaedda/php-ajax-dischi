<?php include '../database/dischi.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>

        </header>
        <main>
            <section>
                <div class="container dischi-box">
                    <?php foreach ($dischi as $disco) { ?>
                        <div class="disco-box">
                           <div class="disco-content">
                               <div class="poster-img">
                                   <img src="<?php echo $disco['poster'] ?>"alt="">
                               </div>
                               <h4><?php echo $disco['title'] ?></h4>
                               <h5> <?php echo $disco['author'] ?></h5>
                               <h6><?php echo $disco['year'] ?></h6>
                           </div>
                       </div>
                       <?php
                    }

                    ?>

            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>
