<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header id="main_title">
      <div class="container d-flex justify-content-between align-items-center">
        <a href="index.php" class="brand" aria-label="Home">
          <span class="brand-icon"><i class="bi bi-check-all" aria-hidden="true"></i></span>
          Task Management System
        </a>
        <span class="header-date d-none d-md-inline"><?php echo date('l, j F Y'); ?></span>
      </div>
    </header>
    <main class="container py-4">
