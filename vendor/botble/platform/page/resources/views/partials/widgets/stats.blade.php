@php
$post = DB::table('posts')->count();
$pages = DB::table('pages')->count();
$categories = DB::table('categories')->count();
$tags = DB::table('tags')->count();
@endphp

@if (empty($widget_setting) || $widget_setting->status == 1)
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="far fa-file-alt"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $pages }}">0</span>
                </div>
                <div class="desc">Pages</div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="far fa-file-alt"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $post }}">0</span>
                </div>
                <div class="desc">Post</div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="far fa-file-alt"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $categories }}">0</span>
                </div>
                <div class="desc">Catgeories</div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="far fa-file-alt"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $tags }}">0</span>
                </div>
                <div class="desc">Tags</div>
            </div>
        </a>
    </div>
@endif