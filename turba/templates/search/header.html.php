<div class="text" style="padding:1em">
<form name="directory_search" action="search.php" method="get" onsubmit="RedBox.loading(); return true;">
<?= Horde_Util::formInput() ?>
<? if ($this->uniqueSource): ?>
<input type="hidden" id="turbaSearchSource" name="source" value="<?= $this->uniqueSource ?>" />
<? endif; ?>
