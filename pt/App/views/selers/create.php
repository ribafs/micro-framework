<div class="container">
    <h2 class="text-center">Seler</h2>
    <div>
        <br>
        <form action="<?php echo URL; ?>seler/create" method="POST">   
        <table class="table table-hover table-stripped">
            <tr><td><label>Name</label></td>
            <td><input class="form-control" type="text" name="name" value="" required /></td></tr>
            <td><label>Price</label></td>
            <td><input class="form-control" type="text" name="price" required /></td></tr>
            <tr><td></td><td><input type="submit" name="submit_create_seler" value="Create Seler" class="btn btn-primary btn-sm"/></td></tr>
		</table>
        </form>
    </div>
</div>
