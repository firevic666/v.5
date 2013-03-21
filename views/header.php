<?php /*<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>MVC v.5</title>
        <?php if (isset($this->css)): ?>
            <?php foreach ($this->css as $css){ ?>
                <link rel="stylesheet" type="text/css" href="<?= URL ?>public/css/style.css" media="screen" />
                <link rel="stylesheet" type="text/css" href="<?= URL ?>public/css/navi.css" media="screen" />
            <?php }
            else: ?>
                  <link href="<?= URL ?>public/css/default.css" rel="stylesheet" type="text/css">
           <?php endif;?> 
        <link href="http://code.jquery.com/ui/1.9.1/themes/sunny/jquery-ui.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>         
        <?php if (isset($this->js)): ?>
            <?php foreach ($this->js as $js) { ?>
                <script type="text/javascript" src="<?= URL . 'views/' . $js ?>"></script>   
            <?php } ?>   
        <?php endif; ?>

    </head>
    <body> */ ?>
       <?php Session::init(); ?>
        <?php if (Session::get('loggedIn') == true):
            ?>
                <link rel="stylesheet" type="text/css" href="<?= URL ?>public/css2/style.css" media="screen" />
                <link rel="stylesheet" type="text/css" href="<?= URL ?>public/css2/navi.css" media="screen" />
                
                <?php
           require 'admin-header.php'; 
        else:
            require 'user-header.php'; 
        endif;
            ?>