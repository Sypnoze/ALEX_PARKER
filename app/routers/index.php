<?php

// ROUTE PRINCIPAL

// ROUTE D'AJOUT D'UN POST: affichage du formulaire
// 		PATTERN: /posts/add/form.html
// 		CTRL: ???
// 		ACTION: ???
// 		TITLE: Alex Parker - Add a post
if (isset($_GET['form'])) :

	include_once '../app/controllers/pagesController.php';
	\App\Controllers\PagesController\formAction($conn, ['form']);


// ROUTE DU DETAIL D'UN POST
// 		PATTERN: /posts/id/slug-du-post.html
// 		URL: ???
// 		CTRL: postsController
// 		ACTION: showAction
// 		TITLE: Alex Parker - Title du post
elseif (isset($_GET['id'])):
	include_once '../app/controllers/pagesController.php';
	\App\Controllers\PagesController\showAction($conn, $_GET['id']);

// ROUTE PAR DEFAUT: liste des posts
// 	PATTERN: /
// 	CTRL: pagesController
// 	ACTION: indexAction
// 	TITLE: Alex Parker - Blog
else :
	include_once '../app/controllers/pagesController.php';
	\App\Controllers\PagesController\indexAction($conn);
endif;
	

	// ROUTE D'AJOUT D'UN POST: affichage du formulaire
	// 		PATTERN: /posts/add/form.html
	// 		CTRL: ???
	// 		ACTION: ???
	// 		TITLE: Alex Parker - Add a post

	// ROUTE D'AJOUT D'UN POST: INSERT
	// 		PATTERN: /posts/add/insert.html
	// 		CTRL: ???
	// 		ACTION: ???
	// 		PAS DE TITLE CAR REDIRECTION VERS LA PAGE D'ACCUEIL

	// ROUTE DE MODIFICATION D'UN POST: Affichage du formulaire
	// 		PATTERN: /posts/id/slug-du-post/edit/form.html
	// 		CTRL: ???
	// 		ACTION: ???
	// 		TITLE: Alex Parker - Edit a post

	// ROUTE DE MODIFICATION D'UN POST: UPDATE
	// 		PATTERN: /posts/id/slug-du-post/edit/update.html
	// 		CTRL: ???
	// 		ACTION: ???
	// 		PAS DE TITLE CAR REDIRECTION VERS LA PAGE DE DETAILS DU POST

	// ROUTE DE SUPPRESSION D'UN POST:
	// 		PATTERN: /posts/id/slug-du-post/delete.html
	// 		CTRL: ???
	// 		ACTION: ???
	// 		PAS DE TITLE CAR REDIRECTION VERS LA PAGE D'ACCUEIL