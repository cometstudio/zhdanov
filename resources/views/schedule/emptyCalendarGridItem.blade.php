<div class="empty items{{ (\Date::getTimeFromDate($i.'.'.$activeMonth.'.'.$activeYear) == \Date::getTimeFromDate(date('j').'.'.date('m').'.'.date('Y'))) ? ' active' : '' }}">
    <span class="date">{{ $i }}, {{ $daysOfWeek[date('N', \Date::getTimeFromDate($i.'.'.$activeMonth.'.'.$activeYear))][1] }}</span>
</div>