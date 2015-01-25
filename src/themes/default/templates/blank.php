<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo CONFIG_SITE_ENCODE; ?>">
    <title><?php echo CONFIG_SITE_TITLE;?></title>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo Page::url("/themes/default/styles/body.css"); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,700,400' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Scripts -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="<?php echo Page::url("/themes/default/scripts/jquery.elastic.source.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo Page::url("/themes/default/scripts/initTheme_blank.js"); ?>"></script>
    <!-- Meta/Communs à l'appli -->
    <?php Theme::head(); ?>
</head>
<body>
    <div id="page">
        <div id="bloc_central">
            <div id="bloc_central_inside">
                <?php if(Theme::$title != null): ?>
                    <div class="titre"><?php echo Theme::$title; ?></div>
                <?php endif; ?>
                <div class="contenu"><?php Theme::body(); ?></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</body>
</html>