<div id="main">
    <div class="full_w">
        <div class="context">
            <div class="h_title">Dashboard</a></div>
            <table>
                <?php
                foreach ($this->pageList as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $value['id'] . '</td>';
                    echo '<td>' . $value['titel'] . '</td>';
                    echo '<td>' . $value['text'] . '</td>';
                    echo '<td>' . $value['pagina'] . '</td>';
                    echo '<td><a href="' . URL . 'dashboard/edit/' . $value['id'] . '">Edit</a>&nbsp;<a href="' . URL . 'dashboard/delete/' . $value['id'] . '">Delete</a></td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>