<style>
    .breadcrumb-box{
        height: 250px!important;
    }

    .breadcrumb-area {
        /* top: -220px; */
        height: 300px;
    }


    .breadcrumb-area .breadcrumb-inner{
        padding-top: 100px!important;
        padding-bottom: 100px!important;
        text-align: center;
    }
</style>

<div class="breadcrumb-box">
    <section class="breadcrumb-area breadcrumb-bg navbar-variant-{{get_static_option('navbar_variant')}}"
        {!! render_background_image_markup_by_attachment_id(get_static_option('site_breadcrumb_bg')) !!}
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">@yield('page-title')</h1>
                        <ul class="page-list">
                            <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                            @php
                            $pages_list = ['blog','work','service','product','career_with_us','events','knowledgebase','donation','appointment','courses'];
                            @endphp
                            @foreach($pages_list as $page)
                                @if(request()->is(get_static_option($page.'_page_slug').'/*'))
                                <li><a href="{{url('/').'/'.get_static_option($page.'_page_slug')}}">{{get_static_option($page.'_page_' . $user_select_lang_slug . '_name')}}</a></li>
                                @endif
                            @endforeach
                            <li>@yield('page-title')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
