<div class="container">
    <table class="table table-dark table-striped mt-5 align-middle">
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
                print_r('<tr>
                <th scope="row">'.$index.'</th>
                <td>' . $url['long_url'] . '</td>
                <td>' . $url['token'] . '</td>
                <td>' . $url['ip'] . '</td>
                <td>' . $url['time_create'] . '</td>
                <td><form method="POST"><button class="btn btn-danger"" name="btn_delete" value='.$url['token'].'>delete</button></form></td>
                
              </tr>');
            }

            // for

            // }
            ?>


        </tbody>
        
    </table>
</div>