<div>
    <input wire:model="search" name="search" type="text" placeholder="What do yo u need?" list="mylist">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
