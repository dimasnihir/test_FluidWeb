<div class="container">
    <!-- <section>
        <div class="row d-flex mt-5 justify-content-between" style=" height:auto; flex-wrap:wrap ">
            <div class="card" style="width: 30%; background-color:white">
                <div class="card-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </div>
            </div>
            <div class="card" style="width: 30%; background-color:white">
                <div class="card-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
                        <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z" />
                        <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z" />
                    </svg>
                </div>
            </div>
            <div class="card" style="width: 30%; background-color:white">
                <div class="card-body">

                </div>
            </div>
        </div>
    </section> -->

    <div id="active_links" class="text-center mt-5" style="font-size: 50px; color:white; font-family: 'Nunito', sans-serif; font: weight 600;">
        Active links
    </div>
    <table class="table table-success table-striped mt-5  ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">long_url</th>
                <th scope="col">token</th>
                <th scope="col">ip</th>
                <th scope="col">time_create</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $db = new Database();
            $urls = $db->get_activ_url();
            $index = 0;
            foreach ($urls as $url) {
                $index++;
                print_r('<tr class="">
                <th scope="row">' . $index . '</th>
                <td>' . $url['long_url'] . '</td>
                <td>' . $url['token'] . '</td>
                <td>' . $url['ip'] . '</td>
                <td>' . $url['time_create'] . '</td>
                <td><form method="POST"><button class="btn btn-danger"" name="btn_delete" value=' . $url['token'] . '>delete</button></form></td>
                
              </tr>');
            }

            // for

            // }
            ?>


        </tbody>

    </table>
</div>