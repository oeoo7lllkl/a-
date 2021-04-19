<script>
    function keypress(){
        k=event.keyCode;
        // alert(k);    
        if(k==97){
            q.innerHTML+=1;
        }
        if(k==100){
            q.innerHTML+=2;
        }
    }
</script>
<style>
    #q{
        background:white;
        color:gray;
        width:10%;
        height:100%;
    }
</style>
<body onkeypress="keypress();">
    <div id="q"></div>
</body>