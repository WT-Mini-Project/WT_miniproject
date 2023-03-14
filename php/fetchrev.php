<?php
    function filldiv(){
        $loopResult = "";
        $conn = new mysqli("localhost", "root", "", "reviews");
        $sql = "SELECT * FROM reviewdetails ORDER BY ind DESC";
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
                            <p class="card-text">'.stripslashes($row['name']).'</p>
                        </div>
                    </div>
                </div> 
            ';
        }
        echo $loopResult;
    }

    filldiv();
?>
