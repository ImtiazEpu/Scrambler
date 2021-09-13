<?php

include_once "header.php"?>
	<div class="container">
		<div class="row">
			<div class="column column-60 column-offset-20">
				<h2>Data Scrambler</h2>
				<p>Use this application to scramble your data</p>
				<p>
					<a href="/scrambler.php?task=encode">Encode</a> |
					<a href="/scrambler.php?task=decode">Decode</a> |
					<a href="/scrambler.php?task=key">Generate Key</a>

				</p>
			</div>
		</div>
		<div class="row">
			<div class="column column-60 column-offset-20">
				<form method="POST" action="scrambler.php">
					<label for="key">Key</label>
					<input type="text" name="key" id="key">
					<label for="data">Data</label>
					<textarea name="data" id="data"></textarea>
					<label for="result">Result</label>
					<textarea id="result"></textarea>
					<button type='submit'>Do It For Me</button>
				</form>
			</div>
		</div>
	</div>
<?php
require_once "footer.php"
?>