<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
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

    <!-- ================= SIDEBAR ================= -->

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

        <a href="../LibraryData/index.php">
            <i class="fa-solid fa-book"></i>
            Library
        </a>

        <a href="../ArticleData/index.php" class="active">
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


    <!-- ================= MAIN ================= -->

    <main>

        <div class="topbar">

            <div>

                <h1>TMedia</h1>

                <small>
                    Manage articles and tech stories
                </small>

            </div>

        </div>


        <div class="article-container">


            <!-- ================= LEFT ================= -->

            <div class="form-card">

                <h2>Add New Article</h2>

                <form action="includes/insert.php"
                      method="POST"
                      enctype="multipart/form-data">

                    <div class="article-grid">

                        <!-- LEFT FORM -->

                        <div>
                            
                            <label>Select Author</label>

                           <select name="author" required>
                                <option selected disabled>Select author</option>

                                <?php
                                    $authors = mysqli_query($conn, "SELECT * FROM author_table ORDER BY author_name ASC");

                                    while($author = mysqli_fetch_assoc($authors)){
                                ?>
                                    <option value="<?php echo $author['author_name']; ?>">
                                        <?php echo $author['author_name']; ?>
                                    </option>
                                <?php } ?>
                                
                                

                            </select>


                            <label>Article Title</label>

                            <input
                            type="text"
                            name="title"
                            placeholder="Enter article title"
                            required>


                            <label>Header/Subtitle</label>

                            <input
                            type="text"
                            name="subtitle"
                            placeholder="Enter header or subtitle">


                            <label>Read More Link (Optional)</label>

                            <input
                            type="url"
                            name="link"
                            placeholder="https://example.com">


                            <label>Category</label>

                            <select name="category" required>

                                <option selected disabled>Select category</option>

                                <option value="Cybersecurity">Cybersecurity</option>
                                <option value="AI">AI</option>
                                <option value="Programming">Programming</option>
                                <option value="Networking">Networking</option>
                                <option value="Cloud Computing">Cloud Computing</option>
                                <option value="Threat Intelligence">Threat Intelligence</option>
                                <option value="Other">Other</option>

                            </select>

                            <input
                            type="text"
                            name="other_category"
                            id="other_category"
                            placeholder="Enter category"
                            style="display:none; margin-top:10px;">


                            <label>Add Photo / Video</label>

                            <input
                            type="file"
                            name="media"
                            accept="image/*,video/*">

                        </div>



                        <!-- RIGHT CONTENT -->

                        <div>

                            <label>
                                Information / Content
                            </label>

                            <textarea
                            name="content"
                            placeholder="Write the main content of the article..."
                            required></textarea>

                        </div>

                    </div>

                    <div class="buttons">

                        <button type="reset">
                            Cancel
                        </button>

                        <button type="submit">
                            Add Article
                        </button>

                    </div>

                </form>

            </div>



            <!-- ================= TABLE ================= -->

            <div class="table-card">

                <div class="card-header">

                    <h2>
                        Article Summary
                    </h2>

                </div>

                <table>

                    <thead>

                        <tr>

                            <th>Title</th>

                            <th>Author</th>

                            <th>Category</th>

                            <th>Date Added</th>

                            <th>Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $query = mysqli_query($conn, "SELECT * FROM article_table ORDER BY id DESC");

                    while($row = mysqli_fetch_assoc($query))
                    {

                    ?>

                        <tr>

                            <td>
                                <?php echo $row['title']; ?>
                            </td>

                            <td>
                                <?php echo $row['author']; ?>
                            </td>

                            <td>
                                <?php echo $row['category']; ?>
                            </td>

                            <td>
                                <?php echo $row['date_added']; ?>
                            </td>

                            <td>

                               <button
                                class="edit"
                                type="button"
                                onclick='openArticleModal(
                                <?php echo $row["id"]; ?>,
                                <?php echo json_encode($row["author"]); ?>,
                                <?php echo json_encode($row["title"]); ?>,
                                <?php echo json_encode($row["subtitle"]); ?>,
                                <?php echo json_encode($row["category"]); ?>,
                                <?php echo json_encode($row["read_more_link"]); ?>,
                                <?php echo json_encode($row["content"]); ?>
                                )'>
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <a href="includes/delete.php?id=<?php echo $row['id']; ?>">

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
        <div class="article-container">

            <!-- ================= LEFT ================= -->

            <div class="form-card">

                <h2>Add New Author</h2>

                <form action="includes/insert_author.php"
                    method="POST"
                    enctype="multipart/form-data">

                    <label>Author Name</label>

                    <input
                    type="text"
                    name="author_name"
                    placeholder="Enter author name"
                    required>

                    <label>Display Picture</label>

                    <input
                    type="file"
                    name="author_photo"
                    accept="image/*"
                    required>

                    <div class="buttons">

                        <button type="reset">
                            Cancel
                        </button>

                        <button type="submit">
                            Add Author
                        </button>

                    </div>

                </form>

            </div>



            <!-- ================= RIGHT ================= -->

            <div class="table-card">

                <div class="card-header">

                    <h2>Author Summary</h2>

                </div>

                <table>

                    <thead>

                        <tr>

                            <th>Picture</th>
                            <th>Name</th>
                            <th>Date Created</th>
                            <th>Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $query = mysqli_query($conn,"SELECT * FROM author_table ORDER BY id DESC");

                    while($row = mysqli_fetch_assoc($query))
                    {

                    ?>

                        <tr>

                            <td>

                                <img
                                src="uploads/authors/<?php echo $row['photo']; ?>"
                                width="45"
                                height="45"
                                style="border-radius:50%; object-fit:cover;">

                            </td>

                            <td>

                                <?php echo $row['author_name']; ?>

                            </td>

                            <td>

                                <?php echo $row['date_created']; ?>

                            </td>

                            <td>

                                <button
                                    class="edit"
                                    onclick="openAuthorModal(
                                    '<?php echo $row['id']; ?>',
                                    '<?php echo addslashes($row['author_name']); ?>',
                                    '<?php echo $row['photo']; ?>'
                                    )">

                                        <i class="fa-solid fa-pen"></i>

                                </button>

                                <a href="includes/delete_author.php?id=<?php echo $row['id']; ?>">

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

<!-- ================= EDIT ARTICLE MODAL ================= -->

<div class="modal" id="editArticleModal">

    <div class="modal-box">

        <h2>Edit Article</h2>

        <form action="includes/update.php"
              method="POST"
              enctype="multipart/form-data">

            <input type="hidden" name="id" id="article_id">

            <label>Author</label>
            <input type="text" name="author" id="edit_author">

            <label>Title</label>
            <input type="text" name="title" id="edit_title">

            <label>Subtitle</label>
            <input type="text" name="subtitle" id="edit_subtitle">

            <label>Category</label>
            <input type="text" name="category" id="edit_category">

            <label>Link</label>
            <input type="text" name="link" id="edit_link">

            <label>Content</label>
            <textarea name="content" id="edit_content"></textarea>

            <label>Change Media</label>
            <input type="file" name="media">

            <div class="buttons">

                <button
                type="button"
                onclick="closeArticleModal()">
                    Cancel
                </button>

                <button type="submit">
                    Save Changes
                </button>

            </div>

        </form>

    </div>

</div>
<!-- ================= EDIT AUTHOR MODAL ================= -->

<div class="modal" id="editAuthorModal">

    <div class="modal-box">

        <h2>Edit Author</h2>

        <form action="includes/update_author.php"
              method="POST"
              enctype="multipart/form-data">

            <input type="hidden" name="id" id="edit_id">

            <label>Author Name</label>

            <input
            type="text"
            name="author_name"
            id="edit_author_name"
            required>

            <label>Current Photo</label>

            <br>

            <img
            id="edit_preview"
            src=""
            width="90"
            height="90"
            style="border-radius:50%; object-fit:cover; border:2px solid #ddd; margin-bottom:15px;">

            <label>Change Photo</label>

            <input
            type="file"
            name="author_photo"
            accept="image/*">

            <div class="buttons">

                <button
                type="button"
                onclick="closeAuthorModal()">
                    Cancel
                </button>

                <button type="submit">
                    Save Changes
                </button>

            </div>

        </form>

    </div>

</div>
<script>

// ================= CATEGORY =================

const category = document.querySelector("select[name='category']");
const other = document.getElementById("other_category");

if(category && other){

    category.addEventListener("change", function(){

        if(this.value === "Other"){

            other.style.display = "block";
            other.required = true;

        }else{

            other.style.display = "none";
            other.required = false;
            other.value = "";

        }

    });

}


// ================= AUTHOR MODAL =================

function openAuthorModal(id,name,photo){

    document.getElementById("edit_id").value = id;
    document.getElementById("edit_author_name").value = name;
    document.getElementById("edit_preview").src = "uploads/authors/" + photo;

    document.getElementById("editAuthorModal").style.display = "flex";

}

function closeAuthorModal(){

    document.getElementById("editAuthorModal").style.display = "none";

}


// ================= ARTICLE MODAL =================

function openArticleModal(id,author,title,subtitle,category,link,content){

    document.getElementById("article_id").value = id;
    document.getElementById("edit_author").value = author;
    document.getElementById("edit_title").value = title;
    document.getElementById("edit_subtitle").value = subtitle;
    document.getElementById("edit_category").value = category;
    document.getElementById("edit_link").value = link;
    document.getElementById("edit_content").value = content;

    document.getElementById("editArticleModal").style.display = "flex";
}

function closeArticleModal(){

    document.getElementById("editArticleModal").style.display = "none";

}


// ================= CLOSE MODALS =================

window.onclick = function(e){

    let authorModal = document.getElementById("editAuthorModal");
    let articleModal = document.getElementById("editArticleModal");

    if(authorModal && e.target == authorModal){

        authorModal.style.display = "none";

    }

    if(articleModal && e.target == articleModal){

        articleModal.style.display = "none";

    }

}

</script>
</body>


</html>