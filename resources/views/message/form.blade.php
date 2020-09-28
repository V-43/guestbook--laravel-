<div v-if="saved" class="info alert alert-info">
    Запись успешно сохранена!
</div>
<div id="form">
    <form action="" method="POST">
        {{ @csrf_field() }}
        <p><input class="form-control" placeholder="Ваше имя" name="author" required maxlength="256"></p>
        <p><textarea class="form-control" placeholder="Ваш отзыв" name="note" required minlength="5"></textarea></p>
        <p><input type="submit" class="btn btn-info btn-block" value="Сохранить" @click.prevent="postNote"></p>
    </form>
</div>