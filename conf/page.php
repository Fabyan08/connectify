<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'index':
            include 'pages/dashboard.php';
            break;
        case 'translate':
            include 'pages/translate.php';
            break;
        case 'chat':
            include 'pages/chat.php';
            break;
        case 'profil':
            include 'pages/profile.php';
            break;
        case 'jurnal':
            include 'pages/jurnal.php';
            break;
    }
} else {
    include "pages/dashboardd.php";
}
