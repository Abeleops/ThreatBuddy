<?php
    include "includes/db.php";

    /* ==========================
    LOAD CATEGORIES
    ========================== */

    $categories = mysqli_query($conn, "
        SELECT DISTINCT category
        FROM article_table
        WHERE category IS NOT NULL
        AND category <> ''
        ORDER BY category ASC
    ");

    /* ==========================
    TIME AGO FUNCTION
    ========================== */

    date_default_timezone_set("Asia/Manila");

    function timeAgo($datetime)
    {
        $time = strtotime($datetime);
        $diff = time() - $time;

        if ($diff < 60) {
            return $diff . " seconds ago";
        }

        if ($diff < 3600) {
            return floor($diff / 60) . " minutes ago";
        }

        if ($diff < 86400) {
            return floor($diff / 3600) . " hours ago";
        }

        if ($diff < 604800) {
            return floor($diff / 86400) . " days ago";
        }

        return date("M d, Y", $time);
    }

    /* ==========================
    ARTICLE QUERY
    ========================== */

    $where = [];

    /* CATEGORY FILTER */

    if (isset($_GET['category']) && $_GET['category'] != "") {

        $category = mysqli_real_escape_string($conn, $_GET['category']);

        $where[] = "category = '$category'";
    }

    /* SEARCH FILTER */

    if (isset($_GET['search']) && trim($_GET['search']) != "") {

        $search = mysqli_real_escape_string($conn, trim($_GET['search']));

        $where[] = "(
            author LIKE '%$search%' OR
            title LIKE '%$search%' OR
            subtitle LIKE '%$search%' OR
            content LIKE '%$search%'
        )";
    }

    /* BUILD SQL */

    $sql = "SELECT *
            FROM article_table";

    if (!empty($where)) {

        $sql .= " WHERE " . implode(" AND ", $where);

    }

    $sql .= " ORDER BY date_added DESC";

    $result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>ThreatBuddy</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

    <nav class="navbar">

        <div class="nav-left">

            <a href="index.php" class="logo">
                <img src="assets/img/LogoTB.png" alt="">
            </a>

            <form action="index.php" method="GET" class="search-box">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input
                    type="text"
                    name="search"
                    placeholder="Search articles, news, threats..."
                    value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">

            </form>


            <div class="nav-center">

                <a href="pages/error404/index.php" class="active">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>

                <a href="pages/error404/index.php">
                    <i class="fa-regular fa-newspaper"></i>
                    <span>News</span>
                </a>

                <a href="pages/error404/index.php">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>Courses</span>
                </a>

                <a href="pages/error404/index.php">
                    <i class="fa-solid fa-gamepad"></i>
                    <span>Gaming</span>
                </a>

            </div>

        </div>


        <div class="nav-right">

            <a href="#">
                <i class="fa-regular fa-bell"></i>
            </a>

            <a href="#">
                <i class="fa-solid fa-ellipsis"></i>
            </a>

            <a href="#" class="signin-btn">
                Sign In
            </a>

            <!-- <button class="dark-btn">
                <i class="fa-solid fa-moon"></i>
            </button> -->

        </div>

    </nav>
    <div class="wrapper">
        <div class="main-container">

            <!-- LEFT SIDEBAR -->

            <div class="left-sidebar">

                <div class="login-card">

                    <div class="profile">

                        <img src="assets/img/default_image.png" alt="">

                        <h4>Welcome to ThreatBuddy!</h4>

                        <p>Sign in to access your personalized cybersecurity profile</p>

                    </div>

                    <a href="#" class="login-btn">Log In</a>

                    <a href="#" class="create-btn">Create Account</a>

                </div>

                <div class="category-card">

                    <ul>

                        <!-- ALL ARTICLES -->
                        <li>
                            <a href="index.php">
                                <i class="fa-solid fa-house"></i>
                                <span>All Articles</span>
                            </a>
                        </li>

                        <!-- CATEGORIES -->
                        <?php while($cat = mysqli_fetch_assoc($categories)){ ?>

                        <li>
                            <a href="index.php?category=<?php echo urlencode($cat['category']); ?>">
                                <i class="fa-solid fa-angle-right"></i>
                                <span><?php echo htmlspecialchars($cat['category']); ?></span>
                            </a>
                        </li>

                        <?php } ?>

                        <!-- SAVED ARTICLES -->
                        <li>
                            <a href="#">
                                <i class="fa-regular fa-bookmark"></i>
                                <span>Saved Articles</span>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class="main-content">

                <!-- LEFT CONTENT -->
                <div class="content">

                    <!-- SECTION HEADER -->
                    <div class="section-header">
                        <h3>Tech Stories</h3>
                        <a href="pages/error404/index.php">See all</a>
                    </div>

                    <!-- STORIES -->
                    <div class="stories">

                        <div class="story">
                            <img src="assets/img/1.png" alt="">
                            <p>FEU Tech partners with OpenAI</p>
                        </div>

                        <div class="story">
                            <img src="assets/img/2.png" alt="">
                            <p>Satellite data helps trace Mindanao...</p>
                        </div>

                        <div class="story">
                            <img src="assets/img/3.png" alt="">
                            <p>Chinese-linked hackers targeted...</p>
                        </div>

                        <div class="story">
                            <img src="assets/img/4.png" alt="">
                            <p>Why an AI company cleaned...</p>
                        </div>

                        <div class="story">
                            <img src="assets/img/5.png" alt="">
                            <p>Government websites become...</p>
                        </div>

                    </div>

                    <!-- ARTICLES -->
                    <div class="feed">

                        <?php while($row = mysqli_fetch_assoc($result)) { ?>

                        <div class="article-card">

                            <div class="article-header">

                                <div class="article-author">

                                    <img src="../Admin/pages/ArticleData/uploads/logoTB.png" alt="Logo">

                                    <div class="article-author-info">
                                        <h4><?php echo htmlspecialchars($row['author']); ?></h4>

                                        <p>
                                            <?php echo timeAgo($row['date_added']); ?>
                                            •
                                            <?php echo htmlspecialchars($row['category']); ?>
                                        </p>
                                    </div>

                                </div>

                                <a href="#">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </a>

                            </div>

                            <div class="article-content">

                                <h2><?php echo htmlspecialchars($row['title']); ?></h2>

                                <p><?php echo htmlspecialchars($row['subtitle']); ?></p>

                                <?php if(!empty($row['media'])) { ?>

                                <div class="article-image">
                                    <img src="../Admin/pages/ArticleData/uploads/<?php echo htmlspecialchars($row['media']); ?>" alt="">
                                </div>

                                <?php } ?>

                            </div>

                            <div class="article-actions">

                                <a href="#">
                                    <i class="fa-regular fa-thumbs-up"></i>
                                    Like
                                </a>

                                <a href="#">
                                    <i class="fa-regular fa-comment"></i>
                                    Comment
                                </a>

                                <a href="#">
                                    <i class="fa-solid fa-share"></i>
                                    Share
                                </a>

                                <a href="#">
                                    <i class="fa-regular fa-bookmark"></i>
                                    Favorite
                                </a>

                            </div>

                            <div class="article-footer">

                                <a href="#" class="follow-btn">
                                    Follow
                                </a>

                                <a href="<?php echo htmlspecialchars($row['read_more_link']); ?>" target="_blank" class="read-btn">
                                    Read More
                                </a>

                            </div>

                        </div>

                        <?php } ?>

                    </div>

                </div>

                <!-- RIGHT SIDEBAR -->
                <div class="right-sidebar">

                    <?php
                    $popular = mysqli_query($conn,"
                        SELECT *
                        FROM author_table
                        WHERE popular='Yes'
                        ORDER BY followers DESC
                        LIMIT 5
                    ");
                    ?>

                    <div class="popular-card">

                        <div class="card-title">
                            <h3>Popular Sources</h3>
                        </div>

                        <?php while($author = mysqli_fetch_assoc($popular)){ ?>

                        <div class="source">

                            <img src="../Admin/pages/ArticleData/uploads/authors/<?php echo htmlspecialchars($author['photo']); ?>" alt="">

                            <div class="source-info">
                                <h4><?php echo htmlspecialchars($author['author_name']); ?></h4>
                                <p><?php echo number_format($author['followers']); ?> Followers</p>
                            </div>

                            <a href="#" class="mini-follow">Follow</a>

                        </div>

                        <?php } ?>

                    </div>

                    <!-- Gaming -->
                    <div class="gaming-card">
                        
                        <div class="card-title">
                            <h3>Gaming</h3>
                        </div>
                        
                        <div class="game-item">
                            <img src="assets/img/game1.png" alt="">
                            <div>
                                <h4>Cyber Shield: Breach Defense</h4>
                                <p>Play now</p>
                            </div>
                        </div>

                        <div class="game-item">
                            <img src="assets/img/game2.png" alt="">
                            <div>
                                <h4>Phantom Hackers</h4>
                                <p>Play now</p>
                            </div>
                        </div>

                        <div class="game-item">
                            <img src="assets/img/game3.png" alt="">
                            <div>
                                <h4>Firewall Frenzy</h4>
                                <p>Play now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    const stories = document.querySelector(".stories");

    let isDown = false;
    let startX;
    let scrollLeft;

    stories.addEventListener("mousedown", (e) => {
        isDown = true;
        startX = e.pageX - stories.offsetLeft;
        scrollLeft = stories.scrollLeft;
    });

    stories.addEventListener("mouseleave", () => {
        isDown = false;
    });

    stories.addEventListener("mouseup", () => {
        isDown = false;
    });

    stories.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - stories.offsetLeft;
        const walk = (x - startX) * 1.5;
        stories.scrollLeft = scrollLeft - walk;
    });
    </script>

</body>

</html>