<!-- Search form -->
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <form action="<?=URL?>seler/search" method="get" >
            <div class="pull-right topo">
                <span class="pull-right">  
                    <label class="control-label" for="palavra" style="padding-right: 5px;">
                        <input type="text" value="" placeholder="name" class="form-control" name="keyword">
                    </label>
                </span>          
                <input type="submit" name="submit_search_seler" value="Search" class="btn btn-primary"/> 
            </div>
        </form>
    </div>
</div>
<br>

<div class="container">
	<a class="btn btn-primary btn-sm mt-3" href="<?=URL . 'seler/create'; ?>">Add Seler</a>
    <div>
        <br>        
        <table class="table table-hover table-stripped">
            <thead>
            <tr class="bg-gray">
                <td><strong>ID</strong></td>
                <td><strong>Name</strong></td>
                <td><strong>Price</strong></td>
                <td colspan="2"><strong>Actions</strong></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($fetchAll as $seler) { ?>
                <tr>
                    <td><?php if (isset($seler->id)) echo htmlspecialchars($seler->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($seler->name)) echo htmlspecialchars($seler->name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($seler->price)) echo htmlspecialchars($seler->price, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?=URL . 'seler/edit/' . htmlspecialchars($seler->id, ENT_QUOTES, 'UTF-8')?>">Edit</a></td>
                    <td><a onclick="return confirm('Really delete ?')" href="<?=URL . 'seler/delete/' . htmlspecialchars($seler->id, ENT_QUOTES, 'UTF-8')?>">Delete</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
