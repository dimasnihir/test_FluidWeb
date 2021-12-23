<div id="container " class="container pt-5 ">
    <section class="p-5 ">
        <form method="POST">
            <div class="row align-items-center">
                <div class="col-8">
                    <input id="input_url" class="form-control" placeholder="Paste the link" type="text" value="" name="url" required>
                </div>
                <div class="col-4">
                    <input id="btn_submit" class="btn btn-secondary" type="submit" value="GO">
                </div>
            </div>

        </form>

        <div class="row mt-3">
            <div class="col">

                <div class="card mb-3">
                    <div class="card-body ">
                        <div class="row ">
                            <div id = "short_url" class="col-10">
                                <?php print_r($qwerty['url']); ?>
                            </div>
                            <div class="col-2 ">
                                <input id="btn_copy" class="btn btn-outline-primary" onclick="CopyToClipboard('short_url')" type="submit" value="copy">
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </section>
</div>




<script>
    function CopyToClipboard(containerid) {
        if (document.selection) {
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select().createTextRange();
            document.execCommand("copy");
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().addRange(range);
            document.execCommand("copy");
            
            // alert("Text has been copied, now paste in the text-area")
        }
    }
</script>