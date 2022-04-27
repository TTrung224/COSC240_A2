<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Login</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="profile-page-profile">
          <div class="profile-page-pfp">
            <img src="https://images.unsplash.com/photo-1617633840837-b9164835073f?w=152&h=152&fit=crop&crop=faces" alt="">
          </div>
          <div class="profile-page-user-settings">
            <h1 class="profile-page-user-name">kevin_</h1>
            <button class="btn profile-page-profile-edit-btn">Edit Profile</button>
            <button class="btn profile-page-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
          </div>
          <div class="profile-page-stats">
            <ul>
              <li><span class="profile-page-stat-count">4</span> posts</li>
              <li><span class="profile-page-stat-count">204</span> followers</li>
              <li><span class="profile-page-stat-count">158</span> following</li>
            </ul>
          </div>
          <div class="profile-page-bio">
            <p class="profile-page-real-name">Kevin</p>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
          </div>
        </div>
        <!-- End of profile section -->
      </div>
      <!-- End of container -->
    </header>
    <main>
      <div class="container">
        <div class="gallery">
          <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
              </ul>
            </div>
          </div>
          <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 89</li>
                <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 5</li>
              </ul>
            </div>
          </div>
          <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-type">
              <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
            </div>
            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 42</li>
                <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
              </ul>
            </div>
          </div>
          <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1502630859934-b3b41d18206c?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-type">
              <span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>
            </div>
            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 38</li>
                <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End of gallery -->
        <div class="loader"></div>
      </div>
      <!-- End of container -->
    </main>
  </body>
</html>