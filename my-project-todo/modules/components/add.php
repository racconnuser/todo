<?
    header('refresh: 3; url=http://my-project-todo/');

    include './connected.php';
    include '../pages/header.php';

    $sql = mysqli_query($db, "INSERT INTO `todo` (`id`, `text`, `description`, `date`, `success`) 
                        VALUES (NULL, '{$_POST['text']}', '{$_POST['description']}', '{$_POST['date']}', '{$_POST['success']}')");

    if ($sql) {
        echo '
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Запись успешно созданна!</strong>
            </div>
        ';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($db) . '</p>';
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Произошла ошибка: . mysqli_error($db)</strong>
            </div>
        ';
    }
?>