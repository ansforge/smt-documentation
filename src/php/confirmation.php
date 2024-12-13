<?php
  ob_start();
?>
<!DOCTYPE html>
<html lang="fr" class="no-js sg" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Confirmation d'envoi de Demande - Design System ANS</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.typekit.net/jjx2ksb.css">
  <link rel="stylesheet" href="../style/style-ans.css" type="text/css">
  <link rel="stylesheet" href="../style/print.css" type="text/css" media="print">
  <link rel="stylesheet" href="../style/styleguide.css" type="text/css" />
</head>

<body>
  <noscript>
    <p class="js-off">Javascript est désactivé dans votre navigateur.</p>
  </noscript>

  <nav role="navigation" aria-label="Accès rapides">
    <ul class="nav-skip">
      <li><a href="#main">Aller au contenu</a></li>
      <li><a href="#SGmenuPrincipalMobile">Aller à la navigation</a></li>
    </ul>
  </nav>
  <div class="body-wrapper layout-navLeft">
    <header class="header sg-header-principal" role="banner">
      <div class="sg-header-principal--left">
        <div class="sg-header-principal__logo">
          <div class="logos">
            <div class="logo logo--0">
              <a href="https://solidarites-sante.gouv.fr/">
                <img src="../img/logo-ministere.svg" alt="Ministère de la Santé et de la Prévention" width="107"
                  height="62">
              </a>
            </div>
            <div class="logo logo--1">
              <a href="index.html">
                <img src="../img/logo-ANS.svg" alt="Accueil Design System ANS" width="166" height="50">
              </a>
            </div>
          </div>
        </div>
        <div class="sg-header-principal__nav">
          <nav class="navbar navbar-expand-lg navbar-light" role="navigation" aria-label="Menu principal mobile"
            tabindex="-1" id="SGmenuPrincipalMobileTarget">
            <button class="navbar-toggler btn--plain btn--primary" type="button" data-toggle="collapse"
              data-target="#SGmenuPrincipalMobile" aria-controls="SGmenuPrincipalMobile" aria-expanded="false">
              <svg class="svg-icon svg-menu" aria-hidden="true" focusable="false">
                <use xlink:href="../svg-icons/icon-sprite.svg#menu"></use>
              </svg>
              <span class="navbar-toggler--text sr-only">Menu</span>
            </button>

            <div class="navbar-collapse collapse sg-navbar-collapse" id="SGmenuPrincipalMobile">
              <button class="navbar-toggler-close sg-navbar-toggler-close btn-close" type="button"
                data-toggle="collapse" data-target="#SGmenuPrincipalMobile" aria-controls="SGmenuPrincipalMobile"
                aria-expanded="false">
                <svg class="svg-icon svg-close" aria-hidden="true" focusable="false">
                  <use xlink:href="../svg-icons/icon-sprite.svg#close"></use>
                </svg>
                <span class="sr-only">Fermer le menu</span>
              </button>

              <ul class="navbar-nav nav-lvl--1">
                <li class="nav-item common-nav-item">
                  <button class="nav-link" type="button" data-toggle="collapse"
                    data-target="#sg-nav-collapse-submenu--0" aria-controls="sg-nav-collapse-submenu--0"
                    aria-expanded="false">Pour commencer<svg class="svg-icon svg-angle-down" aria-hidden="true"
                      focusable="false">
                      <use xlink:href="../svg-icons/icon-sprite.svg#angle-down"></use>
                    </svg>
                  </button>

                  <div class="collapse nav-collapse" id="sg-nav-collapse-submenu--0">
                    <div class="nav-collapse-inner">

                      <ul class="navbar-nav nav-lvl--2">
                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-start.html">Comment utiliser le DS</a>
                        </li>
                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-kit-designers.html">Pour les designers</a>
                        </li>
                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-kit-developers.html">Pour les développeurs</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>

                <li class="nav-item common-nav-item">
                  <button class="nav-link" type="button" data-toggle="collapse"
                    data-target="#sg-nav-collapse-submenu--1" aria-controls="sg-nav-collapse-submenu--1"
                    aria-expanded="false">Guide de style<svg class="svg-icon svg-angle-down" aria-hidden="true"
                      focusable="false">
                      <use xlink:href="../svg-icons/icon-sprite.svg#angle-down"></use>
                    </svg>
                  </button>

                  <div class="collapse nav-collapse" id="sg-nav-collapse-submenu--1">
                    <div class="nav-collapse-inner">
                      <ul class="navbar-nav nav-lvl--2">

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-identite-visuelle.html">Identité visuelle</a>
                        </li>
                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-logo.html">Logotype</a>
                        </li>
                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-grid.html">Grilles</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <button class="nav-link" type="button" data-toggle="collapse"
                            data-target="#sg-nav-collapse-submenu-2-3" aria-controls="sg-nav-collapse-submenu-2-3"
                            aria-expanded="false">Couleurs<svg class="svg-icon svg-angle-down" aria-hidden="true"
                              focusable="false">
                              <use xlink:href="../svg-icons/icon-sprite.svg#angle-down"></use>
                            </svg>
                          </button>
                          <div class="collapse nav-collapse" id="sg-nav-collapse-submenu-2-3">
                            <div class="nav-collapse-inner">
                              <ul class="navbar-nav nav-lvl--3">
                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-colors.html">Palette de couleurs</a>
                                </li>
                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-use-colors.html">Utilisations</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </li>

                        <li class="nav-item common-nav-item">
                          <button class="nav-link" type="button" data-toggle="collapse"
                            data-target="#sg-nav-collapse-submenu-2-4" aria-controls="sg-nav-collapse-submenu-2-4"
                            aria-expanded="false">Typographie<svg class="svg-icon svg-angle-down" aria-hidden="true"
                              focusable="false">
                              <use xlink:href="../svg-icons/icon-sprite.svg#angle-down"></use>
                            </svg>
                          </button>

                          <div class="collapse nav-collapse" id="sg-nav-collapse-submenu-2-4">
                            <div class="nav-collapse-inner">

                              <ul class="navbar-nav nav-lvl--3">
                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-typography.html">Typographie</a>
                                </li>
                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-typography-use.html">Usages</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-icons.html">Pictogrammes</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="nav-item common-nav-item">

                  <button class="nav-link" type="button" data-toggle="collapse"
                    data-target="#sg-nav-collapse-submenu--2" aria-controls="sg-nav-collapse-submenu--2"
                    aria-expanded="false">Composants<svg class="svg-icon svg-angle-down" aria-hidden="true"
                      focusable="false">
                      <use xlink:href="../svg-icons/icon-sprite.svg#angle-down"></use>
                    </svg>
                  </button>

                  <div class="collapse nav-collapse" id="sg-nav-collapse-submenu--2">
                    <div class="nav-collapse-inner">

                      <ul class="navbar-nav nav-lvl--2">
                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-skiplinks.html">Liens d'accès rapide</a>
                        </li>
                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-buttons.html">Boutons</a>
                        </li>
                        <li class="nav-item common-nav-item">

                          <button class="nav-link" type="button" data-toggle="collapse"
                            data-target="#sg-nav-collapse-submenu-3-2" aria-controls="sg-nav-collapse-submenu-3-2"
                            aria-expanded="false">Formulaire<svg class="svg-icon svg-angle-down" aria-hidden="true"
                              focusable="false">
                              <use xlink:href="../svg-icons/icon-sprite.svg#angle-down"></use>
                            </svg>
                          </button>

                          <div class="collapse nav-collapse" id="sg-nav-collapse-submenu-3-2">
                            <div class="nav-collapse-inner">

                              <ul class="navbar-nav nav-lvl--3">
                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-form-input.html">Champs de saisie</a>
                                </li>

                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-form-textarea.html">Zone de texte</a>
                                </li>
                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-form-select.html">Liste déroulante</a>
                                </li>

                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-form-check.html">Case à cocher et radio</a>
                                </li>

                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-form-group-champs.html">Groupe de champs</a>
                                </li>

                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-stepper.html">Stepper</a>
                                </li>

                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-form-button-add.html">Bouton d'ajout</a>
                                </li>

                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-form-recap.html">Bloc récapitulatif</a>
                                </li>
                                <li class="nav-item common-nav-item">

                                  <a class="nav-link" href="sg-c-form-search.html">Champs de recherche</a>
                                </li>

                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-form-use.html">Usages</a>
                                </li>
                                <li class="nav-item common-nav-item">
                                  <a class="nav-link" href="sg-c-form-access.html">Accessibilité</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-lists.html">Listes</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-links.html">Liens</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-table.html">Tableau</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-header.html">En-tête</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-footer.html">Pied de page</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-pagination.html">Pagination</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-messages.html">Messages de statut</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-messages-cta.html">Messages avec CTA</a>
                        </li>
                        
                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-progress-bar.html">Barre de progression</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-widget-access.html">Widget d'accessibilité</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-tooltip.html">Infobulle</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-modal.html">Modale</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-accordeon.html">Accordéon</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-breadcrumb.html">Fil d'ariane</a>
                        </li>

                        <li class="nav-item common-nav-item">
                          <a class="nav-link" href="sg-c-tabs.html">Onglets</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>

                <li class="nav-item common-nav-item">
                  <a class="nav-link" href="sg-utilities.html">Class utilitaires</a>
                </li>

                <li class="nav-item common-nav-item">
                  <a class="nav-link" href="sg-support.html">Support</a>
                </li>

                <li class="nav-item common-nav-item">
                  <a class="nav-link" href="sg-versions.html">Versions</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <main class="main" role="main" id="main" tabindex="-1">

      <div class="sg-container-content">
        <div class="o-sg-block-title">
          <h1><?= $send_result['title'] ?></h1>
          <p><?= $send_result['message'] ?></p>
        </div>

        <div>
          <div class="form-box">
            <h2 class="form-box__title">Rappel de votre demande</h2>

            <div class="form-recap">
              <div class="form-recap-content">
                <p><span class="entitled">Type de demande : </span><?= $request['type'] ?></p>
                <p><span class="entitled">Nom : </span><?= $request['lastname'] ?></p>
                <p><span class="entitled">Prénom : </span><?= $request['firstname'] ?></p>
                <p><span class="entitled">Adresse email : </span><?= $request['email'] ?></p>
                <p><span class="entitled">Direction : </span><?= $request['board'] ?></p>
                <p><span class="entitled">Objet : </span><?= $request['subject'] ?></p>
                <p><span class="entitled">Message : </span><br><?= nl2br($request['message']) ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <!-- / body-wrapper -->
  <script type="text/javascript" src="../script/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="../script/vendor.js"></script>
  <script type="text/javascript" src="../script/app.js"></script>
  <script type="text/javascript" src="../script/prism.js"></script>
  <script type="text/javascript" src="../script/styleguide.min.js"></script>
</body>

</html>

<?php
  ob_end_flush();
?>