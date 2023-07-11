<div id="booking-popup">
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="display: grid">
          <h1 class="modal-title" id="exampleModalLabel">ブッキング</h1>
          <p>ここにブッキングの情報を入力してください</p>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <div class="booking-details">
                <p>年</p>
                <form class="space-modifier" role="search">
                  <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                    <input style="
                                background-color: rgb(0, 0, 0, 0) !important;
                                border: none !important;color:red;    font-size: 24px;
    font-weight: 500;
                              " type="search" class="form-control search_input year" name="search" aria-label="Search" />
                  </div>
                </form>
              </div>
            </div>
            <div class="col d-flex justify-content-center">
              <div class="booking-details">
                <p>月</p>
                <form class="space-modifier" role="search">
                  <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                    <input style="
                                background-color: rgb(0, 0, 0, 0) !important;
                                border: none !important;color:red;    font-size: 24px;
    font-weight: 500;
                              " type="search" class="form-control search_input month" name="search" aria-label="Search" />
                  </div>
                </form>
              </div>
            </div>
            <div class="col d-flex justify-content-center">
              <div class="booking-details">
                <p>日</p>
                <form class="space-modifier" role="search">
                  <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                    <input style="
                                background-color: rgb(0, 0, 0, 0) !important;
                                border: none !important;color:red;    font-size: 24px;
    font-weight: 500;
                              " type="search" class="form-control search_input day" name="search" aria-label="Search" />
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <div class="booking-details">
                <p>時間</p>
                <form class="space-modifier" role="search">
                  <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                    <input style="
                                background-color: rgb(0, 0, 0, 0) !important;
                                border: none !important;color:red;    font-size: 24px;
    font-weight: 500;
                              " type="search" class="form-control search_input hour" name="search" aria-label="Search" />
                  </div>
                </form>
              </div>
            </div>
            <div class="col d-flex justify-content-center">
              <div class="booking-details">
                <p>分</p>
                <form class="space-modifier" role="search">
                  <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                    <input style="
                                background-color: rgb(0, 0, 0, 0) !important;
                                border: none !important;color:red;    font-size: 24px;
    font-weight: 500;
                              " type="search" class="form-control search_input minute" name="search" aria-label="Search" />
                  </div>
                </form>
              </div>
            </div>
            <div class="col d-flex justify-content-center">
              <div class="booking-details">
                <p>AM/PM</p>
                <form class="space-modifier" role="search">
                  <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                    <input style="
                                background-color: rgb(0, 0, 0, 0) !important;
                                border: none !important;color:red;    font-size: 24px;
    font-weight: 500;
                              " type="search" class="form-control search_input ampm" name="search" aria-label="Search" />
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <div class="booking-members">
                <p>人数</p>
                <form class="space-modifier" role="search">
                  <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                    <input style="
                                background-color: rgb(0, 0, 0, 0) !important;
                                border: none !important;
                                height: calc(1.5em + 1.75rem + 2px);color:red;    font-size: 24px;
    font-weight: 400;
                              " type="search" class="form-control search_input num_people" name="search" placeholder="人数を入力してください..." aria-label="Search" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer row" style="justify-content: center">
          <div class="col d-flex justify-content-center">
            <div class="booking-popup-footer">
              <button type="submit" class="btn btn-primary-1 btn-close-popup">
                キャンセル
              </button>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="booking-popup-footer">
              <button type="submit" class="btn btn-primary-2 btn-send-booking">
                OK
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var restaurantId;
  $(document).ready(function() {
    $(".btn-close-popup").click(function() {
      $("#myModal").modal("hide");
    });

    $(".btn-send-booking").click(function() {

      // Check null and validate type
      var year = $(".year").val();
      var month = $(".month").val();
      var day = $(".day").val();
      var hour = $(".hour").val();
      var minute = $(".minute").val();
      var ampm = $(".ampm").val();
      var number_people = $(".num_people").val();

      if (year == "" || month == "" || day == "" || hour == "" || minute == "" || ampm == "" || number_people == "") {
        errorNotification({
          title: "ブッキング",
          message: "ブッキングが失敗しました",
        });
        return;
      } else if (isNaN(year) || isNaN(month) || isNaN(day) || isNaN(hour) || isNaN(minute) || isNaN(number_people)) {
        errorNotification({
          title: "ブッキング",
          message: "ブッキングが失敗しました",
        });
        return;
      } else if (year > 2023 || year < 2021 || month < 1 || month > 12 || day < 1 || day > 31 || hour < 1 || hour > 12 || minute < 0 || minute > 59 || number_people < 1 || number_people > 99) {
        errorNotification({
          title: "ブッキング",
          message: "ブッキングが失敗しました",
        });
        return;
      } else if (ampm != "AM" && ampm != "PM") {
        errorNotification({
          title: "ブッキング",
          message: "ブッキングが失敗しました",
        });
        return;
      } else {
        // Convert to '2023-06-18 10:20:32' format and convert am/pm
        if (ampm == "PM") {
          hour = parseInt(hour) + 12;
        }
        var booking_date_time = year + "-" + month + "-" + day + " " + hour + ":" + minute + ":00";

        // Send ajax get
        fetch("{{ route('booking.index') }}?user_id={{ Auth::user()->id }}&restaurant_id=" + restaurantId + "&number_of_people=" + number_people + "&booking_date_time=" + booking_date_time)
          .then((response) => response.json())
          .then((data) => {
            if (data.success) {
              successNotification({
                title: "ブッキング",
                message: "ブッキングが成功しました",
              });
              $("#myModal").modal("hide");
            } else {
              errorNotification({
                title: "ブッキング",
                message: "ブッキングが失敗しました",
              });
            }
          });
      }
    });
  });
</script>