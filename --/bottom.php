
    <div class="bottom">
        <div class="information">
            <table>
                <tr>
                    <td>keycode: <?=$k?></td>
                    <td>top: <?=s('box-top')?></td>
                    <td>left: <?=s("box-left")?></td>
                    <td>box-width: <?=s('box-width')?></td>
                    <td>box-height: <?=s("box-height")?></td>
                    <td></td>
                    <td onclick="form_table_id.value='session';form_table.submit();">세션 초기화 (R)</td>
                </tr>
                <tr>
                    <td onclick="keycode.value=191;form_keycode.submit();">+ (/)</td>
                    <td>window-width: <?=s('window-width')?></td>
                    <td>window-height: <?=s("window-height")?></td>
                    <td>box-width-real: <?=s('box-width-real')?></td>
                    <td>box-height-real: <?=s("box-height-real")?></td>
                    <td onclick="keycode.value=38;form_keycode.submit();">상</td>
                    <td></td>
                </tr>
                <tr>
                    <td onclick="keycode.value=190;form_keycode.submit();">- (.)</td>
                    <td>box-width-origin: <?=s('box-width-origin')?></td>
                    <td>box-height-origin: <?=s("box-height-origin")?></td>
                    <td></td>
                    <td onclick="keycode.value=37;form_keycode.submit();">좌</td>
                    <td onclick="keycode.value=40;form_keycode.submit();">하</td>
                    <td onclick="keycode.value=39;form_keycode.submit();">우</td>
                </tr>
            </table>
        </div>
    </div>