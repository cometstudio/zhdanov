@if(!empty($gallery))
    <div class="grid">
        <ul class="x6 clearfix">
            <li class="has-alternative">
                <?php
                    for($i=0;$i<2;$i++):
                        if(!empty($gallery)):
                            $image = array_shift($gallery);
                            ?>
                            <a href=""><img src="{{ $imagesPath }}/bigGrayscale/{{ $image }}.jpg" rel="{{ $imagesPath }}/big/{{ $image }}.jpg" /></a>
                            <?php
                        endif;
                    endfor;
                ?>
            </li>
            <li class="double has-alternative">
                <?php
                    for($i=0;$i<1;$i++):
                    if(!empty($gallery)):
                        $image = array_shift($gallery);
                        ?>
                        <a href=""><img src="{{ $imagesPath }}/bigGrayscale/{{ $image }}.jpg" rel="{{ $imagesPath }}/big/{{ $image }}.jpg" /></a>
                        <?php
                    endif;
                endfor;
                ?>
            </li>
            <li class="has-alternative">
                <?php
                for($i=0;$i<2;$i++):
                    if(!empty($gallery)):
                        $image = array_shift($gallery);
                        ?>
                        <a href=""><img src="{{ $imagesPath }}/bigGrayscale/{{ $image }}.jpg" rel="{{ $imagesPath }}/big/{{ $image }}.jpg" /></a>
                        <?php
                    endif;
                endfor;
                ?>
            </li>
            <li class="double has-alternative">
                <?php
                for($i=0;$i<1;$i++):
                if(!empty($gallery)):
                $image = array_shift($gallery);
                ?>
                <a href=""><img src="{{ $imagesPath }}/bigGrayscale/{{ $image }}.jpg" rel="{{ $imagesPath }}/big/{{ $image }}.jpg" /></a>
                <?php
                endif;
                endfor;
                ?>
            </li>
            <li class="has-alternative">
                <?php
                for($i=0;$i<1;$i++):
                if(!empty($gallery)):
                $image = array_shift($gallery);
                ?>
                <a href=""><img src="{{ $imagesPath }}/bigGrayscale/{{ $image }}.jpg" rel="{{ $imagesPath }}/big/{{ $image }}.jpg" /></a>
                <?php
                endif;
                endfor;
                ?>
            </li>
            <li class="has-alternative">
                <?php
                for($i=0;$i<1;$i++):
                if(!empty($gallery)):
                $image = array_shift($gallery);
                ?>
                <a href=""><img src="{{ $imagesPath }}/bigGrayscale/{{ $image }}.jpg" rel="{{ $imagesPath }}/big/{{ $image }}.jpg" /></a>
                <?php
                endif;
                endfor;
                ?>
            </li>
        </ul>
    </div>
@endif