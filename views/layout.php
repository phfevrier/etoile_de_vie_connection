<!DOCTYPE html>
<html>

    <head>
        <?php require_once PATH_ROOT.'/views/head.php'; ?>
         <!-- head commun à toute les pages -->
    </head>

    <body>
        <?php require_once PATH_ROOT.'/views/navbar.php'; ?>
        <!-- navbar commune à toute les pages -->
    


        <?php require $content_view; // Inclusion de la vue spécifique ?>



        <?php require_once PATH_ROOT.'/views/footer.php'; ?>
        <!-- footer commun à toute les pages -->

      

    </body>
</html>
