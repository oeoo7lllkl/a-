<h1>f_1</h1>
i have function f_1(). 
<br>
hey! our parent have function F()!
<br>
<script>
    function f_1(){
        alert("f_1");
    }
</script>
<p style="float:left;">
    <button onclick="parent.f_2.f_2();">click me->f_2()</button>
</p>
<p style="float:left;">
    <button onclick="parent.f_1.f_1();">click me->f_1()</button>
</p>
<p style="float:left;">
    <button onclick="f_1();">click me->f_1()</button>
</p>
<p style="float:left;">
    <button onclick="parent.F();">click me->F()</button>
</p>