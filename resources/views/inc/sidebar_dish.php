<div class="sidebar col-lg-3 col-md-6 col-sm-12 p-4">
  <div class="card">
    <div class="card-body">
      <div class="sidebar-title d-flex">
        <i class="category-title fa-solid fa-bars mr-4"></i>
        <h5 class="category-title card-title">カテゴリィ</h5>
      </div>
      <hr>
      <div class="category-item d-flex">
        <i class="fa-solid fa-greater-than"></i>
        <h5 class="card-title dish dish_type1" onclick="activeDish(1)">ビーフン</h5>
      </div>
      <div class="category-item d-flex">
        <i class="fa-solid fa-greater-than"></i>
        <h5 class="card-title dish dish_type2" onclick="activeDish(2)">Pho</h5>
      </div>
      <div class="category-item d-flex">
        <i class="fa-solid fa-greater-than"></i>
        <h5 class="card-title dish dish_type3" onclick="activeDish(3)">パン</h5>
      </div>
      <div class="category-item d-flex">
        <i class="fa-solid fa-greater-than"></i>
        <h5 class="card-title dish dish_type4" onclick="activeDish(4)">米</h5>
      </div>
    </div>
  </div>
</div>

<script>
  function activeDish(dishId) {
    $('.dish_type1').removeClass('active');
    $('.dish_type2').removeClass('active');
    $('.dish_type3').removeClass('active');
    $('.dish_type4').removeClass('active');
    $('.dish_type' + dishId).addClass('active');

    $('.dish_type' + dishId).parent().find('.fa-greater-than').css('color', 'red')
    $('.dish_type' + dishId).parent().find('.fa-greater-than').show();
  }
</script>