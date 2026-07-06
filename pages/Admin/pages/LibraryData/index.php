<?php
    session_start();

    if(!isset($_SESSION['admin_id'])){
        header("Location: ../../index.php");
        exit();
    }

    include "includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ThreatBuddy Admin</title>

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>


<body>




<div class="container">

    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="logo">

            <img src="assets/img/LogoTB.png">

            <div>
                <h2>ThreatBuddy</h2>
                <span>Admin</span>
            </div>

        </div>

        <p class="menu-title">
            DASHBOARD
        </p>

        <a href="../UserData/index.php">
            <i class="fa-solid fa-house"></i>
            User Data
        </a>

        <p class="menu-title">
            MANAGE CONTENT
        </p>

        <a href="../LibraryData/index.php" class="active"> 
            <i class="fa-solid fa-book"></i>
            Library
        </a>

        <a href="../ArticleData/index.php">
            <i class="fa-solid fa-newspaper"></i>
            TMedia
        </a>

        <div class="bottom">
            <a href="includes/logout.php">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>
        </div>
    </aside>

    <!-- MAIN -->
    <main>

        <div class="topbar">
            <div>
                <h1>Add New Cyber Threat</h1>
                <small>Library</small>
            </div>
        </div>

        <div class="library-container">

            <!-- LEFT -->

            <div class="form-card">
                <h2>Threat Information</h2>
                <form action="includes/insert.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <label>Name <span class="required">*</span></label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Enter threat name"
                        required>

                    <div class="row">

                        <div>

                            <label>Severity <span class="required">*</span></label>

                            <select name="severity" required>
                                <option value="" selected disabled>Select severity</option>
                                <option>Low</option>
                                <option>Medium</option>
                                <option>High</option>
                            </select>

                        </div>

                        <div>

                            <label>Category <span class="required">*</span></label>

                            <select name="category" required>
                                <option value="" selected disabled>Select category</option>
                                <option>Malware</option>
                                <option>Phishing</option>
                                <option>Network Threats</option>
                                <option>System Vulnerabilities</option>
                                <option>Other</option>
                            </select>

                        </div>

                    </div>

                    <label>About <span class="required">*</span></label>

                    <textarea
                        name="about"
                        rows="3"
                        placeholder="Briefly describe this cyber threat..."
                        required></textarea>

                    <label>How it Works <span class="required">*</span></label>

                    <textarea
                        name="how_it_works"
                        rows="3"
                        placeholder="Explain how this cyber threat works (step-by-step)..."
                        required></textarea>

                    <label>Prevention Tips <span class="required">*</span></label>

                    <textarea
                        name="prevention"
                        rows="3"
                        placeholder="Provide practical prevention tips..."
                        required></textarea>

                    <label>Upload Threat Logo <span class="required">*</span></label>

                    <input
                        type="file"
                        name="image"
                        accept="image/*"
                        required>

                    <div class="buttons">

                        <button type="reset">
                            Cancel
                        </button>

                        <button type="submit">
                            Save Threat
                        </button>

                    </div>

                </form>

            </div>


            <!-- RIGHT -->

            <div class="table-card">

                <div class="card-header">
                    <h2>Cyber Threat List</h2>
                </div>

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Image</th>

                            <th>Name</th>

                            <th>Category</th>

                            <th>Severity</th>

                            <th>Date Added</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $query = mysqli_query($conn,"SELECT * FROM library_table ORDER BY id DESC");

                        while($row = mysqli_fetch_assoc($query)){

                        ?>

                        <tr>

                            <td><?php echo $row['id']; ?></td>

                            <td>

                                <img
                                    src="uploads/<?php echo $row['image']; ?>"
                                    class="threat-img">

                            </td>

                            <td><?php echo $row['name']; ?></td>

                            <td><?php echo $row['category']; ?></td>

                            <td>

                                <?php

                                if($row['severity']=="Low"){

                                    echo "<span class='badge low'>Low</span>";

                                }elseif($row['severity']=="Medium"){

                                    echo "<span class='badge medium'>Medium</span>";

                                }else{

                                    echo "<span class='badge high'>High</span>";

                                }

                                ?>

                            </td>

                            <td><?php echo $row['date_added']; ?></td>

                            <td>

                                <button

                                    class="edit"

                                    data-id="<?php echo $row['id']; ?>"

                                    data-name="<?php echo htmlspecialchars($row['name']); ?>"

                                    data-category="<?php echo htmlspecialchars($row['category']); ?>"

                                    data-severity="<?php echo htmlspecialchars($row['severity']); ?>"

                                    data-about="<?php echo htmlspecialchars($row['about']); ?>"

                                    data-how="<?php echo htmlspecialchars($row['how_it_works']); ?>"

                                    data-prevention="<?php echo htmlspecialchars($row['prevention']); ?>">

                                    <i class="fa-solid fa-pen"></i>

                                </button>

                                <a href="includes/delete.php?id=<?php echo $row['id']; ?>"
                                    onclick="return confirm('Delete this threat?')">

                                    <button class="delete">
                                    <i class="fa-solid fa-trash"></i>
                                    </button>

                                </a>

                            </td>

                        </tr>

                        <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </main>

</div>
<!-- ================= EDIT MODAL ================= -->

<div class="modal" id="editModal">

    <div class="modal-box">

        <h2>Edit Cyber Threat</h2>

        <form action="includes/update.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" id="edit_id">

            <label>Name <span class="required">*</span></label>

            <input
                type="text"
                name="name"
                id="edit_name"
                required>

            <div class="row">

                <div>

                    <label>Severity <span class="required">*</span></label>

                    <select
                        name="severity"
                        id="edit_severity"
                        required>

                        <option>Low</option>
                        <option>Medium</option>
                        <option>High</option>

                    </select>

                </div>

                <div>

                    <label>Category <span class="required">*</span></label>

                    <select
                        name="category"
                        id="edit_category"
                        required>

                        <option>Malware</option>
                        <option>Phishing</option>
                        <option>Network Threats</option>
                        <option>System Vulnerabilities</option>
                        <option>Other</option>

                    </select>

                </div>

            </div>

            <label>About <span class="required">*</span></label>

            <textarea
                name="about"
                id="edit_about"
                rows="3"
                required></textarea>

            <label>How it Works <span class="required">*</span></label>

            <textarea
                name="how_it_works"
                id="edit_how"
                rows="3"
                required></textarea>

            <label>Prevention Tips <span class="required">*</span></label>

            <textarea
                name="prevention"
                id="edit_prevention"
                rows="3"
                required></textarea>

            <label>Replace Logo</label>

            <input
                type="file"
                name="image"
                accept="image/*">

            <div class="buttons">

                <button
                    type="button"
                    id="closeEdit">

                    Cancel

                </button>

                <button type="submit">

                    Update Threat

                </button>

            </div>

        </form>

    </div>

</div>

    <script>

const editModal=document.getElementById("editModal");

document.querySelectorAll(".edit").forEach(button=>{

    button.onclick=function(){

        editModal.style.display="flex";

        document.getElementById("edit_id").value=this.dataset.id;

        document.getElementById("edit_name").value=this.dataset.name;

        document.getElementById("edit_category").value=this.dataset.category;

        document.getElementById("edit_severity").value=this.dataset.severity;

        document.getElementById("edit_about").value=this.dataset.about;

        document.getElementById("edit_how").value=this.dataset.how;

        document.getElementById("edit_prevention").value=this.dataset.prevention;

    }

});

document.getElementById("closeEdit").onclick=function(){

    editModal.style.display="none";

}

window.onclick=function(e){

    if(e.target==editModal){

        editModal.style.display="none";

    }

}

</script>

</body>
</html>