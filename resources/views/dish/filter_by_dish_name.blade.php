@include('inc.header')
@include('layout.app')

<div class="container-fluid p-4">
    <div class="row d-flex justify-content-around flex-row p-4">
        @include('inc.sidebar_dish')
        <div class="col-lg-9 d-flex flex-column align-items-center">
            <div class="dish-list d-flex justify-content-around flex-wrap" style="width: 100%">
                @foreach ($dishes as $dish)
                <div class="dish-wrap mb-4" style="width: 31%" onclick="goToDishDetailPage({{ $dish->id }})" data-id="{{ $dish->id }}">
                    <div class="card dish-box dish-box-height position-relative">
                        <img class="card-img-top" src="{{ asset($dish->image_url) }}" alt="Product image" style="height: 55%; object-fit: cover;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-size: 2rem; font-weight: bold; color: red">{{$dish->name}}</h5>
                                <p class="card-text mt-2">{{$dish->address}}</p>
                            </div>
                            <div class="dish-description mt-2">
                                <p class="visible dish-description-btn" onclick="displayDescription(event)">
                                    説明…
                                </p>
                                <p class="invisible description-detail">
                                    {{$dish->introduction}}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            {{--Tạo đường link phân trang cho danh sách nhà hàng--}}
            <div class="pagination mt-4">
                @php
                    if(isset($_GET['dishName'])){
                        $dishName = $_GET['dishName'];
                        $append = '&dishName=' . $dishName;
                    }
                    else{
                        $append = '';
                    }
                @endphp

                @if ($dishes->currentPage() > 1)
                    <a href="{{ $dishes->previousPageUrl(). $append }}" class="page-link">前</a>
                @endif

                @for ($i = 1; $i <= $dishes->lastPage(); $i++)
                    <a href="{{$dishes->url($i). $append }}" class="page-link{{ ($dishes->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
                @endfor

                @if ($dishes->hasMorePages())
                    <a href="{{ $dishes->nextPageUrl(). $append }}" class="page-link">次</a>
                @endif
            </div>
        </div>
    </div>
</div>

@include('inc.footer')
<script>
    function displayDescription($event) {

        const clickedElement = $event.target;
        const parentElement = clickedElement.closest('.dish-description'); // Tìm phần tử cha gần nhất có class 'dish-description'
        const descriptionDetail = parentElement.querySelector('.description-detail'); // Tìm phần tử 'description-detail' con của phần tử cha
        const dishBox = clickedElement.closest('.dish-box');
        if (descriptionDetail.classList.contains("visible")) {
            descriptionDetail.classList.remove('visible');
            descriptionDetail.classList.add('invisible');
            dishBox.classList.remove('dish-box-height-modify');
            dishBox.classList.add('dish-box-height');
        } else {
            descriptionDetail.classList.remove('invisible');
            descriptionDetail.classList.add('visible');
            dishBox.classList.remove('dish-box-height');
            dishBox.classList.add('dish-box-height-modify');
        }

    }

    $(document).ready(function() {
        // Hide '>'
        $('.fa-greater-than').hide();

        $('.dish').click(function() {
            //get dish active id
            if ($('.dish.active').attr('class') == undefined) {
                var activeDishId = 0;
            } else {
                var activeDishId = $('.dish.active').attr('class').split(' ')[2].split('dish_type')[1];
            }

            window.location.href = '/dish/filterByCriteria?dishID=' + activeDishId;
        })
    })

    function goToDishDetailPage(id) {
        window.location.href = "/dish/" + id;
    }
</script>