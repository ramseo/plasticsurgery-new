@if($content)
@if($content->content != '')
<section id="text-only-section" class="grey-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="text-header">
                    <div class="text">
                        {!! $content->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if($content->faq_content != '')
<section id="text-only-section" class="mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="text-header">
                    <div class="text">
                        <?php
                        $faq = $content->faq_content;
                        $faq = str_replace(array("<h1>", "<h2>", "<h3>", "<h4>", "<h5>", "<h6>"), "<h4>", $faq);
                        echo $faq;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endif