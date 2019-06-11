<?php
  require_once "../templates/headers/adminIndex.html";

      function operation(){
        if(isset($_POST['add'])) {
          echo '<span>';
            echo '<label for="uname">Item:</label>';
            echo '<input type="text" id="username" class="username" name="item" value="" />';
          echo '</span> <br />';
          echo '<span>';
            echo '<label for="uname">Unit:</label>';
            echo '<input type="text" id="username" class="username" name="unit" value="" />';
          echo '</span> <br />';
          echo '<span>';
            echo '<label for="uname">Unit Price:</label>';
            echo '<input type="text" id="username" class="username" name="unitprc" value="" />';
          echo '</span> <br />';
            echo '<input type="submit" name="add" value="Add New Item" /><br />';
          echo '<span>';
            echo '<button type="submit" name="back" value="User Home">Admin Home</button>';
          echo '</span> <br />';
        } else if(isset($_POST['view'])){
          echo '<input type="submit" name="view" value="View List" />';
        } else if(isset($_POST['update'])){
            echo '<input type="submit" id="input" class="input clickable" name="eview" value="Editable View" />';
        } else if(isset($_POST['back'])) {
          header("Location: index.php");
        } else {
              die("DENIED");
          }
      }

    ?>


    <div class="main-div">
      <div id="heading" class="heading">
        <h2 class="center">Select a Shop</h2>
      </div>
      <div class="database center">
        <form class="form form-index" action="listUpdate.php" method="post"><div id="heading" class="sub-heading">
          <h4 class="center">Available currently:</h4>
        </div>
        <div class="shops">
        <section class="block">
          <input type="radio" name="shop" value="panditji" checked="checked" />Pandit Ji
        </section> <br />
        <section class="block">
          <input type="radio" name="shop" value="patanjali" />Patanjali
        </section> <br />
        <section class="block">
          <input type="radio" name="shop" value="others" />Other (Mandi etc.)
        </section> <br />
        </div>

          <section class="button-center">
            <?= operation(); ?>
            <input type="submit" id="input" class="input clickable" name="back" value="Back" />
            <!--<input type="submit" name="delete" value="Delete" />-->
          </section> <br />
        </form>
      </div>
    </div>

<?php
  require_once "../templates/footers/basicAll.html";
?>
