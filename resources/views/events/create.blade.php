@extends('layout.layouts')
@section('extra_css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-xl">
                    <!-- Page title -->
                    <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Page pre-title -->
                                <h2 class="page-title">
                                    Event create
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="container-xl">

                        <form method="POST" action="{{ route('events.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf
                            @include('events._form')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_js')
<script>
    // form-group-item
    $('.form-group-item .btn-add-item').click(function() {
        let number = $(this).closest('.form-group-item').find('.g-items .item:last-child').data('number');
        if (number === undefined) number = 0;
        else number++;
        let extra_html = $(this).closest('.form-group-item').find('.g-more').html();
        extra_html = extra_html.replace(/__name__=/gi, 'name=');
        extra_html = extra_html.replace(/__number__/gi, number);
        extra_html = extra_html.replace(/__required__/gi, 'required');
        $(this).closest('.form-group-item').find('.g-items').append(extra_html);
    });
    $('.form-group-item').each(function() {
        $(this).on('click', '.btn-remove-item', function() {
            $(this).closest('.item').remove();
        });
        $(this).on('click', '.btn-save-item', function() {
            $(this).closest('.item').find('.save_show').show();
            $(this).closest('.item').find('.edit_show').hide();
        });
        $(this).on('click', '.btn-edit-item', function() {
            $(this).closest('.item').find('.save_show').hide();
            $(this).closest('.item').find('.edit_show').show();
        });
        $(this).on('change', '.text_input', function() {
            $(this).closest('div').find('p').text($(this).val());
        });
    });
    // form-group-item END
</script>
@endsection
