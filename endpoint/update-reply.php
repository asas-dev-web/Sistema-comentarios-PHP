<?php
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['replier'], $_POST['reply'])) {
        $replyID = $_POST['tbl_reply_id'];
        $replier = $_POST['replier'];
        $reply = $_POST['reply'];
        $tdreply = date("Y-m-d H:i:s");

        try {
            $stmt = $conn->prepare("UPDATE tbl_reply SET replier = :replier, reply = :reply, time_date_reply = :time_date_reply WHERE id = :id");
            
            $stmt->bindParam("id", $replyID, PDO::PARAM_STR);
            $stmt->bindParam("replier", $replier, PDO::PARAM_STR);
            $stmt->bindParam("reply", $reply, PDO::PARAM_STR);
            $stmt->bindParam("time_date_reply", $tdreply, PDO::PARAM_STR);

                $stmt->execute();
            echo "success";
        } catch (PDOException $e) {
            echo "Error:". $e->getMessage();
         }

    } else {
        echo "
            <script>
                alert('Por favor, preencha todos os campos!');
                window.location.href = 'https://SEU_SITE_AQUI.com.br/comentarios/';
            </script>
        ";
    }
}

?>

