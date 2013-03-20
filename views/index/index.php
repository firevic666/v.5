<?php foreach ($this->homeList as $key => $value) { ?>
    <div id="page-<?= $value['pagina']; ?>">

        <div class="header">
            <div class="content_wrapper">
                <div class="grid_1">
                    <h1 class="page_title"><?= $value['pagina']; ?></h1>
                    <div class="page_title_subhead">Integer molestie sodales libero. Integer consectetur congue facilisis.</div>
                </div>
            </div>
        </div> <!-- End of .header -->  
        <div class="content">
            <div class="content_wrapper">
                <?= $value['text']; ?>							
            </div>
        </div>
            <?php
        }
        ?>

        <?php /*
          foreach ($this->homeList as $key => $value) {
          echo '<tr>';
          echo '<td>' . $value['id'] . '</td>';
          echo '<td>' . $value['titel'] . '</td>';
          echo '<td>' . $value['text'] . '</td>';
          echo '<td>' . $value['pagina'] . '</td>';
          echo '<td><a href="' . URL . 'dashboard/edit/' . $value['id'] . '">Edit</a>&nbsp;<a href="' . URL . 'dashboard/delete/' . $value['id'] . '">Delete</a></td>';
          echo '</tr>';
          }
         */ ?>
