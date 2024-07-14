<form action="index.php?c=sensor&a=store" method="POST">

  <label for="numserie">Num serie</label>
  <input type="text" name="numserie" id="numserie">

  <br>

  <label for="designacao">Designacao</label>
  <input type="text" name="designacao" id="designacao">

  <br>

  <input type="hidden" name="tempmedia" value="0">
  <input type="hidden" name="greenhouse_id" value="<?= $id ?>">

  <input type="submit" value="Create">
</form>