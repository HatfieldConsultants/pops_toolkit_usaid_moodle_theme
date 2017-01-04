<?php
  // This file is part of Moodle - http://moodle.org/
  //
  // Moodle is free software: you can redistribute it and/or modify
  // it under the terms of the GNU General Public License as published by
  // the Free Software Foundation, either version 3 of the License, or
  // (at your option) any later version.
  //
  // Moodle is distributed in the hope that it will be useful,
  // but WITHOUT ANY WARRANTY; without even the implied warranty of
  // MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  // GNU General Public License for more details.
  //
  // You should have received a copy of the GNU General Public License
  // along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
  /**
  * Moodle's USAID theme, an example of how to make a Bootstrap theme
  *
  * DO NOT MODIFY THIS THEME!
  * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
  *
  * For full information about creating Moodle themes, see:
  * http://docs.moodle.org/dev/Themes_2.0
  *
  * @package   theme_usaid
  * @copyright 2013 Moodle, moodle.org
  * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
  */
  // Get the HTML for the settings bits.
  $html = theme_usaid_get_html_for_settings($OUTPUT, $PAGE);
  // Set default (LTR) layout mark-up for a three column page.
  $regionmainbox = 'span9 desktop-first-column';
  $regionmain = 'span8 pull-right';
  $sidepre = 'span4 desktop-first-column';
  $sidepost = 'span3 pull-right';
  // Reset layout mark-up for RTL languages.
  if (right_to_left()) {
    $regionmainbox = 'span9 pull-right';
    $regionmain = 'span8';
    $sidepre = 'span4 pull-right';
    $sidepost = 'span3 desktop-first-column';
  }
  echo $OUTPUT->doctype() 
?>

<html <?php echo $OUTPUT->htmlattributes(); ?>>
  <head>
    <?php echo $OUTPUT->standard_head_html() ?>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link rel="stylesheet" type="text/css" href="/application/themes/usaid/css/bootstrap-modified.css">
    <link href="/application/files/cache/css/usaid/main.css?ts=1483554223" rel="stylesheet" type="text/css" media="all">
    <link href="/concrete/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="/concrete/js/jquery.js"></script>
    <!--[if lt IE 9]><script type="text/javascript" src="/concrete/js/ie/html5-shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script type="text/javascript" src="/concrete/js/ie/respond.js"></script><![endif]-->
    <link href="/concrete/css/account.css" rel="stylesheet" type="text/css" media="all">
    <link href="/concrete/css/app.css" rel="stylesheet" type="text/css" media="all">
    <link href="/concrete/css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
    <link href="/concrete/blocks/autonav/templates/responsive_header_navigation/view.css" rel="stylesheet" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body { padding-top: 0 }
      ul { margin: 0; }
      .navbar .container { width: 1170px; }
    </style>
  </head>
  <body <?php echo $OUTPUT->body_attributes(); ?>>
    <div class="ccm-page page-template-full">
      <header>
        <div class="container">
          <div class="col-xs-6">
            <a href="/" class="">
              <img src="/application/themes/usaid/images/logo.png" width="200px" style="margin-bottom: 15px;">
            </a>
          </div>
          <div class="col-xs-6 text-right usaid-logo">
            <a href="https://www.usaid.gov">
              <img src="https://www.usaid.gov/sites/all/themes/usaid/logo.png" alt="U.S. Agency for International Development">
            </a>
          </div>
        </div>
        <div class="navbar">
          <div class="container">
            <nav class="ccm-responsive-navigation original">
            <ul>
              <li class="">
              <a href="http://localhost/index.php/about-pops" target="_self" class="">
                About POPs
              </a>
              </li>
              <li class="">
              <a href="http://localhost/index.php/prioritization" target="_self" class="">
                Screening and Prioritization
              </a>
              </li>
              <li class="">
              <a href="http://localhost/index.php/sampling" target="_self" class="">
                Project Planning
              </a>
              <ul>
                <li class="">
                <a href="http://localhost/index.php/sampling/problem-statement" target="_self" class="">
                  Problem Statement
                </a>
                </li>
                <li class="">
                <a href="http://localhost/index.php/sampling/identify-preliminary-receptorspathwayschemicals-concern" target="_self" class="">
                  Identify Preliminary Receptors/Pathways/Chemicals of Concern
                </a>
                </li>
                <li class="">
                <a href="http://localhost/index.php/sampling/develop-initial-conceptual-site-model" target="_self" class="">
                  Develop Initial Conceptual Site Model
                </a>
                </li>
                <li class="">
                <a href="http://localhost/index.php/sampling/study-goals" target="_self" class="">
                  Study Goals
                </a>
                </li>
              </ul>
              </li>
              <li class="">
              <a href="http://localhost/index.php/risk" target="_self" class="">
                Risk Management
              </a>
              <ul>
                <li class="">
                <a href="http://localhost/index.php/risk/establish-goals" target="_self" class="">
                  Establish Goals
                </a>
                </li>
                <li class="">
                <a href="http://localhost/index.php/risk/identify-and-screen-technologies" target="_self" class="">
                  Identify and Screen Technologies
                </a>
                </li>
                <li class="">
                <a href="http://localhost/index.php/risk/develop-and-evaluate-alternatives" target="_self" class="">
                  Develop and Evaluate Alternatives
                </a>
                </li>
                <li class="">
                <a href="http://localhost/index.php/risk/select-alternatives" target="_self" class="">
                  Select Alternatives
                </a>
                </li>
                <li class="">
                <a href="http://localhost/index.php/risk/design-and-implement" target="_self" class="">
                  Design and Implement
                </a>
                </li>
              </ul>
              </li>
              <li class="">
              <a href="http://localhost/index.php/collect-data-implement-pp" target="_self" class="">
                Collect Data
              </a>
              </li>
              <li class="">
              <a href="http://localhost/index.php/data-validation-and-usability" target="_self" class="">
                Data Validation and Usability
              </a>
              </li>
            </ul>
            </nav>
            <div class="ccm-responsive-menu-launch">
              <i>
              </i>
            </div>
          </div>
        </div>
      </header>
      <div id="page" class="container-fluid">
        <div id="page-content" class="row-fluid">
          <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
          <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
              <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
              <section id="region-main" class="<?php echo $regionmain; ?>">
                <?php
                  echo $OUTPUT->course_content_header();
                  echo $OUTPUT->main_content();
                  echo $OUTPUT->course_content_footer();
                ?>
              </section>
            </div>
          </div>
        </div>
      </div>
      <footer id="footer-theme">
        <div class="col-md-12 footerbar">
          <div class="container">
            <div class="row">
              <p>
              <a href="http://localhost/index.php/%21trash/faq">
                FAQ / Help
              </a>
              | 
              <a href="http://localhost/index.php/prioritization">
                Case Studies
              </a>
              | 
              <a href="http://localhost/index.php/%21trash/blog">
                Blog
              </a>
              | 
              <a href="http://localhost/index.php">
                Another&nbsp;Link
              </a>
              </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 footerlinks">
              <div class="container">
                <div class="row">
                  <p>
                  <small>
                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="#">Accessibility</a>
                  </small>
                  </p>
                  <small>
                    The information provided on this website is not official U.S. government information and does not represent the views or positions of the U.S. Agency for International Development or the U.S. Government.
                  </small>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <script id="__bs_script__">
        //<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.5'><\/script>".replace("HOST", location.hostname));
          //]]>
    </script>
  </body>
</html>
