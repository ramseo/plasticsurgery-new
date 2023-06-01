@push('after-scripts')
<script>
    var menu_sort_path = "<?= route('backend.pages.menu_sort') ?>";
    var csrf_token = "<?= csrf_token() ?>";
    var base_url = "<?= url('/') . '/' ?>";
</script>
@endpush

<footer class="c-footer text-muted">
    <div>
        <a href="/">{{app_name()}}</a>
        @if(setting('show_copyright'))
        @lang('Copyright') &copy; {{ date('Y') }}
        @endif
    </div>
    {{-- <div class="ml-auto text-muted">{!! setting('footer_text') !!}</div>--}}
</footer>