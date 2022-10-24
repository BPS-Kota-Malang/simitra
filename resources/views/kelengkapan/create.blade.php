@extends('layouts.app')

@section('title', 'Data Kelengkapan')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Cek Kelengkapan Dokumen</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Management</a></div>
        <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Halaman Create</h2>
      <p class="section-lead">Di halaman ini, kita dapat menambahkan inputan data dokumen.</p>
      <div class="card">
        <div class="card-header">
          <h4>Tambah Dokumen Baru</h4>

          @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>

        <div class="card-body">
            <form action="{{route('kelengkapan.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tipe_id">Jenis Dokumen</label>
                            <select name="tipe_id" id="tipe_id" class="form-control @error('tipe_id') is-invalid @enderror">
                                <option selected disabled hidden>-- Pilih Jenis Dokumen --</option>
                                @foreach ($tipe as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error('tipe_id')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="file">File Dokumen</label>
                            <small class="form-text text-muted mb-1">*Upload file dengan format PDF dan ukuran file maksimal 5 MB</small>
                            <input type="file" class="form-control-form" id="file" name="file" accept="application/pdf">
                            @error('file')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="col-md-6" style="display: none;" id="card-view">
                <div class="card shadow my-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Preview Dokumen</h6>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert" id="alert-view" style="display: none;"></div>
                        <div id="loading" style="display: none">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            Proses preview dokumen..
                        </div>
                        <div style="height:600px;overflow-y:scroll;" id="pdfViewer" class="w-100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer bg-whitesmoke">
          BPS - Kota Malang
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>

<script>
    var pdfjsLib = window['pdfjs-dist/build/pdf'];
    // The workerSrc property shall be specified.
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

    $("#file").on("change", function(e) {
        $('#card-view').show()
        $('#alert-view').hide();
        var file = e.target.files[0]
        if (file.type == "application/pdf") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var pdfData = new Uint8Array(this.result);
                // Using DocumentInitParameters object to load binary data.
                var loadingTask = pdfjsLib.getDocument({
                    data: pdfData
                });
                $('#loading').show()
                loadingTask.promise.then(function(pdf) {
                    // var pageNumber = 1;
                    $('#loading').hide()
                    for (var i = 1; i <= pdf.numPages; i++) {
                        renderPage(i, pdf);
                    }
                }, function(reason) {
                    // PDF loading error
                    $('#loading').hide()
                    $('#alert-view').show();
                    $('#alert-view').html('Preview dokumen gagal. Silahkan ulangi input dokumen.');
                });
            };
            fileReader.readAsArrayBuffer(file);
        }
    });

    function renderPage(pageNumber, pdf) {
        pdf.getPage(pageNumber).then(function(page) {
            var canvasId = 'pdf-viewer-' + pageNumber;
            $('#pdfViewer').append($('<canvas />', {
                'id': canvasId
                , 'class': 'w-100'
            , }));
            var canvas = document.getElementById(canvasId);

            var scale = 1.5;
            var viewport = page.getViewport({
                scale: scale
            });

            // // Prepare canvas using PDF page dimensions
            // var canvas = $("#pdfViewer")[0];
            var context = canvas.getContext('2d');
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // // Render PDF page into canvas context
            var renderContext = {
                canvasContext: context
                , viewport: viewport
            };
            var renderTask = page.render(renderContext);
            renderTask.promise.then(function() {
                // console.log('Page rendered');
            });
        });

    }

</script>
<!-- Page Specific JS File -->
@endpush
