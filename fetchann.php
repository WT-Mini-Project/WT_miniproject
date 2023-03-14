<?php
    function filldiv(){
        $loopResult = "";
        $conn = new mysqli("localhost", "id20114417_akashbagchi", "xDSS6mpV+IhGSM", "id20114417_studentportal");
        $sql = "SELECT * FROM newann ORDER BY ind DESC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            $loopResult .= '
                <div class="col-12 col-md-4 my-2">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h4 class="card-title">
                                '.stripslashes($row['title']).'
                            </h4>
                            <p class="card-text mb-0">'.stripslashes($row['text']).'</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text">Sources: '.stripslashes($row['sources']).'</p>
                        </div>
                    </div>
                </div> 
            ';
        }
        echo $loopResult;
    }

    filldiv();
?>
