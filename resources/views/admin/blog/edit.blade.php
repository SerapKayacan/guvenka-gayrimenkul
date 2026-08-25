@section('title', 'Blog Postu Düzenle')
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Düzenle: {{ $blog->title }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('blog.index') }}" class="text-muted text-hover-primary">Blog Listesi</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Blog Postu Düzenle
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form class="form d-flex flex-column flex-lg-row" action="{{ route('blog.update', $blog->id) }}"
                      method="POST" id="form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">

                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                   href="#generalInformation">Genel Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#search">Arama
                                    Motoru</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="generalInformation" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush pt-5">
                                        <div class="card-body pt-5">
                                            <div class="mb-10 row">
                                                <div class="col-sm-6">
                                                    <label class="form-label">Görsel Seçin</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <a class="uploadImage btn btn-primary text-white btn-sm">
                                                                   <i class="far fa-file-image"></i> Seç
                                                                </a>
                                                                   <input type="file"
                                                                          accept="image/jpeg, image/png, image/jpg"
                                                                          name="banner_image" class="d-none">
                                                                   <input type="text" name="uploaded_banner_image"
                                                                          class="d-none"
                                                                          value="{{ $blog->getFirstMediaUrl('banner', 'large') }}">
                                                                <a data-input="thumbnail" data-preview="holder"
                                                                   class="removeImage btn btn-danger text-white btn-sm">
                                                                   <i class="fa fa-trash"></i> Kaldır
                                                                </a>
                                                                <div class="row col-md-12 thumb-output p-2">
                                                                    <img class="thumb img-thumbnail"
                                                                         src="{{ $blog->getFirstMediaUrl('banner', 'large') }}">
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted fs-7">Medya görseli ekleyin.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="required form-label">Başlık</label>
                                                    <input class="form-control" name="title"
                                                           value="{{ $blog->title }}" required/>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label">Kısa Açıklama</label>
                                                    <textarea class="form-control" name="short_description" rows="2">{{ $blog->short_description }}</textarea>
                                                    <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label">İçerik</label>
                                                    <textarea class="form-control ckeditor" id="detail" name="content"
                                                              rows="4">{{ $blog->content }}</textarea>
                                                    <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="form-label">Yayın Tarihi</label>
                                                    <input class="form-control" name="published_at" type="date"
                                                           value="{{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('Y-m-d') : '' }}" />
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="required form-label">Durum</label>
                                                    <select name="is_active" class="form-control col-sm-3" required>
                                                        <option @if ($blog->is_active == 1) selected
                                                                @endif value="1">Aktif
                                                        </option>
                                                        <option @if ($blog->is_active == 0) selected
                                                                @endif value="0">Pasif
                                                        </option>
                                                    </select>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="search" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush pt-5">
                                        <div class="card-body pt-5">

                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label">SEO Meta Başlık</label>
                                                    <input class="form-control" name="meta_title"
                                                           value="{{ $blog->meta_title }}">
                                                    <div class="text-muted fs-7">Bulunamazsa ana başlık kullanılır.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label">SEO Açıklama</label>
                                                    <input class="form-control" name="meta_description"
                                                           value="{{ $blog->meta_description }}">
                                                    <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('blog.index') }}" class="btn btn-light me-5">Vazgeç</a>
                            <button type="submit" id="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('') }}assets/js/admin/media.js"></script>
    <script src="{{ asset('') }}assets/plugins/custom/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('') }}assets/js/admin/ckeditor.js"></script>
@endsection
