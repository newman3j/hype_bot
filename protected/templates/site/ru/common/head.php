<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title><?php echo isset($meta['title']) ? $meta['title'] : 'Admin Panel'; ?></title>

    <!-- Bootstrap Core and Font Icon -->
    <link rel="stylesheet" href="<?php echo SITE_DIR; ?>assets/theme/assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_DIR; ?>assets/theme/assets/plugins/animate-css/vivify.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_DIR; ?>assets/theme/assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- Plugins css -->
    <link rel="stylesheet" href="<?php echo SITE_DIR; ?>assets/theme/assets/plugins/charts-c3/plugin.css"/>

    <!-- Core css -->
    <link rel="stylesheet" href="<?php echo SITE_DIR; ?>assets/theme/site/css/main.css"/>
    <link rel="stylesheet" href="<?php echo SITE_DIR; ?>assets/css/common.css"/>
    <link rel="stylesheet" href="<?php echo SITE_DIR; ?>assets/css/site/style.css"/>
    <?php echo $template_style ?>
</head>