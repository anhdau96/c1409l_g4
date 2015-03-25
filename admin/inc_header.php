

<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8">
        <title><?php echo $title_map[$path] ?></title>
        <link href="<?php base_url("admin/css/admin.css") ?>" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <h1>Xin chào, <?php echo ($_SESSION["username"]) ?></h1>
                <a href="process/admin?do=logout">Đăng xuất</a>
            </div>

            <div id="body">
                <div id="left-bar">
                    <h1>left</h1>
                </div>

                <div id="main">