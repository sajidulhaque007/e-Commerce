<h2 class="text-center"></h2>
<div class="featured-area featured-area2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-active2 owl-carousel next-prev-style">

                    @foreach ($categories as $category)
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{ asset('uploads/category') }}/{{ $category->category_photo }}" alt="">
                            <div class="featured-content">
                                <a href="#">{{ $category->category_name }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
