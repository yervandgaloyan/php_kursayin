<?php require_once("header.php");?>
<div class="container-fluid">
    <div class="row p-0 m-0 text-center" style="min-height: 5vh;">
        <div class="col-lg-1 col-md-2 col-sm-6 col-6 p-0 m-0">
            <a href="index.php">
                <img width="50%" src="img/logo.png" alt="InLearn">
            </a>
        </div>
        <div class="col-lg-1 col-md-2 col-sm-6 col-6 offset-lg-10 offset-md-8 offset-sm-0 p-0">
            <a href="save.php">
                <img width="50%" src="img/save.png" alt="Save">
            </a>
        </div>
    </div>
    <div class="row" style="min-height: 90vh;">
        <div class="col-lg-5 col-md-6 col-sm-12 border p-0 m-0">
            <!-- <textarea name="" id="code" cols="30" rows="10" oninput="updateIframeContent(document.getElementById('liveCode'),this.value);"></textarea> -->
            <iframe src="highlight.php" id="codeInput" onchange="window.console.log(this.src);" frameborder="0" width="100%" height="100%"></iframe>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-12 border p-0 m-0">
            <iframe class="border" src="" id="liveCode" height="100%" width="100%" frameborder="0" ></iframe>    
        </div>
    </div>
</div>


<script>
    function updateIframeContent(iframeElement, newHTML)
    {
        iframeElement.src = "about:blank";
        iframeElement.contentWindow.document.open();
        iframeElement.contentWindow.document.write(newHTML);
        iframeElement.contentWindow.document.close();
    }
    window.onload = function() {
        let liveCode = document.getElementById('liveCode');
        let codeInput = document.getElementById("codeInput").contentWindow;
        codeInput.document.getElementById("editor").addEventListener("input",function(){
            updateIframeContent(liveCode,codeInput.editor.getValue());
        }, true);
        
        <?php
            if(isset($_POST['insert'])){
                echo "codeInput.editor.insert(decodeURIComponent('".$_POST['insert']."'));";
            }
        ?>
        codeInput.editor.insert("");
        updateIframeContent(liveCode,codeInput.editor.getValue());
    };
</script>

<?php require_once("footer.php");?>