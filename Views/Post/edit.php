<h1>Edit post</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php echo $post->name;?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>