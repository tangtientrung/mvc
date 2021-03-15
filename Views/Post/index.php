<h1>Post</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/MVC/post/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new post</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($post as $post)
        {
            echo '<tr>';
            echo "<td>" . $post->id . "</td>";
            echo "<td>" . $post->name . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC/post/edit/" . $post->id . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/MVC/post/delete/" . $post->id . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>