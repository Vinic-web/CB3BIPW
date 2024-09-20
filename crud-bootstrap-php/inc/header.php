<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>CRUD com Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo BASEURL; ?>css/awesome/all.min.css"
    />
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css" />
    <style>
      body {
        padding-top: 70px; /* Ajustar o espaçamento da navbar */
        padding-bottom: 20px;
      }
      .navbar {
        background-color: #26355D; /* Cor da sua paleta */
      }
      .navbar .nav-link {
        color: #fff; /* Cor do texto no menu */
        font-weight: bold;
      }
      .navbar .nav-link:hover {
        color: #FF8F00; /* Cor de hover */
      }
      .dropdown-menu a {
        color: #26355D; /* Cor para o dropdown */
      }
      .dropdown-menu a:hover {
        background-color: #AF47D2; /* Cor de fundo ao passar o mouse */
        color: #fff;
      }
    </style>
  </head>
  <body>
    <!-- Início do Menu -->
    <nav class="navbar navbar-expand-xl fixed-top navbar-dark">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../../crud-bootstrap-php/index.php">Início</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fa-solid fa-user"></i> Clientes
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="<?php echo BASEURL; ?>customers">
                    <i class="fa-solid fa-user-gear"></i> Gerenciar Clientes
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">
                    <i class="fa-solid fa-user-plus"></i> Novo Cliente
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" />
            <button class="btn btn-outline-warning" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>