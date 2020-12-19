<?php include '../database/dischi.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../dist/app.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>

    </head>
    <body>
        <header>

        </header>
        <main>
            <section class="container">
                <div class="">
                    <select id="genres" name="val">
                        <option value="">All genres</option>
                        <?php foreach ($genres as $genre) { ?>
                            <option value="<?php echo $genre ?>">
                                <?php echo $genre ?>
                            </option>
                            <?php
                        } ?>
                    </select>
                </div>
                <div class="container dischi-box">
                    <?php foreach ($dischi as $disco) { ?>
                        <div class="card">
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
        <script id="disco-template" type="text/x-handlebars-template">
            <div class="card">
               <div class="disco-content">
                   <div class="poster-img">
                       <img src="{{poster}}"alt="">
                   </div>
                   <h4>{{title}}</h4>
                   <h5> {{author}}</h5>
                   <h6>{{year}}</h6>
               </div>
           </div>
        </script>
        <script src="../src/app.js" charset="utf-8"></script>

    </body>
</html>
