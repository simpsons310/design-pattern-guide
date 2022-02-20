<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
</head>
<body>
    <h1>Create Data</h1>
    <hr>
    <div style="display: flex;">
        <a href="/run.php/">Home</a>
        <div style="width: 10px;"></div>
        <a href="/run.php/list">List</a>
    </div>
    <hr>
    <form action="/run.php/<?php echo $mode ?>" method="POST">
        <p>Name: </p>
        <input type="text" name="name" value="<?php echo $name ?>">
        <p>Age: </p>
        <input type="text" name="age" value="<?php echo $age ?>">
        <p>Phone: </p>
        <input type="text" name="phone" value="<?php echo $phone ?>">
        <br>
        <br>
        <?php
        if ($mode == 'create') {
            echo "<input type='submit' name='create'>";
        } else {
            echo "<input type='hidden' name='id' value='$id'>\n
            <input type='submit' name='update'>";
        }
        ?>
    </form>
</body>
</html>