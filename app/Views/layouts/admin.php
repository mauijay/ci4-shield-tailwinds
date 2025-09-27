<!--
  ___   ___   ___    ____            _                     
 ( _ ) / _ \ ( _ )  |    \ _   _ ___(_)_ __   ___  ___ ___ 
 / _ \| | | |/ _ \  | (_)// | | / __| | '_ \ / _ \/ __/ __|
| (_) | |_| | (_) | | (_) \ |_| \__ \ | | | |  __/\__ \__ \
 \___/ \___/ \___/  |_____/\__,_|___/_|_| |_|\___||___/___/
                                                           
 __       _       _   _                 
/ _\ ___ | |_   _| |_(_) ___  _ __  ___ 
\ \ / _ \| | | | | __| |/ _ \| '_ \/ __|
_\ \ (_) | | |_| | |_| | (_) | | | \__ \
\__/\___/|_|\__,_|\__|_|\___/|_| |_|___/ 
    
808biz - helping local business grow in Hawaii, 
Visit https://808.biz for Marketing Ideas in Hawaii.
808BusinessSolutions - helping local business grow your online presence through web design, social media and advertising.
Visit https://808businesssolutions.com for your web development and success.  
POWERED BY Jay Lamping for 808.biz -v<?= CodeIgniter\CodeIgniter::CI_VERSION ?> | <?=date("m-d-Y H:i:s") ?>, Last Update Sept 25, 2025 
<?= $title ?? 'Private work for 808biz, Inc' ?> | jaycadla@gmail.com -->

<!DOCTYPE html>
<html lang="en-US" data-theme="light">  
  <?= $this->include('partials/back/_head') ?>
  <body class="relative min-h-screen flex flex-col bg-slate-200">
    <!--  Navbar  -->
    <?= $this->include('partials/back/_navbar') ?>    
    <!--  Page Header and Content  -->
    <?= $this->renderSection('content') ?>
    <?= $this->include('partials/back/_footer') ?>    
    <?= $this->renderSection('modals') ?>
    <?= $this->include('partials/back/_js') ?>
    <?= $this->renderSection('pageScripts') ?>
    <?= $this->include('partials/back/_notifications.php') ?>    
  </body>
</html>

