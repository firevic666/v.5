<div id="main">
    <div class="full_w">
        <div class="context">
            <div class="h_title">User: Edit</a></div>
            <form method="post" action="<?php echo URL; ?>user/editSave/<?php echo $this->user['id']; ?>">
                <label>Login</label><input type="text" name="login" value="<?php echo $this->user['login']; ?>" /><br />
                <label>Password</label><input type="text" name="password" /><br />
                <label>Role</label>
                <select name="role">
                    <option value="default" <?php if ($this->user['role'] == 'default') echo 'selected'; ?>>Default</option>
                    <option value="admin" <?php if ($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                    <option value="owner" <?php if ($this->user['role'] == 'owner') echo 'selected'; ?>>Owner</option>
                </select><br />
                <label>&nbsp;</label><input type="submit" />
            </form>
        </div>
    </div>
</div>