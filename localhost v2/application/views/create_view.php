<!-- <div id="container " class="container pt-5 ">
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
</div> -->

<div class="container text-center d-flex align-items-center" style="height:90vh;">
    <div style="flex: auto; height:50%; " class="">
        <div class=" d-flex align-self-start" style="flex-direction: column;">
            <h1 style="font-size: 70px;">URL shortener</h1>
            <h2 class="mb-5">Custom url shortener is a free website service that give you an ability to shrink your long your url as short link by your custom name. </h2>

        </div>

        <form method="post">
            <div class="input-group mb-3 mt-5 " >
                <button id="button_long_url" class="btn btn-primary" type="submit" id="button-addon1" style="min-width: 110px;" >Shorten</button>
                <?php print_r('<input id="input_long_url" type="text" value="' . $qwerty['url'] . '"class="to-copy form-control" id="basic-url" aria-describedby="basic-addon3" name="url" placeholder="Paste a long url">'); ?>

                <button id="button_copy_url" class="write-btn btn btn-success"  style="min-width: 110px;" type="button" id="button-addon1" onclick="myFunction()">Copy</button>
            </div>
            <div id="alert_copy" class="alert alert-success" role="alert" style="font-size: 25px;">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                    </symbol>

                </svg>

                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                Link copied!
            </div>
        </form>


        <!-- <div class="card">
            <div class="card-body">
                <div class="short_url">
                    https://fonts.google.com/specimen/Nunito
                </div>
            </div>
        </div> -->

    </div>
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    const writeBtn = document.querySelector('.write-btn');
    const inputEl = document.querySelector('.to-copy');
    writeBtn.addEventListener('click', () => {
        const inputValue = inputEl.value.trim();
        if (inputValue) {
            navigator.clipboard.writeText(inputValue)
                .then(() => {
                    inputEl.value = '';

                })
                .catch(err => {
                    console.log('Something went wrong', err);
                })
        }
    });

    $(document).ready(function() {
        $("#button_copy_url").click(function() {
            $("#alert_copy").fadeIn(500);
            setTimeout(() => {
                $("#alert_copy").fadeOut(500);
            }, 3000);

        });
    });
</script>
<style>
    #alert_copy {
        display: none;
    }
</style>