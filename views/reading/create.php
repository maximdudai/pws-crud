<form action="index.php?c=reading&a=store" method="POST">

  <label for="valor">Valor</label>
  <input type="text" name="valor" id="valor">

  <br>

  <label for="period_id">Period:</label>
  <select name="period_id" id="period_id">
    <option value="0" disabled>Select..</option>
    <?php foreach($periods as $period) { ?>

      <option value="<?= $period->id ?>"><?= $period -> designacao; ?></option>

    <?php } ?>
  </select>
 
  <br>

  <input type="hidden" name="sensor_id" value="<?= $_GET['id'] ?>">

  <input type="submit" value="Create">
</form>