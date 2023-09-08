<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Plurk – Tailwind CSS Multipurpose Landing Templates</title>
        <!-- Favicon -->
        <link rel="icon" type="icon" href="assets/images/favicon.png" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Swiper Slider -->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
        <!-- AOS Animation CSS -->
        <link href="assets/css/aos.css" rel="stylesheet" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>

    <body>

        <?php require_once('/partials/screen-loeader.php') ?>
        
        <div
            class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent"
        >

            <?php require_once('/partials/header.php') ?>


            <div class="-mt-[82px] flex-grow lg:-mt-[106px]">

                <div class="h-20 bg-black lg:h-[104px]"></div>

                <?php require_once('partials/home-banner.php') ?>
                
                <?php require_once('partials/brands-caurosel.php') ?>
                
                <?php require_once('partials/who-we-are.php') ?>

                <?php require_once('partials/features.php') ?>

                <?php require_once('partials/stats.php') ?>

                <?php require_once('partials/case-stadies.php') ?>

                <?php require_once('partials/lets-work-to-gether.php') ?>

            </div>

            <?php require_once('partials/footer.php') ?>

        </div>

        <?php require_once('partials/scroll-top.php') ?>

        <?php require_once('partials/scripts.php') ?>

 
    </body>

</html>
