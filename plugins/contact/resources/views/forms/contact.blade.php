<!-- @if ($header)
    <h2 class="group-title text-uppercase">{{ $header }}</h2>
@endif
{!! Form::open(['route' => 'public.send.contact', 'method' => 'POST']) !!}
@if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
    @if (session()->has('success_msg'))
        <div class="alert alert-success">
            <p>{{ session('success_msg') }}</p>
        </div>
    @endif
    @if (session()->has('error_msg'))
        <div class="alert alert-danger">
            <p>{{ session('error_msg') }}</p>
        </div>
    @endif
    @if (isset($errors) && count($errors))
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
@endif

<div class="row">
    <div class="col-md-6 col-sm-12 col-12">
        <div class="form-group">
            <label for="contact_name" class="control-label required">{{ trans('plugins.contact::contact.form_name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="contact_name"
                   placeholder="{{ trans('plugins.contact::contact.form_name') }}">
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12">
        <div class="form-group">
            <label for="contact_email" class="control-label required">{{ trans('plugins.contact::contact.form_email') }}</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="contact_email"
                   placeholder="{{ trans('plugins.contact::contact.form_email') }}">
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12">
        <div class="form-group">
            <label for="contact_address" class="control-label">{{ trans('plugins.contact::contact.form_address') }}</label>
            <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="contact_address"
                   placeholder="{{ trans('plugins.contact::contact.form_address') }}">
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12">
        <div class="form-group">
            <label for="contact_phone" class="control-label">{{ trans('plugins.contact::contact.form_phone') }}</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="contact_phone"
                   placeholder="{{ trans('plugins.contact::contact.form_phone') }}">
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12">
        <div class="form-group">
            <label for="contact_subject" class="control-label">{{ trans('plugins.contact::contact.form_subject') }}</label>
            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" id="contact_subject"
                   placeholder="{{ trans('plugins.contact::contact.form_subject') }}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="contact_content" class="control-label required">{{ trans('plugins.contact::contact.form_message') }}</label>
            <textarea name="content" id="contact_content" class="form-control" rows="5" placeholder="{{ trans('plugins.contact::contact.form_message') }}">{{ old('content') }}</textarea>
        </div>
    </div>
    @if (setting('enable_captcha') && is_plugin_active('captcha'))
        <div class="col-md-12">
            <div class="form-group">
                <label for="contact_robot" class="control-label required">{{ trans('plugins.contact::contact.confirm_not_robot') }}</label>
                {!! Captcha::display('captcha') !!}
                {!! Captcha::script() !!}
            </div>
        </div>
    @endif
    <div class="col-md-12">
        <div class="form-group"><p>{!! trans('plugins.contact::contact.required_field') !!}</p></div>
    </div>
</div>
<div class="form-group text-right">
    <button type="submit" class="btn btn-primary cyan text">{{ trans('plugins.contact::contact.send_btn') }}</button>
</div>
{!! Form::close() !!} -->

{!! Theme::breadcrumb()->render() !!}

@php
$posts = app(\Botble\Blog\Repositories\Interfaces\PostInterface::class)->getByCategory(30, 12, 10);
@endphp

<br>
<section class="main-box">
    <div class="main-box-header">
        <h2>
            <i class="fa fa-leaf"></i>
        </h2>
    </div>
    <div class="pb-5 main-box-content">
        <div class="box-style box-style-3">
            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                    <div class="row media-news pb-5">
                        <div class="col-lg-3"> 
                            <!-- <a href="{{ route('public.single', $post->slug) }}" class="media-news-img" title="{{ $post->name }}"> -->
                                <img class="img-full img-bg" src="{{ get_object_image($post->image, 'large') }}" style="background-image: url('{{ get_object_image($post->image) }}');" alt="{{ $post->name }}">
                            <!-- </a> -->
                        </div>
                        <div class="col-lg-6 media-news-body">
                            <p class="common-title" style="font-size: 20px;font-weight: bold;color: black;">
                                <!-- <a href="{{ route('public.single', $post->slug) }}" title="{{ $post->name }}"> -->
                                    {{ $post->name }}
                                <!-- </a> -->
                            </p>
                            <p class="common-date">
                                <!-- <time datetime="">{{ date_from_database($post->created_at, 'M d, Y') }}</time> -->
                            </p>
                            <div class="common-summary">
                                {{ $post->description }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div>
                    <p>{{ __('There is no data to display!') }}</p>
                </div>
            @endif
        </div>
    </div>
</section>

@if ($posts->count() > 0)
    <nav class="pagination-wrap">
        {!! $posts->links() !!}
    </nav>
@endif
