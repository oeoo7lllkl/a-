<?php
    function mc(){
        $passwd='11513122';
        if($_SESSION['s-1']!=0)$passwd='root';
        return $conn=mysqli_connect('localhost','root',$passwd,'o');
    }
    
    //db 싹 불러서 세션에 저장하기
        if(!isset($_SESSION['db'])){
            $_SESSION['db']=1;

            //마이에스큐엘 코넥트 시작
                $passwd='11513122';
                if($_SESSION['s-1']!=0)$passwd='root';
                $conn=mysqli_connect('localhost','root',$passwd,'o');
            //

                if(1){
                    $session_name='clothes';
                    $col=array(
                        'id',
                        'cloth',
                        'colorName',
                        'value',
                        'text'
                    );
                    $result=mysqli_query($conn,"
                    select * from ".$session_name."
                    ");
                    $_SESSION[$session_name]=array(
                        $col[0]=>array(),
                        $col[1]=>array(),
                        $col[2]=>array(),
                        $col[3]=>array(),
                        $col[4]=>array()
                    );
                    while($row=mysqli_fetch_array($result)){

                        $_SESSION[$session_name][$col[0]][$row[$col[0]]]=$row[$col[0]];
                        $_SESSION[$session_name][$col[1]][$row[$col[0]]]=$row[$col[1]];
                        $_SESSION[$session_name][$col[2]][$row[$col[0]]]=$row[$col[2]];
                        $_SESSION[$session_name][$col[3]][$row[$col[0]]]=$row[$col[3]];
                        $_SESSION[$session_name][$col[4]][$row[$col[0]]]=$row[$col[4]];
                    }
                }

                if(1){
                    $session_name='options';
                    $col=array(
                        'id',
                        'text',
                        'name',
                        'value',
                        'session_num'
                    );
                    $result=mysqli_query($conn,"
                    select * from ".$session_name."
                    ");
                    $_SESSION[$session_name]=array(
                        $col[0]=>array(),
                        $col[1]=>array(),
                        $col[2]=>array(),
                        $col[3]=>array(),
                        $col[4]=>array()
                    );
                    while($row=mysqli_fetch_array($result)){

                        $_SESSION[$session_name][$col[0]][$row[$col[0]]]=$row[$col[0]];
                        $_SESSION[$session_name][$col[1]][$row[$col[0]]]=$row[$col[1]];
                        $_SESSION[$session_name][$col[2]][$row[$col[0]]]=$row[$col[2]];
                        $_SESSION[$session_name][$col[3]][$row[$col[0]]]=$row[$col[3]];
                        $_SESSION[$session_name][$col[4]][$row[$col[0]]]=$row[$col[4]];
                    }
                }

                if(1){
                    $session_name='saved';
                    $col=array(
                        'id',
                        'session_name',
                        'value',
                        '',
                        ''
                    );
                    $result=mysqli_query($conn,"
                    select * from ".$session_name."
                    ");
                    $_SESSION[$session_name]=array(
                        $col[0]=>array(),
                        $col[1]=>array(),
                        $col[2]=>array()
                    );
                    while($row=mysqli_fetch_array($result)){

                        $_SESSION[$session_name][$col[0]][$row[$col[0]]]=$row[$col[0]];
                        $_SESSION[$session_name][$col[1]][$row[$col[0]]]=$row[$col[1]];
                        $_SESSION[$session_name][$col[2]][$row[$col[0]]]=$row[$col[2]];
                    }
                }

                if(1){
                    $session_name='_colors';
                    $col=array(
                        'id',
                        'name',
                        'value',
                        '',
                        ''
                    );
                    $result=mysqli_query($conn,"
                    select * from ".$session_name."
                    ");
                    $_SESSION[$session_name]=array(
                        $col[0]=>array(),
                        $col[1]=>array(),
                        $col[2]=>array()
                    );
                    while($row=mysqli_fetch_array($result)){

                        $_SESSION[$session_name][$col[0]][$row[$col[0]]]=$row[$col[0]];
                        $_SESSION[$session_name][$col[1]][$row[$col[0]]]=$row[$col[1]];
                        $_SESSION[$session_name][$col[2]][$row[$col[0]]]=$row[$col[2]];
                    }
                }

            //저장된 테이블값 세션에 입력하기
                for($i=0;$i<count($_SESSION['saved']['id']);$i++){
                    $_SESSION[$_SESSION['saved']['session_name'][$i]]=$_SESSION['saved']['value'][$i];
                }
            //`
        }
            
    // 

    //저장 눌렀을 때
        function update($conn,$session_name){
            $sql="
            update saved set
            value='".$_SESSION[$session_name]."' where session_name='".$session_name."'
            ";
            $result=mysqli_query($conn,$sql);
        }
    //
?>