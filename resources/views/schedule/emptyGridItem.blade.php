<div class="empty items">
    <div class="date clearfix">
        <div class="l">{{ $i }}/{{ ($activeMonth < 10 ? 0 : '') . $activeMonth }}, {{ $daysOfWeek[date('N', \Date::getTimeFromDate($i.'.'.$activeMonth.'.'.$activeYear))][1] }}</div>
    </div>
    <div class="title">В этот день событий нет</div>
</div>