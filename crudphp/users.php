<h1>Users List</h1>
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Birth Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['birth_date'] . '</td>';
                echo '<td>
                    <button class="btn btn-sm btn-primary" onclick="location.href=\'?route=edit_user&id=' . $row['id'] . '\'">Edit</button>
                    <button class="btn btn-sm btn-danger" onclick="if(confirm(\'Are you sure you want to delete this user?\')) { location.href=\'?route=delete_user&id=' . $row['id'] . '\'; } else { return false; }">Delete</button>
                </td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>