<table class="table tablestriped">
  <thead>
    <th>
      <h3>Id</h3>
    </th>
    <th>
      <h3>numserie</h3>
    </th>
    <th>
      <h3>designacao</h3>
    </th>
    <th>
      <h3>tempmedia</h3>
    </th>
    <th>
      <h3>User Actions</h3>
    </th>
  </thead>
  <tbody>
    <?php foreach ($sensors as $sensor) { ?>
      <tr>
        <td><?= $sensor->id ?></td>
        <td><?= $sensor->numserie ?></td>
        <td><?= $sensor->designacao ?></td>
        <td><?= $sensor->tempmedia ?></td>
        <td>
          <a href="index.php?c=sensor&a=delete&id=<?= $sensor->id ?>" class="btn btn-warning" role="button">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>