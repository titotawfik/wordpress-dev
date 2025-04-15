# WordPress-dev Container for Codespace
wordpress-dev is WordPress deveopment env for codespace for VS-code and Node.js.

# Configure config.php 
In order to get WP up and runing inside a dev container, you need to add the following lines, right before /* That's all, stop editing! Happy publishing. */ 
in your config.php file before installation 
<pre> 
<code> 
define('WP_HOME', 'https:// your github generated url goes here');
define('WP_SITEURL', 'https:// your github generated url goes here');
</code>
</pre>
<pre> 
<code> 
// Force HTTPS and correct host in all contexts
$_SERVER['HTTP_HOST'] = 'https:// your github generated url goes here';
$_SERVER['HTTPS'] = 'on';
</code>
</pre>
<pre>
<code>
// Avoid FTP credential prompt in plugin/theme installation
define('FS_METHOD', 'direct');
</code>
</pre>

## Why These Changes Were Made in the Config File

I tried generating a dynamic environment URL using the CODESPACE_NAME variable, but WordPress didn’t work with it — it kept defaulting to localhost:8080.
I explored a few different approaches, but none of them worked.
Eventually, I had to apply the fix mentioned above to successfully install WordPress inside the container with all URLs functioning correctly.

This is something I’ll need to revisit and investigate further with this setup.