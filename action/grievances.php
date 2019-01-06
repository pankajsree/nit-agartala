<?php
    session_start();
    require_once("../common/common.php");
    require_once("../common/db-config.php");

    if(isset($_POST['row-id'])) {
        $query = "UPDATE `sc_st_obc_complaints` SET `action` = 'solved' WHERE `id` = " . $_POST['row-id'];
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("UPDATE query failed !!!");
        }
    }

    $query = "SELECT `id`, `complainant`, `unique_id`, `category`, `email`, `contact`, `complainee`, `subject`, `details`, `complaint_id` FROM `sc_st_obc_complaints` WHERE `action` = 'to be solved' ORDER BY `id` ASC";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("SELECT query failed !!!");
    }

    if(mysqli_num_rows($result) == 0) {
?>
        <div class="to-be-updated mar-v-5">
            No Complaints
        </div>
<?php
    }
    else {
        while($row = mysqli_fetch_assoc($result)) {
?>
        <div class="griev-indv">
            <div class="row">
                <div class="col-12">
                    <span class="edit-caption">Complaint ID : <?= $row['complaint_id'] ?></span>
                </div>
            </div>
            <table class="no-border">
                <tbody>
                    <tr>
                        <td class="text-bold">Complainant&nbsp;: </td>
                        <td><?= $row['complainant'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">College ID&nbsp;: </td>
                        <td><a class="default-links" href="<?= __ROOT__ ?>/uploads/grievances/<?= $row['unique_id'] ?>.pdf" target="_blank"><?= $row['unique_id'] ?></a></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Email&nbsp;: </td>
                        <td><?= $row['email'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Contact&nbsp;: </td>
                        <td><?= $row['contact'] ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><span class="b-b-theme-normal griev-sec-2">Complaint</span></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Complainee&nbsp;: </td>
                        <td><?= $row['complainee'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Subject&nbsp;: </td>
                        <td><?= $row['subject'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Details&nbsp;: </td>
                        <td><?= $row['details'] ?></td>
                    </tr>
                </tbody>
            </table>
            <form class="form-action" method="post" action="../action/grievances">
                <div class="row">
                    <div class="col-12 text-right">
                        <input type="hidden" name="row-id" value="<?= $row['id'] ?>" />
                        <input type="submit" name="submit" value="Action Taken" />
                    </div>
                </div>
            </form>
        </div>
<?php
        }
?>
        <script>
            $(".form-action").submit(function(event) {
                event.preventDefault();

                var r = confirm("Press OK if you are sure this issue has been solved!");
                if (r == true) {
                    var form = $(this);
                    var data = form.serialize();

                    $.ajax({
                        url: '../action/grievances',
                        type: 'post',
                        data: data,
                        success: function(result) {
                            $("#griev-container").load("../action/grievances.php");
                        },
                        error: function(){
                            alert("Something went Wrong !!! . . .");
                        }
                    });
                }
            });
        </script>
<?php
    }

?>
