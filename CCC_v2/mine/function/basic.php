<?php
function ia($string){
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
function iaic($string){
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
function iais($string){
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
function dic($string){
    die("}</style>
    <h1><p>
    $string
    </p></h1>
    ");
}
function vd($string){
    var_dump(
    $string
    );
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