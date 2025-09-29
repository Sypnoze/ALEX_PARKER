<?php

use App\Controllers\PagesController;

include '..app/controllers/pagesController.php';
switch ($_GET['form']):
    case 'edit':
        ////

        break;
    case 'add':
        ///
        break;
    case 'delete':
        break;
    default:
        \App\Controllers\PagesController\formAction($conn, ['form']);
        break;
endswitch;
