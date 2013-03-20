<div id="main">
    <div class="full_w">
        <div class="context">
            <div class="h_title">Page: Insert</a></div>
            <form method="post" action="<?php echo URL; ?>dashboard/create/">
                <label>Titel</label><input type="text" name="titel" /><br />
                <label>Text</label><textarea type="text" name="text" cols="120" rows="30"></textarea><br />
                <label>Pagina</label>
                <select name="pagina">
                    <option value="home">Home</option>
                    <option value="over mij">Over Mij</option>
                    <option value="portfolio">Portfolio</option>
                    <option value="contact">Contact</option>
                </select><br />
                <label>&nbsp;</label><input type="submit" />
            </form>
        </div>
    </div>
</div>