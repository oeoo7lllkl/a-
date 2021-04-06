<?php 
include "hidden/css/topNavi.php";?>  

<div class="topNavi">
    <div class="left side">
    <?php
    // vd($HP); ~~~~~~~~~~~~ $HP 배열 반복문으로 버튼들 만들기
    ?>
    <p class="button" onclick="topnavi.value='main';topnavi_main.value='DB';topnavisubmit.click();">DB</p>
    <p class="button" onclick="topnavi.value='main';topnavi_main.value='index';topnavisubmit.click();">홈</p>
    <p class="button" onclick="topnavi.value='main';topnavi_main.value='CCC';topnavisubmit.click();">CCC</p>
    </div>
    
    <div class="memo"<?=$_SESSION['hide-memo']?>><marquee>메모를 꼭 참고하세요!</marquee></div>

    <div class="right side">
    <p hidden class="button" onclick="topnavi.value='where';topnavisubmit.click();";>위로/아래로</p>
    <p class="button" onclick="topnavi.value='memo';topnavisubmit.click();";>메모 가리기</p>
    <p class="reset button" onclick="topnavi.value='reset';topnavisubmit.click();";>세션 초기화</p>
    </div>
</div>