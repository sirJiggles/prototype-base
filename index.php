<?php include('includes/header.inc.php'); ?>

<!-- Main content -->
<div id="main" role="main">
    
    <div class="row">

        <section class="col grid-9">

             <div id="gallery-container">

                <div id="gallery">

                    <ul id="gallery-inner">
                        
                        <?php for($i = 0; $i < 15; $i ++): ?>
                        
                        <li <?php echo($i == 0) ? 'class="active"' : ''; ?> >
                            <header>
                                <h3>Title for slide <?php echo $i; ?></h3>
                            </header>
                            <figure>
                                <img src="http://placekitten.com/g/200/200" data-high-res="http://placekitten.com/g/570/400" />
                                <figcaption>
                                    This is the text about slide <?php echo $i; ?>
                                </figcaption>
                            </figure>
                        </li>

                        <?php endfor; ?>
                        
                     
                    </ul>

                    <div id="progress-bar">
                        <div id="status"></div>
                    </div>

                    <!-- next and previous buttons -->
                    <a href="#" rel="prev" id="previous-button" class="gallery-buttons previous" title="Previous">&lsaquo;</a>
                    <a href="#" rel="next" id="next-button" title="Next" class="gallery-buttons next">&rsaquo;</a>
                </div>

                <div id="thumbnails-wrapper">
                    <ul id="thumbnails-inner">
                        <?php for($i = 0; $i < 15; $i ++): ?>
   
                        <li <?php echo($i == 0) ? 'class="active"' : ''; ?>><a href="#"><img src="http://placekitten.com/g/70/70" /></a></li>

                        <?php endfor; ?>
                        
                       
                    </ul>

                    <a href="#" rel="prev" id="previous-button-icons" class="gallery-buttons-thumbs previous" title="Previous">&lsaquo;</a>
                    <a href="#" rel="next" id="next-button-icons" title="Next" class="gallery-buttons-thumbs next">&rsaquo;</a>
                </div>
            </div>

        </section>

        <aside class="grid-3 col end layout">
            <h2>MODULE TO LEFT</h2>
        </aside>
    </div>
    
    <div class="row">
        <div class="grid-4 layout col">
            <h2>COL 4 ONE</h2>
        </div>
        <div class="grid-4 layout col">
            <h2>COL 4 TWO</h2>
        </div>
        <div class="grid-4 layout col end">
            <h2>COL 4 THREE</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="grid-6 layout col">
            <h2>COL 6 ONE</h2>
        </div>
        <div class="grid-3 layout col">
            <h2>COL 3 ONE</h2>
        </div>
        <div class="grid-3 layout col end">
            <h2>COL 3 TWO</h2>
        </div>
    </div>
    

</div>

<?php include('includes/footer.inc.php');?>