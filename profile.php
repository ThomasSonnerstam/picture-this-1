<?php

require __DIR__ . '/views/header.php';
if (!isset($_SESSION['user'])){
    redirect('/');
};
?>

<div class="profileName">
    <h1><?php echo $_SESSION['user']['username'] ?></h1>
    <a href="/settings.php" class="navLinks" ><?xml version="1.0" encoding="utf-8"?>
    <!-- Generator: Adobe Illustrator 24.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;" xml:space="preserve">
    <g>
    	<path class="st0" d="M219.5,396.5c0,0,5-31,19-46l-38-74c0,0-6-13,0-20c0,0,28-46,75-76c0,0,12-4,20,0l73,38c0,0,9-9,49-20l25-80
    		c0,0,2-11,17-14c0,0,49-8,97-1c0,0,15,4,19,14l27,80c0,0,39,13,48,20l73-37c0,0,8-4,22,0c0,0,56,39,74,76c0,0,4,13,0,19l-38,73
    		c0,0,19,33,19,48l81,27c0,0,14,4,15,21c0,0,6,44,0,92c0,0-5,19-15,20l-81,26c0,0-4,25-19,47l38,75c0,0,4,10,0,19c0,0-16,36-72,73
    		c0,0-7,6-23,3l-74-39c0,0-15,14-48,20l-26,81c0,0-4,12-18,14c0,0-54,11-100,0c0,0-12-6-15-14s-25-79-25-79s-33-8-49-22l-72,38
    		c0,0-12,6-22,0c0,0-29-9-75-75c0,0-5-9,1-18l37-74c0,0-16-23-19-49l-82-26c0,0-12-6-14-18c0,0-8-42,0-94c0,0,0-12,15-20
    		L219.5,396.5z"/>
    	<path class="st0 st1" d="M315.5,490.25c0,0,0-183.76,195-195.75c0,0,181-3.99,195,195.75c0,0-1,183.76-196,194.75
    		C509.5,685,327.5,684,315.5,490.25z"/>
    </g>
    </svg></a>
</div>
<div class="profileInfo">
    <img src="<?php echo $_SESSION['user']['avatar'] ?>" alt="">
    <h4><?php echo $_SESSION['user']['username'] ?></h4>
</div>
<div class="profileBio">
    <?php if ($_SESSION['user']['bio'] === ""){ ?>
        <p>You can change your bio in settings</p>
    <?php }else { ?>
        <p><?php echo nl2br($_SESSION['user']['bio']) ?></p>
    <?php } ?>
</div>


<?php

require __DIR__ . '/views/footer.php';

?>