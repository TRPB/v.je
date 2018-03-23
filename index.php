<!DOCTYPE html>
<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="vje.css"/>
	</head>
	<body>

	<main>
		<h2>v.je server is running</h2>

		<p>If you are seeing this page, you can now write files to the <code>websites/default/public</code> directory and they will be accessible.</p>

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

			<li>Navigate to <a href="http://<?=
$_SERVER['HTTP_HOST']; ?>/test.html">http://<?= $_SERVER['HTTP_HOST'];
?>/test.html</a> and you should see your web page</li>


		</ol>

	</main>
</body>
</html>
