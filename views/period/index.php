<table class="table tablestriped">
  <thead>
    <th>
      <h3>Id</h3>
    </th>
    <th>
      <h3>Name</h3>
    </th>
    <th>
      <h3>User Actions</h3>
    </th>
  </thead>
  <tbody>
      <?php foreach ($periods as $period) { ?>
        <tr>
          <td><?= htmlspecialchars($period->id); ?></td>
          <td><?= htmlspecialchars($period->designacao); ?></td>
          <td>
            <a href="index.php?c=period&a=edit&id=<?= htmlspecialchars($period->id); ?>" class="btn btn-info" role="button">Edit</a>
            <a href="index.php?c=period&a=delete&id=<?= htmlspecialchars($period->id); ?>" class="btn btn-warning" role="button">Delete</a>
          </td>
        </tr>
      <?php } ?>
  </tbody>
</table>

<h3>Create a new period</h3>
<p>
  <a href="index.php?c=period&a=create" class="btn btn-info" role="button">New</a>
</p>