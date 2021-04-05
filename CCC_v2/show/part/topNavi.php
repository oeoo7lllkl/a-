<?php 
include "hidden/topNavi.php";

include "hidden/css/topNavi.php";?>  

<div class="topNavi">
    <div class="left side">
    <p class="button" onclick="topnavi.value='index';topnavisubmit.click();">홈</p>
    <p class="button" onclick="topnavi.value='DB';topnavisubmit.click();">DB</p>
    </div>
    
    <div class="memo"<?=$_SESSION['hide-memo']?>><marquee>메모를 꼭 참고하세요!</marquee></div>

    <div class="right side">
    <p class="button" onclick="topnavi.value='where';topnavisubmit.click();";>위/아래 위치</p>
    <p class="button" onclick="topnavi.value='memo';topnavisubmit.click();";>메모 가리기</p>
    <p class="reset button" onclick="topnavi.value='reset';topnavisubmit.click();";>세션 초기화</p>
    </div>
</div>