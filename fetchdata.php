 <?php
    function filldiv(){
        $loopResult = "";
        $conn = new mysqli("localhost", "root", "", "newnotes");
        $sql = "SELECT * FROM newnotesdetails";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            $loopResult .= '
                <div class="col-12 col-md-4 my-2">
                    <div class="card shadow h-100">
                        <img src="'.$row['src'].'" alt="'.$row['alt'].'" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">
                                '.$row['title'].'
                            </h4>
                            <p class="card-text">'.$row['text'].'</p>
                            <a href="'.$row['href'].'" class="stretched-link"></a>
                        </div>
                    </div>
                </div> 
            ';
        }
        echo $loopResult;
    }

    filldiv();
?>