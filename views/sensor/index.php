<table class="table tablestriped">
  <thead>
    <th>
      <h3>Id</h3>
    </th>
    <th>
      <h3>num serie</h3>
    </th>
    <th>
      <h3>Name</h3>
    </th>
    <th>
      <h3>temp media</h3>
    </th>
    <th>
      <h3>User Actions</h3>
    </th>
  </thead>
  <tbody>
      <?php foreach ($greenhouses -> sensors as $sensor) { ?>
        <tr>
          <td><?= htmlspecialchars($sensor->id); ?></td>
          <td><?= htmlspecialchars($sensor->numserie); ?></td>
          <td><?= htmlspecialchars($sensor->designacao); ?></td>
          <td><?= htmlspecialchars($sensor -> tempmedia); ?></td>
          <td>
            <a href="index.php?c=reading&a=index&id=<?= htmlspecialchars($sensor->id); ?>" class="btn btn-info" role="button">Valores</a>
            <a href="index.php?c=sensor&a=delete&id=<?= htmlspecialchars($sensor->id); ?>" class="btn btn-warning" role="button">Delete</a>
          </td>
        </tr>
      <?php } ?>
  </tbody>
</table>

<h3>Create a new sensor</h3>
<p>
  <a href="index.php?c=sensor&a=create&id=<?= $_GET['id'] ?>" class="btn btn-info" role="button">New</a>
</p>