  <table class = "pure-table pure-table-bordered">
    <thead>
      <tr>
        <th>User ID</th>
        <th>Username</th>
        <th>Role</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user) { ?>
      <tr>
        <td><?=$user['id'];?></td>
        <td><?=$user['user'];?></td>
        <td><?=$user['role'];?></td>
        <td class="actions">
          <a href="/admin/users/edit/<?=$user['id'];?>"><i class="icon-pencil"></i> Edit</a>
          <a href="/admin/users/destroy/<?=$user['id'];?>" class="last"><i class="icon-remove"></i>
            Delete</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>