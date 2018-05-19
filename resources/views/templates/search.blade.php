<div id="search">
    <div class="search__title">Reservation</div>
    <form action="" class="search__form wp">
        <div class="search__form_item">
            <input type="text" class="form__field" placeholder="Укажите город или отель" name="name">
        </div>
        <div class="search__form_item">
            <select name="room" title="Тип номера" class="form__field">
                <option value="0">Выберите номер</option>
                <?php
                    $rooms = App\Room::all();
                ?>
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="search__form_item">
            <button class="form__field">Поиск</button>
        </div>
    </form>
</div>