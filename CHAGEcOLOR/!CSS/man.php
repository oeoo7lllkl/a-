<style>
    /*
            -위치-
            배경 
            모자 마스크
            목깃자켓 목자켓 
            자켓 팔자켓 셔츠자켓 지퍼
            신발
            -색상-

            #c0b498
                베이지 모자
            #d7d8dd
                그레이 모자
            rgb(46, 45, 45)
                검정 모자
            rgb(207, 42, 42)
                비건디 모자

            #c3c3c0
                지퍼색
            transparent
                투명
                
            a56878
                초코
            #474844
                카키
            black
                검정
            rgb(1, 1, 95)
                네이비

            #ebd6c0
                피부

            rgb(1, 1, 95)
                네이비
            #dbcbba
                베이지
            brown
                갈색

            383b46
                슬리퍼
    */
    
#background{
    background-color: rgb(135, 141, 141);
}
#percent{
    width: 201;height: 100.5;
    /*width=2*height*/
    margin:0 auto;
    position: relative;
    top: 30;
}
#man{
    background-color: /*배경*/transparent;
    width: /*넓이*/83%;
    height: /*높이*/662%;
    /*초기비율: width:176,height:662*/
    margin:0 auto;
}
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 머리 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
#head{
    background-color: #ebd6c0;
    width: 34%;height: 13.5%;
    margin:0 auto;
}
    .hat{
        height: 44%;
        background-color: /*모자*/<?=$color_hat?>;
        display: flex;
        align-items:flex-end;
    }
        .hair{
            width:90%;height: 30%;
            margin: 0 auto;
            background-color: black;
        }
    .face{
        height: 20%;
    }
        .glasses{
            height: 85%;
            position: relative;
            top: 20%;
            display: flex;
        }
            .glasses .line{
                border-top:1px solid 
                rgb(172, 146, 4);
                border-left:1px solid 
                rgb(172, 146, 4);
                border-right:1px solid 
                rgb(172, 146, 4);
            }
                .side{
                    width: 5%;height: 0%;
                    position: relative;
                    top: 33%;
                }
                .glass.line{
                    width: 40%;height: 100%;
                    border:1px solid 
                    rgb(211, 180, 8);
                    border:1px solid 
                    black;
                }
                .nose{
                    width: 10%;height: 0%;
                    position: relative;
                    top: 25%;
                }
    .mask{
        height: 36%;
        background-color: /*마스크*/white;
    }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 목 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
#neck-center{
    margin:0 auto;
    width: 35%;
    height: 5.5%;
}
    #neck{
        display: flex;
        align-items: baseline;
        height: 100%;
    }
        .neck{
            height: 100%;
        }
            .neck.jacket{
                width: 15%;height: 83%;
                background-color: /*목깃자켓*/<?=$color_jacket?>;
                <?php //열려있고 자켓색이 카키나 하양이면 목깃 투명색
                if($_SESSION[$_pageid.'jacketCovered']!='yes'&($color_jacket=='#474844'|$color_jacket=='white')){
                    ?>
                    background:transparent;
                    <?php
                }
                ?>
            }
            .neck.skin{
                background-color: 
                #ebd6c0;
                width: 70%;
            }
                .neck.skin #box1{
                    background-color: transparent;
                    height: 30%;
                }
                .neck.skin #box2{
                    background-color: /*목자켓*/<?=$color_jacketCoveringFront?>;
                    height: 70%;
                    display:flex;
                }           
                    #jacketSideNeckMore{
                        background:<?=$color_jacket?>;
                        width:16%;
                        height:100%;
                        <?php //열려있고 자켓색이 카키나 하양이면 목깃 투명색
                        if($_SESSION[$_pageid.'jacketCovered']!='yes'&($color_jacket=='#474844'|$color_jacket=='white')){
                            ?>
                            background:transparent;
                            <?php
                        }
                        ?>
                    }
                        #sideZipperRight{
                            margin-left:auto;
                            height:100%;
                            width:30%;
                            background:<?=$color_zipper?>;//!
                        }
                        #sideZipperLeft{
                            margin-right:auto;
                            height:100%;
                            width:30%;
                            background:<?=$color_zipper?>;
                        }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 팔 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
#body{
    display: flex;
    height: 81%;
    background:red;
}
    #side{
        margin: 0ch;
        width: 16%;
        height: 49.38%;
    }
        #shoulder{
            background: white;
            background-color: /*자켓*/<?=$color_jacket?>;
            width: 100%;height:21.25%;
        }
        .arm.first{
            width: 97.5%;height: 22%;
            background: white;
            background-color: /*자켓*/<?=$color_jacket?>;
        }
        .arm.second{
            /*팔중*/
            <?php 
            if($_SESSION[$_pageid.'armsUpOrDown']=='up'){
                ?>
                width:70%;
                <?php
            }else{
                ?>
                width: 97.5%;
                <?php
            }
            ?>
            height: 40%;
            /*팔중*/
            <?php 
            if($_SESSION[$_pageid.'armsUpOrDown']=='up'){
                ?>
                background: #ebd6c0;
                <?php
            }else{
                ?>
                background-color: /*팔자켓*/<?=$color_jacket?>;
                <?php
            }
            ?>
        }
        <?php $inputNumber="20"; $input="rgb(".$inputNumber.", ".$inputNumber.", ".$inputNumber.")"?>
            .right.arm{
                margin-right: auto;
                border-right:0.5px solid <?=$input?>;
            }
                .right.arm.second{
                    /*팔중*/
                    <?php 
                    if($_SESSION[$_pageid.'armsUpOrDown']=='up'){
                        ?>
                        margin-left: 5%;
                        <?php
                    }else{
                        ?>
                        <?php
                    }
                    ?>
                    /*팔중*/
                    <?php 
                    if($_SESSION[$_pageid.'armsUpOrDown']=='up'){
                        ?>
                        border-right:0px solid transparent ;
                        <?php
                    }else{
                        ?>
                        border-right:0.5px solid <?=$input?>;
                        <?php
                    }
                    ?>
                }
            .left.arm{
                margin-left: auto;
                border-left:0.5px solid <?=$input?>;
            }
                .left.arm.second{
                    /*팔중*/
                    <?php 
                    if($_SESSION[$_pageid.'armsUpOrDown']=='up'){
                        ?>
                        margin-right: 5%;
                        <?php
                    }else{
                        ?>
                        <?php
                    }
                    ?>
                    /*팔중*/
                    <?php 
                    if($_SESSION[$_pageid.'armsUpOrDown']=='up'){
                        ?>
                        border-left:0px solid transparent ;
                        <?php
                    }else{
                        ?>
                        border-left:0.5px solid <?=$input?>;
                        <?php
                    }
                    ?>
                }
        .hand{
            background-color: #ebd6c0;
            width: 80%;height: 16%;
        }
            .right.hand{
                margin-right: auto;
                margin-left: 9%;
            }
            .left.hand{
                margin-left: auto;
                margin-right: 9%;
            }

/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 몸통 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    #middle{
        background-color: transparent;
        width: 68%;
        height: 100%;
    }
        #top{
            display: flex;
            height: 42%;
        }
            #jacket{
                background-color: /*자켓*/<?=$color_jacket?>;
                height: 100%;width: 100%;
                margin:0 auto;
            }
                #shirts{
                    background-color: /*셔츠자켓*/<?=$color_shirts?>;
                    <?php 
                    //자켓을 끝까지 잠궜을 때
                    if($jacketCovered=="yes"){
                        //지퍼 수직
                        ?>
                        
                        <?php
                    }else{
                        //지퍼 수평
                        ?>
                        border-left:2px solid <?=$color_zipper?>;
                        border-right:2px solid <?=$color_zipper?>;
                        border-bottom:2px solid <?=$color_zipper?>;
                        <?php
                    }
                    ?>
                    <?php 
                    if($color_jacket=='#474844'|$color_jacket=='white'){
                        ?>
                        width: 37%;
                        <?php
                    }else{
                        ?>
                        width: 24%;
                        <?php
                    }
                    ?>
                    height: 17%;
                    margin:0 auto;
                }
                    .jacketCoveringFront{
                        height:100%;width:100%;
                        background: <?=$color_jacketCoveringFront?>;
                    }
                    .zipper{
                        background-color: /*지퍼*/<?=$color_zipper?>;
                        width: 2%;height: 82%;
                        margin:0 auto;
                    }
                    #verticalZipper{
                        margin:0 auto;
                        height:110%;
                        width:5%;
                    }
                        #verticalZipper.inShirts{
                            <?php 
                            if($color_jacket=='#474844'|$color_jacket=='white'){
                                ?>
                                width:5%;
                                <?php
                            }else{
                                ?>
                                width:8%;
                                <?php
                            }
                            ?>
                        }
                    <?php 
                    //자켓을 끝까지 잠궜을 때
                    if($jacketCovered=="yes"){
                        //지퍼 수직
                        ?>
                        #verticalZipper{
                            background:black;
                            background-color:<?=$color_zipper?>;
                        }
                        #horizonZipper{
                            background-color: transparent;
                        }
                        <?php
                    }else{
                        //지퍼 수평
                        ?>
                        #verticalZipper{
                            background-color:transparent;
                        }
                        #horizonZipper{
                            background-color: <?=$color_zipper?>;
                        }
                        <?php
                    }
                    ?>

/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 바지 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
        #pants-top{
            background-color: <?=$color_pants?>;
            width: 98%;height: 8.2%;
            margin:0 auto;
        }
        #pants-bottom{
            display: flex;
            width: 98%; 
            <?php 
            if($_SESSION[$_pageid.'pantsShortOrLong']=='long'){
                ?>
                height:40.5%;
                <?php
            }else{
                ?>
                height:38.6%;
                <?php
            }
            ?>
            margin:0 auto;
        }
            .leg{
                background-color: <?=$color_pants?>;
                width: 50%;height: 100%;
            }
                .leg.right{
                    margin-left: auto;margin-right: 3%; 
                }
                .leg.left{        
                    margin-left: 3%;margin-right: auto;
                }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 발목 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
        #foots{
            display: flex;
            <?php 
            if($_SESSION[$_pageid.'pantsShortOrLong']=='long'){
                ?>
                height: 0%;
                <?php
            }else{
                ?>
                height: 1.9%;
                <?php
            }
            ?>
        }
            .foot{
                width: 17%;height: 100%;
                margin: 20%;
                background-color: 
                /*
                gray;
                */
                black;
            }
                .foot.right{
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-right: auto;
                }
                .foot.left{        
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: auto;
                }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 신발 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
        #shoes{
            display: flex;
            height: 9.26%;
        }
            .shoe{
                width: 33%;height: 100%;
                margin: 10%;
                background-color: /*신발*/<?=$color_shoes?>;
            }
                .shoe.right{
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-right: auto;
                }
                .shoe.left{        
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: auto;
                }
</style>