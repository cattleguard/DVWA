<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Vulnerability: Unserialize Object Injection' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'object_injection';
$page[ 'help_button' ]   = 'object_injection';
$page[ 'source_button' ] = 'object_injection';

dvwaDatabaseConnect();

$vulnerabilityFile = 'low.php';

require_once DVWA_WEB_PAGE_TO_ROOT . "vulnerabilities/unserialize/source/{$vulnerabilityFile}";

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Vulnerability: Object Injection via unserialize()</h1>

	<div class=\"vulnerable_code_area\">
		<h2>Contact Info</h2>

		<form name=\"cerealeyes\" action=\"#\" method=\"post\">
			<p>
				<table width=\"550\">
					<tr>
						<td width=\"100\">First Name:</td>
						<td width=\"100\"><input type=\"text\" name=\"FName\" size=\"30\"></td>
					</tr>
					<tr>
						<td width=\"100\">Last Name:</td>
						<td width=\"100\"><input type=\"text\" name=\"LName\" size=\"30\"></td>
					</tr>
					<tr>
						<td width=\"100\">Phone Number:</td>
						<td width=\"100\"><input type=\"text\" name=\"Phone\" size=\"30\"></td>
					</tr>
				<input type=\"submit\" name=\"Submit\" value=\"Submit\">
				</table>
			</p>\n";

if( $vulnerabilityFile == 'impossible.php' )
	$page[ 'body' ] .= "			" . tokenField();

$page[ 'body' ] .= "
		</form>
		<table width=\"500\">
			{$html}
		</table>
	</div>

	<h2>More Information</h2>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://www.insomniasec.com/downloads/publications/Practical%20PHP%20Object%20Injection.pdf' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://www.alertlogic.com/blog/writing-exploits-for-exotic-bug-classes-unserialize()' ) . "</li>
	</ul>
</div>\n";

dvwaHtmlEcho( $page );

?>
