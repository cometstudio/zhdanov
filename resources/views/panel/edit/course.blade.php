@extends('panel.edit.form')

@section('input')
    <div class="row">
        <dl>Название</dl>
        <input name="name" value="{{ $item->name }}" type="text" />
    </div>
    <div class="row">
        <dl>Краткое название</dl>
        <input name="name_shorten" value="{{ $item->name_shorten }}" type="text" class="x2" />
    </div>
    @if(!empty($options['authors']))
        <div class="row">
            <dl>Автор</dl>
            <select name="author_id">
                <option value="0"></option>
                @foreach($options['authors'] as $user)
                    <option value="{{ $user->id }}"{{ $item->author_id == $user->id ? ' selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div class="row">
        <a href="{{ route('admin::act', ['action'=>'create', 'modelName'=>'schedule', null, 'cid'=>$item->id], false) }}" class="empty button">Запланировать</a>
    </div>
    @if(!empty($options['themes']))
        <div class="row">
            <dl>Тег</dl>
            <select name="theme_id">
                <option value="0"></option>
                @foreach($options['themes'] as $theme)
                    <option value="{{ $theme->id }}"{{ $item->theme_id == $theme->id ? ' selected' : '' }}>{{ $theme->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div class="row">
        <dl>Длительность, дней</dl>
        <input name="length" value="{{ !empty($item->length) ? $item->length : 1 }}" type="text" class="x4" onchange="fitCourseDays(this);" />
    </div>
    <div class="row">
        <dl>Краткое описание</dl>
        <textarea name="teaser" class="input-teaser">{{ $item->teaser }}</textarea>
    </div>
    <div class="row">
        <dl>О программе, левая колонка</dl>
        <textarea name="text_left" class="ck">{{ $item->text_left }}</textarea>
    </div>
    <div class="row">
        <dl>О программе, правая колонка</dl>
        <textarea name="text_right" class="ck">{{ $item->text_right }}</textarea>
    </div>
    <div class="row">
        <dl>Код видеоплеера (iframe-вариант, 100% ширина)</dl>
        <input name="video" value="{{ $item->video }}" type="text" />
    </div>
    @for($i=1;$i<=7;$i++)
        <?php $field = 'day_'.$i; ?>
        <div class="days row" id="day_{{ $i }}"{!! (empty($item->$field) && ($i != 1)) ? ' style="display:none;"' : '' !!}>
            <dl>День {{ $i }}</dl>
            <textarea name="day_{{ $i }}" class="ck">{{ $item->$field }}</textarea>
        </div>
    @endfor
    @if(empty($item->day_7))
        <div class="row">
            <dl><a onclick="$('.days').show();" href="javascript:void(0); $(this).parent().parent().hide(); return false;" class="empty button">добавить дни</a></dl>
        </div>
    @endif
    <script language="javascript">
        function fitCourseDays(el)
        {
            var days = $(el).val();

            for(i=1;i<=7;i++){
                if(i <= days) $('#day_'+i).show(); else $('#day_'+i).hide();
            }
        }
    </script>
    <div class="row">
        <dl>Необходимый инструмент</dl>
        <textarea name="tools" class="ck">{{ $item->tools }}</textarea>
    </div>
    @if(!empty($item->id))
        <div class="row" style="padding-bottom: 10px;">
            <dl>Рекомендуемые товары</dl>
            @if(!empty($options['products']))
                <div style="margin-bottom: 10px;">
                    <select name="_product_id">
                        <option value="">выберите...</option>
                        @foreach($options['products'] as $product))
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select> <a onclick="return courseProductAdd(this);" href="{{ route('admin::act', ['action'=>'courseproductadd', 'modelName'=>$currentPanelModel->public_model_name, 'id'=>$item->id], false) }}" class="empty button">Рекомендовать</a>
                </div>
            @endif
            <div class="course-products">
                @include('panel.edit.courseProducts', ['products'=>$options['courseProducts']])
            </div>
        </div>
    @endif
@endsection