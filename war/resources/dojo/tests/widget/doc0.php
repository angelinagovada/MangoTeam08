<!-- for those of us running php, this will take a few seconds to load, thus testing remote loading delays -->
<? sleep(3); ?>
<script>
 	dojo.require("dojo.widget.ComboBox");
 	dojo.require("dojo.widget.Button");
</script>
<h1>Document 0</h1>
This document has <a href="http://www.dojotoolkit.org/">a link</a>.<br />
(to check we're copying children around properly).<br />
Also it's got a widget, a combo box:<br>
<select dojoType="combobox">
	<option value="1">foo</option>
	<option value="2">bar</option>
	<option value="3">baz</option>
</select>
And a button too:
<button dojoType="Button">hello!</button>
Here's some text that comes AFTER the button.