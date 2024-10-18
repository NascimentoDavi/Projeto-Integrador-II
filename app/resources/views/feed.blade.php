<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="FeedCss.css">
    <style>
        body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        background-color: #f1f1f1;
        }
        .feed-container {
        max-width: 600px;
        margin: 20px auto;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        }
        .post {
        margin-bottom: 20px;
        }
        .image-container {
        width: 100%;
        height: 400px; 
        background-color: #ccc; 
        border-radius: 5px;
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5em;
        }
        .username {
        font-weight: bold;
        margin: 10px 0;
        font-size: 1.1em;
        }
        .post-description {
        color: #555;
        margin-top: 5px;
        }
        .likes {
        font-weight: bold;
        margin-top: 5px;
        }
        .post-actions {
        display: flex;
        align-items: center;
        margin-top: 10px;
        }
        .post-actions i {
        cursor: pointer;
        font-size: 1.5em;
        color: #333;
        margin-right: 15px; 
        }
    </style>
</head>
<body>
    <div class="tab-pane fade show active" id="services" role="tabpanel" aria-labelledby="services-tab">
        <h3>Feed</h3>
    </div>
    <br>
    <div class="container">
        <div class="post">
            <div class="feed-container">
                <div class="username">Usuário 1</div>
                <div class="image-container">Imagem 1</div>
                <div class="post-actions">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-share"></i>
                </div>
                <div class="likes">1.5k likes</div>
                <div class="post-description">Descrição do post 1</div>
            </div>
        </div>
        <div class="post">
            <div class="feed-container">
                <div class="username">Usuário 2</div>
                <div class="image-container">Imagem 2</div>
                <div class="post-actions">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-share"></i>
                </div>
                <div class="likes">800 likes</div>
                <div class="post-description">Descrição do post 2</div>
            </div>
        </div>
        <div class="post">
            <div class="feed-container">
                <div class="username">Usuário 3</div>
                <div class="image-container">Imagem 3</div>
                <div class="post-actions">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-share"></i>
                </div>
                <div class="likes">1.2k likes</div>
                <div class="post-description">Descrição do post 3</div>
            </div>
        </div>
        <div class="post">
            <div class="feed-container">
                <div class="username">Usuário 4</div>
                <div class="image-container">Imagem 4</div>
                <div class="post-actions">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-share"></i>
                </div>
                <div class="likes">950 likes</div>
                <div class="post-description">Descrição do post 4</div>
            </div>
        </div>
        <div class="post">
            <div class="feed-container">
                <div class="username">Usuário 5</div>
                <div class="image-container">Imagem 5</div>
                <div class="post-actions">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-share"></i>
                </div>
                <div class="likes">1.1k likes</div>
                <div class="post-description">Descrição do post 5</div>
            </div>
        </div>
        <div class="post">
            <div class="feed-container">
                <div class="username">Usuário 6</div>
                <div class="image-container">Imagem 6</div>
                <div class="post-actions">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-share"></i>
                </div>
                <div class="likes">600 likes</div>
                <div class="post-description">Descrição do post 6</div>
            </div>
        </div>
        <div class="post">
            <div class="feed-container">
                <div class="username">Usuário 7</div>
                <div class="image-container">Imagem 7</div>
                <div class="post-actions">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-comment"></i>
                    <i class="fas fa-share"></i>
                </div>
                <div class="likes">300 likes</div>
                <div class="post-description">Descrição do post 7</div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
