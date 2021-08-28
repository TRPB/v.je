<!DOCTYPE html>
<html>
	<head>
		<title>v.je server is running</title>
		<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="vje.css"/>
	</head>
	<body>

	<main>
		<article>
		<section>
		<div>
		<h2>v.je server is running</h2>

		<p>If you are seeing this page, you can now write files to the <code>websites/default/public</code> directory and they will be accessible.</p>
		</div>

	</section>
	<section>

		<div>
		<h2>Getting started</h2>
		<p>Try the following:</p>

		<ol>
			<li>Create a new file <code>websites/default/public/test.html</code></li>
			<li>Paste in the following code:

			<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;My Web Page&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		Hello World!
	&lt;/body&gt;
&lt;/html&gt;
</code>
			</pre></li>

			<li>Navigate to <a href="https://<?=
$_SERVER['HTTP_HOST']; ?>/test.html">https://<?= $_SERVER['HTTP_HOST'];
?>/test.html</a> and you should see your web page</li>


		</ol>
	</div>
</section>

<section>
	<div>
<h2>Features</h2>
<ol>
    <li>97.5mb box download size</li>
    <li>All hosted websites use HTTPS with a <strong>valid SSL certificate</strong> from Let's Encrypt</li>
    <li>No configuration needed. Run vagrant up and your website is hosted on <a href="https://v.je">https://v.je/</a></li>
    <li>Without configuration host different websites on v.je subdomains e.g. <a href="https://subdomain1.v.je">https://subdomain1.v.je/</a> and  <a href="https://subdomain2.v.je">https://subdomain2.v.je/</a></li>
    <li>No provisioning: Box boots up fast</li>
    <li>Includes up to date PHP development software*:
        <ul>
            <li>PHP</li>
            <li>NGINX</li>
            <li>MariaDB</li>
            <li>Composer</li>
            <li>PHPUnit</li>
        </ul>
    </li>
    <li>Portability: You can run <code class="inline">vagrant halt</code> on one machine, then <code class="inline">vagrant up</code> on another and your website will be visible. The database is automatically imported and exported. Most boxes store the database inside the VM. If you move your files to a different PC the database is lost. That's not the case with this box.</li>
    <li>URL rewriting is already set up. A request to any file that does not exist is sent to index.php</li>
</ol>

<p><em>The box is updated with the latest versions every few months. It includes the most recent supported version of PHP and other software, at the time of writing PHP 7.2</em></p>

	</div>

</section>

<section>
	<div>
    <h2>MySQL</h2>

    <p>Connect to MySQL from inside or outside the VM with the details:</p>

    <ul>
        <li>Host: <strong>mysql</strong></li>
        <li>Port: <strong>3306</strong></li>
        <li>Username: <strong>v.je</strong></li>
        <li>Password: <strong>v.je</strong></li>
    </ul>

    <p>This MySQL user has full access to create schemas and other users. It is recommended to use MySQL Workbench from outside the VM to manage your database</p>
	</div>
</section>
<section>
	<div>
		<h2>Additional information</h2>

		<p>Complete background information and documentation for this virtual machine can be found here: <a href="https://r.je/vje-minimal-virtual-server.html">https://r.je/vje-minimal-virtual-server.html</a></p>
	</div>

</section>
</article>
	</main>
</body>
</html>
