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

        <a href="#" class="active">
            <i class="fa-solid fa-house"></i>
            User Data
        </a>

        <p class="menu-title">
            MANAGE CONTENT
        </p>

        <a href="../LibraryData/index.php">
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

                <h1>Dashboard</h1>

                <small>User Data</small>

            </div>

            <button id="addBtn">
                <i class="fa-solid fa-plus"></i>

                Add Account
            </button>
        </div>


        <div class="card">

            <div class="card-header">

                <h2>Summary</h2>

            </div>

            <table>

                <thead>

                    <tr>

                        <th>ID</th>

                        <th>First Name</th>

                        <th>Last Name</th>

                        <th>Email</th>

                        <th>Phone</th>

                        <th>Password</th>

                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                    $query = mysqli_query($conn, "SELECT * FROM userdata_table");

                    while($row = mysqli_fetch_assoc($query)){
                    ?>

                    <tr>

                        <td><?php echo $row['user_id']; ?></td>

                        <td><?php echo $row['first_name']; ?></td>

                        <td><?php echo $row['last_name']; ?></td>

                        <td><?php echo $row['email']; ?></td>

                        <td><?php echo $row['phone']; ?></td>

                        <td>********</td>

                        <td>

                            <button
                                class="edit"

                                data-id="<?php echo $row['user_id']; ?>"

                                data-fname="<?php echo $row['first_name']; ?>"

                                data-lname="<?php echo $row['last_name']; ?>"

                                data-email="<?php echo $row['email']; ?>"

                                data-phone="<?php echo $row['phone']; ?>">

                                <i class="fa-solid fa-pen"></i>

                            </button>

                            <a href="includes/delete.php?id=<?php echo $row['user_id']; ?>"
                                onclick="return confirm('Delete this account?')">

                                <button class="delete">
                                <i class="fa-solid fa-trash"></i>
                                </button>

                            </a>

                        </td>

                    </tr>

                    <?php
                    }
                    ?>

                </tbody>

            </table>

        </div>

    </main>

</div>

<!-- MODAL -->
<!-- MODAL -->

<div class="modal" id="modal">

    <div class="modal-box">

        <h2 id="modalTitle">Add Account</h2>

        <form id="accountForm" action="includes/insert.php" method="POST">

            <input type="hidden" name="user_id" id="user_id">

            <input
                type="text"
                name="first_name"
                id="first_name"
                placeholder="First Name"
                required>

            <input
                type="text"
                name="last_name"
                id="last_name"
                placeholder="Last Name"
                required>

            <input
                type="email"
                name="email"
                id="email"
                placeholder="Email"
                required>

            <input
                type="text"
                name="phone"
                id="phone"
                placeholder="Phone Number"
                required>

            <input
                type="password"
                name="password"
                id="password"
                placeholder="Password">

            <div class="buttons">

                <button type="button" id="closeBtn">
                    Cancel
                </button>

                <button type="submit">
                    Save
                </button>

            </div>

        </form>

    </div>

</div>
    <script>
        const modal = document.getElementById("modal");
        const form = document.getElementById("accountForm");
        const modalTitle = document.getElementById("modalTitle");
        const user_id = document.getElementById("user_id");
        const first_name = document.getElementById("first_name");
        const last_name = document.getElementById("last_name");
        const email = document.getElementById("email");
        const phone = document.getElementById("phone");
        const password = document.getElementById("password");

        // ADD ACCOUNT
        document.getElementById("addBtn").onclick = function(){
            modal.style.display = "flex";
            modalTitle.innerHTML = "Add Account";
            form.action = "includes/insert.php";
            form.reset();
            user_id.value = "";
        }


        // EDIT ACCOUNT
        document.querySelectorAll(".edit").forEach(button=>{
            button.onclick = function(){
                modal.style.display = "flex";
                modalTitle.innerHTML = "Edit Account";
                form.action = "includes/update.php";
                user_id.value = this.dataset.id;
                first_name.value = this.dataset.fname;
                last_name.value = this.dataset.lname;
                email.value = this.dataset.email;
                phone.value = this.dataset.phone;
                password.value = "";
            }
        });


        // CLOSE
        document.getElementById("closeBtn").onclick=function(){
            modal.style.display="none";
        }
        window.onclick=function(e){
            if(e.target==modal){
                modal.style.display="none";
            }
        }

    </script>
</body>
</html>