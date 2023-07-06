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
                              " type="search" class="form-control search_input year" name="search" placeholder="2023" aria-label="Search" />
                    <div class="input-group-append">
                      <div class="dropdown input-group-append">
                        <button class="btn btn-link dropdown" style="
                                    background-color: #ffdede;
                                    height: calc(1.5em + 1.75rem + 2px);
                                  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-chevron-down dropdown-icon"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">2023</a>
                          <a class="dropdown-item" href="#">2022</a>
                          <a class="dropdown-item" href="#">2021</a>
                        </div>
                      </div>
                    </div>
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
                              " type="search" class="form-control search_input month" name="search" placeholder="01" aria-label="Search" />
                    <div class="input-group-append">
                      <div class="dropdown input-group-append">
                        <button class="btn btn-link dropdown" style="
                                    background-color: #ffdede;
                                    height: calc(1.5em + 1.75rem + 2px);
                                  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-chevron-down dropdown-icon"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">01</a>
                          <a class="dropdown-item" href="#">02</a>
                          <a class="dropdown-item" href="#">03</a>
                          <a class="dropdown-item" href="#">04</a>
                          <a class="dropdown-item" href="#">05</a>
                          <a class="dropdown-item" href="#">06</a>
                          <a class="dropdown-item" href="#">07</a>
                          <a class="dropdown-item" href="#">08</a>
                          <a class="dropdown-item" href="#">09</a>
                          <a class="dropdown-item" href="#">10</a>
                          <a class="dropdown-item" href="#">11</a>
                          <a class="dropdown-item" href="#">12</a>
                        </div>
                      </div>
                    </div>
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
                              " type="search" class="form-control search_input day" name="search" placeholder="01" aria-label="Search" />
                    <div class="input-group-append">
                      <div class="dropdown input-group-append">
                        <button class="btn btn-link dropdown" style="
                                    background-color: #ffdede;
                                    height: calc(1.5em + 1.75rem + 2px);
                                  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-chevron-down dropdown-icon"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">01</a>
                          <a class="dropdown-item" href="#">02</a>
                          <a class="dropdown-item" href="#">03</a>
                          <a class="dropdown-item" href="#">04</a>
                          <a class="dropdown-item" href="#">05</a>
                          <a class="dropdown-item" href="#">06</a>
                          <a class="dropdown-item" href="#">07</a>
                          <a class="dropdown-item" href="#">08</a>
                          <a class="dropdown-item" href="#">09</a>
                          <a class="dropdown-item" href="#">10</a>
                          <a class="dropdown-item" href="#">11</a>
                          <a class="dropdown-item" href="#">12</a>
                          <a class="dropdown-item" href="#">13</a>
                          <a class="dropdown-item" href="#">14</a>
                          <a class="dropdown-item" href="#">15</a>
                        </div>
                      </div>
                    </div>
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
                              " type="search" class="form-control search_input hour" name="search" placeholder="7" aria-label="Search" />
                    <div class="input-group-append">
                      <div class="dropdown input-group-append">
                        <button class="btn btn-link dropdown" style="
                                    background-color: #ffdede;
                                    height: calc(1.5em + 1.75rem + 2px);
                                  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-chevron-down dropdown-icon"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">1</a>
                          <a class="dropdown-item" href="#">2</a>
                          <a class="dropdown-item" href="#">3</a>
                          <a class="dropdown-item" href="#">4</a>
                          <a class="dropdown-item" href="#">5</a>
                          <a class="dropdown-item" href="#">6</a>
                          <a class="dropdown-item" href="#">7</a>
                          <a class="dropdown-item" href="#">8</a>
                          <a class="dropdown-item" href="#">9</a>
                          <a class="dropdown-item" href="#">10</a>
                          <a class="dropdown-item" href="#">11</a>
                          <a class="dropdown-item" href="#">12</a>
                        </div>
                      </div>
                    </div>
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
                              " type="search" class="form-control search_input minute" name="search" placeholder="30" aria-label="Search" />
                    <div class="input-group-append">
                      <div class="dropdown input-group-append">
                        <button class="btn btn-link dropdown" style="
                                    background-color: #ffdede;
                                    height: calc(1.5em + 1.75rem + 2px);
                                  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-chevron-down dropdown-icon"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">01</a>
                          <a class="dropdown-item" href="#">02</a>
                          <a class="dropdown-item" href="#">03</a>
                          <a class="dropdown-item" href="#">04</a>
                          <a class="dropdown-item" href="#">05</a>
                          <a class="dropdown-item" href="#">06</a>
                          <a class="dropdown-item" href="#">07</a>
                          <a class="dropdown-item" href="#">08</a>
                        </div>
                      </div>
                    </div>
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
                              " type="search" class="form-control search_input ampm" name="search" placeholder="AM" aria-label="Search" />
                    <div class="input-group-append">
                      <div class="dropdown input-group-append">
                        <button class="btn btn-link dropdown" style="
                                    background-color: #ffdede;
                                    height: calc(1.5em + 1.75rem + 2px);
                                  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-chevron-down dropdown-icon"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">AM</a>
                          <a class="dropdown-item" href="#">PM</a>
                        </div>
                      </div>
                    </div>
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