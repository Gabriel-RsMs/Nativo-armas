<script src="../jquery-3.6.1.min.js"></script>
<div>
    <div style="float: left">
        <p>Patrocinadores:</p>
    </div>
    <div style="float: left">
        <img src="Coka.jpg" width="80" height="80">
    </div>
    <div style="float: left">
        <img src="apple.png" width="80" height="100">
    </div>
    <div style="float: left">
        <img src="CIA.jpg" width="80" height="80">
    </div>
</div>
<script>
    $("p").css("font-family", "'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif").css("font-size", "larger");
    
    $("pre").css("font-family", "'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif").css("font-size", "larger");
    
    $("h1").css("font-family", "'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif").css("font-size", "xx-large");
    
    $("a").css("font-family", "'Franklin Gothic Medium', 'Arial Narrow'").css("background", "rgb(238, 231, 205)")
    .css("border", "1px solid brown").css("padding", "4px").css("border-radius", "5px");
    
    $("input").css("font-family", "'Franklin Gothic Medium', 'Arial Narrow'").css("background", "rgb(238, 231, 205)")
    .css("border", "1px solid brown").css("padding", "4px").css("border-radius", "5px");

    $("select").css("font-family", "'Franklin Gothic Medium', 'Arial Narrow'").css("background", "rgb(238, 231, 205)")
    .css("border", "1px solid brown").css("padding", "4px").css("border-radius", "5px");
    
    $("a").mouseenter(
        function(){
            $(this).css("border-radius", "10px").css("border", "3px solid brown");
        }
    );

    $("a").mouseleave(
        function(){
            $(this).css("border-radius", "5px").css("border", "1px solid brown");
        }
    )
    
    $("input").focus(
        function(){
            $(this).css("background", "rgb(173, 216, 270)").css("border", "3px solid brown");
        }
    );

    $("input").blur(
        function(){
            $(this).css("border", "1px solid brown").css("background", "rgb(173, 216, 230)")
        }
    )

</script>
</html>