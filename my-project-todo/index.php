<?
  include('modules/components/connected.php');
  include('modules/components/delete.php');
  include('modules/pages/popup.php');
  include('modules/pages/header.php');
?>
  <div class="container mt-4">
    <div class="todo-title text-center p-2 mb-2 bg-info text-white">todo</div>
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalCenter">
      Новая запись
    </button>
    <ul class="list-group">
      <?
        $activeLink = null;
        $activeText = null;

        while($items = mysqli_fetch_assoc($query)) {
            if($items['success'] === 'false') {
                $activeLink = 'btn-success';
                $activeText = 'Завершить';
            }
            if($items['success'] === 'true'){
                $activeLink = 'btn-secondary disabled';
                $activeText = 'Выполнена';
            }
          ?>
            <li class="list-group-item position-relative d-flex flex-column mb-2">
              <span><b>Задача: </b><?=$items['text']?></span>
              <span><b>Описание: </b><?=$items['description']?></span>
              <span><b>Дата: </b><?=$items['date']?></span>
              <div class="tools mt-2">
                <?
                    if($items['success'] === 'false') {
                        ?>
                            <a class="btn btn-primary text-white p-1 col-sm-3" href="/">
                                Редактировать
                            </a>
                        <?
                    } else {
                        ?>
                            <a class="btn <?=$activeLink?> text-white p-1 col-sm-3" href="/">
                                Редактировать
                            </a>
                        <?
                    }
                ?>
                <a class="btn p-1 col-sm-3 <?=$activeLink?>" href="/">
                  <?=$activeText?>
                </a>
                <?
                    if($items['success'] === 'true') {
                        ?>
                            <a class="btn btn-danger p-1 col-sm-3" href="?del=<?=$items['id']?>">
                                Удалить
                            </a>
                        <?
                    }
                ?>
              </div>
            </li>
          <?
        }
      ?>
    </ul>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>