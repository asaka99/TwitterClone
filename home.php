<?php
//エラー表示あり
ini_set('display_errors',1);
//日本時間にする
date_default_timezone_set('Asia/Tokyo');
//サイトのベースとなるURL
define('HOME_URL','/TwitterClone/');

////////////////////////////////////
//ツイート一覧
////////////////////////////////////
$view_tweets = [
    [
        'user_id' => 1,
        'user_name' => 'taro',
        'user_nickname' => '太郎',
        'user_image_name' => 'sample-person.jpg',
        'tweet_body' => '今プログラミングをしています。',
        'tweet_created_at' => '2021-06-30 12:00:00',
        'like_id' => null,
        'like_count' => 0,
    ],
    [
        'user_id' => 2,
        'user_name' => 'jiro',
        'user_nickname' => '次郎',
        'user_image_name' => null,
        'tweet_body' => 'コワーキングスペースをオープンしました！',
        'tweet_created_at' => '2021-06-29 13:00:00',
        'like_id' => 1,
        'like_count' => 1,
    ],
];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ホーム画面です">
    <title>Twitter Clone</title>
    <link rel="icon" href="<?php echo  HOME_URL ;?>Views/img/logo-twitterblue.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="<?php echo  HOME_URL ;?>Views/css/style.css" rel="stylesheet">

</head>
<body class="home">
    <div class="container">
        <div class="side">
            <div class="side-inner">
                <ul class="nav flex-colmun">
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="<?php echo  HOME_URL ;?>Views/img/logo-twitterblue.svg" alt="" class="icon"></a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="<?php echo  HOME_URL ;?>Views/img/icon-home.svg" alt=""></a></li>
                    <li class="nav-item"><a href="search.php" class="nav-link"><img src="<?php echo  HOME_URL ;?>Views/img/icon-search.svg" alt=""></a></li>
                    <li class="nav-item"><a href="notification.php" class="nav-link"><img src="<?php echo  HOME_URL ;?>Views/img/icon-notification.svg" alt=""></a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link"><img src="<?php echo  HOME_URL ;?>Views/img/icon-profile.svg" alt=""></a></li>
                    <li class="nav-item"><a href="post.php" class="nav-link"><img src="<?php echo  HOME_URL ;?>Views/img/icon-post-tweet-twitterblue.svg" alt="" class="post-tweet"></a></li>
                    <li class="nav-item my-icon"><img src="<?php echo  HOME_URL ;?>Views/img_uploaded/user/sample-person.jpg" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="main-header">
                <h1>ホーム</h1>
            </div>
            <div class="tweet-post">
                <div class="my-icon">
                    <img src="<?php echo  HOME_URL ;?>Views/img_uploaded/user/sample-person.jpg" alt="">
                </div>
                <div class="input-area">
                    <form action="post.php" method="post" enctype="multipart/form-data">
                        <textarea name="body" placeholder="いまどうしてる？" maxlength="140"></textarea>
                        <div class="bottom-area">
                            <div class="mb-0">
                                <input type="file" name="image" class="form-control form-control-sm">
                            </div>
                            <button class="btn" type="submit">つぶやく</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="ditch"></div>

            <?php if (empty($view_tweets)): ?>
                <p class = "p-3">ツイートがまだありません</p>
            <?php else: ?>
                <div class="tweet-list">
                            <div class="tweet">
                                <div class="user">
                                    <a href="profile.php?user_id=1">
                                        <img src="<?php echo  HOME_URL ;?>Views/img_uploaded/user/sample-person.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="name">
                                        <a href="profile.php?user_id=1">
                                            <span class="nickname">太郎</span>
                                            <span class="user-name">@taro ・23日前</span>
                                        </a>
                                    </div>
                                    <p>今プログラミングをしています。</p>
                                    <div class="icon-list">
                                        <div class="like">
                                            <img src="<?php echo  HOME_URL ;?>Views/img/icon-heart.svg" alt="">
                                        </div>
                                        <div class="like-count">0</div>
                                    </div>
                                </div>
                            </div>            

                            <div class="tweet">
                                <div class="user">
                                    <a href="profile.php?user_id=1">
                                        <img src="<?php echo  HOME_URL ;?>Views/img/icon-default-user.svg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="name">
                                        <a href="profile.php?user_id=1">
                                            <span class="nickname">次郎</span>
                                            <span class="user-name">@jiro ・24日前</span>
                                        </a>
                                    </div>
                                    <p>コワーキングスペースをオープンしました！</p>
                                    <img src="<?php echo  HOME_URL ;?>Views/img_uploaded/tweet/sample-post.jpg" alt="" class="post-image">
                                    <div class="icon-list">
                                        <div class="like">
                                            <img src="<?php echo  HOME_URL ;?>Views/img/zicon-heart-twitterblue.svg" alt="">
                                        </div>
                                        <div class="like-count">1</div>
                                    </div>
                                </div>
                            </div>            
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>