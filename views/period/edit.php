<form action="index.php?c=period&a=update&id=<?= $id ?>" method="POST">

  <label for="designacao">Name</label>
  <input type="text" name="designacao" id="designacao"
    value="<?= $period->designacao; ?>"
  >
  <br>

  <input type="submit" value="Edit">
</form>