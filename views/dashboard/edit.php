<div id="main">
    <div class="full_w">
        <div class="context">
            <div class="h_title">Page: Edit</a></div>
            <form method="post" action="<?php echo URL; ?>dashboard/editSave/<?php echo $this->page['id']; ?>">
                <label>Titel</label><input type="text" name="titel" value="<?php echo $this->page['titel']; ?>" /><br />
                <label>Text</label><textarea type="text" name="text" cols="120" rows="30" ><?php echo $this->page['text']; ?></textarea><br />
                <label>Pagina</label>
                <select name="pagina">
                    <option value="home" <?php if ($this->page['pagina'] == 'home') echo 'selected'; ?>>Home</option>
                    <option value="over mij" <?php if ($this->page['pagina'] == 'over mij') echo 'selected'; ?>>Over Mij</option>
                    <option value="portfolio" <?php if ($this->page['pagina'] == 'portfolio') echo 'selected'; ?>>Portfolio</option>
                    <option value="contact" <?php if ($this->page['pagina'] == 'contact') echo 'selected'; ?>>Contact</option>
                </select><br />
                <label>&nbsp;</label><input type="submit" />
            </form>
        </div>
    </div>
</div>