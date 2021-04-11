<?php
    function filldiv(){
        $loopResult = "";
        $conn = new mysqli("localhost", "root", "", "events");
        $sql = "SELECT * FROM eventdetails ORDER BY ind DESC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            $loopResult .= '
                <div class="col-12 col-md-4 my-2">
                    <div class="card shadow h-100">
                        <img src="'.stripslashes($row['src']).'" alt="'.stripslashes($row['alt']).'" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">
                                '.stripslashes($row['title']).'
                            </h4>
                            <p class="card-text">'.stripslashes($row['text']).'</p>
                            <a href="'.stripslashes($row['href']).'" class="stretched-link"></a>
                        </div>
                    </div>
                </div> 
            ';
        }
        echo $loopResult;
    }

    filldiv();
?>