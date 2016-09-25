<?php Yii::import('application.modules.news.NewsModule'); ?>

<?php if (isset($models) && $models != []): ?>
    <section>
        <header>
            <h1 class="index-H">Наш блог</h1>
        </header>
        <article class="flex blog">

            <?php if (isset($models) && $models != []): ?>
                <ul>
                    <?php foreach ($models as $model): 
                        $url = Yii::app()->urlManager->createUrl( '/news/news/view/', array('slug' => $model->slug) );
                    ?>
                        <a href="<?php echo $url; ?>" class="item more-after" style="background-image: url('<?php echo $model->getImageUrl(); ?>')">
                            <h4><?php echo $model->date;?></h4>
                            <h3><?php echo $model->title; ?></h3>
                            <?php echo $model->short_text; ?>
                        </a>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            
        </article>
    </section>
<?php endif; ?>