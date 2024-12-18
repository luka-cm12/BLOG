<?php
    include_once("templates/header.php");

    if(isset($_GET["id"])){
        
        $posId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if ($post['id'] == $posId) {
                $currentPost = $post;
            }
    
        }
    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $currentPost['title']?>">
            </div>
            <p class="post-content"></p>
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list" >
        <div class="tags-container">
            <?php foreach($currentPost['tags'] as $tag): ?> 
              <li></li>  <a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </div>
            </ul>
            <h3 id="categorias-title">Categorias</h3>
            <ul id="categorias-list">
                <?php foreach($categorias as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
    </aside>
<?php
    include_once("template/footer.php");
?>