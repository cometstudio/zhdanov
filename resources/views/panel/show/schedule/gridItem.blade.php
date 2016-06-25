<div id="i{{ $item->id }}" class="items">
    @if(!empty($currentPanelModel->sortable))
        <div class="grab col">=</div>
    @endif
    <div class="id col">{{ $item->id }}</div>
    <div class="col">
        <a href="{{ route('admin::act', ['action'=>'edit', 'modelName'=>$currentPanelModel->public_model_name, 'id'=>$item->id], false) }}">{{ !empty($item->course->name) ? $item->course->name : 'Undefined' }}</a> {{ !empty($item->course->length) ? ' '.$item->course->length.' '.\Dictionary::get('time.days', $item->course->length) : '' }}{{ !empty($item->start_time) ? ', начало '.\Date::getDateFromTime($item->start_time).' в '.date('H', $item->start_time).':'.date('i', $item->start_time) : '' }}
    </div>
</div>