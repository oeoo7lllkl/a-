<?php
function i($string){
    if(isset($string)){
        ?>
        <script>
            alert("존재: <?=$string?>");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("없음");
        </script>
        <?php
    }
}
function iic($string){
    if(isset($string)){
        ?>}</style>
        <script>
            alert("존재: <?=$string?>");
        </script>
        <?php
    }else{
        ?>}</style>
        <script>
            alert("없음");
        </script>
        <?php
    }
}
function iis($string){
    if(isset($string)){
        ?></style>
        <script>
            alert("존재: <?=$string?>");
        </script>
        <?php
    }else{
        ?></style>
        <script>
            alert("없음");
        </script>
        <?php
    }
}
function d($string){
    die("
    <h1><p>
    $string
    </p></h1>
    ");
}
function v($string){
    var_dump("
    <h1><p>
    $string
    </p></h1>
    ");
}
function e($string){
    echo("
    <h1>
    <p>$string</p>
    </h1>
    ");
}
function a($str){
    ?>
    <script>
        alert("<?=$str?>");
    </script>
    <?php
}
function aic($str){
    ?>}</style>
    <script>
        alert("<?=$str?>");
    </script>
    <?php
}
?>