@extends('newlayout.main')

@section('title')
    Survey
@endsection

{{-- @section('contact', 'active') --}}

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Survey Sinarmed Jaya</h1>
                </div>
            </div>
        </div>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('survey.store') }}">
                @csrf
                <div class="contact_section_2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mail_section_1">
                                <input type="text" class="mail_text" placeholder="Nama Lengkap" name="nama"
                                    id="nama" required>
                                <input type="text" class="mail_text" placeholder="Instansi/Perusahaan" name="instansi"
                                    id="instansi" required>
                                <input type="text" class="mail_text" placeholder="No Handphone" name="no_hp"
                                    id="no_hp" required>
                                <textarea class="massage-bt" placeholder="Rencana Pengembangan Rumah Sakit Kedepan" name="saran" id="saran"
                                    required></textarea>
                                <div class="send_bt"><button type="submit" class="btn btn-danger">Submit</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <a href="#">
            <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
            <img src="{{ asset ('style/images/wa.png') }}" class="btn_wa"></button></a>
            </form>
        </div>
    </div>
    <!-- contact section end -->
@endsection
