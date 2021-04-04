<style>
.topNavi{
    width:100%;
    height:<?=$_*40?>;
    display:flex;
    align-items:center;
    background:rgb(85,170,255);/*파*/ 
}

.left{
    width:<?=$_*90?>;
    border-top:<?=$_*5?>px solid rgb(255,170,85);/*주*/
    border-bottom:<?=$_*5?>px solid rgb(255,170,85);/*주*/
    background:rgb(255,170,85);/*주*/
    margin:0 0 0 <?=$_*10?>;
    align-items:center;
    cursor:pointer;
    text-align:center;
}

.memo{
    color:red;
    font-weight:bold;
    font-size:<?=$_*30?>px;
    background:rgb(100,0,0);
    width:<?=$_*200?>;
    margin-left:auto;
}

.sessionReset{
    width:<?=$_*90?>;
    border-top:<?=$_*5?>px solid rgb(255,85,170);/*분*/
    border-bottom:<?=$_*5?>px solid rgb(255,85,170);/*분*/
    background:rgb(255,85,170);/*분*/
    margin:0 <?=$_*10?> 0 auto;
    align-items:center;
    cursor:pointer;
    text-align:center;
}
    .sessionReset:hover{
        opacity:50%;
    }
</style>