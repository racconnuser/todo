<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Создание записи</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/modules/components/add.php" method="POST">
                    <div class="form-group">
                        <input name="text" type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Название задачи" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input name="description" type="text" class="form-control" id="exampleInputDescriptiont1" aria-describedby="descriptionHelp" placeholder="Описание" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input name="date" type="text" class="form-control" id="exampleInputDate1" aria-describedby="dateHelp" placeholder="Дата" required autocomplete="off">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Статус</label>
                        </div>
                        <select name="success" class="custom-select" id="inputGroupSelect01">
                            <option selected value="false">false</option>
                            <option value="true">true</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Создать</button>
                </form>
            </div>
        </div>
    </div>
</div>
