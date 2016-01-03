<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
# Looks for current Google account session
$user = UserService::getCurrentUser();
$username = "";
if ($user) {
  $username = 'Hello, ' . htmlspecialchars($user->getNickname());
}
else {
  header('Location: ' . UserService::createLoginURL($_SERVER['REQUEST_URI']));
}

// display main welcome page
echo '<!DOCTYPE html>';
echo '<html lang=en>';
echo '<meta charset=utf-8>';
echo "<head><title>RealCode - Coding Collaboration | Isreal Consulting (Proprietary)</title>";

echo "<!--[if lt IE 9]>
<script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'>
</script>
<![endif]-->";

echo "<link rel='stylesheet' type='text/css' href='stylesheet-main.css'>";
echo '</head>';
echo '<body>';

echo '<header>';
echo '  <h1>RealCode - Coding Collaboration | Isreal Consulting (Proprietary)</h1>
</header>';

echo "<nav>
<ul>
  <li><a href='main.php'>Home</a></li>
  <li><a href='#'>Login</a></li>
  <li><a href='README.md'>Readme</a></li>
</ul>
</nav>";

echo '<section>';

echo "<h1>NOTICE</h1>

<article>
<h2>Private & Proprietary Sytem</h2>
<p>This system is private and owned by Isreal Consulting. Unauthorized access is prohibited.  Violators will be prosecuted.</p>
</article>";
echo "Welcome, " . $username;


echo "<article>
<h2>For Support</h2>
<p>Visit the Isreal Consulting Support site:<br />
<a href='http://cs.isrealconsulting.com'>support.isrealconsulting.com</a></p>";
echo '</article>';

echo '</section>';

echo "<footer>
<p>&copy; 2016 Isreal Consulting, LLC. All rights reserved.</p>
</footer>";

echo '</body>';
echo '</html>';

// Login routines

// Logout routines

// Session end, terminate instance, cleanup