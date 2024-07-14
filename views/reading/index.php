<table class="table tablestriped">
  <thead>
    <th>
      <h3>valor</h3>
    </th>
    <th>
      <h3>sensor</h3>
    </th>
    <th>
      <h3>period</h3>
    </th>
    <th>
      <h3>User Actions</h3>
    </th>
  </thead>
  <tbody>
      <?php foreach ($sensors -> readings as $reading) { ?>
        <tr>
          <td><?= htmlspecialchars($reading->valor); ?></td>
          <td><?= htmlspecialchars($reading->sensor->designacao); ?></td>
          <td><?= htmlspecialchars($reading->period->designacao); ?></td>
          <td>
            <a href="index.php?c=reading&a=delete&id=<?= htmlspecialchars($reading->id); ?>" class="btn btn-warning" role="button">Delete</a>
          </td>
        </tr>
      <?php } ?>
  </tbody>
</table>

<h3>Create new value</h3>
<p>
  <a href="index.php?c=reading&a=create&id=<?= $_GET['id'] ?>" class="btn btn-info" role="button">New</a>
</p>