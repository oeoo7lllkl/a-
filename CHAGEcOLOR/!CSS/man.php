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
    width: 199;height: 99.5;
    /*width=2*height*/
    margin:0 auto;
    position: relative;
    top: 10%;
}
#man{
    background-color: /*배경*/transparent;
    width: /*넓이*/85%;
    height: /*높이*/662%;
    /*초기비율: width:176,height:662*/
    margin:0 auto;
}
#head{
    background-color: #ebd6c0;
    width: 31%;height: 13%;
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
        height: 15%;
    }
        .glasses{
            height: 100%;
            position: relative;
            top: 20%;
            display: flex;
        }
            .glasses>.line{
                /*안경*/
                border:1px solid rgb(192, 178, 98);
                border:1px solid transparent;
            }
            .side{
                width: 10%;height: 0%;
                position: relative;
                top: 50%;
            }
            .glass{
                width: 35%;height: 100%;
            }
            .nose{
                width: 10%;height: 0%;
                position: relative;
                top: 25%;
            }
    .mask{
        height: 41%;
        background-color: /*마스크*/transparent;
    }
#neck-center{
    margin:0 auto;
    width: 29%;
    height: 6%;
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
                width: 25%;height: 83%;
                background-color: /*목깃자켓*/<?=$color_jacket?>;
            }
            .neck.skin{
                background-color: 
                #ebd6c0;
                width: 62%;
            }
                .neck.skin #box1{
                    background-color: transparent;
                    height: 30%;
                }
                .neck.skin #box2{
                    background-color: /*목자켓*/<?=$color_jacket?>;
                    height: 70%;
                }
#body{
    display: flex;
    height: 81%;
}
    #side{
        margin: 0ch;
        width: 16%;
        height: 49.38%;
    }
        #shoulder{
            background-color: /*자켓*/<?=$color_jacket?>;
            width: 100%;height:21.25%;
        }
        .arm.first{
            width: 99.5%;height: 21.25%;
            background-color: /*자켓*/<?=$color_jacket?>;
        }
        .arm.second{
            width: 
            /*팔상*/
            98%;
            /*팔중
            70%;
            팔하*/
            height: 38.75%;
            background-color: /*팔자켓*/<?=$color_jacket?>;
        }
            .right.arm{
                margin-right: auto;
            }
                .right.arm.second{
                    margin-right: auto;
                    /*팔상*/
                    margin-left: 0%;
                    /*팔중
                    margin-left: 5%;
                    팔하*/
                }
            .left.arm{
                margin-left: auto;
            }
                .left.arm.second{
                    margin-left: auto;
                    /*팔상*/
                    margin-right: 0%;
                    /*팔중
                    margin-right: 5%;
                    팔하*/
                }
        .hand{
            background-color: #ebd6c0;
            width: 80%;height: 18.75%;
        }
            .right.hand{
                margin-right: auto;
                margin-left: 9%;
            }
            .left.hand{
                margin-left: auto;
                margin-right: 9%;
            }

    #middle{
        background-color: transparent;
        width: 68%;
        height: 100%;
    }
        #top{
            display: flex;
            height: 40.7%;
        }
            #jacket{
                background-color: /*자켓*/<?=$color_jacket?>;
                height: 100%;width: 100%;
                margin:0 auto;
            }
                #shirts{
                    background-color: /*셔츠자켓*/<?=$color_jacket?>;
                    width: 24%;height: 17%;
                    margin:0 auto;
                }
                .zipper{
                    background-color: /*지퍼*/#c3c3c0;
                    width: 2%;height: 82%;
                    margin:0 auto;
                }
                    .zipper.width{
                        width: 25%;height: 1%;
                        margin:0 auto;
                    }

        #pants-top{
            background-color: black;
            width: 98%;height: 10.5%;
            margin:0 auto;
        }
        #pants-bottom{
            display: flex;
            width: 98%;height: 
            /*발상*/
            39.5%;
            /*발중
            37.6%;
            발하*/
            margin:0 auto;
        }
            .leg{
                background-color: black;
                width: 50%;height: 100%;
            }
                .leg.right{
                    margin-left: auto;margin-right: 3%; 
                }
                .leg.left{        
                    margin-left: 3%;margin-right: auto;
                }
        #foots{
            display: flex;
            height: 
            /*발상*/
            0%;
            /*발중
            1.9%;
            발하*/
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
        #shoes{
            display: flex;
            height: 9.26%;
        }
            .shoe{
                width: 30%;height: 100%;
                margin: 12%;
                background-color: /*신발*/black;
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