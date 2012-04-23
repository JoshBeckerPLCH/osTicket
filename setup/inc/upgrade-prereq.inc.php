<?php
if(!defined('SETUPINC')) die('Kwaheri!');

?>
    <div id="main">
            <h1>osTicket Upgrade!</h1>
            <font color="red"><b><?php echo $errors['err']; ?></b></font>
            <div id="intro">
             <p>Thank you for being a loyal osTicket user!</p>
             <p>The upgrade wizard will guide you every step of the way in the upgrade process. While we try to ensure that the upgrade process is straightforward and painless, we can't guarantee it will be the case for every user.</p>
            </div>
            <h2>Getting ready!</h2>
            <p>Before we begin, we'll check your server configuration to make sure you meet the minimum requirements to run the latest version of osTicket.</p>
            <h3>Prerequisites: <font color="red"><?php echo $errors['prereq']; ?></font></h3>
            These items are necessary in order to use osTicket the latest version of osTicket.
            <ul class="progress">
                <li class="<? echo $upgrader->check_php()?'yes':'no'; ?>">
                PHP v4.3 or greater - (<small><b><?php echo PHP_VERSION; ?></b></small>)</li>
                <li class="<? echo $upgrader->check_mysql()?'yes':'no'; ?>">
                MySQL v4.4 or greater - (<small><b><?php echo extension_loaded('mysql')?'module loaded':'missing!'; ?></b></small>)</li>
            </ul>
            <h3>Higly Recommended:</h3>
            We hightly recommend that you follow the steps below.
            <ul>
                <li>Take osTicket offline momentarily during upgrade.</li>
                <li>Backup the current database, if you haven't done so already.</li>
                <li>Be patient the upgrade process will take a couple of seconds.</li>
            </ul>
            <div id="bar">
                <form method="post" action="upgrade.php" id="prereq">
                    <input type="hidden" name="s" value="prereq">
                    <input class="btn"  type="submit" name="submit" value="Start Upgrade Now &raquo;">
                </form>
            </div>
    </div>
    <div id="sidebar">
            <h3>Upgrade Tips</h3>
            <p>1. Remember to backup your osTicket database</p>
            <p>2. Take osTicket offline momentarily</p>
            <p>3. If you experience any problems, you can always restore your files/dabase backup.</p>
            <p>4. We can help, feel free to <a href="http://osticket.com/support/" target="_blank">contact us </a> for professional help.</p>

    </div>

    <div id="overlay"></div>
    <div id="loading">
        <h4>Doing stuff!</h4>
        Please wait... while we upgrade your osTicket installation!
        <div id="udb"></div>
    </div>
