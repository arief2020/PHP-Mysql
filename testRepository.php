<?php

use Model\Comment;
use Repository\CommentRepositoryImpl;

require_once __DIR__ . '/getConection.php';
require_once __DIR__ . '/model/Comment.php';
require_once __DIR__ . '/repository/CommentRepository.php';

$connection = getConection();
$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email: "repository@gmail.com", comment: "Hi");
// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// $comment = $repository->findById(22);
// var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);

$connection = null;