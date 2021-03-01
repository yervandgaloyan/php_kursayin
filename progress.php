<?php require_once("header.php");?>
<?php require_once("navBar.php");?>

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/progress.css">
<div class="container-fluid" style="min-height:90vh">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">HTML learning progress!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti perferendis, itaque tempore quaerat blanditiis quo minima, atque iure harum ut reiciendis? Cum quis voluptatum autem at, aperiam tenetur delectus dolore!</p>
                    <!-- progressbar -->
                    <br/>
                    <ul id="progressbar">
                        <li class="<?=($main->progress >= 1)? 'active' : ''?>" id="account"><strong>Introduction</strong></li>
                        <li class="<?=($main->progress >= 2)? 'active' : ''?>" id="personal"><strong>Basic</strong></li>
                        <li class="<?=($main->progress >= 3)? 'active' : ''?>" id="payment"><strong>Element</strong></li>
                        <li class="<?=($main->progress >= 4)? 'active' : ''?>" id="confirm"><strong>Coming Soon...</strong></li>
                    </ul>
                <button type="button" class="btn btn-light" onclick="window.location.replace('index.php');
">Continue Learning</button>   
            </div>
        </div>
    </div>
</div>


<?php require_once("footer.php");?>