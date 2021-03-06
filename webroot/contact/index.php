<?php
	$page = 'contact';
    $title = 'Contact';
	include($_SERVER['DOCUMENT_ROOT'] . '/../inc/header.php');
?>

<h1>Need help?</h1>

<p>Feel free to ask questions on our <a href="https://gitter.im/evernote-serge/general">Gitter channel</a> or <a href="https://webchat.freenode.net/?nick=web-guest-...&amp;channels=serge&amp;prompt=1&amp;uio=MTE9MzE28">#serge IRC channel on Freenode</a>.</p>

<h1>Found a Bug?</h1>

<p>Please file an issue <a href="https://github.com/evernote/serge/issues?state=open">on Github</a>.</p>

<h1>Want to Contribute?</h1>

<p>Clone <a href="https://github.com/evernote/serge">our Github repo</a>, create a new branch (one branch per bugfix or feature) and push your changes there, then create a pull request. Note that it makes sense to first open an issue on Github and discuss bugs and enhancements prior to making a pull request. This will make sure that your changes are something we want to see in the mainstream branch and understand what they are about.</p>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/../inc/footer.php') ?>
