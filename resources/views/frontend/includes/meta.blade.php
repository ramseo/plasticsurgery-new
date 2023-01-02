@php
if(!isset($meta_page_type)){
$meta_page_type = 'website';
}
@endphp

@switch($meta_page_type)
@case('website')
<meta property="og:type" content="website" />
@break

@case('article')
{{-- Facebook Meta --}}
<meta property="og:type" content="article" />
<meta property="article:published_time" content="{{$$module_name_singular->published_at}}" />
<meta property="article:modified_time" content="{{$$module_name_singular->updated_at}}" />
<meta property="article:author" content="{{isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name}}" />
<meta property="article:section" content="{{$$module_name_singular->category_name}}" />
@foreach ($$module_name_singular->tags as $tag)
<meta property="article:tag" content="{{$tag->name}}" />
@endforeach

@break

@case('profile')
<meta property="og:type" content="profile" />
<meta property="profile:first_name" content="{{$$module_name_singular->first_name}}" />
<meta property="profile:last_name" content="{{$$module_name_singular->last_name}}" />
<meta property="profile:username" content="{{$$module_name_singular->email}}" />
<meta property="profile:gender" content="{{$$module_name_singular->gender}}" />
@break

@default

@endswitch

<!-- code -->
<?php
$vendor_profile_img = asset(setting('meta_image'));
$meta_description = asset(setting('meta_description'));

$getBlogViaSlug = getBlogViaSlug(last(request()->segments()));

if ($getBlogViaSlug) {
    if (file_exists(public_path() . $getBlogViaSlug->featured_image)) {
        $vendor_profile_img = asset($getBlogViaSlug->featured_image);
    }
    if ($getBlogViaSlug->content) {
        $meta_description = $getBlogViaSlug->content;
    }
} elseif (isset($vendor_details->image)) {
    if (file_exists(public_path() . '/storage/vendor/profile/' . $vendor_details->image)) {
        $vendor_profile_img = asset('storage/vendor/profile/' . $vendor_details->image);
    }
}
?>
<!-- code -->

<!-- Facebook Meta -->
<meta property="og:url" content="{{url()->full()}}" />
<meta property="og:title" content="@yield('title') | {{ config('app.name') }}" />
<meta property="og:site_name" content="{{setting('meta_site_name')}}" />
<meta property="og:description" content="<?= $meta_description ?>" />
<meta property="og:image" content="<?= $vendor_profile_img ?>" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

<!-- Twitter Meta -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ setting('meta_twitter_site') }}">
<meta name="twitter:url" content="{{url()->full()}}" />
<meta name="twitter:creator" content="{{ setting('meta_twitter_creator') }}">
<meta name="twitter:title" content="@yield('title') | {{ config('app.name') }}">
<meta name="twitter:description" content="<?= $meta_description ?>">
<meta name="twitter:image" content="<?= $vendor_profile_img ?>">

<!--canonical link-->
<link rel="canonical" href="{{url()->current()}}">