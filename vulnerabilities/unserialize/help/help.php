<div class="body_padded">
	<h1>Help - PHP Object Injection</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>
			Object Injection is a server-side vulnerability class in which an attacker is 
			able to instantiate an object of their choosing.  
		</p>
		<p>
			PHP Object Injection can occur when an application makes use of the unserialize()
			 method to load user controlled serialized objects.  This can have a variety of
			 effects including PHP code execution.
		</p>
		<p>
		<h4>Prerequisites</h4>
			<ul>
				<li>The attack class being leveraged must already exist within the codebase.</li>
				<li>The class must contain one of the "magic methods".</li>
			</ul>
		</p>
		<h3>Objective</h3>
		<p>
			Obtain code execution using the file_put_contents() method of the DangerZone class.
		</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/PHP_Object_Injection' ); ?></p>
	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://www.insomniasec.com/downloads/publications/Practical%20PHP%20Object%20Injection.pdf' ); ?></p>
</div>
