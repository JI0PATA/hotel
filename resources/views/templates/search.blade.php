<?php
$hotel_name = \DB::table('hotels')
    ->selectRaw('DISTINCT name');
$autocomplete = \DB::table('hotels')
    ->selectRaw('DISTINCT city')
    ->union($hotel_name)
    ->orderBy('city')
    ->get();
?>

@push('scripts')
    <script>
        $(document).ready(function () {
            let autocompleteTags = [
                @foreach($autocomplete as $item)
                {!! '"'.$item->city.'",'  !!}
                @endforeach
            ];

            $('#autocomplete').autocomplete({
                source: autocompleteTags
            });
        });
    </script>
@endpush

<div id="search">
    <div class="search__title">Reservation</div>
    <form action="{{ route('index') }}" class="search__form wp">
        <div class="search__form_item">
            <input type="text" class="form__field" placeholder="Укажите город или отель" name="search" id="autocomplete" value="{{ \Request::get('search') }}">
        </div>
        <div class="search__form_item">
            <select name="room" title="Тип номера" class="form__field">
                <option value="0">Выберите номер</option>
                <?php
                    $rooms = App\Room::all();
                ?>
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}"
                    @if($room->id == \Request::get('room'))
                        selected
                    @endif
                    >{{ $room->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="search__form_item">
            <button class="form__field">Поиск</button>
        </div>
    </form>
</div>