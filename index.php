<?php
session_start();
//print_r($_SESSION['old']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="card col-lg-4 mx-auto my-4">
        <div class="card-header">
            <h3>Add Post</h3>
        </div>
        <div class="card-body">
            <form action="./controller/storePost.php" method="POST">
                <input value=" <?php isset($_SESSION['old']['title']) ? $_SESSION['old']['title'] : " " ?> " name="title" class="form-control my-3" type="" placeholder="Enter your email">
                <?php
                if (isset($_SESSION['form_error']['title_error'])) { ?>

                    <span class="text-danger"><?= $_SESSION['form_error']['title_error'] ?></span>
                <?php
                }
                ?>

                <textarea class="form-control my-3" name="detail" placeholder="Enter details">
                <?php
                isset($_SESSION['old']['detail']) ? $_SESSION['old']['detail'] : " "
                ?>
                </textarea>
                <?php
                if (isset($_SESSION['form_error']['detail_error'])) {
                ?>

                    <span class="text-danger"><?= $_SESSION['form_error']['detail_error'] ?></span>
                <?php
                }
                ?>
                <input value=" <?php isset($_SESSION['old']['author']) ? $_SESSION['old']['author'] : " " ?> " name="author" class="form-control my-3" type="text" placeholder="Enter your name">
                <?php
                if (isset($_SESSION['form_error']['author_error'])) { ?>

                    <span class="text-danger"><?= $_SESSION['form_error']['author_error'] ?></span>
                <?php
                }
                ?>
                <button class="btn btn-primary position-block">Submit your post</button>
            </form>
        </div>
    </div>
</body>

</html>

<?php
session_unset();
?>