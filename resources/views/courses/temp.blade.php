<div class="schedule-calendar-grid grid">
    <div class="x7 th row clearfix">
        @for($i=1;$i<=7;$i++)
            <div class="items">{{ config('dictionary.daysOfWeek')[$i][1] }}</div>
        @endfor
    </div>
    <div class="x7 row clearfix">

        @for($i=(2 - $activeMonthStartDay);$i<=$activeMonthLength;$i++)
            @if(($i > 0) && ($event = $webinarModel->getByDate($webinars, \Date::constructDate([$i, $activeMonth , $activeYear]))->first()))
                @include('schedule.webinarsCalendarGridItem')
            @elseif(($i > 0) && ($event = $courseModel->getByDate($courses, \Date::constructDate([$i, $activeMonth , $activeYear]))->first()))
                @include('schedule.coursesCalendarGridItem')
            @elseif($i > 0)
                @include('schedule.emptyCalendarGridItem')
            @else
                <div class="hidden items"></div>
            @endif
        @endfor
    </div>
</div>