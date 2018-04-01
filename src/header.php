<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Celebrate
 * @since Celebrate 1.0
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>da Vinci Learning</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">

    <?php wp_head(); ?>

  </head>
  <body>

<section id="navbar" class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="/">da Vinci Learning</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <div class="nav-bar" /><div class="nav-bar" /><div class="nav-bar" />
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://www.davincilearninginstitute.com/for-educators.html">For Educators</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.davincilearninginstitute.com/for-parents.html">For Parents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.davincilearninginstitute.com/contact.html">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.davincilearninginstitute.com/davincilearning-blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.davincilearninginstitute.com/about-us.html">About</a>
        </li>
      </ul>
    </div>
  </nav>
</section>
