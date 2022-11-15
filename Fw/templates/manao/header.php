<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->pager->showHead(); ?>
    <title><?php $this->pager->showProperty('title'); ?></title>
</head>

<body>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="Fw/templates/manao/images/logo.svg" alt="logo">
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link">News</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contacts</a></li>
      </ul>
    </header>
    <h1 class="display-1 mb-5"><?php $this->pager->showProperty('head');?></h1>