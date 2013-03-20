<div id="main">
    <div class="full_w">
        <div class="context">
            <div class="h_title">Users</a></div>
            <form method="post" action="<?php echo URL; ?>user/create">
                <label>Login</label><input type="text" name="login" /><br />
                <label>Password</label><input type="text" name="password"/><br />
                <label>Role</label>
                <select name="role" id="role">
                    <option value="default">Default</option>
                    <option value="admin">Admin</option>
                </select><br />
                <label>&nbsp;</label><input type="submit"/>
            </form>
            <hr />
            <table>
                <?php
                foreach ($this->userList as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $value['id'] . '</td>';
                    echo '<td>' . $value['login'] . '</td>';
                    echo '<td>' . $value['role'] . '</td>';
                    echo '<td><a href="' . URL . 'user/edit/' . $value['id'] . '">Edit</a>&nbsp;<a href="' . URL . 'user/delete/' . $value['id'] . '">Delete</a></td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>