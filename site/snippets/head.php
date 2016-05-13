<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <?php if($page->isHomePage()): ?>
        <title><?php echo html($site->title() .' - '. $site->author()) ?></title>
    <?php else: ?>
        <title><?php echo html($page->title() . ' | ' . $site->title() .' - '. $site->author()) ?></title>
    <?php endif ?>

    <meta name="description" content="<?php echo $site->description() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>">

    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,400italic,700,700italic&subset=greek,latin' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic&subset=greek,latin' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo url('assets/css/global.css') ?>">

</head>
