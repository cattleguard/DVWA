<div class="body_padded">
	<h1>Help - PHP Object Injection</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>
			PHP Object Injection is a server-side vulnerability class in which an attacker is 
			able to arbitrarily instantiate an object of a type (class) previously loaded by the application.  
			This can result in code execution, file overwrite, etc.
		</p>
		<p>
			This occurs by way of using the unserialize() method to load an user controlled serialized object.
			I know what you're thinking.  So I can create an object, how does that get me code execution?  Well,
			PHP classes have a set of "magic methods".
		</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/PHP_Object_Injection' ); ?></p>
	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://www.insomniasec.com/downloads/publications/Practical%20PHP%20Object%20Injection.pdf' ); ?></p>
</div>
