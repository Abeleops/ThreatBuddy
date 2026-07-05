

<?php
include "includes/db.php";

$categories=mysqli_query($conn,"
SELECT DISTINCT category
FROM library_table
WHERE category IS NOT NULL AND category<>''
ORDER BY category ASC
");
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

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<nav class="navbar">

<div class="nav-left">

<a href="index.php" class="logo">
<img src="assets/img/LogoTB.png" alt="">
</a>

<div class="search-box">
<i class="fa-solid fa-magnifying-glass"></i>
<input type="text" placeholder="Search articles, news, threats...">
</div>


<div class="nav-center">

<a href="#" class="active">
<i class="fa-solid fa-house"></i>
<span>Home</span>
</a>

<a href="#">
<i class="fa-regular fa-newspaper"></i>
<span>News</span>
</a>

<a href="#">
<i class="fa-solid fa-graduation-cap"></i>
<span>Courses</span>
</a>

<a href="#">
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

<button class="dark-btn">
<i class="fa-solid fa-moon"></i>
</button>

</div>

</nav>

<div class="main-container">

<!-- LEFT SIDEBAR -->

<div class="left-sidebar">

<div class="login-card">

<div class="profile">

<img src="assets/img/default.png" alt="">

<h4>Welcome to ThreatBuddy!</h4>

<p>Sign in to access your personalized cybersecurity profile</p>

</div>

<a href="#" class="login-btn">Log In</a>

<a href="#" class="create-btn">Create Account</a>

</div>

<div class="category-card">

<div class="card-title">
<i class="fa-solid fa-newspaper"></i>
<span>Latest News</span>
</div>

<ul>

<?php while($cat=mysqli_fetch_assoc($categories)){ ?>

<li>
<a href="#">
<i class="fa-solid fa-angle-right"></i>
<span><?php echo htmlspecialchars($cat['category']); ?></span>
</a>
</li>

<?php } ?>

<li>
<a href="#">
<i class="fa-regular fa-bookmark"></i>
<span>Saved Articles</span>
</a>
</li>

</ul>

</div>

</div>

<!-- CONTENT -->

<div class="content">

<div class="section-header">

<h3>Tech Stories</h3>

<a href="#">
See all
</a>

</div>

<div class="stories">

<div class="story">
<img src="assets/img/1.png">
<p>FEU Tech partners with OpenAI</p>
</div>

<div class="story">
<img src="assets/img/2.png">
<p>Satellite data helps trace Mindanao...</p>
</div>

<div class="story">
<img src="assets/img/3.png">
<p>Chinese-linked hackers targeted...</p>
</div>

<div class="story">
<img src="assets/img/4.png">
<p>Why an AI company cleaned...</p>
</div>

<div class="story">
<img src="assets/img/5.png">
<p>Government websites become...</p>
</div>

</div>

<?php
    $popular=mysqli_query($conn,"
    SELECT *
    FROM author_table
    WHERE popular='Yes'
    ORDER BY followers DESC
    LIMIT 5
    ");
?>

<div class="article-card">

<div class="article-header">

<div class="article-author">
<img src="../Admin/pages/ArticleData/uploads/authors/1783269893_rapplerpng.png" alt="">
<div>
<h4>ThreatBuddy News</h4>
<span>2 hours ago • Technology</span>
</div>
</div>

<a href="#">
<i class="fa-solid fa-ellipsis"></i>
</a>

</div>

<div class="article-body">

<h2>OpenAI announces new cybersecurity initiatives for educational institutions</h2>

<p>
OpenAI has announced several cybersecurity initiatives aimed at helping educational institutions improve digital security awareness, strengthen infrastructure, and provide students with safer AI-powered learning environments.
</p>

<img src="assets/img/certification.png" alt="">

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

<a href="#" class="read-btn">
Read More
</a>

</div>

</div>

<div class="article-card">

<div class="article-header">

<div class="article-author">
<img src="assets/img/default.png" alt="">
<div>
<h4>ThreatBuddy Security</h4>
<span>Yesterday • Cybersecurity</span>
</div>
</div>

<a href="#">
<i class="fa-solid fa-ellipsis"></i>
</a>

</div>

<div class="article-body">

<h2>Researchers discover new phishing campaign targeting Filipino users</h2>

<p>
Security researchers have identified a phishing campaign distributing fake login portals through SMS and social media advertisements. Users are advised to verify website URLs before entering credentials.
</p>

<img src="assets/img/tech2.jpg" alt="">

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

<a href="#" class="read-btn">
Read More
</a>

</div>

</div>

</div>

<!-- RIGHT SIDEBAR -->

<div class="right-sidebar">

<div class="popular-card">

<div class="card-title">

<h3>Popular Sources</h3>

</div>

<?php while($row=mysqli_fetch_assoc($popular)){ ?>

<div class="source">

<img src="../Admin/pages/ArticleData/uploads/authors/<?php echo htmlspecialchars($row['photo']); ?>" alt="">

<div class="source-info">

<h4><?php echo htmlspecialchars($row['author_name']); ?></h4>

<p><?php echo number_format($row['followers']); ?> Followers</p>

</div>

<a href="#" class="mini-follow">
Follow
</a>

</div>

<?php } ?>

</div>

<div class="gaming-card">

<div class="card-title">

<h3>Gaming</h3>

</div>

<div class="game-item">

<img src="assets/img/game1.png" alt="">

<div>

<h4>Valorant Patch 11.02 Released</h4>

<p>Read More</p>

</div>

</div>

<div class="game-item">

<img src="assets/img/game2.png" alt="">

<div>

<h4>League of Legends New Champion</h4>

<p>Read More</p>

</div>

</div>

<div class="game-item">

<img src="assets/img/game3.png" alt="">

<div>

<h4>Counter-Strike 2 Major Updates</h4>

<p>Read More</p>

</div>

</div>

<div class="ready-card">

<h3>More Categories</h3>

<div class="ready-item">
<img src="assets/img/tech1.jpg" alt="">
<div>
<h4>Artificial Intelligence</h4>
<p>Coming Soon</p>
</div>
</div>

<div class="ready-item">
<img src="assets/img/tech2.jpg" alt="">
<div>
<h4>Cybersecurity</h4>
<p>Coming Soon</p>
</div>
</div>

<div class="ready-item">
<img src="assets/img/tech3.jpg" alt="">
<div>
<h4>Programming</h4>
<p>Coming Soon</p>
</div>
</div>

<div class="ready-item">
<img src="assets/img/tech4.jpg" alt="">
<div>
<h4>Networking</h4>
<p>Coming Soon</p>
</div>
</div>

<div class="ready-item">
<img src="assets/img/tech5.jpg" alt="">
<div>
<h4>Ethical Hacking</h4>
<p>Coming Soon</p>
</div>
</div>

</div>

</div>

</div>



<script>

const stories=document.querySelector(".stories");

let isDown=false;
let startX;
let scrollLeft;

stories.addEventListener("mousedown",(e)=>{
isDown=true;
startX=e.pageX-stories.offsetLeft;
scrollLeft=stories.scrollLeft;
});

stories.addEventListener("mouseleave",()=>{
isDown=false;
});

stories.addEventListener("mouseup",()=>{
isDown=false;
});

stories.addEventListener("mousemove",(e)=>{
if(!isDown)return;
e.preventDefault();
const x=e.pageX-stories.offsetLeft;
const walk=(x-startX)*1.5;
stories.scrollLeft=scrollLeft-walk;
});

</script>

</body>
</html>