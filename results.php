<?php session_start(); ?>
<?php
if(!isset($_GET['id'])){
    header('Location: index.php');
}
$id = intval($_GET['id']);
?>
<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<div class="container">
    <div class="row">
        <h2></h2>
    </div>
    <div class="row">
        <div class="col">
            <ul id="optionsUl" class="list-group">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <canvas id="pollChart"></canvas>
        </div>
    </div>

</div>


<script src="js/common.js"></script>
<script src="js/results.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>


<?php include_once 'layout/bottom.inc.php'; ?>