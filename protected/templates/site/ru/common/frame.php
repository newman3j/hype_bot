<!doctype html>
<html lang="en" dir="ltr">
<?php require_once TEMPLATE_DIR . 'common/head.php'; ?>
<body class="theme-black">
<div class="page-loader-wrapper">
    <div class="loader">
        <img src="<?php echo SITE_DIR; ?>assets/theme/assets/images/logo-icon.svg" alt="Buzzer">
    </div>
</div>
<div id="main_content">
    <?php require_once TEMPLATE_DIR . 'common/header.php'; ?>
    <div class="page">
        <div class="container">
            <?php echo $template_content; ?>
        </div>
    </div>
    <?php require_once TEMPLATE_DIR . 'common/footer.php'; ?>
</div>
<?php require_once TEMPLATE_DIR . 'common/foot.php'; ?>
</body>
</html>
