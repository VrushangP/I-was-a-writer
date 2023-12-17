<?php
  function generateNav($pageType, $optional = NULL) {
    if ($pageType === 'index') {
      $indexPrefix = '';
      $pagesPrefix = '';
      $imagePrefix = 'img/';
      $scriptPrefix = "js/scripts.js";
      $stylePrefix = 'css/';
      $projectPrefix = 'projects/';
      $coopPrefix = 'co-op/';
    } else if ($pageType === 'projects' || $pageType === 'co-op') {
      $indexPrefix = '../';
      $pagesPrefix = '../';
      $imagePrefix = '../img/';
      $scriptPrefix = "../js/scripts.js";
      $stylePrefix = '../css/';
      $projectPrefix = '../projects/';
      $coopPrefix = '../co-op/';
      if ($optional === 'snak') {
        $scriptPrefix = '../js/snake.js';
      } else {
        $scriptPrefix = '../js/scripts.js';
      }
    } else {
      $indexPrefix = '../../../';
      $pagesPrefix = '../../';
      $scriptPrefix = '../../';
      $imagePrefix = '';
      $stylePrefix = '';
      $projectPrefix = '';
    }
    try {
      $header = sprintf('<!DOCTYPE html>
      <html lang="en" class="has-background-primary-light"></html>
      <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

      <meta content=\'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\' name=\'viewport\' />
      <meta name="viewport" content="width=device-width" />
      <link rel="stylesheet" href="%sbulma.css">
      <link rel="stylesheet" href="%scustom.css">
      <link rel="stylesheet" href="%sspinners.css">
      <link rel="stylesheet" href="%stawian-frontend.css">
      <link rel="icon" href="%sfavicon.ico">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="%s" defer type="module"></script>

      </head> 
      <div class="columns is-flex-direction-column is-fullheight-100vh">
      <div class="has-background-white-ter">
        <nav class="navbar container is-spaced has-background-white-ter" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <a href="%sindex" class="navbar-item"">
              <img src="%sfavicon.ico" width="55" height="55">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div>

          <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">
              <a href="%sblog" class="navbar-item is-hoverable has-text-primary has-text-weight-semibold is-size-4">
                Blog
              </a>
              <a href="%saboutme" class="navbar-item is-hoverable has-text-primary has-text-weight-semibold is-size-4">
                About Me
              </a>

              <div class="navbar-item has-dropdown is-hoverable has-text-primary has-text-weight-semibold is-size-4">
                <a href="%sexperience" class="navbar-link has-text-primary">
                  Co-op
                </a>
                <div class="navbar-dropdown">
                  <a href="%scooperators" class="navbar-item">
                    Snake
                  </a>
                  <a href="%stekside" class="navbar-item">
                    Voltorb Flip
                  </a>
                </div>
              </div>
              
              <div class="navbar-item has-dropdown is-hoverable has-text-primary has-text-weight-semibold is-size-4">
                <a class="navbar-link has-text-primary">
                  Projects
                </a>

                <div class="navbar-dropdown">
                  <a href="%ssnake" class="navbar-item">
                    Snake
                  </a>
                  <a href="%svoltorbFlip" class="navbar-item">
                    Voltorb Flip
                  </a>
                  <a href="%syomaSlayers" class="navbar-item">
                    Yoma Slayer
                  </a>
                  <a href="%smanager" class="navbar-item">
                    Course Manager
                  </a>
                  <hr class="navbar-divider">
                  <a href="%sgithub" class="navbar-item">
                    Github
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>',$stylePrefix, $stylePrefix, $stylePrefix, $stylePrefix, $imagePrefix, $scriptPrefix, $indexPrefix, $imagePrefix, $pagesPrefix, $pagesPrefix, $pagesPrefix, $coopPrefix, $coopPrefix, $projectPrefix, $projectPrefix, $projectPrefix, $projectPrefix, $projectPrefix);
      return $header;
    } catch (Exception  $e) {
      // Handle a specific exception type
      echo "header failed to load:" . $e->getMessage();
    }
  };
?>