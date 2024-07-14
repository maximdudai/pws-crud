<form action="index.php?c=greenhouse&a=update&id=<?= $id ?>" method="POST">

  <label for="designacao">Name</label>
  <input type="text" name="designacao" id="designacao"
    value="<?= $greenhouse->designacao; ?>"
  >

  <br>

  <label for="areatotal">Area Total</label>
  <input type="text" name="areatotal" id="areatotal"
    value="<?= $greenhouse->areatotal; ?>"
  >
  <input type="submit" value="Edit">
</form>