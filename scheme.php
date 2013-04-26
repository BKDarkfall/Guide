<?php
include_once 'common.php';
/* <?php echo $lang['rawr'];
 ?>
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>BattleKnight Game Guide</title>
    <link rel="stylesheet" href="style/style.css" media="all" />
    <link rel="stylesheet" href="style/print.css" media="print" />
    <link rel="stylesheet" href="style/mobile.css" media="handheld" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="script/script.js"></script>
    <script src="script/autoadvance.js"></script>
  </head>

  <body>
    <header>
      <img src="img/logo.png" alt="Logo" id="logo" />
      <!--
      <aside>
      * lang nav needs some rework, to be more stylish *
      <a href="index.php?lang=en"><img src="img/flags/en.png" /></a>
      <a href="index.php?lang=sk"><img src="img/flags/sk.png" /></a>
      </aside>
      -->
    </header>

    <article>
      <nav>
        <ul>
          <li>
            <a href="#">Nav1</a>
          </li>
          <li>
            <a href="#">Nav2</a>
          </li>
        </ul>
      </nav>
      <section>
        <p></p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </section>
    </article>
    <footer>
      <section id="legal">
        <p class="floatleft">
          <h3>Gameforge</h3>
          <a href="http://en.gameforge.com/home/index/">Gameforge</a>
          <br />
          <a href="http://corporate.gameforge.com/">Gameforge Corporate</a>
        </p>

        <p class="floatleft">
          <h3>Legal</h3>
          <a href="http://agb.gameforge.de/index.php?lang=en&art=impressum&special=&&f_text=ffcc66&f_text_hover=ffffff&f_text_h=8e8e8e&f_text_hr=ffffff&f_text_hrbg=ffcc66&f_text_hrborder=26324c&f_text_font=verdana%2C+arial%2C+helvetica%2C+sans-serif&f_bg=000000">Imprint</a>
          <br />
          <a href="http://agb.gameforge.de/index.php?lang=en&art=tac&special=&&f_text=ffcc66&f_text_hover=ffffff&f_text_h=8e8e8e&f_text_hr=ffffff&f_text_hrbg=ffcc66&f_text_hrborder=26324c&f_text_font=verdana%2C+arial%2C+helvetica%2C+sans-serif&f_bg=000000">Terms and Conditions</a>
        </p>

        <p class="floatleft">
          <h3>Follow Battleknight</h3>
          <a href="https://www.facebook.com/BattleKnight">Be a BK fan on Facebook</a>
          <br />
          <a href="http://blog.battleknight.de/">Battleknight Dev Blog</a>
        </p>

        <div class="clear"></div>
      </section>

      <section id="credits">

      </section>

      <!-- Piwik -->
      <script type="text/javascript">
							var pkBaseURL=(("https:"==document.location.protocol)?"https://analytics.pwn.sk/":"http://analytics.pwn.sk/");
							document.write(unescape("%3Cscript src='"+pkBaseURL+"piwik.js' type='text/javascript'%3E%3C/script%3E"));
      </script>
      <script type="text/javascript">
							try {
							var piwikTracker=Piwik.getTracker(pkBaseURL+"piwik.php",10);
							piwikTracker.trackPageView();
							piwikTracker.enableLinkTracking();
							} catch( err ) {
							}
      </script>
      <noscript>
        <p>
          <img src="http://analytics.pwn.sk/piwik.php?idsite=10" style="border:0" alt="" />
        </p>
      </noscript>
      <!-- End Piwik Tracking Code -->
    </footer>
  </body>

</html>