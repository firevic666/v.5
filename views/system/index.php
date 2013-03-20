<?php foreach ($this->pageList as $key => $value) { ?>
    <form method="post" action="<?php echo URL; ?>systeem/editSave/<?= $value['id']; ?>"> 
        <input value="<?= $value['id']; ?>" type="text" name="id"> 
        <table>
            <tr>
                <th>
                    Font Colormanagement
                </th>
            </tr>
            <tr>
                <td>
                    <h1>Heading 1</h1>
                </td>
                <td>
                    <input class="minicolors" data-control="wheel" type="text" name="heading1" value="<?= $value['heading1']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Heading 2</h2>
                </td>
                <td>
                    <input class="minicolors" data-control="wheel" type="text" name="heading2" value="<?= $value['heading2']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Heading 3</h3>
                </td>
                <td>
                    <input class="minicolors" data-control="wheel" type="text" name="heading3" value="<?= $value['heading3']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Heading 4</h4>
                </td>
                <td>
                    <input class="minicolors" data-control="wheel" type="text" name="heading4" value="<?= $value['heading4']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>Heading 5</h5>
                </td>
                <td>
                    <input class="minicolors" data-control="wheel" type="text" name="heading5" value="<?= $value['heading5']; ?>">
                </td>
            </tr>
        </table>
        <input type="submit" />
    </form>
<?php } ?>