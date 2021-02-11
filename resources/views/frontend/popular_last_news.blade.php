<div class="coustom_advertise">
    <div class="row">
        <div class="col-md-12">

            <img src="" class="img-fluid">

        </div>
    </div>
</div>
<div class="card">
    <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                aria-controls="nav-home" aria-selected="true">সর্বশেষ</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                aria-controls="nav-profile" aria-selected="false">জনপ্রিয়</a>
        </div>
    </nav>

    <div class="tab_for_content">
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <ul>
                    @foreach ($latest_news as $l_news)
                        <li class="ml-2 ">
                            <a class="d-flex" href="{{ route('single-post-page', $l_news->slug) }}">
                                <img alt="{{ $l_news->slug }}" src="{{ $l_news->thumbnail }}">
                                <p class="ml-2 mr-2">
                                    {{ \Illuminate\Support\str::limit(strip_tags($l_news->title), 30) }}
                                </p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <ul>
                    @foreach ($popular_news as $p_news)
                        <li class="ml-2">
                            <a class="d-flex" href="{{ route('single-post-page', $p_news->slug) }}">
                                <img alt="{{ $p_news->slug }}" src="{{ $p_news->thumbnail }}">
                                <p class="ml-2 mr-2">
                                    {{ \Illuminate\Support\str::limit(strip_tags($p_news->title), 30) }}
                                </p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
