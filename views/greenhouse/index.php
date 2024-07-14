<table class="table tablestriped">
  <thead>
    <th>
      <h3>Id</h3>
    </th>
    <th>
      <h3>Name</h3>
    </th>
    <th>
      <h3>Area Total</h3>
    </th>
    </th>
    <th>
      <h3>Sensors</h3>
    </th>
    <th>
      <h3>User Actions</h3>
    </th>
  </thead>
  <tbody>
    <?php if (!empty($greenhouses)) { ?>
      <?php foreach ($greenhouses as $greenhouse) { ?>
        <tr>
          <td><?= htmlspecialchars($greenhouse->id); ?></td>
          <td><?= htmlspecialchars($greenhouse->designacao); ?></td>
          <td><?= htmlspecialchars($greenhouse->areatotal); ?></td>
          </td>
          <td>
            <a href="index.php?c=sensor&a=index&id=<?= htmlspecialchars($greenhouse->id); ?>" class="btn btn-info" role="button">Lista</a>
          </td>
          <td>
            <a href="index.php?c=greenhouse&a=edit&id=<?= htmlspecialchars($greenhouse->id); ?>" class="btn btn-info" role="button">Edit</a>
            <a href="index.php?c=greenhouse&a=delete&id=<?= htmlspecialchars($greenhouse->id); ?>" class="btn btn-warning" role="button">Delete</a>
        </tr>
      <?php } ?>
    <?php } ?>
  </tbody>
</table>

<h3>Create a new greenhouse</h3>
<p>
  <a href="index.php?c=greenhouse&a=create" class="btn btn-info" role="button">New</a>
</p>